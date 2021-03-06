SalesDashboard.mapModel = function () {
    var self = this,

        BUBBLES_COUNT = 7,
        BASE_BUBBLE_SIZE = 20,

        ZOOM_COMPENSATOR = 0.5,

        yearMaxSalesValue = 1,
        maxSalesValue = 1,
        yearChanged = true,
        currentYear = 0,

        mapStr = "",
        areaColor = "#fcd7cf",
        markerColor = "#f55f40",

        map = drawMap();

    self.startDate = Globalize.format(SalesDashboard._currentDay, "yyyy-01-01");
    self.endDate = Globalize.format(SalesDashboard._currentDay, "yyyy-12-31");
    

    var gridCustomOptions = {
        filterRow: {
            visible: false
        },
        columns: [
            {
                dataField: "Country",
                dataType: "string"
            },
            {
                dataField: "City",
                dataType: "string"
            },
           {
               dataField: "Amount",
               dataType: "number",
               sortOrder: "desc",
               alignment: "right",
               format: "currency"
           },
           {
               dataField: "Dynamics",
               dataType: "object",
               allowFiltering: false,
               allowSorting: false,
               width: 270,
               cellTemplate: function(container, options) {
                   var data = options.data,
                   options = {
                       dataSource: data.Dynamics,
                       argumentField: "SaleDate",
                       valueField: "Sales",
                       type: "bar",
                       barPositiveColor: "#f55f40",
                       tooltip: false,
                       showMinMax: false,
                       showFirstLast: false,
                       size: {
                           height: 20
                       }
                   }
                   container.dxSparkline(options);
               }
           }
        ],
        showRowLines: false
    };

    function setBubbleMaxSize(zoom) {
        if(map) map.option('markerSettings.maxSize',
            BASE_BUBBLE_SIZE * (maxSalesValue / yearMaxSalesValue) * (zoom || 1) / ZOOM_COMPENSATOR * 1.2);
    };
    
    function drawMap() {
        
        var $map = $("#vectorMap").dxVectorMap({
            mapData: DevExpress.viz.map.sources.world,
            markers: [],
            markerSettings: {
                hoverEnabled: false,
                borderColor: markerColor,
                color: markerColor,
                type: "bubble",
                minSize: 10,
                maxSize: setBubbleMaxSize()
            },
            bounds: [-180, 81.6, 180, -39.4],
            controlBar: {
                enabled: false
            },
            areaSettings: {
                color: areaColor,
                borderColor: areaColor,
                hoveredBorderColor: areaColor
            },
            tooltip: {
                enabled: true,
                borderColor: "#d9d9d9",
                color: "#fff",
                font: {
                    color: "#b0324f",
                    opacity: 1,
                    size: 18
                },
                paddingTopBottom: 2,
                customizeText: function () {
                    if (this.type === "area") return;
                    else return "<span style='font-size: 14px; color: #737373;'>" + this.attribute("name") + "</span><br />"
                        + "<span>$" + (this.attribute("sales") / 1000000).toFixed(2) + "M</span>";
                },
                shadow: {
                    opacity: 0.15,
                    blur: 0,
                    color: "#000000",
                    offsetX: 3,
                    offsetY: 3
                }
            },
            zoomFactorChanged: setBubbleMaxSize
        });
        return $map.data("dxVectorMap");
    };

    

    function processMap(data) {
        var citySales = [],
            countrySales = {},
            stateSales = {};
        maxSalesValue = 1;
        $.each(data, function (index, item) {
            countrySales[item.Country] = countrySales[item.Country] || 0;
            stateSales[item.State] = stateSales[item.State] || 0;
            countrySales[item.Country] += item.Sales;
            stateSales[item.State] += item.Sales;
            if (index >= BUBBLES_COUNT) return;
            if (maxSalesValue < item.Sales) maxSalesValue = item.Sales;
            citySales.push({
                coordinates: [item.Coordinates[1], item.Coordinates[0]],
                attributes: { name: item.City, sales: item.Sales },
                value: item.Sales
            });
        });
        if (yearChanged) yearMaxSalesValue = maxSalesValue;
        map.option("markers", citySales);
        setBubbleMaxSize(map.zoomFactor());
    };



    function loadMapData() {
        SalesDashboard.loadData({
            map: mapStr || "",
            startDate: self.startDate,
            endDate: self.endDate
        }, processMap, true, "cities");
    };

    function switchMap() {
        map.option({ markers: [] });
        $(".today div").removeClass("active");
        $(this).addClass("active");
        mapStr = $(this).attr("data-map");
        var center = {},
            mapData,
            bounds;
        switch (mapStr) {
            case "world":
                mapData = DevExpress.viz.map.sources.world;
                bounds = [-180, 81.6, 180, -39.4],
                mapStr = "";
                break;
            case "usa":
                mapData = DevExpress.viz.map.sources.usa;
                bounds = [-167, 66, -55, 18];
                break;
            case "canada":
                mapData = DevExpress.viz.map.sources.canada;
                bounds = [-167, 80, -55, 42];
                break;
            case "europe":
                mapData = DevExpress.viz.map.sources.europe;
                bounds = [-20, 63, 40, 36];
                break;
            case "eurasia":
                mapData = DevExpress.viz.map.sources.eurasia;
                bounds = [0, 67, 150, -20];
                break;
            case "africa":
                mapData = DevExpress.viz.map.sources.africa;
                bounds = [-30, 40, 60, -40];
                break;
        }

        loadMapData(mapStr);
        map.option("mapData", mapData);
        map.option("bounds", bounds);   
    }


    self.init = function() {
        var grid,
            range,
            category = "cities",
            
            getLoadOptions = function(startDate, endDate) {
                return {
                    dynamicsGroupBy: "hour",
                    startDate: startDate,
                    endDate: endDate
                };
            };

        range = SalesDashboard.initRangeSelector();
        range.onSelectionChanged.add(function (e) {
            var newYear = e.startValue.getFullYear();
            yearChanged = currentYear != newYear;
            currentYear = newYear;
            self.startDate = Globalize.format(e.startValue, "yyyy-MM-dd"),
            self.endDate = Globalize.format(e.endValue, "yyyy-MM-dd");
            loadMapData(mapStr);
            grid.load(getLoadOptions(self.startDate, self.endDate), category);
        });
        range.load(0);

        grid = SalesDashboard.initGrid(gridCustomOptions);
        $(".today div").click(switchMap);
        $("#worldMap").addClass("active");
    }
}

SalesDashboard.currentModel = new SalesDashboard.mapModel();
SalesDashboard.currentModel.init();
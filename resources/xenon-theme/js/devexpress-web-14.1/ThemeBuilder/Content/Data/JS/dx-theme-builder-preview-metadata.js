ThemeBuilder.__badges_group = function() { return {
"id": "badges", 
"doNotRenderPageTitle": true,
"widgets": [
    { 
	    "name": "dxList",
	    "supportedThemes": ["all"],
	    "options": { 
		    "dataSource": [
			    { "text": "first", "badge": "127" },
			    { "text": "second" }
		    ]
	    }
    },
    { 
	    "name": "dxNavBar",
	    "supportedThemes": ["all"],
	    "options": { 
		    "dataSource": [
			    { "text": "user", "icon": "user" },
			    { "text": "find", "icon": "find" },
			    { "text": "favorites", "icon": "favorites" },
			    { "text": "about", "icon": "info" },
			    { "text": "home", "icon": "home", "badge": 77 },
			    { "text": "URI", "icon": "tips", "disabled": true }
		    ]
	    }
    }
]
};};
ThemeBuilder.__base_common_group = function() { return {
"id": "base.common",
"doNotRenderPageTitle": true,
"useFieldsetForThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
"widgets": [
        {
		"name": "dxMenu",
		"supportedThemes": ["generic-dark", "generic-light"],
		"options": {
			"showFirstSubmenuMode": "onHover",
			"animation": {
                "show": false,
                "hide": false
            },
			"items": [
	{
		"text": ".NET",
		"items": [
			{
				"text": "Individual Platforms",
				"items": ["WinForms", "ASP.NET", "MVC", "WPF", "Silverlight", "Windows 8 XAML"],
				"selected": true,
				"selectable": true
			}, 
			{
				"text": "Frameworks",
				"items": ["eXpressApp Framework"]
			}, 
			{
				"text": "Code-Debug-Refactor",
				"items": ["CodeRush for Visual Studio"]
			}, 
			{
				"text": "Mobile (HTML JS)",
				"items": ["DevExtreme"]
			}, 
			{
				"text": "Cross-Platform",
				"items": ["Reporting", "Document Generation"]
			}, 
			{
				"text": "Enterprise Tools",
				"items": ["Report Server", "Analytics Dashboard"]
			}
		]
	}, 
	{
		"text": "HTML JavaScript",
		"items": [
			{
				"text": "Mobile",
				"items": ["Phone JS"]
			}, 
			{
				"text": "HTML 5 JS Widgets",
				"items": ["Chart JS"]
			}
		]
	}, 
	{
		"text": "iOS 7",
		"items": [
			{
				"text": "Native",
				"items": ["DataExplorer"]
			}
		]
	}, 
	{
		"text": "Testing Tools",
		"items": [
			{
				"text": "Web Testing Tools",
				"items": ["TestCafe"]
			}
		]
	}, 
	{
		"text": "Delphi & C++Builder",
		"disabled": true
	}
]
		}
	},
	{
	"name": "dxDataGrid",
	"supportedThemes": ["generic-dark", "generic-light"],
	"options": {
		"rowAlternationEnabled": true,
		"dataSource": {
		"asyncLoadEnabled": false,
		"store": {
		"data": [
			{
				"CustomerID" : "VINET",
				"Freight" : "32.3800",
				"ShipCountry" : "France",
				"ShipName" : "Vins et alcools Chevalier"
			}, 
			{
				"CustomerID" : "TOMSP",
				"Freight" : "11.6100",
				"ShipCountry" : "Germany",
				"ShipName" : "Toms Spezialitaten"
			}, 
			{
				"CustomerID" : "HANAR1",
				"Freight" : "65.8300",
				"ShipCountry" : "Brazil",
				"ShipName" : "Hanari Carnes"
			}, 
			{
				"CustomerID" : "VICTE",
				"Freight" : "41.3400",
				"ShipCountry" : "France",
				"ShipName" : "Richter Supermarkt"
			}, 
			{
				"CustomerID" : "SUPRD",
				"Freight" : "51.3000",
				"ShipCountry" : "Belgium",
				"ShipName" : "Victuailles en stock"
			}, 
			{
				"CustomerID" : "HANAR",
				"Freight" : "58.1700",
				"ShipCountry" : "Brazil",
				"ShipName" : "Supremes delices"
			}, 
			{
				"CustomerID" : "CHOPS",
				"Freight" : "22.9800",
				"ShipCountry" : "Switzerland",
				"ShipName" : "Hanari Carnes"
			}, 
			{
				"CustomerID" : "RICSU",
				"Freight" : "148.3300",
				"ShipCountry" : "Switzerland",
				"ShipName" : "Chop-suey Chinese"
			}, 
			{
				"CustomerID" : "WELLI",
				"Freight" : "13.9700",
				"ShipCountry" : "Brazil",
				"ShipName" : "Richter Supermarkt"
			}, 
			{
				"CustomerID" : "HILAA",
				"Freight" : "81.9100",
				"ShipCountry" : "Venezuela",
				"ShipName" : "Wellington Importadora"
			}, 
			{
				"CustomerID" : "ERNSH",
				"Freight" : "140.5100",
				"ShipCountry" : "Austria",
				"ShipName" : "Ernst Handel"
			},
			{
				
				"CustomerID": "CENTC",
				"Freight": "3.2500",
				"ShipCountry": "Mexico",
				"ShipName": "Centro comercial Moctezuma"
			},
			{
				
				"CustomerID": "OTTIK",
				"Freight": "55.0900",
				"ShipCountry": "Germany",
				"ShipName": "Ottilies Kaseladen"
			},
			{
		
				"CustomerID": "QUEDE",
				"Freight": "3.0500",
				"ShipCountry": "Brazil",
				"ShipName": "Que Delicia"
			},
			{
				"CustomerID": "RATTC",
				"Freight": "48.2900",
				"ShipCountry": "USA",
				"ShipName": "Rattlesnake Canyon Grocery"
			},
			{
				"CustomerID": "FOLKO",
				"Freight": "3.6700",
				"ShipCountry": "Sweden",
				"ShipName": "Folk och fa HB"
			},
			{
				"CustomerID": "BLONP",
				"Freight": "55.2800",
				"ShipCountry": "France",
				"ShipName": "Blondel pere et fils"
			},
			{
				"CustomerID": "WARTH",
				"Freight": "25.7300",
				"ShipCountry": "Finland",
				"ShipName": "Wartian Herkku"
			},
			{
				"CustomerID": "FRANK",
				"Freight": "208.5800",
				"ShipCountry": "Germany",
				"ShipName": "Frankenversand"
			},
			{
				"CustomerID": "GROSR",
				"Freight": "66.2900",
				"ShipCountry": "Venezuela",
				"ShipName": "GROSELLA-Restaurante"
			}
		],
		"type": "array",
		"key": "CustomerID"
		}
		},
		"selectedRowKeys": ["TOMSP", "SUPRD"],
		"height": "400px",
		"paging": {
			"pageSize": 10
		},
		"pager": {
			"showPageSizeSelector": true
		},
		"selection": {
			"mode": "multiple"
		},
		"hoverStateEnabled": true,
		"allowColumnResizing": true,
		"allowColumnReordering": true,
		"columns": [
			"ShipName",
			"Freight",
			"ShipCountry"
		]
	}
},
{
			"name": "dxCalendar",
			"prerenderAction": "SET_CALENDAR_VALUE",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": { 
				"firstDayOfWeek": 0
			}
		},
		{
			"name": "dxSelectBox",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": {
				"items": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
			}
		},
		{
			"name": "dxSelectBox",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": {
				"items": ["Bob", "John", "Frank", "Robert", "Paul", "Elizabeth", "Mary"]
			}
		},
		{
		"name": "dxSlider",
		"supportedThemes": ["generic-dark", "generic-light"],
		"options": {
			"min": 0, 
			"max": 100, 
			"value": 38
		}
	},
	{  
			"name": "dxLookup",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": {
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
				"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
				"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
				"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"],
				"popupHeight": 500
			}
		},
		{
			"name": "dxButton",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": {
				"text": "Reset",
				"type": "normal"
			}
		},
		{
			"name": "dxButton",
			"supportedThemes": ["generic-dark", "generic-light"],
			"options": {
				"text": "Send",
				"type": "normal"
			}
		},
		{
			"name": "dxTextBox",
			"title": "dxTextBox",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": {
				"value": "Textbox widget"
            }
		},
        {
			"name": "dxSelectBox",
			"title": "dxSelectBox",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": {
				"items": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
			}
		},
		{  
			"name": "dxLookup",
			"title": "dxLookup",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": {
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
				"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
				"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
				"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"],
				"popupHeight": 500
			}
		},
		{
			"name": "dxCheckBox",
			"title": "dxCheckBox",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": {
				"checked": true
            }
		},
		{
			"name": "dxSwitch",
			"title": "dxSwitch",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": { 
				"value": true
			}
		},
		{
			"name": "dxSwitch",
			"title": "Disabled dxSwitch",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": { 
				"disabled": true,
				"value": true
			}
		},
		{
			"name": "dxButton",
			"title": "dxButton",
			"supportedThemes": ["ios7-default", "android-holo-light", "android-holo-dark", "win8-black", "win8-white", "android5-light"],
			"options": {
				"text": "Normal Button",
				"type": "normal"
			}
		}
    ]
};};
ThemeBuilder.__base_typography_group = function() { return {
"id": "base.typography", 
"widgets": [
	{
		"name": "dxScrollView",
		"supportedThemes": ["all"],
		"prerenderAction": "LOAD_TYPOGRAPHY_CONTENT",
		"options": { }
	}
]
};};
ThemeBuilder.__buttons_danger_group = function() { return {
"id": "buttons.danger", 
"widgets": [
	{
			"name": "dxButton",
			"supportedThemes": ["all"],
			"options": {
				"text": "Danger",
				"type": "danger"
			}
		}
]
};};
ThemeBuilder.__buttons_default_group = function() { return {
"id": "buttons.default", 
"widgets": [
{
			"name": "dxButton",
			"supportedThemes": ["all"],
			"options": {
				"text": "Default",
				"type": "default"
			}
		}
]
};};
ThemeBuilder.__buttons_group = function() { return {
	"id": "buttons",
	"ord": 1,
	"widgets": [
		{
			"name": "dxButton",
			"title": "Default button",
			"supportedThemes": ["all"],
			"options": {
				"text": "Default",
				"type": "default"
			}
		},
		{
			"name": "dxButton",
			"title": "Normal button",
			"supportedThemes": ["all"],
			"options": {
				"text": "Normal",
				"type": "normal"
			}
		},
		{
			"name": "dxButton",
			"title": "Danger button",
			"supportedThemes": ["all"],
			"options": {
				"text": "Danger",
				"type": "danger"
			}
		},
		{
			"name": "dxButton",
			"title": "Success button",
			"supportedThemes": ["all"],
			"options": {
				"text": "Success",
				"type": "success"
			}
		},
		{
			"name": "dxButton",
			"title": "Back button",
			"supportedThemes": ["all"],
			"options": {
				"text": "Back",
				"type": "back"
			}
		}
	]
};};
ThemeBuilder.__buttons_normal_group = function() { return {
"id": "buttons.normal", 
"widgets": [
	{
			"name": "dxButton",
			"supportedThemes": ["all"],
			"options": {
				"text": "Normal",
				"type": "normal"
			}
		}
]
};};
ThemeBuilder.__buttons_success_group = function() { return {
"id": "buttons.success", 
"widgets": [
	{
			"name": "dxButton",
			"supportedThemes": ["all"],
			"options": {
				"text": "Success",
				"type": "success"
			}
		}
]
};};
ThemeBuilder.__calendar_group = function() { return {
"id": "calendar", 
"widgets": [
]
};};
ThemeBuilder.__datagrid_group = function() { return {
    "id": "datagrid",
    "ord": 4,
    "widgets": [
        {
            "name": "dxDataGrid",
            "supportedThemes": [ "all" ],
            "options": {
                "columnChooser": { "enabled": true },
                "rowAlternationEnabled": true,
                "dataSource": {
                    "asyncLoadEnabled": false,
                    "store": [
                        {
                            "CustomerID": "VINET",
                            "OrderDate": "1996/07/04",
                            "Freight": "32.3800",
                            "ShipName": "Vins et alcools Chevalier",
                            "ShipCity": "Reims",
                            "ShipCountry": "France"
                        },
                        {
                            "CustomerID": "TOMSP",
                            "OrderDate": "1996/07/05",
                            "Freight": "11.6100",
                            "ShipName": "Toms Spezialitaten",
                            "ShipCity": "Munster",
                            "ShipCountry": "Germany"
                        },
                        {
                            "CustomerID": "HANAR",
                            "OrderDate": "1996/07/08",
                            "Freight": "65.8300",
                            "ShipName": "Hanari Carnes",
                            "ShipCity": "Rio de Janeiro",
                            "ShipCountry": "Brazil"
                        },
                        {
                            "CustomerID": "VICTE",
                            "OrderDate": "1996/07/08",
                            "Freight": "41.3400",
                            "ShipName": "Victuailles en stock",
                            "ShipCity": "Lyon",
                            "ShipCountry": "France"
                        },
                        {
                            "CustomerID": "SUPRD",
                            "OrderDate": "1996/07/09",
                            "Freight": "51.3000",
                            "ShipName": "Supremes delices",
                            "ShipCity": "Charleroi",
                            "ShipCountry": "Belgium"
                        },
                        {
                            "CustomerID": "HANAR",
                            "OrderDate": "1996/07/10",
                            "Freight": "58.1700",
                            "ShipName": "Hanari Carnes",
                            "ShipCity": "Rio de Janeiro",
                            "ShipCountry": "Brazil"
                        },
                        {
                            "CustomerID": "CHOPS",
                            "OrderDate": "1996/07/11",
                            "Freight": "22.9800",
                            "ShipName": "Chop-suey Chinese",
                            "ShipCity": "Bern",
                            "ShipCountry": "Switzerland"
                        },
                        {
                            "CustomerID": "RICSU",
                            "OrderDate": "1996/07/12",
                            "Freight": "148.3300",
                            "ShipName": "Richter Supermarkt",
                            "ShipCity": "Geneve",
                            "ShipCountry": "Switzerland"
                        },
                        {
                            "CustomerID": "WELLI",
                            "OrderDate": "1996/07/15",
                            "Freight": "13.9700",
                            "ShipName": "Wellington Importadora",
                            "ShipCity": "Resende",
                            "ShipCountry": "Brazil"
                        },
                        {
                            "CustomerID": "HILAA",
                            "OrderDate": "1996/07/16",
                            "Freight": "81.9100",
                            "ShipName": "HILARION-Abastos",
                            "ShipCity": "San Cristobal",
                            "ShipCountry": "Venezuela"
                        },
                        {
                            "CustomerID": "ERNSH",
                            "OrderDate": "1996/07/17",
                            "Freight": "140.5100",
                            "ShipName": "Ernst Handel",
                            "ShipCity": "Graz",
                            "ShipCountry": "Austria"
                        }
                    ]
                },
                "filterRow": {
                    "visible": true
                },
                "height": "500px",
                "paging": {
                    "pageSize": 10
                },
                "pager": {
                    "showPageSizeSelector": true
                },
                "searchPanel": {
                    "visible": true
                },
                "groupPanel": {
                    "visible": true
                },
                "selection": {
                    "mode": "multiple"
                },
                "hoverStateEnabled": true,
                "allowColumnResizing": true,
                "allowColumnReordering": true,
                "editing": {
                    "editEnabled": true,
                    "removeEnabled": true,
                    "editMode": "batch"
                },
                "columns": [
                    {
                        "dataField": "CustomerID",
                        "allowFiltering": false
                    },
                    {
                        "dataField": "OrderDate",
                        "dataType": "date"
                    },
                    "ShipName",
                    {
                        "dataField": "ShipCity",
                        "groupIndex": 0,
                        "filterOperations": [ "startswith", "contains", "=" ]
                    },
                    {
                        "dataField": "ShipCountry",
                        "filterOperations": false,
                        "selectedFilterOperation": "startswith"
                    },
                    "Freight"
                ],
                "summary": {
                    "totalItems": [
                        {
                            "column": "Freight",
                            "summaryType": "sum",
                            "displayFormat": "Total: {0}"
                        }
                    ],
                    "groupItems": [
                        {
                            "column": "CustomerID",
                            "summaryType": "count"
                        }
                    ]
                }
            }
        }
    ]
};};
ThemeBuilder.__editors_autocomplete_group = function() { return {
"id": "editors.autocomplete",
"ord": 3,
"widgets": [
		{ 
			"name": "dxAutocomplete",
			"supportedThemes": ["all"],
			"options": {
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
						"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
						"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
						"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"],
				"placeholder": "Enter city name"
			}
		}
]
};};
ThemeBuilder.__editors_calendar_group = function() { return {
"id": "editors.calendar", 
"widgets": [
		{
			"name": "dxCalendar",
			"supportedThemes": ["all"],
			"options": { }
		}
]
};};
ThemeBuilder.__editors_checkbox_group = function() { return {
"id": "editors.checkbox",
"ord": 4,
"widgets": [
	{
			"name": "dxCheckBox",
			"title": "dxCheckBox",
			"supportedThemes": ["all"],
			"options": {
				"checked": true
            }
		},
		{
			"name": "dxCheckBox",
			"title": "Disabled dxCheckBox",
			"supportedThemes": ["all"],
			"options": {
				"disabled": true
            }
		}
]
};};
ThemeBuilder.__editors_colorbox_group = function() { return {
"id": "editors.colorbox", 
"widgets": [
		{
			"name": "dxColorBox",
			"supportedThemes": ["all"],
			"options": {
				"value": "rgba(89, 168, 61, .7)",
				"editAlphaChannel": true
			}
		}
]
};};
ThemeBuilder.__editors_fileuploader_group = function() { return {
    "id": "editors.fileuploader",
    "widgets": [
        {
            "name": "dxFileUploader",
            "supportedThemes": [ "all" ],
            "options": { }
        }
    ]
};};
ThemeBuilder.__editors_group = function() { return {
	"id": "editors",
	"ord": 3,
    "widgets": [
        {
			"name": "dxTextBox",
			"title": "Text box",
			"supportedThemes": ["all"],
			"options": {
				"value": "Text box widget"
            }
		},
        {
			"name": "dxSelectBox",
			"title": "Selectbox widget",
			"supportedThemes": ["all"],
			"options": {
				"items": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
			}
		},
		{
			"name": "dxTextArea",
			"title": "Multiline text box",
			"supportedThemes": ["all"],
			"options": {
				"value": "Multiline text box widget"
            }
		},
		{ 
			"name": "dxAutocomplete",
			"title": "Autocomplete",
			"supportedThemes": ["all"],
			"options": {
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
						"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
						"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
						"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"]
			}
		},
		{  
			"name": "dxLookup",
			"title": "Lookup",
			"supportedThemes": ["all"],
			"options": { 
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
				"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
				"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
				"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"],
				"popupHeight": 500
			}
		},
		{
			"name": "dxCheckBox",
			"title": "Checkbox widget",
			"supportedThemes": ["all"],
			"options": {
				"checked": true
            }
		},
		{
			"name": "dxCheckBox",
			"title": "Disabled checkbox widget",
			"supportedThemes": ["all"],
			"options": {
				"disabled": true
            }
		},
		{
			"name": "dxSwitch",
			"title": "Switch widget",
			"supportedThemes": ["all"],
			"options": { }
		},
		{
			"name": "dxSwitch",
			"title": "Disabled switch",
			"supportedThemes": ["all"],
			"options": { 
				"disabled": true
			}
		},
		{
			"name": "dxRadioGroup",
			"title": "RadioGroup widget",
			"supportedThemes": ["all"],
			"options": {
				"items": ["Tea", "Coffee", "Juice"],
				"selectedIndex": 0
			}
		}
    ]
};};
ThemeBuilder.__editors_lookup_group = function() { return {
"id": "editors.lookup", 
"ord": 6,
"widgets": [
{  
			"name": "dxLookup",
			"supportedThemes": ["all"],
			"options": {
				"items": ["New York", "Los Angeles", "Chicago", "Houston", "Philadelphia", "Phoenix", "San Antonio",
				"San Diego", "Dallas", "San Jose", "Jacksonville", "Indianapolis", "Austin", "San Francisco",
				"Columbus", "Fort Worth", "Charlotte", "Detroit", "El Paso", "Memphis", "Boston", "Seattle",
				"Denver", "Baltimore", "Washington", "Nashville", "Louisville", "Milwaukee", "Portland", "Oklahoma"],
				"popupHeight": 500,
				"usePopover": false
			}
		}
]
};};
ThemeBuilder.__editors_numberbox_group = function() { return {
"id": "editors.numberbox", 
"widgets": [
		{
			"name": "dxNumberBox",
			"supportedThemes": ["all"],
			"options": {
				"showSpinButtons": true
            }
		}
]
};};
ThemeBuilder.__editors_radiogroup_group = function() { return {
"id": "editors.radiogroup", 
"ord": 7,
"widgets": [
{
			"name": "dxRadioGroup",
			"supportedThemes": ["all"],
			"options": {
				"items": ["Tea", "Coffee", "Juice"],
				"selectedIndex": 0
			}
		}
]
};};
ThemeBuilder.__editors_selectbox_group = function() { return {
"id": "editors.selectbox", 
"widgets": [
		{
			"name": "dxSelectBox",
			"title": "dxSelectBox",
			"supportedThemes": ["all"],
			"options": {
				"items": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
			}
		}
]
};};
ThemeBuilder.__editors_switch_group = function() { return {
"id": "editors.switch", 
"ord": 8,
"widgets": [
{
			"name": "dxSwitch",
			"title": "dxSwitch",
			"supportedThemes": ["all"],
			"options": { }
		},
		{
			"name": "dxSwitch",
			"title": "Disabled dxSwitch",
			"supportedThemes": ["all"],
			"options": { 
				"disabled": true,
				"value": true
			}
		}
]
};};
ThemeBuilder.__editors_tagbox_group = function() { return {
    "id": "editors.tagbox",
    "widgets": [
        {
            "name": "dxTagBox",
            "supportedThemes": ["all"],
            "options": {
                "items": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
            }
        }
    ]
};};
ThemeBuilder.__editors_texteditors_group = function() { return {
	"id": "editors.texteditors", 
	"ord": 9,
	"widgets": [
		{
			"name": "dxTextBox",
			"title": "dxTextBox",
			"supportedThemes": ["all"],
			"options": {
				"placeholder": "Text box widget",
				"mode": "search"
            }
		},
		{
			"name": "dxTextArea",
			"title": "dxTextArea",
			"supportedThemes": ["all"],
			"options": {
				"value": "Multiline text box widget"
            }
		}
	]
};};
ThemeBuilder.__editors_validation_group = function() { return {
    "id": "editors.validation",
    "widgets": [
        {

            "name": "dxTextBox",
            "title": "Name",
            "supportedThemes": [ "all" ],
            "afterRenderAction": "VALIDATION_ACTION",
            "options": {
                "placeholder": "Name",
                "validationOptions": {
                    "name": "Name",
                    "validationRules": [
                        {
                            "type": "required"
                        }
                    ]
                }
            }
        },
        {

            "name": "dxTextBox",
            "title": "Password",
            "supportedThemes": [ "all" ],
            "afterRenderAction": "VALIDATION_ACTION",
            "options": {
                "placeholder": "Password",
                "mode":  "password",
                "validationOptions": {
                    "name": "Password",
                    "validationRules": [
                        {
                            "type": "required"
                        }
                    ]
                }
            }
        }
    ]
};};
ThemeBuilder.__gallery_group = function() { return {
"id": "gallery",
"ord": 9,
"widgets": [
	{  
		"name": "dxGallery",
		"supportedThemes": ["all"],
		"options": { 
			"items": [
				"Content/Images/person1.png",
				"Content/Images/person2.png",
				"Content/Images/person3.png",
				"Content/Images/person4.png"
			],
			"showNavButtons": true,
			"height": 320
		}
	}
]
};};
ThemeBuilder.__list_group = function() { return {
"id": "list",
	"ord": 2,
	"widgets": [
		{ 
			"name": "dxList",
			"supportedThemes": ["all"],
			"options": {
				"grouped": true,
				"editEnabled": true,
				"editConfig": {
					"deleteEnabled": true,
					"selectionEnabled": true
				}, 
				"items": [
					{
						"key": "Group A",
						"items": [
							"Russia",
							"Czech",
							"Poland",
							"Greece"
						]
					},
					{
						"key": "Group B",
						"items": [
							"Germany",
							"Portugal",
							"Denmark",
							"Netherlands"
						]
					}
				]
			}
		}
	]
};};
ThemeBuilder.__navigations_accordion_group = function() { return {
    "id": "navigations.accordion",
    "widgets": [
        {
			"name": "dxAccordion",
			"supportedThemes": ["all"],
			"options": {
				
				"items": [
                    { "title":  "Jack London (1876-1916)", "html":  "<p>The Call of the Wild (1903)</p><p>Before Adam (1907)</p><p>Burning Daylight (1910)</p><p>The Abysmal Brute (1911)</p>"},
					{ "title":  "Mark Twain (1835-1910)", "html":  "<p>Screamers (1871)</p><p>Eye Openers (1871)</p><p>Colonel Sellers (1874)</p><p>Merry Tales (1892)</p>"}
				]
			}
		}
    ]
};};
ThemeBuilder.__navigations_group = function() { return {
"id": "navigations",
"widgets": [
	
]
};};
ThemeBuilder.__navigations_menu_group = function() { return {
"id": "navigations.menu", 
"widgets": [
	{
		"name": "dxMenu",
		"supportedThemes": ["all"],
		"options": {
			"showFirstSubmenuMode": "onHover",
			"animation": {
                "show": false,
                "hide": false
            },
						"items": [
	{
		"text": ".NET",
		"items": [
			{
				"text": "Individual Platforms",
				"items": ["WinForms", "ASP.NET", "MVC", "WPF", "Silverlight", "Windows 8 XAML"],
				"selected": true,
				"selectable": true
			}, 
			{
				"text": "Frameworks",
				"items": ["eXpressApp Framework"]
			}, 
			{
				"text": "Code-Debug-Refactor",
				"items": ["CodeRush for Visual Studio"]
			}, 
			{
				"text": "Mobile (HTML JS)",
				"items": ["DevExtreme"]
			}, 
			{
				"text": "Cross-Platform",
				"items": ["Reporting", "Document Generation"]
			}, 
			{
				"text": "Enterprise Tools",
				"items": ["Report Server", "Analytics Dashboard"]
			}
		]
	}, 
	{
		"text": "HTML JavaScript",
		"items": [
			{
				"text": "Mobile",
				"items": ["Phone JS"]
			}, 
			{
				"text": "HTML 5 JS Widgets",
				"items": ["Chart JS"]
			}
		]
	}, 
	{
		"text": "iOS 7",
		"items": [
			{
				"text": "Native",
				"items": ["DataExplorer"]
			}
		]
	}, 
	{
		"text": "Testing Tools",
		"items": [
			{
				"text": "Web Testing",
				"items": ["TestCafe"]
			}
		]
	}, 
	{
		"text": "Delphi & C++Builder",
		"disabled": true
	}
]
		}
	}
]
};};
ThemeBuilder.__navigations_navbar_group = function() { return {
"id": "navigations.navbar",
"widgets": [
    { 
	    "name": "dxNavBar",
	    "supportedThemes": ["all"],
	    "options": { 
		    "dataSource": [
			    { "text": "user", "icon": "user" },
			    { "text": "find", "icon": "find" },
			    { "text": "favorites", "icon": "favorites" },
			    { "text": "about", "icon": "info" },
			    { "text": "home", "icon": "home", "badge": 77 },
			    { "text": "URI", "icon": "tips", "disabled": true }
		    ]
	    }
    }
]
};};
ThemeBuilder.__navigations_tabs_group = function() { return {
"id": "navigations.tabs", 
"widgets": [
{ 
		"name": "dxTabs",
		"supportedThemes": ["all"],
		"options": {  
			"dataSource": [
				{ "text": "user", "icon": "user" },
				{ "text": "comment", "icon": "comment" },
				{ "text": "find", "icon": "find" },
				{ "text": "disabled", "disabled": true }
			] 
		}
	}
]
};};
ThemeBuilder.__navigations_toolbar_group = function() { return {
"id": "navigations.toolbar", 
"widgets": [
	{ 
		"name": "dxToolbar",
		"supportedThemes": ["all"],
		"options": {
			"dataSource":[
				{ "location": "left", "widget": "button", "options": { "type": "back", "text": "Back" }},
				{ "location": "right", "widget": "button", "options": { "icon": "plus" } },
				{ "location": "right", "widget": "button", "options": { "icon": "find" } },
				{ "location": "center", "text": "Products" }
			]
		}
	}
]
};};
ThemeBuilder.__navigations_treeview_group = function() { return {
    "id": "navigations.treeview",
    "widgets": [
        {
            "name": "dxTreeView",
            "supportedThemes": [ "all" ],
            "prerenderAction":  "MAKE_TREEVIEW_BORDER",
            "options": {
                "showCheckBoxes": true,
                "selectAllEnabled": true,
                "items": [
                    {
                        "id": 1,
                        "text": ".NET",
                        "items": [
                            {
                                "id": 11,
                                "text": "Individual Platforms",
                                "items": [
                                    { "id": 111, "text": "WinForms" },
                                    { "id": 112, "text": "ASP.NET" },
                                    { "id": 113, "text": "MVC" },
                                    { "id": 114, "text": "WPF" },
                                    { "id": 115, "text": "Silverlight" },
                                    { "id": 116, "text": "Windows 8 XAML" }
                                ],
                                "selected": true,
                                "expanded": true
                            },
                            {
                                "id": 12,
                                "text": "Frameworks",
                                "items": [
                                    { "id": 121, "text": "eXpressApp Framework" }
                                ]
                            },
                            {
                                "id": 13,
                                "text": "Code-Debug-Refactor",
                                "items": [
                                    { "id": 131, "text": "CodeRush for Visual Studio" }
                                ]
                            },
                            {
                                "id": 14,
                                "text": "Mobile (HTML JS)",
                                "items": [
                                    { "id": 141, "text": "DevExtreme" }
                                ]
                            },
                            {
                                "id": 15,
                                "text": "Cross-Platform",
                                "items": [
                                    { "id": 151, "text": "Reporting" },
                                    { "id": 152, "text": "Document Generation" }
                                ]
                            },
                            {
                                "id": 16,
                                "text": "Enterprise Tools",
                                "items": [
                                    { "id": 161, "text": "Report Server" },
                                    { "id": 162, "text": "Analytics Dashboard" }
                                ]
                            }
                        ]
                    },
                    {
                        "id": 2,
                        "text": "HTML JavaScript",
                        "items": [
                            {
                                "id": 21,
                                "text": "Mobile",
                                "items": [
                                    { "id": 211, "text": "Phone JS" }
                                ]
                            },
                            {
                                "id": 22,
                                "text": "HTML 5 JS Widgets",
                                "items": [
                                    { "id": 221, "text": "Chart JS" }
                                ]
                            }
                        ]
                    },
                    {
                        "id": 3,
                        "text": "iOS 7",
                        "items": [
                            {
                                "id": 31,
                                "text": "Native",
                                "items": [
                                    { "id": 311, "text": "DataExplorer" }
                                ]
                            }
                        ]
                    },
                    {
                        "id": 4,
                        "text": "Testing Tools",
                        "items": [
                            {
                                "id": 41,
                                "text": "Web Testing",
                                "items": [
                                    { "id": 441, "text": "TestCafe" }
                                ]
                            }
                        ]
                    },
                    {
                        "id": 5,
                        "text": "Delphi & C++Builder"
                    }
                ]
            }
        }
    ]
};};
ThemeBuilder.__overlays_actionsheet_group = function() { return {
"id": "overlays.actionsheet", 
"widgets": [
	{
		"name": "dxButton",
		"supportedThemes": ["ios7-default", "android-holo-dark", "android-holo-light", "android5-light"],
		"options": {
			"text": "Show actionsheet",
			"click": "SHOW_ACTIONSHEET"
		}
	},
{
		"name": "dxActionSheet",
		"supportedThemes": ["ios7-default", "android-holo-dark", "android-holo-light", "android5-light"],
		"options": {
			"items": [
				{ "text": "Reply" },
				{ "text": "ReplyAll" },
				{ "text": "Forward" },
				{ "text": "Delete" }
			],
			"visible": false,
			"title": "ActionSheet"
		}
	}
]
};};
ThemeBuilder.__overlays_common_group = function() { return {
"id": "overlays.common", 
"widgets": [
	{
		"name": "dxButton",
		"title": "dxLoadPanel",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show load panel",
			"click": "SHOW_LOAD_PANEL"
		}
	},
	{
		"name": "dxButton",
		"title": "dxPopup",
		"id": "popup-button",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show popup",
			"click": "SHOW_POPUP"
		}
	},

	{
		"title": "Confirm dialog",
		"name": "dxButton",
		"supportedThemes": ["ios7-default", "win8-black", "win8-white", "android5-light"],
		"options": {
			"text": "Show confirm dialog",
			"click": "SHOW_CONFIRM_DIALOG"
		}
	},
	{
		"name": "dxButton",
		"title": "dxActionSheet",
		"supportedThemes": ["generic-light", "generic-dark", "win8-black", "win8-white"],
		"options": {
			"text": "Show actionsheet",
			"click": "SHOW_ACTIONSHEET"
		}
	},
	{
		"name": "dxLoadPanel",
		"id": "load-panel-sample",
		"supportedThemes": ["all"],
		"options": { 
			"message": "Loading...",
			"closeOnOutsideClick": true,
			"visible": false
		}
	},
	{
		"name": "dxPopup",
		"id": "popup-sample",
		"supportedThemes": ["all"],
		"options": { 
			"closeOnOutsideClick": true,
			"visible": false,
			"showTitle": true,
			"title": "Popup title",
			"deferRendering": false
		}
	},
	{
		"name": "dxActionSheet",
		"supportedThemes": ["generic-light", "generic-dark", "win8-black", "win8-white"],
		"options": {
			"items": [
				{ "text": "Reply" },
				{ "text": "ReplyAll" },
				{ "text": "Forward" },
				{ "text": "Delete" }
			],
			"visible": false,
			"title": "ActionSheet"
		}
	}
]
};};
ThemeBuilder.__overlays_dropdownmenu_group = function() { return {
"id": "overlays.dropdownmenu", 
"widgets": [
	{
		"name": "dxDropDownMenu",
		"supportedThemes": ["all"],
		"options": {
			"items": ["Copy", "Cut", "Clear"]
		}
	}
]
};};
ThemeBuilder.__overlays_group = function() { return {
"id": "overlays",
"widgets": [
	
]
};};
ThemeBuilder.__overlays_toasts_group = function() { return {
"id": "overlays.toasts", 
"widgets": [
	{
		"name": "dxButton",
		"title": "Info Type",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show info toast",
			"click": "SHOW_INFO_TOAST"
		}
 	},
	{
		"name": "dxButton",
		"title": "Warning Type",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show warning toast",
			"click": "SHOW_WARNING_TOAST"
		}
 	},
	{
		"name": "dxButton",
		"title": "Error Type",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show error toast",
			"click": "SHOW_ERROR_TOAST"
		}
 	},
	{
		"name": "dxButton",
		"title": "Success Type",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show success toast",
			"click": "SHOW_SUCCESS_TOAST"
		}
 	},
	{
		"name": "dxToast",
		"id": "success-toast-sample",
		"supportedThemes": ["all"],
		"options": { 
			"message": "The toast message",
			"type": "success",
			"closeOnOutsideClick": true,
			"displayTime": 3000
		}
	},
	{
		"name": "dxToast",
		"id": "error-toast-sample",
		"supportedThemes": ["all"],
		"options": { 
			"message": "The toast message",
			"type": "error",
			"closeOnOutsideClick": true,
			"displayTime": 3000
		}
	},
	{
		"name": "dxToast",
		"id": "warning-toast-sample",
		"supportedThemes": ["all"],
		"options": { 
			"message": "The toast message",
			"type": "warning",
			"closeOnOutsideClick": true,
			"displayTime": 3000
		}
	},
	{
		"name": "dxToast",
		"id": "info-toast-sample",
		"supportedThemes": ["all"],
		"options": { 
			"message": "The toast message",
			"type": "info",
			"closeOnOutsideClick": true,
			"displayTime": 3000
		}
	}
]
};};
ThemeBuilder.__overlays_tooltip_group = function() { return {
"id": "overlays.tooltip", 
"widgets": [
{
		"name": "dxButton",
		"id": "tooltip-button",
		"supportedThemes": ["all"],
		"options": {
			"text": "Show tooltip",
			"click": "SHOW_TOOLTIP"
		}
	},
	{
		"name": "dxTooltip",
		"id": "tooltip-sample",
		"supportedThemes": ["all"],
		"options": { 
			"target": "#tooltip-button",
			"closeOnOutsideClick": true,
			"visible": false,
			"showTitle": false,
			"deferRendering": false,
			"text": "Show tooltip"
		}
	}
]
};};
ThemeBuilder.__pager_group = function() { return {
"id": "pager",
"ord": 13,
"widgets": [
]
};};
ThemeBuilder.__pickers_group = function() { return {
	"id": "pickers",
	"widgets": [
		
		
	]
};};
ThemeBuilder.__progressbars_group = function() { return {
    "id": "progressbars",
    "widgets": [
        {
            "name": "dxProgressBar",
            "supportedThemes": [ "all" ],
            "options": {
                "value": 40,
                "min": 0,
                "max": 100,
                "showStatus": true
            }
        }
    ]
};};
ThemeBuilder.__scrollview_group = function() { return {
"id": "scrollview", 
"widgets": [
		{
			"name": "dxScrollView",
			"supportedThemes": ["all"],
			"prerenderAction": "LOAD_SCROLLVIEW_CONTENT",
			"options": { 
				"bounceEnabled": true	
			}
		}
]
};};
ThemeBuilder.__sliders_group = function() { return {
"id": "sliders",
"ord": 2,
"widgets": [
	{
		"name": "dxSlider",
		"title": "dxSlider",
		"supportedThemes": ["all"],
		"options": {
			"min": 0, 
			"max": 100, 
			"value": 38
		}
	},
	{
		"name": "dxRangeSlider",
		"title": "dxRangeSlider",
		"supportedThemes": ["all"],
		"options": {
			"min": 0, 
			"max": 100, 
			"start": 38, 
			"end": 62
		}
	}
]
};};
ThemeBuilder.__tileview_group = function() { return {
	"id": "tileview",
	"widgets": [
		{
			"name": "dxTileView",
			"supportedThemes": ["all"],
			"options": {
				"listHeight": 400,
				"width": 400,
				"items": [
					"Russia",
					"Czech",
					"Poland",
					"Greece",
					"Germany",
					"Portugal",
					"Denmark",
					"Netherlands",
					"Belgium",
					"Italy"
				]
			}
		}
	]
};};

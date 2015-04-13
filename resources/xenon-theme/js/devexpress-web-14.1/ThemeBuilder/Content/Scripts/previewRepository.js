﻿(function(ThemeBuilder) {

    ThemeBuilder.PreviewRepository = function(previewDataLoader) {
        var repositoryData = [];

        var sortPreviewData = function(data) {
            data.sort(function(a, b) {
                if(!a.ord) a.ord = 999;
                if(!b.ord) b.ord = 999;
                    
                if(a.ord < b.ord)
                    return -1;
                if(a.ord > b.ord)
                    return 1;
            });
        };

        var filterWidgetsByThemeAndColorScheme = function(widgets, theme) {
            return $.grep(widgets, function(widget) {
                var result = false,
                    supportedThemes = widget.supportedThemes,
                    themeWithColorScheme = theme.name + "-" + theme.colorScheme;

                if(supportedThemes.length === 1 && supportedThemes[0] === "all") {
                    result = true;
                } else {
                    for(var i = 0, len = supportedThemes.length; i < len; i++) {
                        if(supportedThemes[i] === themeWithColorScheme) {
                            result = true;
                            break;
                        }
                    }
                }

                return result;
            });
        };

        var filterWidgetsByGroupId = function(widgets, groupId) {
            var widgetsCount = widgets.length;
            if(!widgetsCount)
                return [];
            for(var i = 0; i < widgetsCount; i++) {
                if(widgets[i].id === groupId)
                    return [widgets[i]];
            }
        };

        this.init = function(metadata) {
            var d = $.Deferred();
            previewDataLoader.load(metadata).done(function(previewData) {
                sortPreviewData(previewData);
                repositoryData = previewData;
                d.resolve();
            });

            return d.promise();
        };

        this.getData = function(theme, groupId) {
            var result = [];
            if(theme) {
                $.each(repositoryData, function(index, item) {
                    var widgets = filterWidgetsByThemeAndColorScheme(item.widgets, theme);

                    if(widgets.length) {
                        var useFieldset = item.useFieldset || false;
                        if($.isArray(item.useFieldsetForThemes) &&
                            $.inArray(theme.name + "-" + theme.colorScheme, item.useFieldsetForThemes) > -1) {
                            useFieldset = true;
                        }
                        result.push({
                            id: item.id,
                            name: item.name,
                            ord: item.ord,
                            useFieldset: useFieldset,
                            doNotRenderPageTitle: item.doNotRenderPageTitle || false,
                            widgets: widgets
                        });
                    }
                });

                if(groupId)
                    result = filterWidgetsByGroupId(result, groupId);

            }
            else {
                result = repositoryData;
            }

            return result;
        };
    };

})(ThemeBuilder);
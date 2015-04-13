DevExpress.devices.current({ platform: "generic" });

$(function() {
	var changeTheme = function (theme) {
		$("." + theme + "-theme").addClass("active");
		DevExpress.ui.themes.current("generic." + theme);
        if(DevExpress.viz)
            DevExpress.viz.core.currentTheme("desktop", theme);

		var content = $("#html").text();
	
		$("#full").empty().append(content);
		
		setTimeout(function(){jQuery.globalEval($("#jsCode").text());},0);
	}

	$(".dark-theme").click(function() {
		$(".light-theme").removeClass("active");
		$(".pane").addClass("dark");
		changeTheme("dark");
	});

	$(".light-theme").click(function() {
		$(".dark-theme").removeClass("active");
		$(".pane").removeClass("dark");
		changeTheme("light")
	});
});
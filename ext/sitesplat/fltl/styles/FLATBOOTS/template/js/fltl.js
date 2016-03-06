head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {
		e.preventDefault();
		var hack = new Date();
		$.ajax({url: 'app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime())})
			.done(function(data) {
				$("#start-fltl").remove();

				for (var i = $(data).length - 1; i >= 0; i--) {
					if ($(data)[i].id === 'fltl') {
						$("#fltl").html($(data)[i]);
					}
					if ($(data)[i].id === 'start-fltl') {
						$("body").append($(data)[i]);
					}
				}
				
			});
	});
});
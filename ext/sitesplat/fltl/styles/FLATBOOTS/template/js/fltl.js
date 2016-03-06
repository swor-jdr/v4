head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {
		e.preventDefault();
		var hack = new Date();
		$.ajax({url: 'app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime())})
			.done(function(data) {
				console.log($(data));
				$("#fltl").html($(data).find($('#fltl')));
			});
	});
});
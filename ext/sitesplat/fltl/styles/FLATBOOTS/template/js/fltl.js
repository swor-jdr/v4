head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {

		e.preventDefault();

		var hack = new Date();
	
		$("#rtblock").load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #fltl', function() {
		}, function(err) {
			console.error(err);
		});
	});
});
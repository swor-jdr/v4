head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {
		e.preventDefault();
		var hack = new Date();
		$('#fltl').load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #fltl > *, #script-fltl', function(data) {
			console.log(data)
		});
	});
});
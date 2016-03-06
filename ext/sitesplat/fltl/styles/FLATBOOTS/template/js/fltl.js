head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {

		e.preventDefault();

		var hack = new Date();
	
<<<<<<< HEAD
		$("#fltl").load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #fltl > *', function(res) {
			$("#fltl").html(res);
		}, function(err) {
			console.error(err);
		});
=======
		$.ajax({url: 'app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime())})
			.done(function(data) {
				$("#fltl").html(data);
			});
>>>>>>> 9d4594f5b405e33c5d1f3a8454bdc099adaa4100
	});
});
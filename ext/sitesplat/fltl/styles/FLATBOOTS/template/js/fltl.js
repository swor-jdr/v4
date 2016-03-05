head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {

		e.preventDefault();

		var hack = new Date();
	
		$("#fltl").load('app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()) + ' #fltl', function() {
			console.log('ok');
		});

		// $.ajax({
		// 	url: 'app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()),
			
		// 	context: document.getElementById("fltl"),
		// 	error: function (e, text, ee) {
		// 	},
		// 	success: function (s, x) {
		// /* sucks, but a bug in phpBB 3.1 forces us to fix phpbb_root_path in get_user_avatar */
		// 		s = s.replace(/\.\.\/\.\.\/download/g, 'download'); 
		// 		$("#fltl").html( s );
		// 	}
		// });
	});
});
head.ready(function () {
	$(document).on("click", ".rtbutton", function (e) {
		e.preventDefault();
		var hack = new Date();
		$.ajax({
			url:'app.php/fltl/fltl.html?fltl_start=' + start + '&time=' + String(hack.getTime()),
			dataType:'html',
			success:function(response){
				var data;

				var tempDiv = document.createElement('div');
				tempDiv.innerHTML = response;

				if ($(tempDiv).find('#fltl')[0] !== undefined) {
					data = $(tempDiv).find('#fltl')[0].children;
				} else {
					data = response;
				}
				$("#fltl").html(data);
				var limit = parseInt($('#data-fltl')[0].dataset.limit);
				var total = parseInt($('#data-fltl')[0].dataset.total);
				start = start + limit >= total ? 0 : start + limit;

				$('.rtbutton').text(start + limit >= total ? $('#data-fltl')[0].dataset.back : $('#data-fltl')[0].dataset.more);
			}
		});
	});
});
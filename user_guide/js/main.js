$(document).ready(function() {

	var tab_table = $(".row .tbl_content");

	tab_table.hide().filter(':first').show();

	$(".menu li a").on('click', function(e) {
		e.preventDefault();

		// get month active
		var month_act = $(this).text();

		$(".date .month_act").html(month_act);


		// show tab content table
		tab_table.hide();

		tab_table.filter(this.hash).show();

		// add and remove navigation
		$(".menu li a").removeClass('active');
		
		$(this).addClass('active');

	});
});
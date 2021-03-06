$(document).ready(function() {
	var table = $('.transcript').dataTable( {
		"paging": false, // disable paging
		"order": [], // no ordering by default
		"colReorder": true,
		"fixedHeader": true,
		"responsive": true,
		"columnDefs": [
			{ responsivePriority: 2, targets: 2 },
			{ responsivePriority: 1, targets: '_all' }
		],
		"initComplete": function(settings, json) {
			$("#title-left").addClass("column-left");		
			$("#title-right").addClass("column-right");
			var $input = $("#DataTables_Table_0_filter > label > input");
			$input.appendTo("#title-right");
			//$input.css("float", "right");
			$("#DataTables_Table_0_filter").hide();
		}
	} );
	
	$(window).on('resize', function () {
		table.fnAdjustColumnSizing();
	} );
} );
(function ($) {
	$(document).ready(function () {
		function lenderFilter(){
				console.log('fddfgdfg');
			}
		$('.control-consolidation').prop('checked', true);
		if ($('.control-consolidation').is(':checked')) {
			$('.consolidation-value').text('Yes');
		} else {
			$('.consolidation-value').text('No');
		}
		$('.control-consolidation').click(function () {
			if ($('.control-consolidation').is(':checked')) {
				$('.consolidation-value').text('Yes');
			} else {
				$('.consolidation-value').text('No');
			}
		});
/* 		$('.renewal-yes').prop('checked', true);
		if ($('.renewal-yes').is(':checked')) {
			$('.renewal-no').prop('checked', false);
		} else {
			$('.renewal-no').prop('checked', true);
		}
		$('.renewal-yes').click(function () {
			if ($('.renewal-yes').is(':checked')) {
				$('.renewal-no').prop('checked', false);
			}
		});

		$('.renewal-no').click(function () {
			if ($('.renewal-no').is(':checked')) {
				$('.renewal-yes').prop('checked', false);
			}
		}); */
		 
;
		
		 
	});
})(jQuery);
(function($){
	$(document).ready(function(){
		if($('div').hasClass('alert-danger'))
		{
			$('#close-alert').click(function(){
				$('.close-alert').css('display','none');
				$('.alert-danger').css('display','none');
			});
		}
		/* $(function() {
			var chk = $('#terms_and_condition');
			var btn = $('#contact-submit-btn');
			
			chk.on('change', function() {
				btn.prop("disabled", !this.checked);//true: disabled, false: enabled
			}).trigger('change'); //page load trigger event
		}); */
	});
})(jQuery);

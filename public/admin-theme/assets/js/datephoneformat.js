$(window).load(function()
{
   var phones = [{ "mask": "+\\1(###) ###-####"}, { "mask": "+1(###) ###-####"}];
    $('.textbox').inputmask({ 
        mask: phones, 
        greedy: false, 
        definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
});

$( function() {
    $( ".datepicker" ).datepicker();
  } );
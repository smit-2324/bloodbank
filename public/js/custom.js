(function ($) {

  $(document).ready(function () {
    var base_color = "rgb(230,230,230)";
    var active_color = "rgb(8 193 119)";




    var child = 1;
    var length = $("section").length - 1;
    $("#prev").addClass("disabled");
    $("#submit").addClass("disabled");

    //$("section").not("section:nth-of-type(1)").hide();
    //$("section").not("section:nth-of-type(1)").css('transform', 'translateX(100px)');

    var svgWidth = length * 200 + 24;
    $("#svg_wrap").html(
      '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
      svgWidth +
      ' 24" xml:space="preserve"></svg>'
    );

    function makeSVG(tag, attrs) {
      var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
      for (var k in attrs) el.setAttribute(k, attrs[k]);
      return el;
    }

    /* for (i = 0; i < length; i++) {
      var positionX = 12 + i * 200;
      var rect = makeSVG("rect", {
        x: positionX,
        y: 9,
        width: 200,
        height: 6
      });
      document.getElementById("svg_form_time").appendChild(rect);
      // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
      var circle = makeSVG("circle", {
        cx: positionX,
        cy: 12,
        r: 12,
        width: positionX,
        height: 6
      });
      document.getElementById("svg_form_time").appendChild(circle);
    }
      var circle = makeSVG("circle", {
      cx: positionX + 200,
      cy: 12,
      r: 12,
      width: positionX,
      height: 6
    });
    document.getElementById("svg_form_time").appendChild(circle);

    $('#svg_form_time rect').css('fill', base_color);   
    $('#svg_form_time circle').css('fill', base_color);
    $("circle:nth-of-type(1)").css("fill", active_color); */


    $(".button").click(function () {
     
      /* if($("select.BusinessLoanPurpose").children("option:selected").val() == ""){
        
      } */
      
      $("#svg_form_time rect").css("fill", active_color);
      $("#svg_form_time circle").css("fill", active_color);
      var id = $(this).attr("id");
      if (id == "next") {
        $("#prev").removeClass("disabled");
        if (child >= length) {
          $(this).addClass("disabled");
          $('#submit').removeClass("disabled");
        }
        if (child <= length) {
          child++;
        }
      } else if (id == "prev") {
        if (child == 1) {
          $("#prev").css("display", "none");
        }
        $("#next").removeClass("disabled");
        $('#submit').addClass("disabled");
        if (child <= 2) {
          $(this).addClass("disabled");
          $("#prev").css("display", "none");
        }
        if (child > 1) {
          child--;
        }
      }
      var circle_child = child + 1;
      $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
        "fill",
        base_color
      );
      $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
        "fill",
        base_color
      );
      var currentSection = $("section:nth-of-type(" + child + ")");
      currentSection.fadeIn(800);
      currentSection.css('transform', 'translateX(0)');
      currentSection.prevAll('section').css('transform', 'translateX(-100px)');
      currentSection.nextAll('section').css('transform', 'translateX(100px)');
      $('section').not(currentSection).hide();
    });

    $('.ltSidebar').hide();

    $('.ltFormExplain > a').on('click', function () {
      $('.ltSidebar').show();
    });

    $('.next').on('click', function () {
      $('.ltSidebar').hide();

    });

    $(".sole-proprietor, .partnership, .llc, .c-corporation, .s-corporation").on('click', function () {
      $("#prev").css("display", "block");
    });
    
   
    $(window).load(function(){
      var excellent = sessionStorage.getItem('excellent');
      if(sessionStorage.getItem('credit-score') == 'excellent'){
        $('.EXCELLENTEstimatedCreditRating').addClass('selected');
        $('.SOMECREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
        $('.MAJORCREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
        $('.LITTLEORNOCREDITHISTORYEstimatedCreditRating').removeClass('selected');
      }
      if(sessionStorage.getItem('credit-score') == 'good'){
        $('.SOMECREDITPROBLEMSEstimatedCreditRating').addClass('selected');
      $('.EXCELLENTEstimatedCreditRating').removeClass('selected');
      $('.MAJORCREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
      $('.LITTLEORNOCREDITHISTORYEstimatedCreditRating').removeClass('selected');
      }
      if(sessionStorage.getItem('credit-score') == 'fair'){
        $('.MAJORCREDITPROBLEMSEstimatedCreditRating').addClass('selected');
        $('.SOMECREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
        $('.EXCELLENTEstimatedCreditRating').removeClass('selected');
        $('.LITTLEORNOCREDITHISTORYEstimatedCreditRating').removeClass('selected');
      }
      if(sessionStorage.getItem('credit-score') == 'poor'){
        $('.LITTLEORNOCREDITHISTORYEstimatedCreditRating').addClass('selected');
      $('.SOMECREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
      $('.MAJORCREDITPROBLEMSEstimatedCreditRating').removeClass('selected');
      $('.EXCELLENTEstimatedCreditRating').removeClass('selected');
      }
    });

    $('.EXCELLENTEstimatedCreditRating').on('click', function () {
      sessionStorage.setItem('credit-score','excellent');
    });

    $('.SOMECREDITPROBLEMSEstimatedCreditRating').on('click', function () {
      sessionStorage.setItem('credit-score','good');
    });

    $('.MAJORCREDITPROBLEMSEstimatedCreditRating').on('click', function () {
      sessionStorage.setItem('credit-score','fair');
    });

    $('.LITTLEORNOCREDITHISTORYEstimatedCreditRating').on('click', function () {
      sessionStorage.setItem('credit-score','poor');
    });

    $("#product-icon-sole-proprietor").click(function(){
      $('#sole-proprietor').submit();
    });
    $("#product-icon-Partnership").click(function(){
      $('#Partnership').submit();
    });

    $("#product-icon-wrapper llc button").click(function(){
      $('#Limited Liability Company(LLC)').submit();
    });
    $("#product-icon-wrapper-c-corporation-button").click(function(){
      $('#c-corporation').submit();
    });
    $("#product-icon-wrapper-s-corporation-button").click(function(){
      $('#s-corporation').submit();
    });
    $("#BusinessLoanPurposeFinancingFor").change(function(){
      $('#BusinessLoanPurpose').submit();
    });
    $("#product-icon-BusinessInceptionDatebox1").click(function(){
      $('#BusinessInceptionDateY').submit();
    });
    $("#BusinessInceptionDateY").change(function(){
      $('#BusinessInceptionDate').submit();
    });
   
  // $("#product-icon-AnnualRevenue").click(function(){
   //   $('#product-icon-AnnualRevenue').submit();
   // });
    $(".EXCELLENTEstimatedCreditRating").click(function(){
      $('#EXCELLENTEstimatedCreditRating').submit();
    });
    $(".SOMECREDITPROBLEMSEstimatedCreditRating").click(function(){
      $('#SOMECREDITPROBLEMSEstimatedCreditRating').submit();
    });
    $(".MAJORCREDITPROBLEMSEstimatedCreditRating").click(function(){
      $('#MAJORCREDITPROBLEMSEstimatedCreditRating').submit();
    });
    $(".LITTLEORNOCREDITHISTORYEstimatedCreditRating").click(function(){
      $('#LITTLEORNOCREDITHISTORYEstimatedCreditRating').submit();
    });
    $(".lender_filteration btn btn-brand").click(function(){
      $('#lendersInfo').submit();
    });
  
    
    $("#IndustryCh").change(function(){
      $('#Industry').submit();
    });
     
    $("product-icon-Email").change(function(){
      $('#Email').submit();
    }); 
  

    });
       

})(jQuery);
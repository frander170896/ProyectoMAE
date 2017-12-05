$(document).ready(function() {
    
    $('.ajax-popup-link').magnificPopup({
	  type: 'ajax'
	});
    
    $('.mail-link').on('click', function (event) {
        event.preventDefault();		   
        window.location = 'mailto:' + $(event.currentTarget).html();
    });
    
    if($.urlParam('p') === null || $.urlParam('p') === 'home'){
        
        var options = {
            $DragOrientation: 3,
            $AutoPlay : true,
            $FillMode : 0,
            $PauseOnHover : 0,
            $Idle: 6000,
            $ArrowNavigatorOptions: {                       
                $Class: $JssorArrowNavigator$,            
                $ChanceToShow: 2,                             
                $AutoCenter: 0,                                
                $Steps: 1            
            }
        };
        var jssor_slider1 = new $JssorSlider$("slider", options);
    
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales
        //while window resizing
        function ScaleSlider() {
            var parentWidth = $('#slider').parent().width();
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        //Scale slider after document ready
        ScaleSlider();

        //Scale slider while window load/resize/orientationchange.
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end 
    }
    
    var duration = "fast";
    $(".grid-item").mouseenter(function(){
        if( !$(this).hasClass("noHover") ){
            $(this).find(".first").animate({top:-400},duration);
            $(this).find(".second").animate({top:0},duration);     
        }
       
    }).mouseleave(function(){
        if( !$(this).hasClass("noHover") ){
            $(this).find(".first").animate({top:0},duration);
            $(this).find(".second").animate({top:400},duration);
        }
    });
    
     $('.grid').isotope({
    // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    
});

$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}
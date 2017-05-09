$(function(){
   //get the width of main header
    var h = $('.main-header').height();

    //set body margin
    $('body').css( "margin-top", h +"px" );

    $(window).on('resize', function(){
        //get the width of main header
        var h = $('.main-header').height();
        //set body margin
        $('body').css( "margin-top", h +"px" );
    });
});
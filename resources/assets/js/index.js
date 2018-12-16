var icon = document.getElementById('icon');
var topNav = document.getElementById('top-nav');



$('#icon').on('click', function() {
    $('.overlay.full').toggleClass('active');
    $(this).toggleClass('active');

    $('#top-nav').toggleClass('side-drawer');
    $('body').toggleClass('no-scroll');
});

$('#service').on('click', function() {
    $('#service-links').toggleClass('active');
});

$(window).on('resize', function(){
    if(window.innerWidth > 990 && topNav.className != 'nav-block'){
        icon.click();
    }
 });


$('.accordian-title').on('click', function(){
        $(this).toggleClass('active');
        $(this).find('.tab-icon').toggleClass('active');
        
        var content = $(this).next();
        
        if(content.css('max-height') == '0px'){
            content.css('max-height', 'none');
        }
        else{
             content.css('max-height', '0px'); 
         }
});

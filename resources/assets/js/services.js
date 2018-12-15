var header = document.getElementById("service-header");
var links = document.getElementsByClassName("service-link");
var body = document.getElementById("service-body");
var blocks = document.getElementsByClassName("service-block");

$('.service-link').on('click', function(){
  var block = $(this).data('block');
  
  if($('.service-link').is('.active')){
    $('.service-link').removeClass('active');
  }
  if($('.service-block').is('.active')){
    $('.service-block').removeClass('active');
  }

  $(this).toggleClass('active');
  $('#'+block).toggleClass('active');
});

$('.sngl-post').on('click', function(){
  if( $('.sngl-post').children('.sngl-post-title').is('.active')){
    $('.sngl-post').children('.sngl-post-title').removeClass('active');
  }

  $(this).children('.sngl-post-title').toggleClass('active');
})

$('.sngl-post').children('.sngl-post-title').first().addClass('active');
$('#default-open').click();

$('.service-block').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  navText: ['<i class="material-icons">chevron_left</i>', '<i class="material-icons">chevron_right</i>'],
  navClass: ['owl-prev', 'owl-next'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1024:{
        items:3
      },
      1440:{
          items:4
      }
  }
})

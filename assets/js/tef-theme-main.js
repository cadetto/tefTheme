jQuery(document).ready(function( $ ) {

  $('.carousel').slick({
    arrows:'true'
  })

  $('.clients').slick({
    arrows:'true',
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  $(".bars").click(function(){
    $(".main-nav ul").slideToggle();
  })

  const bars = document.querySelector('.bars')
  
  bars.addEventListener('click', ()=>{
    bars.classList.toggle('toggle')
  })

});
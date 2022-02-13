 $(function() {
   $('.slider').slick({
      arrows: false,
      dots: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
         {
            breakpoint: 992,
            settings: {
              slidesToShow: 1
            }
      }
   ]
   });
})
$('.main-search-result__block__inner-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    dotsClass: 'main-search-result__block__pagination',
    autoplaySpeed: 3000,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 568,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
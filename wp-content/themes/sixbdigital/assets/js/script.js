/*! Mobile Toggle Button Start Here  */

const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

/*! Mobile Toggle Button End Here  */
/*!  Slider Start Here  */

if ($(".hero-slider").length > 0) {
  $(".hero-slider").slick({
    arrows: false,
    dots: true,
    autoplay: false,
    infinite: true,
    centerPadding: "40",
    centerMode: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    speed: 1500,
    autoplaySpeed: 1000,
  });
}

/*! Slider End Here  */

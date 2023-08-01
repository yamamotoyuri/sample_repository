
$(function () {
  $(".slider").slick({
    slidesToShow:2,
    arrows:true,
    dots:true,
    autoplay: true,
    
    responsive:[
      {
        breakpoint: 960,
        settings: {
          slidesToShow:1,
          autoplaySpeed:1000,
        }
    }
    ]
  });
});



$(function(){
  $(".label").on("click",function() {
    $(this).next().slideToggle();
  });
});


$(function(){
  $(".hamburger").on("click",function() {
    $(this).toggleClass("is-active");
    $(".nav").slideToggle();
  });

});





const targetElement = document.querySelectorAll(".animation");
console.log(window.innerHeight)
document.addEventListener("scroll", function() {
  for (let i = 0; i < targetElement.length; i++) {
      const getElementDistance = targetElement[i].
      getBoundingClientRect().top + targetElement[i].clientHeight * .2
  if (window.innerHeight > getElementDistance) {
      targetElement[i].classList.add("show");
  }      
}
});



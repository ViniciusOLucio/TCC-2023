const summary = document.querySelectorAll('.summary');
summary.forEach(function (item) {
  item.addEventListener('click',() => {
    item.parentElement.classList.toggle('active');
  } )
});


var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2.4,
  spaceBetween: 30,
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true,
  },

});
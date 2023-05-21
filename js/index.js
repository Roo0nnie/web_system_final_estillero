// Swiper Information

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    centeredSlides: false,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      20: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      920: {
          slidesPerView: 3
      }

    }
  });
  var swiper = new Swiper(".slide-review", {
    slidesPerView: 4,
    centeredSlides: false,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      20: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      920: {
          slidesPerView: 3,
      },
      1240: {
        slidesPerView: 4
    }

    }
  });

//   Text animation  

const text = document.querySelector(".second-text");

const textLoad = () => {
    setTimeout(() => {
        text.textContent = " Ronnie";
    }, 0);
    setTimeout(() => {
        text.textContent = " A Student";
    }, 4000);
    setTimeout(() => {
        text.textContent = " A Coder";
    }, 8000);
}

textLoad();
setInterval(textLoad, 12000);
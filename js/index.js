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


const textChanger = document.getElementById('viewmore');
  
textChanger.addEventListener("click", function() {

  if (textChanger == "View") {
    textChanger = document.getElementById('viewmore').innerText = "Read Less";
  } else {
    textChanger = document.getElementById('viewmore').innerText = "View More";
  }


})
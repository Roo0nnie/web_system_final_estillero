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

  // music

  const musicChanger = document.getElementById('music-stop');
  
  musicChanger.addEventListener("click", function() {

    if (musicChanger == "pause_circle") {
      musicChanger = document.getElementById('music-stop').innerText = "play_circle";
    } else {
      musicChanger = document.getElementById('music-stop').innerText = "pause_circle";
    }
  

  })
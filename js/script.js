let btnNext = document.getElementById('button-next');
let btnPrev = document.getElementById('button-prev');

let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: btnNext,
      prevEl: btnPrev,
    },
  });

let swiper2 = new Swiper(".mySwiper7", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination7",
      clickable: true,
    },
  }); 


let getBtn = document.querySelector('.nav-btn');

function scrollDown() {
  window.scrollBy(0, 5100)
}

getBtn.addEventListener('click', function() {  
  scrollDown();
}); 

let saveme_btn = document.getElementById('saveme-btn');
let email_input = document.querySelector('.email-input');
let error_email = document.querySelector('.error-email');

saveme_btn.addEventListener('click', function() {
  let email_inner = document.querySelector('.email-input').value;
  let len = email_inner.length
  let x = 0
  let y = 0
  for(let i = 0; i < len; i++) {
    if(email_inner[i] == "@") {
      x = 1;
    }
    if(email_inner[i] == ".") {
      y = 1;
    }
  }
  if(x + y != 2) {
    error_email.style.display = "flex";
  } else {
    error_email.style.display = "none";
  }
  
});
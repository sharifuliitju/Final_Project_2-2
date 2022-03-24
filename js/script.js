// Login Form
const inputs = document.querySelectorAll(".input");


function addcl(){
   let parent = this.parentNode.parentNode;
   parent.classList.add("focus");
}

function remcl(){
   let parent = this.parentNode.parentNode;
   if(this.value == ""){
      parent.classList.remove("focus");
   }
}


inputs.forEach(input => {
   input.addEventListener("focus", addcl);
   input.addEventListener("blur", remcl);
});


let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}


var swiper = new Swiper(".mySwiper", {
   loop:true,
   centeredSlides: true,
   autoplay: {
     delay: 1000,
     disableOnInteraction: false,
   },
   breakpoints: {
     0: {
       slidesPerView: 1,
     },
     200: {
       slidesPerView: 2,
     },
     400: {
       slidesPerView: 3,
     },
   },
 });
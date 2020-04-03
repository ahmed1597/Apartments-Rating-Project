let passwordInput = document.querySelector(".input-container__input-password");
let eyeButton = document.querySelector(".input-container__svg-container__show-btn");
 
eyeButton.addEventListener('click', ()=>{
  if(passwordInput.getAttribute('type') == 'password') {
    passwordInput.removeAttribute('type');
    passwordInputt.setAttribute('type', 'text');

   } else {
    passwordInput.removeAttribute('type');
    passwordInput.setAttribute('type', 'password');

   }
});

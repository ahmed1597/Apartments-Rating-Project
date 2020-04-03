let burgerMenu = document.querySelector('.burger-menu'); // BURGER
let topBarNavCol = document.querySelector('.top-bar__row__nav-col'); // CONTAINER

burgerMenu.addEventListener('click', ()=>{
    if(!(topBarNavCol.classList.contains('active'))){  
        burgerMenu.classList.add('active');
        topBarNavCol.classList.add('active');
    }
    else{
        burgerMenu.classList.remove('active');
        topBarNavCol.classList.remove('active');
    }
})
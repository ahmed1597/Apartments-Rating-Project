let occupantsButtons = document.querySelectorAll('.main-write-review__occupants-btn');
let ratingCheckboxes = document.querySelectorAll('.rating-container .checkbox-container input');

ratingCheckboxes.forEach((item)=>{
    item.addEventListener('click', (e)=>{
        item.closest('.rating-container').querySelectorAll('.checkbox-container input').forEach(el=>{
            for(let i = 1; i < 5; i++){
                if(item.value >= el.value){
                    el.checked = true;
                }
                else{
                    el.checked = false;
                }
            }
        })
    });
})

occupantsButtons.forEach(element => {
    element.addEventListener('click', ()=>{
        occupantsButtons.forEach(el=>{
            el.classList.remove('active');
        })
        element.classList.add('active');
    })
})
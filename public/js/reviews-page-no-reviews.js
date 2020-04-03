let reviewBtn = document.querySelector('.how-to-write__btn');
let reviewInfoModal = document.querySelector('.review-info-modal');

reviewBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    reviewInfoModal.classList.add('active');
    document.body.classList.add('overflow-hidden');
})
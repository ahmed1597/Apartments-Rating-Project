let submitReviewMobalButtons = document.querySelectorAll('.submit-review-modal__btn');
let submitReviewModal = document.querySelector('.submit-review-modal');
let mainWriteReviewForm = document.querySelector('.main-write-review__form');
let mainWriteReviewFormBtn = document.querySelector('.main-write-review__form .main-write-review__submit-btn');

mainWriteReviewFormBtn.addEventListener('click', (event)=>{
    event.preventDefault();
    submitReviewModal.classList.add('active');
    document.body.classList.add('overflow-hidden');
});

submitReviewMobalButtons.forEach((btn)=>{
    btn.addEventListener('click', ()=>{
        submitReviewModal.classList.remove('active');
    })
})

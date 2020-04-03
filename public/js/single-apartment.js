let reportButtons = document.querySelectorAll('.report-btn');
let reportModal = document.querySelector('.submit-report-modal');

reportButtons.forEach((btn)=>{
    btn.addEventListener('click', ()=>{
        reportModal.classList.add('active');
        document.body.classList.add('overflow-hidden');
    });
});
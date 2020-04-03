let verifyBtn = document.querySelector('.user-section__get-verified-btn');
let verifyModal = document.querySelector('.verify-modal');
let removeAttachedButtons = document.querySelectorAll('.attached-file span');
let doneModalBtn = document.querySelector('.custom-modal__done-btn');

doneModalBtn.addEventListener('click', ()=>{
    verifyModal.classList.remove('active');
    document.body.classList.remove('overflow-hidden');
});

removeAttachedButtons.forEach((btn)=>{
    btn.addEventListener('click', ()=>{
        btn.closest('.attached-file').outerHTML = '';
    });
});

verifyBtn.addEventListener('click', ()=>{
    verifyModal.classList.add('active');
    document.body.classList.add('overflow-hidden');
});
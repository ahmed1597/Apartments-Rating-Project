let closeModalButtons = document.querySelectorAll('.close-btn');

closeModalButtons.forEach((btn)=>{
    btn.addEventListener('click', ()=>{
        let closestModal = btn.closest('.custom-modal');
        closestModal.classList.remove('active');
        document.body.classList.remove('overflow-hidden');
    })
});
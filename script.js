document.addEventListener('DOMContentLoaded', () => {
    const carres = document.querySelectorAll('.carre');
    const modals = document.querySelectorAll('.modal-overlay');
    const closeButtons = document.querySelectorAll('.close-btn');

    carres.forEach(carre => {
        carre.addEventListener('click', () => {
            const targetId = carre.getAttribute('data-target');
            const modal = document.getElementById(targetId);
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Empêche le défilement en arrière-plan
            }
        });
    });

    const closeAllModals = () => {
        modals.forEach(modal => modal.classList.remove('active'));
        document.body.style.overflow = '';
    };

    closeButtons.forEach(btn => {
        btn.addEventListener('click', closeAllModals);
    });

    modals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeAllModals();
            }
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeAllModals();
        }
    });
});
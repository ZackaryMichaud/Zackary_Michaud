// Gestion de l'envoi du formulaire en HTML/JS pur
    const contactForm = document.getElementById('contact-form');
    const alertSuccess = document.getElementById('alert-success');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Empêche le rechargement de la page
            const nom = document.getElementById('contact-nom').value;
            
            alertSuccess.textContent = `Merci ${nom} ! Votre message a bien été enregistré.`;
            alertSuccess.style.display = 'block';
            
            contactForm.reset();
            closeAllModals();
        });
    }
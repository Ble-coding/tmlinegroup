
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.navigation a');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // Empêche le comportement par défaut du lien

            const targetId = this.getAttribute('href').substring(1); // Obtient l'identifiant de la section cible
            const targetSection = document.getElementById(targetId); // Obtient la section cible

            if (targetSection) {
                const targetOffset = targetSection.getBoundingClientRect().top + window.pageYOffset; // Calcule la position de la section cible
                const headerHeight = document.querySelector('.main-menu').offsetHeight; // Hauteur de l'en-tête pour une meilleure apparence

                // Calcule la position de défilement en tenant compte de la hauteur de l'en-tête
                const scrollToPosition = targetOffset - headerHeight;

                // Animation du défilement en douceur
                window.scrollTo({
                    top: scrollToPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Configurer Swiper pour votre carrousel
    const swiper = new Swiper('.swiper-container', {
        // Options de configuration Swiper
        speed: 800, // Vitesse de transition en millisecondes
        effect: 'fade', // Effet de transition (par exemple, 'slide', 'fade', etc.)
        // Ajoutez d'autres options Swiper selon vos besoins
    });
  });
</script>
<script src="{{ asset('js/jquery.js') }}"></script>

<script>
    $(document).ready(function(){
        $('#contactForm').submit(function(e){
            e.preventDefault(); // Empêche le formulaire de se soumettre normalement

            // Récupération des données du formulaire
            var formData = $(this).serialize();

            // Envoi du formulaire via AJAX
            $.ajax({
                url: "{{ route('envoyerEmail') }}",
                type: "POST",
                data: formData,
                success: function(response){
                    // Affichage du message de succès dans le conteneur
                    $('#messageContainer').html('<div class="alert alert-success">' + response.message + '</div>');
                    // Efface le contenu du formulaire après envoi
                    $('#contactForm')[0].reset();
                },
                error: function(xhr){
                    // Affichage des erreurs en cas de problème dans le conteneur
                    $('#messageContainer').html('<div class="alert alert-danger">Une erreur s\'est produite lors de l\'envoi du formulaire.</div>');
                }
            });
        });
    });
</script>
<script>
    // Récupérez tous les liens de service
    var serviceLinks = document.querySelectorAll('.service-link');
    var defaultService = document.getElementById('fishing'); // Service par défaut

    // Masquez tous les services sauf le service par défaut
    document.querySelectorAll('.service-content').forEach(function(content) {
        if (content !== defaultService) {
            content.style.display = 'none';
        }
    });

    // Parcourez chaque lien et ajoutez un écouteur d'événement clic
    serviceLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            
            var serviceName = this.dataset.service; // Récupère le nom du service à partir de l'attribut data-service
            
            // Masquez le service actuellement affiché
            defaultService.style.display = 'none';
            
            // Affichez uniquement le contenu du service correspondant
            var serviceContent = document.getElementById(serviceName);
            serviceContent.style.display = 'block';
            
            // Mettez à jour le service par défaut
            defaultService = serviceContent;
        });
    });
</script>


<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

{{-- @if(session('success'))
<div class="alert alert-success"> 
    {{ session('success') }}
</div>
@endif --}}

{{-- <form action="{{ route('envoyerEmail') }}" id="contactForm" class="contact-one-form" 
    class="contact-one-form" method="POST"> --}}
    <form id="contactForm" class="contact-one-form" action="{{ route('envoyerEmail') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-6">
                <div class="input-box">
                    <input type="text" name="nom" placeholder="Votre nom">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Votre adresse e-mail">
                </div>
            </div>
            <div class="col-xl-12">
                <div class="input-box">
                    <input type="text" name="sujet" placeholder="Sujet">
                </div>
            </div>
            <div class="col-xl-12">
                <div class="input-box">
                    <textarea name="message" placeholder="Votre message"></textarea>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="contact__btn">
                    <button type="submit" class="theme-btn">Envoyer le message</button>
                </div>
            </div>
        </div>
    </form>
    
    <!-- Ajoutez un conteneur pour afficher les messages -->
    <div id="messageContainer"></div>
    
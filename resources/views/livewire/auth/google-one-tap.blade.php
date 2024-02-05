<div>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div id="g_id_onload"
         data-client_id="{{ config('services.google.client_id') }}"
         data-context="signin"
         data-auto_prompt="true"
         data-callback="onSignIn">
    </div>
    <div class="g_id_signin"
         data-type="standard"
         data-shape="rectangular"
         data-theme="filled_blue"
         data-text="signin_with"
         data-size="large"
         data-logo_alignment="left">
    </div>
    <script>
        // Esta función se ejecutará cuando se haga clic en el botón de Google One Tap
        function onSignIn(credential) {
            // Enviar el token al componente Livewire
            window.livewire.emit('login', credential);
        }
    </script>
</div>


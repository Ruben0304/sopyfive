<div>
    <script src="https://accounts.google.com/gsi/client" async defer></script>

        <div id="g_id_onload"
             data-client_id="{{env('GOOGLE_CLIENT_ID')}}"
             data-login_uri="/google/onetap"
             data-_token="{{ csrf_token() }}"
             data-method="post"
             data-ux_mode="redirect"
             data-auto_prompt="true">
        </div>

{{--    <script>--}}
{{--        // Esta función se ejecutará cuando se haga clic en el botón de Google One Tap--}}
{{--        function onSignIn(credential) {--}}
{{--            // Enviar el token al componente Livewire--}}
{{--            window.livewire.emit('login', credential);--}}
{{--        }--}}
{{--    </script>--}}
</div>


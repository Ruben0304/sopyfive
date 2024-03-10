<!-- resources/views/emails/info-sopyfive.blade.php -->
<div>

    # Hola,

    Recibes este correo electrónico porque hemos recibido una solicitud de restablecimiento de contraseña para tu cuenta.

   {{route('reset-password', ['token' => '$token', 'email' => '$email'])}}
        Restablecer contraseña


    Este enlace de restablecimiento de contraseña caducará en 60 minutos.

    Si no has solicitado un restablecimiento de contraseña, puedes ignorar este correo.

    Gracias,<br>
    {{ config('app.name') }}

</div>

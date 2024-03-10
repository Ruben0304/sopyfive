<form class="login100-form validate-form" wire:submit="register">
    <div style="display: inline-grid">
        @foreach ($errors->all() as $error)
            <span class="text-danger">{{ $error }}</span> <!-- Mostrar el mensaje de error -->
        @endforeach

    </div>

    <span class="login100-form-title p-b-49">
        Cambiar contraseña
    </span>


    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Nueva contraseña</span>
        <input class="input100" type="password" name="pass" placeholder="Escriba su contraseña"
               wire:model="form.password">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>

    <div class="wrap-input100 validate-input  m-b-23 " data-validate="Password is required">
        <span class="label-input100">Confirmar contraseña</span>
        <input class="input100" type="password" placeholder="Repita la contraseña"
               wire:model="form.password_confirmation">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>

    <div class="container-login100-form-btn" style="margin-top: 40px ">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Confirmar
            </button>
        </div>
    </div>

</form>

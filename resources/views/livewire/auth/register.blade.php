<form class="login100-form validate-form" wire:submit="register">
    <div style="display: inline-grid">
        @foreach ($errors->all() as $error)
            <span class="text-danger">{{ $error }}</span> <!-- Mostrar el mensaje de error -->
        @endforeach

    </div>

    <span class="login100-form-title p-b-49">
        Registrarse
    </span>
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
        <span class="label-input100">Nombre</span>
        <input wire:model="form.name" class="input100" type="text" placeholder="Escriba su nombre"
            wire:model="form.email">
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="text" name="username" placeholder="Escriba su email" wire:model="form.email">
        <span class="focus-input100" data-symbol="@"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Contraseña</span>
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
                Registrarse
            </button>
        </div>
    </div>

    {{-- <div class="txt1 text-center p-t-54 p-b-20">
            <span>
                Or Sign Up Using
            </span>
        </div>
    
        <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
                <i class="fa fa-facebook"></i>
            </a>
    
            <a href="#" class="login100-social-item bg2">
                <i class="fa fa-twitter"></i>
            </a>
    
            <a href="#" class="login100-social-item bg3">
                <i class="fa fa-google"></i>
            </a>
        </div> --}}

    <div class="flex-col-c p-t-155">
        <span class="txt1 p-b-17">
            ¿ Ya tienes cuenta ?
        </span>

        <a href="{{ route('login') }}" class="txt2" wire:navigate>
            Entrar
        </a>
    </div>
</form>

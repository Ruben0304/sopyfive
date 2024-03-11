<form class="login100-form validate-form" wire:submit="login">
    <div style="display: inline-grid">
        @foreach ($errors->all() as $error)
            <span class="text-danger">{{ $error }}</span> <!-- Mostrar el mensaje de error -->
        @endforeach

    </div>

    <span class="login100-form-title p-b-49">
        Entrar
    </span>

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



    <div class="container-login100-form-btn" style="margin-top: 40px ">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Entrar
            </button>
        </div>
    </div>

    <div class="txt1 text-center p-t-54 p-b-20">
            <span>
                O entra usando:
            </span>
    </div>

    <div class="flex-c-m">


        <a href="{{route('google-login')}}" class="login100-social-item bg3">
            <i class="fa-brands fa-google"></i>
        </a>
        <a href="{{route('twitter-login')}}" class="login100-social-item bg1">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="{{route('tiktok-login')}}" class="login100-social-item bg2">
            <i class="fa-brands fa-tiktok"></i>
        </a>
    </div>

    <div class="flex-col-c p-t-155">
        <span class="txt1 p-b-17">
            ¿ Ya tienes cuenta ?
        </span>

        <a href="{{ route('register') }}" class="txt2" wire:navigate>
            Registrarse
        </a>
    </div>
</form>

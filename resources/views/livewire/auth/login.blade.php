<form class="login100-form validate-form" wire:submit="login">
    @foreach ($errors->all() as $error)
        <span class="text-danger">{{ $error }}</span> <!-- Mostrar el mensaje de error -->
    @endforeach

    <span class="login100-form-title p-b-49">
        Entrar
    </span>

    <div class="wrap-input100 validate-input m-b-23">
        <span class="label-input100">Email</span>
        <input class="input100" type="text" type="email" placeholder="Escriba su email" wire:model="form.email">
        <span class="focus-input100" data-symbol="@"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <span class="label-input100">Contraseña</span>
        <input class="input100" type="password" name="pass" placeholder="Escriba su contraseña"
            wire:model="form.password">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>

    <div class="validate-input" style="margin-top:40px;margin-bottom: 40px"><input type="checkbox" checked="checked"
            wire:model="form.remember" /><label class="form-check-label mb-0" for="basic-checkbox">Recordarme</label>
    </div>

    {{-- <div class="text-right p-t-8 p-b-31">
        <a href="#">
            Forgot password?
        </a>
    </div> --}}

    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Login
            </button>
        </div>
    </div>

    <div class="txt1 text-center p-t-54 p-b-20">
        <span>
            O entra usando
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
            ¿ No tienes cuenta aún ?
        </span>

        <a href="{{ route('register') }}" class="txt2" wire:navigate>
            Registrarse
        </a>
    </div>
</form>

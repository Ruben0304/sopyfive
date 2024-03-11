<form class="login100-form validate-form" wire:submit="sendPasswordResetLink">

    <!-- Session Status -->





    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
        <span class="label-input100">Introduce email</span>
        <input class="input100" type="text" name="user" placeholder="Introduce email"
               wire:model="email">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    <div style="display: inline-grid">
        @foreach ($errors->all() as $error)
            <span class="text-danger">{{ $error }}</span> <!-- Mostrar el mensaje de error -->
        @endforeach

    </div>
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="container-login100-form-btn" style="margin-top: 40px ">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
                Aceptar
            </button>
        </div>
    </div>

</form>

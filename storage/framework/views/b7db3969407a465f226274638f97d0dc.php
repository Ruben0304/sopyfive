<form class="login100-form validate-form" wire:submit="register">
    <div style="display: inline-grid">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="text-danger"><?php echo e($error); ?></span> <!-- Mostrar el mensaje de error -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

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

    

    <div class="flex-col-c p-t-155">
        <span class="txt1 p-b-17">
            ¿ Ya tienes cuenta ?
        </span>

        <a href="<?php echo e(route('login')); ?>" class="txt2" wire:navigate>
            Entrar
        </a>
    </div>
</form>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>
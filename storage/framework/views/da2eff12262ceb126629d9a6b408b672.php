<form class="login100-form validate-form" wire:submit="login">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="text-danger"><?php echo e($error); ?></span> <!-- Mostrar el mensaje de error -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

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


        <a href="#" class="login100-social-item bg3">
            <i class="fa fa-google"></i>
        </a>
    </div>

    <div class="flex-col-c p-t-155">
        <span class="txt1 p-b-17">
            ¿ No tienes cuenta aún ?
        </span>

        <a href="<?php echo e(route('register')); ?>" class="txt2" wire:navigate>
            Registrarse
        </a>
    </div>
</form>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/auth/login.blade.php ENDPATH**/ ?>
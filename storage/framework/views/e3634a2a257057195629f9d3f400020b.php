<form wire:submit="register">
    <div class="mb-3 text-start"><label class="form-label" for="name">Name</label><input class="form-control"
            id="name" type="text" placeholder="Name" wire:model="name" /></div>
    <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label><input
            class="form-control" id="email" type="email" placeholder="name@example.com" wire:model="email" />
    </div>
    <div class="row g-3 mb-3">
        <div class="col-xl-6"><label class="form-label" for="password">Password</label><input
                class="form-control form-icon-input" id="password" type="password" placeholder="Password"
                wire:model="password" /></div>
        <div class="col-xl-6"><label class="form-label" for="confirmPassword">Confirm Password</label><input
                class="form-control form-icon-input" id="confirmPassword" type="password" placeholder="Confirm Password"
                wire:model="password_confirmation" /></div>
    </div>
    <div class="form-check mb-3"><input class="form-check-input" id="termsService" type="checkbox" /><label
            class="form-label fs--1 text-none" for="termsService">I accept the <a href="#!">terms </a>and <a
                href="#!">privacy policy</a></label></div><button class="btn btn-primary w-100 mb-3">Sign
        up</button>
    <div class="text-center"><a class="fs--1 fw-bold" href="<?php echo e(route('login')); ?>" wire:navigate>Sign in to an existing
            account</a></div>
</form>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/auth/forms/register-form.blade.php ENDPATH**/ ?>
<form wire:submit="login">
    <div class="auth-form-box">
        <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index-2.html">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                        src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
            </a>
            <h3 class="text-1000">Sign In</h3>
            <p class="text-700">Get access to your account</p>
        </div><button class="btn btn-phoenix-secondary w-100 mb-3"><span
                class="fab fa-google text-danger me-2 fs--1"></span>Sign in with
            google</button><button class="btn btn-phoenix-secondary w-100"><span
                class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with
            facebook</button>
        <div class="position-relative">
            <hr class="bg-200 mt-5 mb-4" />
            <div class="divider-content-center bg-white">or use email</div>
        </div>
        <div class="mb-3 text-start"><label class="form-label" for="email">Email
                address</label>
            <div class="form-icon-container"><input class="form-control form-icon-input" id="email" type="email"
                    placeholder="name@example.com" wire:model="form.email"/><span class="fas fa-user text-900 fs--1 form-icon"></span></div>
        </div>
        <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
            <div class="form-icon-container"><input class="form-control form-icon-input" id="password" type="password"
                    placeholder="Password" wire:model="form.password"/><span class="fas fa-key text-900 fs--1 form-icon"></span></div>
        </div>
        <div class="row flex-between-center mb-7">
            <div class="col-auto">
                <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox"
                        checked="checked" wire:model="form.remember"/><label class="form-check-label mb-0" for="basic-checkbox">Remember
                        me</label>
                </div>
            </div>
            <div class="col-auto"><a class="fs--1 fw-semi-bold" href="forgot-password.html">Forgot Password?</a></div>
        </div><button class="btn btn-primary w-100 mb-3">Sign In</button>
        <div class="text-center"><a class="fs--1 fw-bold" href="{{ route('register') }}" wire:navigate>Create an
                account</a></div>
    </div>
</form>

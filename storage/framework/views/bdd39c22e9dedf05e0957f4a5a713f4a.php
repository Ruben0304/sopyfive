<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<div class="container-fluid bg-300 dark__bg-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-200 auth-card">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        <div
                            class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                            <div class="bg-holder" style="background-image:url(../../../assets/img/bg/38.png);"></div>
                            <!--/.bg-holder-->
                            <div
                                class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 card-sign-up">
                                <h3 class="mb-3 text-black fs-1">Phoenix Authentication</h3>
                                <p class="text-700">Give yourself some hassle-free development process with the
                                    uniqueness of Phoenix!</p>
                                <ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto">
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Fast</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Simple</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Responsive</span></li>
                                </ul>
                            </div>
                            <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15"><img
                                    class="auth-title-box-img d-dark-none"
                                    src="../../../assets/img/spot-illustrations/auth.png" alt="" /><img
                                    class="auth-title-box-img d-light-none"
                                    src="../../../assets/img/spot-illustrations/auth-dark.png" alt="" /></div>
                        </div>
                        <div class="col mx-auto">
                            <div class="auth-form-box">
                                <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4"
                                        href="<?php echo e(route('logout')); ?>">
                                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                                                src="../../../assets/img/icons/logo.png" alt="phoenix"
                                                width="58" /></div>
                                    </a>
                                    <h3 class="text-1000">Sign Up</h3>
                                    <p class="text-700">Create your account today</p>
                                </div><button class="btn btn-phoenix-secondary w-100 mb-3"><span
                                        class="fab fa-google text-danger me-2 fs--1"></span>Sign up with
                                    google</button><button class="btn btn-phoenix-secondary w-100"><span
                                        class="fab fa-facebook text-primary me-2 fs--1"></span>Sign up with
                                    facebook</button>
                                <div class="position-relative mt-4">
                                    <hr class="bg-200" />
                                    <div class="divider-content-center bg-white">or use email</div>
                                </div>

                                
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('auth.forms.register-form');

$__html = app('livewire')->mount($__name, $__params, 'okC2xg9', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views\livewire/auth/sign-up.blade.php ENDPATH**/ ?>
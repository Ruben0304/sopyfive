<form wire:submit='save'>
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.como_descubrio_sopyfive'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.peticiones'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.acceso_a_especialistas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.gustaria_tienda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.quisiera_ser_parte'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.email_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <span class="text-danger"><?php echo e($message); ?></span> <!-- Mostrar el mensaje de error -->
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.comunidades'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <!-- Mostrar el error del campo nombre -->
        <?php echo e($message); ?>

    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    <div class="mb-3">
        <p for="basic-form-name">Nombre Completo:</p>
        <input wire:model='form.nombre' class="form-control" id="basic-form-name" type="text"
            placeholder="Opcional" />
    </div>
    <div class="form-floating mb-3">
        <p>Edad:</p>
        <div class="form-check">
            <input class="form-check-input" id="age1" name="age" type="radio" value="18-25"
                wire:model="form.edad">
            <label class="form-check-label" for="age1">18-25</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="age2" name="age" type="radio" value="26-30"
                wire:model="form.edad">
            <label class="form-check-label" for="age2">26-30</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="age3" name="age" type="radio" value="31-35"
                wire:model="form.edad">
            <label class="form-check-label" for="age3">31-35</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="age4" name="age" type="radio" value="36-40"
                wire:model="form.edad">
            <label class="form-check-label" for="age4">36-40</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="age5" name="age" type="radio" value="40-45"
                wire:model="form.edad">
            <label class="form-check-label" for="age5">40-45</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="age6" name="age" type="radio" value="más de 45"
                wire:model="form.edad">
            <label class="form-check-label" for="age6">más de 45</label>
        </div>
    </div>
    <div class="form-floating mb-3">
        <p>¿Cómo Descubriste SOPyFIVE?</p>
        <div class="form-check">
            <input wire:model="form.como_descubrio_sopyfive" class="form-check-input" id="source1" name="source"
                type="radio" value="Instagram">
            <label class="form-check-label" for="source1">Instagram</label>
        </div>
        <div class="form-check">
            <input wire:model="form.como_descubrio_sopyfive" class="form-check-input" id="source2" name="source"
                type="radio" value="Facebook">
            <label class="form-check-label" for="source2">Facebook</label>
        </div>
        <div class="form-check">
            <input wire:model="form.como_descubrio_sopyfive" class="form-check-input" id="source3" name="source"
                type="radio" value="WhatsApp">
            <label class="form-check-label" for="source3">WhatsApp</label>
        </div>
        <div class="form-check">
            <input wire:model="form.como_descubrio_sopyfive" class="form-check-input" id="source4" name="source"
                type="radio" value="Recomendación de amigo o conocido">
            <label class="form-check-label" for="source4">Recomendación de amigo o
                conocido</label>
        </div>
        <div class="form-check">
            <input wire:model="form.como_descubrio_sopyfive" class="form-check-input" id="source5" name="source"
                type="radio" value="Otro">
            <label class="form-check-label" for="source5">Otro</label>
        </div>
    </div>


    <div class="form-floating mb-3">
        <p>¿Qué área de bienestar te interesa más? Puedes marcar varias.</p>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comunidades_vista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" wire:model="form.comunidades.<?php echo e($c->id); ?>"
                    wire:key="comunidad-<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>">
                <label class="form-check-label" for="comunidad-<?php echo e($c->id); ?>"><?php echo e($c->title); ?></label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </div>






    <div class="mb-3">
        <p >Si yo fuera la genio de la lámpara de
            Aladino ¿Cuáles
            serían las 3 cosas que me
            pedirías?
            Pídeme cosas posibles eh…recuerda que mi capacidad es terrenal. 😊</p>
        <textarea wire:model="form.peticiones" class="form-control" id="basic-form-textarea" rows="3"
            placeholder="Opcional"></textarea>
    </div>
    <div class="form-floating mb-3">
        <p>¿Te gustaría tener acceso a médicos funcionales, ginecólogos, endocrinólogos,
            nutricionistas,
            psicólogos,
            etc. desde la plataforma?</p>
        <div class="form-check">
            <input wire:model="form.acceso_a_especialistas" class="form-check-input" id="access1" name="access"
                type="radio" value="SÍ" checked>
            <label class="form-check-label" for="access1">SÍ</label>
        </div>
        <div class="form-check">
            <input wire:model="form.acceso_a_especialistas" class="form-check-input" id="access2" name="access"
                type="radio" value="NO">
            <label class="form-check-label" for="access2">NO</label>
        </div>
        <div class="form-check">
            <input wire:model="form.acceso_a_especialistas" class="form-check-input" id="access3" name="access"
                type="radio" value="Me resulta indiferente">
            <label class="form-check-label" for="access3">Me resulta indiferente</label>
        </div>
    </div>
    <div class="mb-3">
        <p >¿Te gustaría tener una tienda en línea adaptada a tus
            necesidades? ¿En caso de que asi sea, qué te gustaría encontrar en la
            tienda de
            SOPyFIVE?</p>
        <textarea wire:model='form.gustaria_tienda' class="form-control" id="basic-form-textarea" rows="4"
            placeholder=""></textarea>
    </div>

    <div class="form-floating mb-3">
        <p>¿Te gustaría ser parte activa de nuestra comunidad e intercambiar experiencias?</p>
        <div class="form-check">
            <input wire:model='form.quisiera_ser_parte' class="form-check-input" id="community1" name="community"
                type="radio" value="Sí, me encantaría." checked>
            <label class="form-check-label" for="community1">Sí, me encantaría.</label>
        </div>
        <div class="form-check">
            <input wire:model='form.quisiera_ser_parte' class="form-check-input" id="community2" name="community"
                type="radio" value="Tal vez en el futuro.">
            <label class="form-check-label" for="community2">Tal vez en el futuro.</label>
        </div>
        <div class="form-check">
            <input wire:model='form.quisiera_ser_parte' class="form-check-input" id="community3" name="community"
                type="radio" value="Prefiero ser observadora.">
            <label class="form-check-label" for="community3">Prefiero ser observadora.</label>
        </div>
    </div>
    <div class="form-floating mb-3">
        <p>Al participar, automáticamente estás en la lista para ganar tu premio.</p>
        <p>Te enviaremos la fecha y hora exactas del sorteo a tu Whatsapp o correo Electrónico:</p>
        <div class="mb-3">
            
            <input wire:model='form.email_phone' class="form-control" id="basic-form-name" type="email"
                placeholder="Introduce tu whatsapp o correo electrónico" />
        </div>

    </div>
    <div class="form-floating mb-3">
        <p>¡Gracias por ser una pionera en SOPyFIVE! Tu contribución es vital </p>
        <button class="btn btn-primary" type="submit">¡Enviar y Participar en el Sorteo!</button>

    </div>
</form>

<?php $__env->startPush('styles'); ?>
    <style>
        .form-label {
            font-size: 1.3em
        }

        .form-check-label {
            font-size: 1.1rem;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 2rem;
            font-size: 1.3em;
        }

        p {
            font-family: "Poppins", sans-serif;
            font-size: 1.8em;
            line-height: 30px;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 10px);
            padding: .75rem .85rem;
            font-size: 1.1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp3\htdocs\sopyfive\resources\views/livewire/component/encuesta-form.blade.php ENDPATH**/ ?>
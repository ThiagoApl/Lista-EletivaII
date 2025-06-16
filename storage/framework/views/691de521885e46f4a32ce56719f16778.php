<?php $isRegister = request()->routeIs('register'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação - Sistema de Etiquetas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(120deg, #232526 0%, #414345 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            min-height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-box {
            background: rgba(34, 40, 49, 0.92);
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
            padding: 2.5rem 2.5rem 2rem 2.5rem;
            max-width: 370px;
            width: 100%;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
            animation: fadeIn 1s cubic-bezier(.4,2,.6,1);
            box-sizing: border-box;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .auth-title {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
            text-align: center;
            letter-spacing: 1px;
        }
        .auth-desc {
            color: #bfc9d1;
            font-size: 1rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .input-group {
            margin-bottom: 1.2rem;
            width: 100%;
        }
        .input-label {
            color: #bfc9d1;
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
            display: block;
            text-align: left;
        }
        .input-field {
            width: 100%;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.8rem;
            border: 1.5px solid #393e46;
            background: rgba(57, 62, 70, 0.7);
            color: #fff;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            box-sizing: border-box;
        }
        .input-field:focus {
            border-color: #00adb5;
            box-shadow: 0 0 0 2px #00adb555;
        }
        .auth-btn {
            width: 100%;
            padding: 1rem 0;
            font-size: 1.1rem;
            border-radius: 0.8rem;
            background: linear-gradient(90deg, #00adb5 0%, #393e46 100%);
            color: #fff;
            border: none;
            font-weight: 600;
            cursor: pointer;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            box-shadow: 0 2px 8px 0 rgba(0,173,181,0.10);
            transition: background 0.3s, transform 0.2s;
        }
        .auth-btn:hover {
            background: linear-gradient(90deg, #393e46 0%, #00adb5 100%);
            color: #fff;
            transform: scale(1.03);
        }
        .toggle-link {
            color: #00adb5;
            text-decoration: underline;
            font-size: 0.95rem;
            cursor: pointer;
            display: block;
            margin-top: 1.2rem;
            text-align: center;
            transition: color 0.2s;
        }
        .toggle-link:hover {
            color: #fff;
        }
        .error {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 0.2rem;
            text-align: left;
        }
        @media (max-width: 500px) {
            .auth-box { padding: 1.2rem 1rem; }
            .auth-title { font-size: 1.1rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-box" id="authBox">
            <div class="auth-title" id="formTitle"><?php echo e($isRegister ? 'Criar Conta' : 'Login'); ?></div>
            <div class="auth-desc" id="formDesc"><?php echo e($isRegister ? 'Crie sua conta para começar a usar o sistema' : 'Acesse o sistema de emissão de etiquetas'); ?></div>
            <form method="POST" action="<?php echo e($isRegister ? route('register') : route('login')); ?>" id="authForm">
                <?php echo csrf_field(); ?>
                <div id="registerFields" style="display: <?php echo e($isRegister ? 'block' : 'none'); ?>;">
                    <div class="input-group">
                        <label for="name" class="input-label">Nome</label>
                        <input id="name" class="input-field" type="text" name="name" value="<?php echo e(old('name')); ?>" <?php echo e($isRegister ? 'required autofocus' : ''); ?> />
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('name'),'class' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name')),'class' => 'error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="input-group">
                    <label for="email" class="input-label">Email</label>
                    <input id="email" class="input-field" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus />
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                </div>
                <div class="input-group">
                    <label for="password" class="input-label">Senha</label>
                    <input id="password" class="input-field" type="password" name="password" required />
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password'),'class' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password')),'class' => 'error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                </div>
                <div id="confirmField" class="input-group" style="display: <?php echo e($isRegister ? 'block' : 'none'); ?>;">
                    <label for="password_confirmation" class="input-label">Confirmar Senha</label>
                    <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" <?php echo e($isRegister ? 'required' : ''); ?> />
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password_confirmation'),'class' => 'error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password_confirmation')),'class' => 'error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                </div>
                <button type="submit" class="auth-btn" id="submitBtn"><?php echo e($isRegister ? 'Cadastrar' : 'Entrar'); ?></button>
            </form>
            <span class="toggle-link" id="toggleAuth"><?php echo e($isRegister ? 'Já tem uma conta? Faça login' : 'Não tem uma conta? Cadastre-se'); ?></span>
        </div>
    </div>
    <script>
        const isRegister = <?php echo e($isRegister ? 'true' : 'false'); ?>;
        const toggle = document.getElementById('toggleAuth');
        const formTitle = document.getElementById('formTitle');
        const formDesc = document.getElementById('formDesc');
        const registerFields = document.getElementById('registerFields');
        const confirmField = document.getElementById('confirmField');
        const submitBtn = document.getElementById('submitBtn');
        const authForm = document.getElementById('authForm');
        let registerMode = isRegister;
        toggle.onclick = function() {
            registerMode = !registerMode;
            if(registerMode) {
                formTitle.innerText = 'Criar Conta';
                formDesc.innerText = 'Crie sua conta para começar a usar o sistema';
                registerFields.style.display = 'block';
                confirmField.style.display = 'block';
                submitBtn.innerText = 'Cadastrar';
                authForm.action = '<?php echo e(route('register')); ?>';
            } else {
                formTitle.innerText = 'Login';
                formDesc.innerText = 'Acesse o sistema de emissão de etiquetas';
                registerFields.style.display = 'none';
                confirmField.style.display = 'none';
                submitBtn.innerText = 'Entrar';
                authForm.action = '<?php echo e(route('login')); ?>';
            }
        };
    </script>
</body>
</html> <?php /**PATH C:\Users\User\Desktop\Projeto-Thiago\resources\views/auth/mario-auth.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite([
        'resources/css/app.css', 
        'resources/css/auth.css',
        'resources/css/form.css',


        'resources/js/app.js'
    ])
</head>

<body>

<div class="container-center">
    <h2 class="auth-title underline-accent">Entrar</h2>
    <h3 class="auth-subtitle">Acesse sua conta Everju</h3>

    <div class="auth-card">
        {{-- Erros --}}
        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">

            @csrf

            <!-- Email -->
            <div class="form-group">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                >
            </div>

            <!-- Password -->
            <div class="form-group">
                <label class="form-label">Senha</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required
                    autocomplete="current-password"
                >
            </div>

            <!-- Remember -->
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember">
                    Lembrar de mim
                </label>
            </div>

            <!-- Button -->
            <button type="submit" class="btn-primary-custom">
                Entrar
            </button>

        </form>

    </div>

    <div class="auth-link">
        Não tem conta?
        <a href="{{ route('register') }}">Criar conta</a>
    </div>

    <div class="auth-link">
        usar como
        <a href="{{ route('home.index') }}">visitante</a>
    </div>

</div>

</body>
</html>
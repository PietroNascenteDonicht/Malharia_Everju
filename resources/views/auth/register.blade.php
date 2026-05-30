<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    @vite([
        'resources/css/app.css', 
        'resources/css/auth.css',
        'resources/css/form.css',


        'resources/js/app.js'
    ])
</head>

<body>

<div class="container-center">
    <h2 class="auth-title underline-accent">Criar conta</h2>
    <h3 class="auth-subtitle">Começe sua jornada com a Everju</h3>

    <div class="auth-card">

        

        {{-- Erros --}}
        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}">
            @csrf

            <!-- Nome -->
            <div class="form-group">
                <label class="form-label">Nome</label>
                <input
                    type="text"
                    name="nome"
                    class="form-control"
                    value="{{ old('nome') }}"
                    required

                    placeholder="Seu nome"
                >
            </div>

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
                    placeholder="seu@gmail.com"
                >
            </div>

            <!-- Senha -->
            <div class="form-group">
                <label class="form-label">Senha</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required
                    autocomplete="new-password"
                    placeholder=""
                >
            </div>

            <!-- Confirmar senha -->
            <div class="form-group">
                <label class="form-label">Confirmar senha</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required
                >
            </div>

            <!-- Botão -->
            <button type="submit" class="btn-primary-custom">
                Criar conta
            </button>

        </form>
    </div>

    <div class="auth-link">
            Já tem conta?
            <a href="{{ route('login') }}">Entrar</a>
    </div>

</div>

</body>
</html>
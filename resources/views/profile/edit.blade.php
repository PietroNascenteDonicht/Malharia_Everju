@extends('layouts.app')

@section('content')

<div class="profile-container">

    <div class="profile-card">

        <div class="profile-header">
            <img 
                src="https://via.placeholder.com/120" 
                class="profile-avatar"
            >

            <h2>{{ Auth::user()->name }}</h2>
            <p>{{ Auth::user()->email }}</p>
        </div>

        <div class="profile-actions">

            <a href="/" class="btn">Voltar para loja</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn logout">
                    Sair da conta
                </button>
            </form>

        </div>

    </div>

</div>

@endsection
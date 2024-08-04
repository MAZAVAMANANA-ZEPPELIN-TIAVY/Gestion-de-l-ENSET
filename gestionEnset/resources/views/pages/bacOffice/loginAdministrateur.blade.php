@extends('base')

@section('title')
    Login | Administrateur
@endsection

@section('content')

    <form action="/administrateur" method="POST">
        @method('post')
        @csrf
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" value={{ old('email') }}>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" value={{ old('password') }}>
        </div>

        @if($errors)
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        <button type="submit" name="buttonValideLoginAdmin">Connexion</button>
    </form>
@endsection

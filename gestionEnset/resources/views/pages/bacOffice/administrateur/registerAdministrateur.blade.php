@extends('base')

@section('title')
    Administrateur | Registre
@endsection

@section('content')
    <form action="listeAdministrateur" method="POST">
        @method('post')
        @csrf
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" value={{ old('lastname') }}>
        </div>
        <div>
            <label for="firstname">Prénom(s) :</label>
            <input type="text" name="firstname" value={{ old('firstname') }}>
        </div>
        <div>
            <label for="genre">Genre :</label>
            @forelse ($gender as $gend)
                <input type="radio" name="gender" value={{ $gend->id }} checked> {{ $gend->name }}<br>
            @empty     
            @endforelse
        </div>
        <div>
            <label for="contact">Contacte :</label>
            <input type="number" name="contact" value={{ old('contact') }}>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" value={{ old('email') }}>
        </div>
        <div>
            <label for="dateOfBirthDay">Date de naissance :</label>
            <input type="date" name="dateOfBirthDay" value={{ old('dateOfBirthDay') }}>
        </div>
        <div>
            <label for="nationality">Nationalité :</label>
            @forelse ($nationality as $national)
                <input type="radio" name="nationality" value={{ $national->id }} checked> {{ $national->name }}<br>
            @empty     
            @endforelse
        </div>
        <div>
            <label for="address">Adresse :</label>
            <input type="text" name="address" value={{ old('address') }}>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" value={{ old('password') }}>
        </div>
        <div>
            <label for="confirmPassword">Confirmer le mot de passe :</label>
            <input type="password" name="confirmPassword" value={{ old('confirmPassword') }}>
        </div>

        @if($errors)
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        <button type="submit" name="buttonValideRegisterAdmin">Ajouter</button>
    </form>
@endsection

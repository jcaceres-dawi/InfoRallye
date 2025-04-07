@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="container">
    <h1 class="mb-4">Contacto</h1>

    <p class="mb-4 text-muted">
        Si has encontrado algún error o información incorrecta en la página, no dudes en rellenar el siguiente formulario para que podamos corregirlo lo antes posible.
    </p>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Asunto del mensaje" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
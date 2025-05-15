@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Rally</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.rallies.update', $rally) }}">
        @method('PUT')
        @include('admin.rallies.form', ['rally' => $rally])
    </form>
</div>
@endsection
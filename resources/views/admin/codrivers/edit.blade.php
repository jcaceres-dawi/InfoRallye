@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Copiloto</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.codrivers.update', $codriver) }}">
        @method('PUT')
        @include('admin.codrivers.form', ['codriver' => $codriver])
    </form>
</div>
@endsection
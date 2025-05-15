@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Piloto</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('admin.drivers.update', $driver) }}">
        @method('PUT')
        @include('admin.drivers.form', ['driver' => $driver])
    </form>
</div>
@endsection
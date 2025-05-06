@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Piloto</h2>
    <form method="POST" action="{{ route('admin.drivers.update', $driver) }}">
        @method('PUT')
        @include('admin.drivers.form', ['driver' => $driver])
    </form>
</div>
@endsection

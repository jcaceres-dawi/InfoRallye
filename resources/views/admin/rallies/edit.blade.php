@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Rally</h2>
    <form method="POST" action="{{ route('admin.rallies.update', $rally) }}">
        @method('PUT')
        @include('admin.rallies.form', ['rally' => $rally])
    </form>
</div>
@endsection

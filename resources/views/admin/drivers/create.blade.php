@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Piloto</h2>
    <form method="POST" action="{{ route('admin.drivers.store') }}">
        @include('admin.drivers.form')
    </form>
</div>
@endsection
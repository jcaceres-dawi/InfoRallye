@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Rally</h2>
    <form method="POST" action="{{ route('admin.rallies.store') }}">
        @include('admin.rallies.form')
    </form>
</div>
@endsection

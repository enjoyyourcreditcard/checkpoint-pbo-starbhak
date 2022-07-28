@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        Selamat datang {{ auth()->user()->name }} di aplikasi Check Point!
    </div>
</div>
@endsection
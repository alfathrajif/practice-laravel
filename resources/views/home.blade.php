@extends('layouts.app')
@section('title', 'Home')
@section('content')
@auth
<h1>Selamat Datang, {{ Auth::user()->name }} anda adalah {{ Auth::user()->role->name }}</h1>
@else
<h1>Selamat Datang</h1>
@endauth

<x-alert message="halaman Home" type="denger" />
<x-alert message="halaman Home" type="primary" />


@endsection

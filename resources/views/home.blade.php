@extends('layouts.mainlayout')


@section('title', 'Home')

@section('content')
    <h1>ini halaman home</h1> 
    <h2>selamat datang, {{ Auth::user()->name }} anda adalah {{ Auth::user()->role->name }}</h2>

@endsection

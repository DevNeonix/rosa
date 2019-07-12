@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-rose navbar-expand-md navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">{{env('app_name')}}</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Poemas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Articulos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-sm-12 col-md-6 banner-left d-flex justify-content-center align-items-center text-white">
                <div class="w-100 d-block mx-auto text-center bg-dark-rose p-4 rounded">
                    <h1 class="h1 ff-sacramento w-100">Poemas</h1>
                    <a href="{{route('poemas.index')}}" class="btn btn-outline-light">Entrar</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 banner-right d-flex justify-content-center align-items-center text-white">
                <div class="w-100 d-block mx-auto text-center bg-dark-rose p-4 rounded">
                    <h1 class="h1 ff-sacramento w-100">Artículos</h1>
                    <a  href="{{route('articulos.index')}}" class="btn btn-outline-light">Entrar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
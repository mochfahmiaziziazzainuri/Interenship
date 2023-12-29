@extends('primary.home')
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">INTERNSHIP</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    @foreach ($data as $d)
                        <li class="item">
                            <a href="{{ route($d->url) }}" class="nav-item nav-link " >{{ $d->menu }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </nav> 
    </div>
</div>
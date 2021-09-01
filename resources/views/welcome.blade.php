@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <main>
        <!-- Banner Area -->
        <section class="banner-area" style="background: url({{asset('assets/images/banner/banner-1.png')}}) no-repeat; background-size: cover;">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="banner-left">
                            <div class="slider-content rounded">
                                <h1>Compra tu tiquete</h1>
                                <div class="widget" data-widgetid="TERMINALDETRANSPORTESDEFLORENCIA" style="
                                    position: relative;
                                    margin:auto;
                                "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area -->
    </main>
@endsection

@section('myStyles')
    <style>
        .slider-content{
            margin: auto;
            background: #fff;
            padding: 73px 56px 30px 50px;
            z-index: 9;
            display: inline-block;
        }
    </style>
@endsection


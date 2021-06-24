@extends('layouts.app')

@section('navegacion')
@include('ui.adminnav')

@include('ui.categoriasnav')

@endsection



@section('content')

<div class="flex flex-col lg:flex-row shadow bg-white">

    <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
        <p class="text-2xl text-gray-700">
            dev<span class="font-bold">Jovs:</span>
        </p>

        <h1 class="mt-2 sm:mt-4 text-4xl font-bold text-gray-700 leading-tight">
            Encuentra un trabajo remoto o en tu pais
            <span class="text-green-500 block">Para Desarrolladores / Diseñadores Web</span>
        </h1>

        @include('ui.buscar')


    </div>

    <div class="block lg:w-1/2">
        <img class="inset-0 h-full w-full object-cover object-center" src="{{asset('img/4.jpg')}}" alt="devjobs">

    </div>

</div>

<div class="my-10 bg-gray-100 p-10 shadow">
 <h1 class="text-3xl text-gray-700 m-0">
     Nuevas
     <span class="font-bold">Vacantes</span>
 </h1>
 @include('ui.listadovacante')
</div>

@endsection

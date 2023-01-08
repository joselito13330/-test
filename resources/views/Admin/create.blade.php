@extends('layouts.base', ['title'=>'DocumentCreate'])
@section('content')
@include('Partials.headerAdmin')
  <section class="flex-grow flex-col bg-white flex justify-start items-center">
    <div class="my-2 font-bold italic underline">
    Enregistrement d'un ouvrage
    </div>
    <div class="block p-6 rounded-lg shadow-lg bg-gray-200
    w-11/12 sm:w10/12 md:w-8/12 lg:w-6/12">
      <form action="{{route('Admin.store')}}" method="POST">
      @Csrf
        @include('Admin._form', ['submitButtomText'=>'Enregistrer la création'])
      </form>
    </div>
  </section>
@include('Partials.footerAdmin')
@stop

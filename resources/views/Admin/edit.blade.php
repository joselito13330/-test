@extends('layouts.base', ['title'=>'DocumentEdit'])
@section('content')
@include('Partials.headerAdmin')
  <section class="flex-grow flex-col bg-white flex justify-start items-center">
    <div class="my-2 font-bold italic underline">
    Modification ou suppression d'un ouvrage
    </div>
    <div class="block p-6 rounded-lg shadow-lg bg-gray-200
    w-11/12 sm:w10/12 md:w-8/12 lg:w-6/12">
      <form action="{{route('Admin.update', $documents)}}" method="POST">
        {{ method_field('PUT') }}
      @Csrf
         @include('Admin._form', ['submitButtomText'=>'Enregistrer la modification'])
      </form>
    </div>
  </section>
@include('Partials.footerAdmin')
@stop

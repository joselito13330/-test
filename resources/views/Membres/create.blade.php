@extends('layouts.base', ['title'=>'UserCreate'])
@section('content')
@include('Partials.headerMembres')
  <section class="flex-grow flex-col bg-white flex justify-start items-center">
    <div class="my-2 font-bold italic underline">
    Enregistrement d'un nouvel abonné
    </div>
    <div class="block p-6 rounded-lg shadow-lg bg-gray-200
    w-11/12 sm:w10/12 md:w-8/12 lg:w-6/12">
      <form action="{{route('Membres.store')}}" method="POST">
      @Csrf
        @include('Membres._form', ['submitButtomText'=>'Enregistrer la création'])
      </form>
    </div>
  </section>
@include('Partials.footerAdmin')
@stop

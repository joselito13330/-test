@extends('layouts.base', ['title'=>'documentsIndex'])
@section('content')
@include('Partials.header') 
    <section class="flex-grow bg-white flex justify-center items-start pt-4">     
         <table class="w-11/12 border-collapse block md:table text-xs md:text-md">
                <thead class="block md:table-header-group">
                    <tr class="border border-red-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell flex-grow text-center">Titre</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-3/12 text-center">Auteur</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-2/12 text-center">Catégorie</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-2/12 text-center">Langue</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-1/12 text-center">Lien</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                   @foreach($documents as $value) 
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Titre :</span>{{$value->titre}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Auteur :</span>{{$value->auteur}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Catégorie :</span>{{$value->category}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Langue :</span>{{$value->langue}}</td>
                        <td class="p-2 md:border md:border-grey-500  block md:table-cell md:text-center">
                            <span class="inline-block w-1/3 md:hidden font-bold">Lien :</span>
                            <button class=" inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 border border-blue-500 rounded"><a href="{{$value->lien}}">Ouvrir</a></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>   
            </table>
    </section>
@include('Partials.footer') 
@stop
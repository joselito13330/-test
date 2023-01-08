@extends('layouts.base', ['title'=>'DocumentModif'])
@section('content')
@include('Partials.headerAdmin')
 <section class="flex-grow bg-white flex justify-center items-start pt-4">     
         <table class="w-11/12 sm:w-10/12 md:w-8/12 lg:w-6/12 border-collapse block md:table text-xs md:text-md">
                <thead class="block md:table-header-group">
                    <tr class="border border-red-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell flex-grow text-center">Titre</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-4/12 sm:w-5/12 text-center">Modifier/Supprimer</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                   @foreach($documents as $value) 
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        	<span class="inline-block w-auto md:hidden font-black italic">Titre :</span>
                        	<span class="ml-2 font-bold italic">{{$value->titre}}</span>
                        </td>
                        <td class="p-2 md:border md:border-grey-500  block md:table-cell md:text-center">
                            <span class="inline-block w-1/4 md:hidden font-bold">Modifier :</span>
                            <button class=" inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 border border-blue-500 rounded mr-2">
                            	<a href="{{route('Admin.edit', $value)}}">
                            		Modifier
                            	</a>
                            </button>
                            <span class="inline-block w-1/4 md:hidden font-bold">Supprimer :</span>
                            <button class=" inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 border border-blue-500 rounded">
                            	<a href="{{route('Admin.destroy', $value)}}" data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer cette inscription ?">Suppression</a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>   
            </table>
    </section>
@include('Partials.footerAdmin')
@stop
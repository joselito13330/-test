@extends('layouts.base', ['title'=>'membreIndex'])
@section('content')
@include('Partials.headerMembres')
<section class="flex-grow bg-white flex justify-center items-start pt-4">     
         <table class="w-10/12 md:w-1/2 border-collapse block md:table text-xs md:text-md">
                <thead class="block md:table-header-group">
                    <tr class="border border-red-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell flex-grow text-center">Pénom Nom</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-2/12 text-center">E_mail</th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell w-2/12 text-center">Rôle</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                   @foreach($user as $value) 
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Pénom Nom :</span>{{$value->name}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left md:text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">E_mail :</span>{{$value->email}}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left md:text-center block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Rôle :</span>{{$value->role}}</td>
                    </tr>
                    @endforeach
                </tbody>   
            </table>
    </section>
@include('Partials.footerAdmin')
@stop
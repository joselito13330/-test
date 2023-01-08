@extends('layouts.base', ['title'=>'assoIndex'])
@section('content')
@include('Partials.header')
<hr class="w-screen h-0.5 border-solid border-1 border-red-500">
<nav>
    <div class="h-auto w-48 sm:hidden mt-2">
        <ul class="w-full ml-2 font-medium italic toggle-menu hidden">
             @if($pageTitre == 'histoireIndex')
             <li class="mt-0 mb-4 px-2 py-px hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                    Accueil membres
                </a>
            </li>
            @else
            <li class="mt-0 mb-4 px-2 py-px hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('histoire.index')}}">
                    Histoire familiale
                </a>
            </li>
            @endif
             @if($pageTitre == 'documentsIndex')
             <li class="mt-0 mb-4 px-2 py-px hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                    Accueil membres
                </a>
            </li>
            @else
            <li class="mt-0 mb-4 px-2 py-px hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('document.index')}}">
                    Documentation
                </a>
            </li>
            @endif
             @if($pageTitre == 'albumIndex')
             <li class="mt-0 mb-4 px-2 py-px hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                    Accueil membres
                </a>
            </li>
            @else
            <li class="mt-0 mb-4 px-2 py-px hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('album.index')}}">
                    Généalogie photos
                </a>
            </li>
            @endif
             @if($pageTitre == 'assoIndex')
             <li class="mt-0 mb-4 px-2 py-px hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                    Accueil membres
                </a>
            </li>
            @else
            <li class="mt-0 mb-4 px-2 py-px hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
               <a href="{{route('association.index')}}">
                    Association Toraixa
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>
<div class="w-screen h-auto flex flex-col items-center py-2">
    <div class="flex justify-center p-4">
        <span class="text-md md:text-2xl underline italic font-bold">Association Toraixa</span>
    </div>
    <div class="flex w-10/12 flex-col items-around my-3 mx-auto w-10/12 h-auto bg-gray-100 rounded-sm ring-2 ring-gray-500">
        <div class="flex justify-around flex-wrap">
            <div class="w-auto p-1 text-xs underline"><a href="#creation">Création</a></div>
            <div class="w-auto p-1 text-xs underline"><a href="#status">Objet et statuts</a></div>
            <div class="w-auto px-2 py-1 text-xs underline"><a href="{{asset('Pdf/Coordonnees_adherents.pdf')}}">Coordonnées_adhérents</a></div>
            <div class="w-auto px-2 py-1 text-xs underline"><a href="#gazettes">Gazettes</a></div>
            <div class="w-auto px-2 py-1 text-xs underline"><a href="#ag">C/R des AG</a></div>
        </div>
    </div>
    <section class="w-11/12 h-auto mt-4 p-2" id="creation">
            <span class=" italic text-sm md:text-lg underline italic font-black">Création</span> 
        <div class="rounded-lg ring-2 ring-gray-500 my-6 p-2 bg-gray-100">
            <div class="italic text-xs md:text-sm lg:text-base w-full h-auto">
                <p class="text-justify">L'idée de créer une association a germé à l'occasion d'un repas familial organisé à Arnères par M. Robert Villalonga pour le jour de l'an 199?.<br/>
                L'association Toraixa a été créée par décret n°199 publié au Journal Officiel de la République Française du 12 février 2000 :</p>
            </div>
            <div class="flex justify-center items-center h-52 w-full my-4">
               <img src="{{asset('Img/decret.jpg')}}" class="max-h-full max-w-full">
            </div>
            <div class="italic text-xs md:text-sm lg:text-base w-full h-auto">
                <p class="text-justify">>Le 27 août 2000 la première assemblée Générale s'est tenue en marge du mariage de Carole Villalonga et Henri Siro à Lembeye (64350)<br/>
                <div class="flex justify-center items-center h-60 md:h-72 lg:h-96 w-full mt-2 mb-6">
                    <img src="{{asset('Img/Reunion.jpg')}}" alt="Première AG" class="max-h-full max-w-full">
                </div>
                Etaient présents :<br/>
                M.Villalonga Henri, Mme Villalonga Catherine, M. Villalonga Maurice, M. Villalonga Robert, Mme Villalonga Suzanne, M. Villalonga Jean-Pierre, Mme Villalonga Hélène, M. Villalonga Alain, M. Villalonga Gabriel, Mme Villalonga Danielle, Mme Ledrapier Michelle, Mme Daviot Chantal, M. Rivera Jean-Marc, Mme Rivera Martine, M. Villalonga François Xavier.
            </p>
            </div>   
        </div>
    </section>
     <hr class="bg-blue-500 h-1 my-4 w-10/12 mx-auto">
     <section class="w-11/12 h-auto px-2" id="status">
        <div class="mb-6">
            <span class="text-sm md:text-lg underline italic font-black">Objet et status de l'association</span> 
        </div>
        <div class="italic text-xs md:text-sm lg:text-base w-full h-auto bg-gray-100 p-5 rounded-lg ring-2 ring-gray-500" id="statuts"> 
            <h1 class="text-lg text-center font-black underline">STATUTS<br/></h1>
            <p>
                <br/><h3 class="underline font-bold text-md">Article premier<h3>
                <span class="ml-6">Il est fondé par les adhérents aux présents statuts une association régie par la loi du 1er juillet 1901 et le décret du 16 août 1901, ayant pour titre :</span><br/>
                <h1 class=" text-lg text-center font-black underline">Association TORAIXA</h1><br/>
                <a href="{{asset('Pdf/statuts.pdf')}}">
                    <h3 class="text-blue-600 font-bold text-md">
                    . . . Voir plus.
                    </h3>
                </a>
            </p>
            
        </div>
        <hr class="bg-blue-500 h-1 my-4 w-10/12 mx-auto">
    </section>
    <section class="w-11/12 h-auto px-2" id="gazettes">
        <div class="mb-6">
            <span class="text-sm md:text-lg underline italic font-black">Accès aux Gazettes éditées</span> 
        </div>
       <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 place-items-center 
            md:text-sm font-medium mx-auto
            w-full h-auto
            bg-gray-100 p-5 rounded-lg ring-2 ring-gray-500">
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2001.pdf')}}" ><img src="{{asset('Gazettes/gazette2001.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°1</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2002.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2002.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°2</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2003.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2003.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°3</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2004.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2004.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°4</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2005.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2005.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°5</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2006.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2006.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°6</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2007.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2007.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°7</h2>
                </div>
            </div>
             <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2008.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2008.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°8</h2>
                </div>
            </div>
             <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2009.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2009.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°9</h2>
                </div>
            </div>
             <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2010.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2010.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°10</h2>
                </div>
            </div>
             <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2011.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2011.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°11</h2>
                </div>
            </div>
             <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2012.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2012.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°12</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2013.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2013.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°13</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2014.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2014.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°14</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2015.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2015.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°15</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2016.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2016.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°16</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2017.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2017.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°17</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2018.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2018.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°18</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2019.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2019.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°19</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2020.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2020.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°20</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2021.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2021.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°21</h2>
                </div>
            </div>
            <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2022.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2022.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°22</h2>
                </div>
            </div>
           <div class="h-40 w-36 bg-white">
                <div class="h-36 w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Gazettes/gazette2023.pdf')}}" >
                        <img src="{{asset('Gazettes/gazette2023.jpg')}}" class="max-h-full max-w-1/2">
                    </a>
                </div>
                <div class="h-4 w-full flex justify-center items-center static">
                    <h2 class="text-xs md:text-sm font-medium">Gazette N°23</h2>
                </div>
            </div>
        </div>
    </section>
     <hr class="bg-blue-500 h-1 my-4 w-10/12 mx-auto">
     <section class="w-11/12 h-auto px-2" id="ag">
        <div class="mb-6">
            <span class="text-sm md:text-lg underline italic font-black">Accès aux C/R d'Assemblée Générale</span> 
        </div>
       <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 place-items-center 
            md:text-sm font-medium mx-auto
            w-full h-auto
            bg-gray-100 p-5 rounded-lg ring-2 ring-gray-500 mb-10">
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2000.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2000</h2></a>
                </div>
            </div> 
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2001.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white hover:bg-blue-900"><h2 class="text-xs md:text-sm font-medium">AG 2001</h2></a>
                </div>
            </div> 
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2002.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2002</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2003.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2003</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2004.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2004</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2005.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2005</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2006.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2006</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2007.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2007</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2008.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200"><h2 class="text-xs md:text-sm font-medium">AG 2008</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2009.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2009</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2010.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2010</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2011.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2011</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2012.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2012</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2013.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2013</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2014.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2014</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2015.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200"><h2 class="text-xs md:text-sm font-medium">AG 2015</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2016.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2016</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2017.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2017</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2018.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2018</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2019.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2019</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2020.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2020</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2021.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200 hover:bg-blue-900 hover:text-white"><h2 class="text-xs md:text-sm font-medium">AG 2021</h2></a>
                </div>
            </div>
            <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="{{asset('Ag/CR AG2022.pdf')}}" class="h-full w-full flex justify-center items-center static bg-blue-200"><h2 class="text-xs md:text-sm font-medium">AG 2022</h2></a>
                </div>
            </div>
             <div class="h-6 w-36 md:w-44">
                <div class="h-full w-full flex justify-center items-stretch static ">
                    <a href="" class="h-full w-full flex justify-center items-center static bg-blue-200"><h2 class="text-xs md:text-sm font-medium"></h2></a>
                </div>
            </div>
        </div>
    </section>
</div>
@include('Partials.footer') 
@stop
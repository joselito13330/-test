@extends('layouts.base', ['title'=>'photosIndex'])
@section('content')
@include('Partials.header') 
    <div class="relative h-full">
        <div class="italic font-bold h-auto py-2">
            <div class="flex justify-center text-lg underline">
                <p>Diaporama familial</p>
            </div>
            <div class="flex w-10/12 flex-col items-around my-3 mx-auto w-10/12 h-auto bg-gray-100 rounded-sm ring-2 ring-gray-500">
                <div class="flex justify-around flex-wrap">
                    <div class="w-auto p-1 text-xs underline"><a href="#8G">Huitième Génération</a></div>
                    <div class="w-auto px-2 py-1 text-xs underline"><a href="#9G">Neuvième Génération</a></div>
                    <div class="w-auto px-2 py-1 text-xs underline"><a href="#10G">Dixième Génération</a></div>
                    <div class="w-auto px-2 py-1 text-xs underline"><a href="#11G">Onzième Génération</a></div>
                </div>
                <div class="italic text-xs text-center px-2 py-1">
                    (La première génération est celle de Jaume Seraphi Villalonga de Toraixa)
                </div>
            </div>

             <!-- Sixième et septième génération -->
            <div id="8G" class="pl-10 text-md italic underline font-bold h-auto pt-2 pb-4">
                <a href="{{secure_asset('Pdf/SeptiemeGeneration.pdf')}}"><p class="hover:text-blue-600 underline">Septième génération</p></a>
            </div>
            <!-- Huitième génération -->
            <div id="8G" class="pl-10 text-md italic underline font-bold h-auto pt-2 pb-4">
                <a href="{{secure_asset('Pdf/huitiemegeneration.pdf')}}"><p class="hover:text-blue-600 underline">Huitième génération</p></a>
            </div>
            <section class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6 place-items-center 
            md:text-sm font-medium mx-auto
            w-11/12 h-auto">
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Escriva-Bertomeu Antoine.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/Escriva-Bertomeu Antoine.JPG')}}" class="max-h-full max-w-1/2 "></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Escriva-Bertomeu Antoine</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Escriva-Bertomeu Antoine02.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/Escriva-Bertomeu Antoine02.JPG')}}" class="max-h-full max-w-1/2 "></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Escriva-Bertomeu Antoine</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Carmela_Sapena.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Carmela_Sapena.jpg')}}" class="max-h-full max-w-1/2 "></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Carmela Sapena-Fornes</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Cochonailles_Bouzaréa.bmp')}}" class="flex items-center"><img src="{{secure_asset('diapo/Cochonailles_Bouzaréa.bmp')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center">
                        <h2 class="text-xs md:text-sm font-medium">Cochonailles à la Bouzaréah</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Michel_Villalonga.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Michel_Villalonga.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Famille de Michel Villalonga-Villalonga</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Hernandez_François.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Hernandez_François.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">François Hernandez-Pons</h2>
                    </div>
                </div>
            </section>

             <!-- Neuvième génération -->
            <div id="9G" class="pl-10 text-md italic underline font-bold h-auto pt-2 pb-4">
                <a href="{{secure_asset('Pdf/neuviemegeneration.pdf')}}"><p class="hover:text-blue-600 underline">Neuvième génération</p></a>
            </div>
            <section class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6 place-items-center 
            md:text-sm font-medium mx-auto w-11/12 h-auto mb-2">
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Josephine_Escriva01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Josephine_Escriva01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Joséphine Escriva-Llopis</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Josephine_Escriva02.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Josephine_Escriva02.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Joséphine Escriva-Llopis</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Josephine_Escriva03.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Josephine_Escriva03.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">J. Escriva-Llopis à Grandvillars & tantes Martin, Maurice, Thérèse, enfants </h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Courbet_Marine_Algérie_1951.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Courbet_Marine_Algérie_1951.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Réunion familiale à Courbet (1951) Joséphine, Suzanne, Gabriel ...</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Marguerite_Villalonga01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Marguerite_Villalonga01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Marguerite Villalonga-Sapena</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Marie-Rose Villalonga-Sapena.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/Marie-Rose Villalonga-Sapena.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Marie Rose Villalonga-Sapena</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Hernandez_Françoise.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Hernandez_Françoise.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Françoise Hernandez-Jover</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Gracia_Martial.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Gracia_Martial.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Martial Garcia-Sbert</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Martial_Gracia.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Martial_Gracia.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Martial Garcia-Sbert à gauche</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Pierre_Villalonga.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Pierre_Villalonga.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Pierre Antoine Villalonga-Alzina</h2>
                    </div>
                </div>
            </section>

             <!-- Dixième génération -->
            <div id="10G" class="pl-10 text-md italic underline font-bold h-auto pt-2 pb-4">
                <a href="{{secure_asset('Pdf/dixiemegeneration.pdf')}}"><p class="hover:text-blue-600 underline">Dixième génération</p></a>
            </div>
            <section class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6 place-items-center 
            md:text-sm font-medium mx-auto
            w-11/12 h-auto">
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Freres&soeur.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/Freres&soeur.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Georgette,René,Henri,Robert Villalonga-Escriva</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Georgette_François-Sintes.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Georgette_François-Sintes.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">François et Georgette Sintès</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/FrançoisGeorgetteSintes.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/FrançoisGeorgetteSintes.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">François et Georgette Sintès</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/François_Sintes.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/François_Sintes.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">François Sintès-Ruitor Café le Beau-gite</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Georgette_Villalonga01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Georgette_Villalonga01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Georgette Sintès Café le Beau-gite</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Georgette_Villalonga02.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Georgette_Villalonga02.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Georgette Sintès en cuisine</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/ReneColetteMariage.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/ReneColetteMariage.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">René Villalonga-Escriva - Colette Calatayut</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/ReneVillalonga-Escriva02.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/ReneVillalonga-Escriva02.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> René Villalonga-Escriva</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Rene_Villalonga01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Rene_Villalonga01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> René Villalonga-Escriva</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/ColetteCalatayut.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/ColetteCalatayut.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Colette Jeannette Calatayut-Bourdeau</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/HenriCatherineVillalonga.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/HenriCatherineVillalonga.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Mariage Henri Villalonga - Catherine Gracia</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/CatherineGarcia.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/CatherineGarcia.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium"> Catherine Garcia-Herenandez</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/lunedemiel.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/lunedemiel.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Lune de miel à Sidi Ferruch</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/HenriCatherine.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/HenriCatherine.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> Henri, Catherine & leur premier héritier</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/zerekore.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/zerekore.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Catherine, Enfants, lac de N'zérékoré (Guinée)</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/zerekore2.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/zerekore2.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Catherine Villalonga et enfants</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Henri Catherine.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Henri Catherine.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">HenriCatherine & petits-enfants</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Henri_Villalonga.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Henri_Villalonga.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> Henri Villalonga-Escriva</h2>
                    </div>
                </div>
                 <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Album01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Album01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> Album 01 Henri Villalonga-Escriva</h2>
                    </div>
                </div>
                 <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Album02.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Album02.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">  Album 02 Henri Villalonga-Escriva</h2>
                    </div>
                </div>
                
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/MauriceTherese.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/MauriceTherese.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">Maurice Villalonga - Thérèse Martin</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/MauriceVillalonga.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/MauriceVillalonga.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">Maurice Villalonga-Escriva</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/MauriceTherese02.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/MauriceTherese02.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">Maurice Villalonga - Thérèse Martin02</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Catherine_&_ Lucienne_Gracia.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Catherine_&_ Lucienne_Gracia.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium"> Catherine et Lucienne Garcia-Hernandez</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Mechoui.JPG')}}" class="flex items-center"><img src="{{secure_asset('diapo/Mechoui.JPG')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">Méchoui au Bordj Polignac</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Denise_Gracia.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Denise_Gracia.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium">Denise Garcia-Hernandez</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Mariage_de_Robert_Villalonga_Suzanne_Cortes_1952.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Mariage_de_Robert_Villalonga_Suzanne_Cortes_1952.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium">Robert Villalonga-Escriva et Suzanne Cortès (1952)</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Robert_Villalonga_Suzanne_Cortes.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Robert_Villalonga_Suzanne_Cortes.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"> Robert Villalonga-Escriva et Suzanne (Pique-nique à Bourg d'Oisan 1958)</h2>
                    </div>
                </div>
            </section>

             <!-- Onzième génération -->
            <div id="11G" class="pl-10 text-md italic underline font-bold h-auto pt-2 pb-4">
                <a href="#"><p class="hover:text-blue-600 underline">Onzième génération</p></a>
            </div>
            <section class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-2 gap-y-6 place-items-center 
            md:text-sm font-medium mx-auto
            w-11/12 h-auto mb-6">
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="{{secure_asset('diapo/Jean_Pierre_Villalonga01.jpg')}}" class="flex items-center"><img src="{{secure_asset('diapo/Jean_Pierre_Villalonga01.jpg')}}" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2 mt-2">
                        <h2 class="text-xs md:text-sm font-medium text-center">Jean-Pierre Villalonga-Gracia à Ouagadougou</h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="" class=""><img src="" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"></h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="" class=""><img src="" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"></h2>
                    </div>
                </div>
                <div class="h-56 w-48">
                    <div class="h-48 w-full flex justify-center items-stretch static">
                        <a href="" class=""><img src="" class="max-h-full max-w-1/2"></a>
                    </div>
                    <div class="h-8 w-full flex justify-center items-center static my-2">
                        <h2 class="text-xs md:text-sm font-medium"></h2>
                    </div>
                </div>
            </section>
        </div>
        @include('Partials.footer') 
    </div>
@stop

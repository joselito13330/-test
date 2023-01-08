<header class="h-20 w-full flex justify-between items-center pb-px accueil-bg-magic ">
    <div class="w-6/12 md:w-4/12  xl:w-3/12 h-full p-px
    flex justify-between items-center">
        <div class=" container w-1/3 h-full flex justify-center items-center">
            <img
            src="{{asset('Img/blason.jpg')}}"
            alt="Blason"
            class="object-contain h-full w-full mt-1 md:mt-6 ">
        </div>
        <div class="w-2/3 h-full
            flex justify-center items-center ml-4
            italic tracking-tighter font-bold text-md lg:text-lg xl:text-xl ">
            Généalogie Villalonga
        </div>
    </div>
    <div class="w-6/12 md:w-8/12 xl:w-9/12 flex justify-end items-center">
        <div class="hidden md:w-full md:flex items-center">
            <ul class="w-full font-normal italic sm:flex sm:justify-around sm:items-center tracking-tighter
            text-xs
            sm:font-normal
            md:text-sm
            md:font-normal
            lg:text-md
            md:font-medium
            tracking-tight">
             @if($pageTitre == 'QuoiDeNeuf')
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                        Accueil membres
                    </a>
                </li>
            @else
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('QdN.index')}}">
                        QuoiDeNeuf
                    </a>
                </li>
            @endif 
            @if($pageTitre == 'histoireIndex')
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                        Accueil membres
                    </a>
                </li>
            @else
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('histoire.index')}}">
                        Histoire <span class="sm:hidden lg:inline-flex">familiale</span>
                    </a>
                </li>
            @endif 
            @if($pageTitre == 'documentsIndex')
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-blue-600 ring-1 ring-blue ring-opacity-20 rounded-md">
                    <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                        Accueil membres
                    </a>
                </li>
            @else
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('document.index')}}">
                        Documentation
                    </a>
                </li>
            @endif     
            @if($pageTitre == 'albumIndex')
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                        Accueil membres
                    </a>
                </li>
            @else
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('album.index')}}">
                        <span class="sm:hidden lg:inline-flex">Généalogie</span> photos
                    </a>
                </li>
            @endif      
            @if($pageTitre == 'assoIndex')
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                        Accueil membres
                    </a>
                </li>
            @else
                <li class="sm:w-24 md:w-40 m-2 text-center hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                    <a href="{{route('association.index')}}">
                        Association <span class="sm:hidden lg:inline-flex"></span>
                    </a>
                </li>
            @endif      
            </ul>
        </div>
        <div class="w-full md:hidden text-right mr-10">
            <button class="icone-toggle bg-white rounded-md
            inline-flex justify-center items-center
            ring-1 ring-black ring-opacity-20 p-2">
                <img
                src="{{asset('Img/menu.svg')}}"
                alt="Hamburger"
                class="h-6 w-6">
            </button>
        </div>
    </div>
</header>
    @include('Partials.locution')
<hr class="w-screen h-0.5 border-solid border-1 border-red-500">
<nav>
    <div class="h-auto w-48 md:hidden mt-2">
        <ul class="w-full ml-2 font-medium italic toggle-menu hidden">
             @if($pageTitre == 'QuoiDeNeuf')
             <li class="mt-0 mb-4 px-2 py-px hover:bg-blue-600 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('dashboard')}}" class="text-blue-600 hover:text-white">
                    Accueil membres
                </a>
            </li>
            @else
            <li class="mt-0 mb-4 px-2 py-px hover:bg-gray-300 ring-1 ring-black ring-opacity-20 rounded-md">
                <a href="{{route('QdN.index')}}">
                    QuoiDeNeuf
                </a>
            </li>
            @endif
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
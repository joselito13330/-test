<footer class="h-8 w-full bg-black flex justify-between items-center
    text-white italic text-xs lg:text-md ">
    <div class="w-1/2 h-full
    flex justify-between items-center">
        <span class="text-green-500 ml-10">{{ Auth::user()->name }}</span>

        <span class="hidden sm:block"> Copyright JPV-2022-V2</span>
    </div>
    <div class="w-1/2 h-full
    flex justify-around items-center">
        <span class="bg-white rounded-md text-black px-2">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Déconnexion
                </a>
        </form>
        </span>
    </div>
</footer>
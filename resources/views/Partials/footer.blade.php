<footer class="h-12 w-full text-white italic text-xs lg:text-md bg-black
flex justify-between items-center mb-1">
   <div class="h-full w-2/6 sm:1/4 pt-2 flex justify-center">
      <span class="text-green-500">{{ Auth::user()->name }}</span>
   </div>
   <div class="h-full w-1/6 sm:1/4 pt-2 flex justify-center hidden sm:block">
       <span> Copyright JPV-2022-V2</span>
   </div>
   <div class="h-full w-1/6 sm:1/4 pt-2 flex justify-center">
      <a href="{{route('Emails.formRens')}}">
        Contact
        </a>
   </div>
   @if(Auth::user()->role == 1)
   <div class="h-full w-1/6 sm:1/4 pt-2 flex justify-center">
      <a href="{{route('Admin.index')}}">Admin</a>
   </div>
   @endif
   <div class="h-full w-1/6 sm:1/4 pt-2 mr-2 flex justify-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
                <a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Déconnexion
                </a>
        </form>
   </div>
</footer>
@extends('layouts.base', ['title'=>'dashboard'])
@section('content')
@include('Partials.header')
 <section class="flex flex-col flex-grow items-center">
        <div class=" w-screen h-12 flex justify-center items-end text-sm lg:texte-md italic font-bold pt-4">
                Le 21 du mois de septembre<br/>
                L’an de l’annonciation du seigneur 1561
        </div>
         <div class="h-10 w-full flex justify-center items-center" id="msg">
            @include('flash-message')
        </div>
        <div class="w-11/12 text-xs md:text-2xs xl:text-sm md:tracking-tighter text-justify italic font-bold py-2 px-4
        flex flex-col  flex-grow justify-start items-center md:flex-row md:justify-center md:items-start">
            <div class="w-full
            flex-grow justify-start items-center md:mr-2 ">
                <span class="text-3xl text-red-600">A</span>u nom de dieu éternel et de sa grâce divine, Sachent tous que moi Juan VIDAL du Raffelet laboureur, habitant de la ville et juridiction de Mahon gracieusement et sereinement je donne en mariage et comme épouse légitime par parole de présent demoiselle Lucia ma fille et de dame Antonina mon épouse.<br/>
                A vous Sérafin Villalonga laboureur fils d’honorable Pere Villalonga de Toraixa et de dame Saurina son épouse habitants de la ville, de Mahon, et je vous donne en dot comme dot et à titre de dot de ma dite fille deux cents livres en monnaie de Mahon ; pour que ces deux cents livres ma susdite fille les ait avec vous, les garde, les possède et s’en serve tout le temps de sa vie avec son mari ou sans lui et avec son ou ses enfants et sans eux et que avant son décès elle puisse disposer de sa dot en testant et en faire tout ce qu’elle voudra. Pour cela moi susdit Sérafin Villalonga époux plus haut nommé recevant et acceptant totalement la susdite demoiselle Lucia comme ma future épouse légitime, par les dites paroles de présent je me donne personnellement comme son époux véritable et légitime ; et gracieusement je confesse et reconnais en vérité avoir eu et reçu de vous les susdites deux cents livres de la dot en question; d’où renonçant par exception que les dites non comptées, non reçues et par vous non reçues et.dommages et action en justice. En fait et gracieusement pour la virginité de la dite Lucia votre fille et en don pour les futures noces et suivant la coutume de ce royaume je lui donne en augment ou « serex » cent livres de la dite monnaie. Ce qui fait entre la dot et l’augment trois cents livres que la dite Lucia ma future épouse aura sa vie durant gardera, possédera et jouira avec ou sans mari et avec ou sans enfants et dont à sa mort elle pourra disposer en testant et faire de la dite dot selon toutes ses volontés, mais pour l’augment susdit après son décès il parviendra à l’enfant ou aux enfants par moi en elle procréés, vivants et à elle survivants.<br/>
                <span class=" sm:hidden">Et si il n’y avait pas d’enfant ou d’enfants nés d’elle par moi procréés, qui soient vivants ou lui survivent, ce qu’à dieu ne plaise, dans ce cas le dit augment me reviendrait tant que je vivrais, ou à celui ou ceux a qui je les destinerais ou lèguerais verbalement ou par testament ; en outre gracieusement par amitié, en don pour nos futures noces j’accueille la dite Lucia en la moitié de tous mes biens, les appartements communs que nous aurons.<br/>
                En cas de divorce ou séparation de notre dit mariage, je lui fais don irrévocable de la moitié de ces appartements, donation entre vifs pour faire selon toutes ses volontés. Enfin librement et pour toujours, pour ce qui est de l’augment total et de la part de propriété des appartements et de ce qui doit lui être donné et restitué pour ces biens à restituer j’oblige à la dite Lucia et aux siens et alliés, à nos futurs enfants dépendants ou à naître, à cette fin, pour elle et les siens et nos dits futurs enfants et tous autres qui sont et seront intéressés, légitimement stipulant et recevant, renonçant à tous et chacun de mes biens meubles ou immeubles, où qu’ils soient présents et futurs quels que soient les lois et droits contraires de dispense, malgré ce il est pacte que en cas de restitution de la dit dot, elle sera restituée dans la manière et formes et paiement dans lesquels elle a été reçue et non autrement. Ceci a été fait dans la ville de mahon, île de Minorque, le 21 du mois de septembre, l’an 1561 de l’annonciation du seigneur. Ont signé avec moi :<br/>
                Juan VIDAL du Raffelet, constituant,<br/>
                Signé dans mon étude Sérafin Villalonga de Toraixa époux acceptant tout ce que dessus que nous approuvons, accordons et signons.<br/>
                Témoins de ceci les honorables Juan VILA et Françesc CARDONA tous deux marchands
                Habitants de la ville de Mahon, en leur présence.<br/>
                Tous deux ont signé.</span>
            </div>
            <div class="w-full md:ml-2
            flex-grow justify-start items-center">
                <span class="md:text-3xl md:text-red-600">E</span>t si il n’y avait pas d’enfant ou d’enfants nés d’elle par moi procréés, qui soient vivants ou lui survivent, ce qu’à dieu ne plaise, dans ce cas le dit augment me reviendrait tant que je vivrais, ou à celui ou ceux a qui je les destinerais ou lèguerais verbalement ou par testament ; en outre gracieusement par amitié, en don pour nos futures noces j’accueille la dite Lucia en la moitié de tous mes biens, les appartements communs que nous aurons.<br/>
                En cas de divorce ou séparation de notre dit mariage, je lui fais don irrévocable de la moitié de ces appartements, donation entre vifs pour faire selon toutes ses volontés. Enfin librement et pour toujours, pour ce qui est de l’augment total et de la part de propriété des appartements et de ce qui doit lui être donné et restitué pour ces biens à restituer j’oblige à la dite Lucia et aux siens et alliés, à nos futurs enfants dépendants ou à naître, à cette fin, pour elle et les siens et nos dits futurs enfants et tous autres qui sont et seront intéressés, légitimement stipulant et recevant, renonçant à tous et chacun de mes biens meubles ou immeubles, où qu’ils soient présents et futurs quels que soient les lois et droits contraires de dispense, malgré ce il est pacte que en cas de restitution de la dit dot, elle sera restituée dans la manière et formes et paiement dans lesquels elle a été reçue et non autrement. Ceci a été fait dans la ville de mahon, île de Minorque, le 21 du mois de septembre, l’an 1561 de l’annonciation du seigneur. Ont signé avec moi :<br/>
                Juan VIDAL du Raffelet, constituant,<br/>
                Signé dans mon étude Sérafin Villalonga de Toraixa époux acceptant tout ce que dessus que nous approuvons, accordons et signons.<br/>
                Témoins de ceci les honorables Juan VILA et François CARDONA tous deux marchands               
                Habitants de la ville de Mahon, en leur présence.<br/>
                Tous deux ont signé.
                 <div class="fixed right-0 bottom-12  md:bottom-28 w-12 h-12 z-20">
                    <img
                    src="{{asset('Img/Tracker.gif')}}"
                    alt="Tracker"
                    class="object-contain h-full w-full mt-1 md:mt-6 ">
                    <p class="w-full pl-2 text-xs">JPV</p>
                </div>
            </div>
        </div>
     </section>
   @include('Partials.footer') 
@stop    
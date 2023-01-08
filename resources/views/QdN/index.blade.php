@extends('layouts.base', ['title'=>'QuoiDeNeuf'])
@section('content')
@include('Partials.header')
<section class="flex flex-col flex-grow items-between w-10/12 mx-auto">
	<div>
		<p class="font-bold text-sm sm:text-md md:text-lg leading-10 text-left mt-2 mb-4">Dernière mise à jour le : <span class="text-red-500 underline italic"> Vendredi 06 janvier 2023</span></p>
		<h2 class="font-extrabold text-lg sm:text-xl md:text-2xl underline leading-10 text-left">Informations Association</h2>
		<div class="p-4">
			<p class="text-justify">Les frais bancaires prélevés par la banque postale étant devenus très importants nous avons décidé à la dernière A/G de confier la tenue du compte de l'association à un autre établissement bancaire
			Après prospection auprès des agences du pays salonais j'ai retenu celle du Crédit Mutuel. Nous passons d'un coût mensuel de 9,44 € à 3,5 € avec en plus la possibilité de pouvoir suivre les mouvements bancaires au jour le jour ce qui n'était pas possible avec l'ancien compte.<br/>
			Pour vous éviter l'envoi de chèque par la poste vous avez la possibilité d'utiliser le RIB indiqué ci-dessous lors de transfert de fonds (cotisations, acompte pour hébergement ...)
				<a href="{{asset('Pdf/RibCreditMutuel.pdf')}}">
					<h3 class="font-bold text-md">
						Accés au <span class="text-blue-600 underline">Rib.</span>
					</h3>
				</a> 
			</p>
		</div>
	</div>
	<div>
		<h2 class="font-extrabold text-lg sm:text-xl md:text-2xl underline leading-10 text-left">Informations Documentation</h2>
		<div class="p-4">
			<p class="text-justify">Documents modifiés ou ajoutés :<br/>
				- La gazette N°23 (2023)<br/>
				- Les coordonnées des adhérents<br/>
			</p>
		</div>
	</div>
	<div>
		<h2 class="font-extrabold text-lg sm:text-xl md:text-2xl underline leading-10 text-left">Informations sur le site</h2>
		<div class="p-4">
			<p class="text-justify">Modification :<br/>
				- <br/>
			</p>
		</div>
	</div>
</section>
@include('Partials.footer') 
@stop   
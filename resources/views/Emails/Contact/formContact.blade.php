@extends('layouts.base', ['title'=>'FormContact'])
@section('content')
<section>
<h2 class="text-center font-medium pt-6 pb-6 text-3xl md:text-4xl">
		Pour nous contacter, complétez le formulaire suivant :
	</h2>
	<hr class="block mx-auto bg-gray-600 h-1 mb-3 w-44">
		<form 
			action="{{route('Contact.store')}}" 
			method="POST" 
			class="grid grid-cols-1 gap-y-3 relative bg-white max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:py-16 lg:px-8 xl:pl-12">
			@csrf
			<div>
				<label 
				for="nom" class=" block text-gray-500 mb-2" >Nom
				</label>
				<input  
				type="text"
				name="nom"
				id="nom"
				value="{{old('nom')}}"
				class="block w-full ring-1 ring-gray-200 shadow-sm py-3 px-4 placeholder-gray-500 border-gray-300 rounded-md"
				placeholder="Votre nom"
				required>
				{!! $errors->first('nom', '<p class="error_msg my-2">:message</p>') !!}
			</div>
			<div>
				<label 
				for="prenom" class=" block text-gray-500 mb-2" >Prénom
				</label>
				<input  
				type="text"
				name="prenom"
				id="prenom"
				value="{{old('prenom')}}"
				class="block w-full ring-1 ring-gray-200 shadow-sm py-3 px-4 placeholder-gray-500 border-gray-300 rounded-md"
				placeholder="Votre prénom"
				required>
				{!! $errors->first('prenom', '<p class="error_msg my-2">:message</p>') !!}
			</div>
			<div>
				<label 
				for="email" class=" block text-gray-500 mb-2" >E-mail
				</label>
				<input 
				type="email"
				name="email"
				id="email"
				value="{{old('email')}}"
				class="block w-full ring-1 ring-gray-200 shadow-sm py-3 px-4 placeholder-gray-500 border-gray-300 rounded-md"
				placeholder="Votre E-mail"
				required>
				{!! $errors->first('email', '<p class="error_msg my-2">:message</p>') !!}
			</div>
			<div>
				<label 
				for="msg" class=" block text-gray-500 mb-2" >Message
				</label>
				<textarea  
				id="msg"
				name="msg"
				class="block w-full ring-1 ring-gray-200 shadow-sm py-3 px-4 placeholder-gray-500 border-gray-300 rounded-md"
				rows="4"
				placeholder="Votre message"
				required>
				{{old('msg')}}</textarea>
				{!! $errors->first('msg', '<p class="error_msg my-2">:message</p>') !!}
			</div>
			<div class="mx-auto flex justify-around w-full">
				<button type="submit" class="flex justify-center items-center py-2 px-6 border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-700">
				Envoyer
				</button>
				<button class="flex justify-center items-center py-2 px-6 border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-700">
					<a href="{{route('accueil')}}">
						Accueil site
					</a>
				</button>
			</div>	
		</form>
	</section>
	@stop
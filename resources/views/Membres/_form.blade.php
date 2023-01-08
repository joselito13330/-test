<div class="form-group mb-6 ">
    <label for="name" class="form-label inline-block mb-2 text-gray-700">Prénom Nom</label>
    <input type="text" name="name" value="{{(old('name')) ??  $user->name }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
    aria-describedby="name" placeholder="Prénom nom">
    {!! $errors->first('name', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="email" class="form-label inline-block mb-2 text-gray-700">E-mail</label>
    <input type="text" name="email" value="{{(old('email')) ??  $user->email }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"  placeholder=" E-mail">
    {!! $errors->first('email', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="role" class="form-label inline-block mb-2 text-gray-700">Rôle</label>
    <input type="text" name="role" value="{{(old('role')) ??  $user->role }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="role"  placeholder="Rôle">
    {!! $errors->first('role', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="password" class="form-label inline-block mb-2 text-gray-700">Mot de Passe</label>
    <input type="password" name="password" value="{{(old('password')) ??  $user->password }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="role"  placeholder="Mot de passe">
    {!! $errors->first('password', '<p class="error_msg">:message</p>') !!}
  </div>
  <input type="hidden" name="id" value="{{$user ->id}}">
  <div class="flex justify-around">
    <button type="submit" value="{{$submitButtomText}}" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
    ease-in-out">Enregistrer</button>
    <button type="reset" value="Effacer" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
    ease-in-out">Effacer</button>
  </div>
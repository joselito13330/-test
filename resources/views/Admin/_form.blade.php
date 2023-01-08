  <div class="form-group mb-6 ">
    <label for="titre" class="form-label inline-block mb-2 text-gray-700">Titre ouvrage</label>
    <input type="text" name="titre" value="{{(old('titre')) ??  $documents->titre }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="titre"
    aria-describedby="Titre" placeholder="Titre de l'ouvrage">
    {!! $errors->first('titre', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="auteur" class="form-label inline-block mb-2 text-gray-700">Auteur</label>
    <input type="text" name="auteur" value="{{(old('auteur')) ??  $documents->auteur }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="auteur"  placeholder="Auteur de l'ouvrage">
    {!! $errors->first('auteur', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="category" class="form-label inline-block mb-2 text-gray-700">Catégorie</label>
    <input type="text" name="category" value="{{(old('category')) ??  $documents->category }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="category"  placeholder="categorie de l'ouvrage">
    {!! $errors->first('category', '<p class="error_msg">:message</p>') !!}
  </div>
  <div class="form-group mb-6">
    <label for="langue" class="form-label inline-block mb-2 text-gray-700">Langue</label>
    <input type="text" name="langue" value="{{(old('langue')) ??  $documents->langue }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
    bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="langue"  placeholder="Langue de l'ouvrage">
  </div>
  <input type="hidden" name="id" value="{{$documents->id}}">
  <div class="flex justify-around">
    <button type="submit" value="{{$submitButtomText}}" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
    ease-in-out">Enregistrer</button>
    <button type="reset" value="Effacer" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight
    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150
    ease-in-out">Effacer</button>
  </div>
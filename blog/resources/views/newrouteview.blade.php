<h1 class="conatainer text-center p-9 uppercase ">
  This is the new route.
</h1>

<link href="../css/app.css" rel="stylesheet">
<script src="../js/app.js" defer></script>
@if(session('message'))

  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{session('message')}}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <button class="text-green-500 hover:text-green-700" aria-label="Close">
      &times;
    </button>
    </span>
  </div>

@endif
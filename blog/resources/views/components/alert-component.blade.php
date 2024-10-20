<div id="alert"
    class="bg-{{$cssclass}}-100 border border-{{$cssclass}}-400 text-{{$cssclass}}-700 px-4 py-3 rounded relative"
    role="alert">
    <strong class="font-bold">{{$shortmessage}}</strong>
    <span class="block sm:inline">{{$longmessage}}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <button class="text-{{$cssclass}}-500 hover:text-{{$cssclass}}-700" aria-label="Close"
            onclick="closeAlert(this)">
            &times;
        </button>
    </span>
</div>
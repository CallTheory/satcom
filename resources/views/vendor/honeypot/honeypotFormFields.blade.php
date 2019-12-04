@if($enabled)
    <div id="{{ $nameFieldName }}_group" class="p-4 mx-auto font-bold bg-gray-100 hidden border-gray-300 text-center text-sans">
        <input name="{{ $nameFieldName }}" type="text" value="" id="{{ $nameFieldName }}">
        <input name="{{ $validFromFieldName }}" type="text" value="{{ $encryptedValidFrom }}">
    </div>
@endif

@props(['attribute'])

@error($attribute)
    <span class="text-red-800 bold rounded-4xl bg-white p-1"> {{ $message }} </span>
@enderror
<br>
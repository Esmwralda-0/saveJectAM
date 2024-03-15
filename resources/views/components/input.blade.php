@props(['titulo', 'tipo', 'rex'])

<label for="">{{ $titulo }}</label>
<input name={{ $rex }} type="{{ $tipo }}" class="border">
@error($rex)
<p>{{ $message }}</p>
@enderror()

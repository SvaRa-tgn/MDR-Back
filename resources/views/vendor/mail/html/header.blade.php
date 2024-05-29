@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'My Decor Room')
<img src="http://localhost:8080/img/logo/logo.svg" class="logo" alt="MDR Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

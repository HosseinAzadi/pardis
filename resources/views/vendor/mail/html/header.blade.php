<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/home/logo_pardis.jpg') }}" class="logo" alt="Pardis Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

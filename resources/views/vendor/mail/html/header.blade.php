<tr>
<td class="header" style="background:#581C87 !important;">
<a href="{{ $url }}" style="display: inline-block; color:white !important;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

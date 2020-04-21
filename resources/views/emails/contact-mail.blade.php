@component('mail::message')

{{ $contact->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# New Quote Inquiry.

<strong>Name:</strong> {{ $data['name'] }} <br/>

<strong>Email:</strong> {{ $data['email'] }} <br/>

<strong>Message:</strong>

{{ $data['message'] }}


Thanks,<br>
{{ config('app.name') }} Corp.
@endcomponent

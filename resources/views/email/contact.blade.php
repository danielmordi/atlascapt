@component('mail::message')
# You've a mail form {{ $contact->name }}

<p><strong>Name: </strong>{{ $contact->name }}</p>
<p><strong>Subject: </strong>{{ $contact->subject }}</p>
<p><strong>Email: </strong>{{ $contact->email }}</p>

<p><strong>Message:</strong></p>
{{ $contact->message }}

<br>

Thanks,<br>
{{ $contact->name }}
@endcomponent

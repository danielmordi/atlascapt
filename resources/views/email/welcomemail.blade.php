@component('mail::message')
  Welcome to {{ config('app.name') }}

  Dear {{ $user->name }}
  The body of your message.

  @component('mail::button', ['url' => ''])
    Button Text
  @endcomponent

  Thanks,<br>
  {{ config('app.name') }}
@endcomponent

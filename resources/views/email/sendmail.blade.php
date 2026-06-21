@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{ asset('logo/logo-dark-full.png') }}" alt="cloudcryptomines.com-logo" width="150">
@endcomponent
@endslot

{{-- Body --}}
{!! $msg !!}

{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
If you have any questions, please visit our
<a href="{{  config('app.url').'/#faq' }}">FAQ</a>
page or <a href="{{  config('app.url') }}"> contact us</a>.
Our Customer Support Team is available to help.

Best Regards, <br>
{{ config('app.name') }} Team!
@endcomponent
@endslot


{{-- Footer --}}
@slot('footer')
@component('mail::footer')
<a href="{{ config('app.url') }}">{{ config('app.name') }}</a>
@endcomponent
@endslot
@endcomponent

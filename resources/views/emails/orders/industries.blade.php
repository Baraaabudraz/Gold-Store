@component('mail::message')
   # Welocme,
   Your information has been verified and your request has been accepted.
@component('mail::panel')
      Name: {{$name}}<br>
      Email: {{$email}}
@endcomponent
   # You can log in now !
@component('mail::button', ['url' => 'https://masaneco.ae/login/industry'])
        {{trans('dashboard_trans.Sign In')}}
@endcomponent
  Thanks,<br>
    {{ config('app.name') }}
@endcomponent

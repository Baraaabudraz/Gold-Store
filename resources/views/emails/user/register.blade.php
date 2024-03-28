@component('mail::message')
    # Welcome {{$user->name}}
@component('mail::panel')
         User Name: {{$user->user_name}}
        <br>
         Email:  {{$user->email}}
@endcomponent


@component('mail::button', ['url' => 'https://masaneco.ae/'])
Home Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


@component('mail::message')
    # مرحبا بك،
@component('mail::panel')
        <p>{{$details['body']}}</p>
@endcomponent

@component('mail::button', ['url' => ''])
 الصفحة الرئيسية
@endcomponent
شكراً,<br>
{{ config('app.name') }}
@endcomponent

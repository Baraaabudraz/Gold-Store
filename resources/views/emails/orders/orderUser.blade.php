@component('mail::message')
@component('mail::panel')
# Hello,
New Order
@endcomponent
@component('mail::table')

| User Name       | User Email  | Phone       |
| --------------- |:-----------:| -----------:|
| {{$user_name}}  |{{$email}}   | {{$mobile}} |

| Product Name       | Quantity      | Date Order       |
| ------------------ |:-------------:| ----------------:|
|  {{$product_name}} | {{$quantity}} | {{$created_at}}  |


@endcomponent


@component('mail::button', ['url' => ''])
Home Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

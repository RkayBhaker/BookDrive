@component('mail::message')
# Hurr, we got order from you ! :)

Click below to view the all orders.

@component('mail::button', ['url' => 'http://localhost:8000/orders'])
View Orders
@endcomponent
<hr>
Your Order will deliver by tomorrow evening.
<br>
Wed Jan 25 2023 05:30:00 GMT+0530 (India Standard Time)
<br>
<br>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Thank you Mr/Mrs {{$reservation->name}}

Your reservation at <i> {{ config('APP_NAME') }} </i> has been registered: <br>
Number of seats: {{$reservation->seats}} <br>
Date: {{$reservation->date}}

@if($password)
  We have created a user for you. This way you can edit your reservation anytime, and send us a message if you want to.
  <br>
  <strong>Username: {{$email}}</strong>
  <br>
  <strong>Password: {{$password}} </strong>
@endif
<br>
@component('mail::button', ['url' => config('APP_URL') . '/login'])
Login if you want to edit your reservation
@endcomponent

See you soon! Warm regards from us,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
    # Bonjour

    Vous avez recu un mail de la part: {{ $data['name'] }} ({{ $data['email'] }})

    Message :
    {{ $data['message'] }}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

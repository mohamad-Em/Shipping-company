<x-mail::message>
    <p>@foreach ($emailSetting as $row )
        {{ $row->body }}
        @endforeach
        Your OTP is {{$otp}}</p>
</x-mail::message>

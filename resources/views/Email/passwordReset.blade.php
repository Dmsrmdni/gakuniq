{{-- <x-mail::message>
    {{-- <x-mail::button :url="'http://localhost:8000/response-password-reset?token=' . $token">
        Button Text
    </x-mail::button> --}}

{{-- <x-mail::button :url="'http://localhost:8000/response-password-reset?token=' . $token">
        Button Text
    </x-mail::button> --}}

{{-- Hello!
    You are receiving this email because we received a password reset request for your account.

    Reset Password
    This password reset link will expire in 60 minutes.

    <b>{{ $token }}</b>

    If you did not request a password reset, no further action is required.

    Thanks,
    Gakuniq --}}
{{-- </x-mail::message> --}}

{{-- <x-mail::message> --}}
{{-- Hello!
    You are receiving this email because we received a password reset request for your account.

    Reset Password
    This password reset link will expire in 60 minutes. --}}

<x-mail::message>
    {{ $token }}
</x-mail::message>
{{-- </x-mail::message> --}}

<x-mail::message>
# Introduction

Your OTP is: {{ $otp }}

You can click this button to continue registration

<x-mail::button :url="$url">
Continue
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

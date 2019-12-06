@component('mail::message')
# New Encrypted Message

You've been sent encrypted content. The sender will reach out with a passphrase.

Together, with the link below, you'll be able to retrieve the encrypted information safely.

@component('mail::panel')

## Have your passphrase?

@component('mail::button', ['url' => $link])
Retrieve encrypted content
@endcomponent

@endcomponent

Thanks,<br>

NotifiUs, LLC

[https://encrypt.notifi.us](https://encrypt.notifi.us)

[Report abuse](mailto:support@notifi.us?subject=NotifiUs Encrypt Email Abuse)

@endcomponent

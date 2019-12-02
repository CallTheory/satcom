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
[notifi.us](https://notifi.us)

@endcomponent

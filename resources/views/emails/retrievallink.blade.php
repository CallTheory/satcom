@component('mail::message')
# New Encrypted Message

You've been sent encrypted content.

@component('mail::panel')
The sender will reach out with a passphrase - <strong>four (4) words</strong> that you'll need to decrypt the message.
@endcomponent

Together, with the link below, you'll be able to retrieve the encrypted information safely.

@component('mail::panel')

## Have your 4-word passphrase?

@component('mail::button', ['url' => $link])
Retrieve encrypted content
@endcomponent

@endcomponent

Thanks,<br>

**Patrick Labbett**

[NotifiUs, LLC](https://notifi.us) dba [Call Theory](https://calltheory.com)

[encrypt.notifi.us](https://encrypt.notifi.us/about) <small>&middot;</small> [Report abuse](mailto:support+abuse@notifi.us)



@endcomponent

# NotifiUs Encrypt

A simple application to transfer credentials more safely than via email. 

## Security and Usage Flow
* SSL/TLS protected web application
* No database persistence
* Automatically expiring Redis keys
* Signed, expiring email links
* AES-256-CBC encryption using bcrypt
* Randomly generated four word passphrase for ease of use
* Passphrase transfer over different channel/medium/address (user responsibility)
* Honeypot field on encryption request
* 1 request per minute throttling
* Google reCaptcha v2

## Ideas, Improvements, Etc.

- Open source it
- Maximum decryption tries
- Delete on open
- Email follow up
- One click resend
- Make records a model instead of calling redis facades constantly


# NotifiUs Encrypt

A simple application to transfer credentials more safely than via email. 

> Built-on [Laravel Framework](https://laravel.com)

## Security and Usage Flow

* SSL/TLS protected web application
* No database persistence
* Automatically expiring Redis keys
* Signed, expiring email links
* AES-256-CBC encryption using bcrypt
* Randomly generated four word passphrase for ease of use
* Passphrase transfer over different channel/medium/address (user responsibility)
* Spatie Honeypot field on encryption request
* 1 request per minute throttling
* Google reCaptcha  to combat spamming

## When running in production...

* SSH IP whitelist
* SSH key authentication only
* SentinelOne EDR
* Redis secured with password
* Redis only listening on localhost

## Ideas, Improvements, Etc.

- Open source it
- Delete on open
- Email follow up
- One click resend
- Make records a (non-db backed) model instead of calling redis facades constantly


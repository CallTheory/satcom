@extends('_layouts.master')

@section('title', 'About')

@section('content')

    <div class="container w-full mx-auto px-2">

        <div class="my-4 mx-auto items-center max-w-3xl p-4 rounded shadow-lg bg-gray-100 border border-gray-300">

            <h3 class="text-gray-700 font-bold text-lg">
                What is this?
            </h3>
            <p class="text-sm text-left text-gray-600 font-normal block my-2">
                <i>In a nutshell, a secure way to communicate passwords and other text-based credentials.</i>
                <br><br>
                Instead of sending credentials or other sensitive information in the body of an email, this system creates an encrypted link,
                emails it to the intended recipient, and relies on you to transmit a 4-word passphrase which they use to decrypt the link sent to them.
                <br>
                <br>
                This allows you to avoid forwarding emails with inline sensitive information.
            </p>
            <hr class="my-6">
            <h3 class="text-gray-700 font-bold text-lg">
                How does it improve security?
            </h3>
            <p class="text-sm text-left text-gray-600 font-normal block my-2">

            <ul class="text-sm text-left text-gray-600 list-disc list-inside ml-2">
                <li class="my-2">Avoid sensitive information in email communication.</li>
                <li class="my-2">Promotes out-of-band passphrase sharing, reducing exposure to sniffing.</li>
                <li class="my-2">Mitigates non-encrypted at-rest emails stored in servers during transit.</li>
                </ul>
            </p>
            <p class="text-sm text-left text-gray-600 font-normal block my-2">
                As a result, you end up reducing risk of accidentally leaking passwords because of poor email practices by your
                recipient or yourself.
            </p>
            <hr class="my-6">
            <h3 class="text-gray-700 font-bold text-lg">
                Is it safe to use?
            </h3>
            <p class="text-sm text-left text-gray-600 font-normal block my-2">
                We require TLS/SSL connections, use AES-256-CBC bcrypt encryption signed with message authentication code (MAC),
                store all information within volatile in-memory key-value store (redis) fully encrypted and set to automatically expire.
                No data is persisted to a database. We rotate the application key automatically at random times. Links sent to recipients
                use signed URLs. You can expire any item you create immediately from the success page.
                <br><br>
                In short, we believe this is a much safer alternative to placing credentials in plain-text within emails.
                Other tools, including digitally signed and encrypted emails, password manager secure sharing, and encrypted messages with GPG are all great, secure alternatives.
                <br><br>
                Ultimately, you should only use this tool if you don't have an alternative secure method of sending credentials,
                and you trust the creator, <a title="Patrick Labbett" class="font-bold text-gray-600 hover:text-gray-900" href="https://labbett.net">Patrick Labbett</a>, and the company <a title="NotifiUs, LLC" class="font-bold text-gray-600 hover:text-gray-900" href="https://notifi.us">NotifiUs, LLC</a>.
            </p>

            <hr class="my-6">
            <h3 class="text-gray-700 font-bold text-lg">
                I'm receiving emails and don't know why!?
            </h3>
            <p class="text-sm text-left text-gray-600 font-normal block my-2">
                This generally means someone is trying to send you a message that has been encrypted. In rare cases, it's possible a bad actor is
                using our system to spam or otherwise abuse the service. We've taken steps to mitigate abuse, including rate-limiting to 1 submission per minute,
                detecting automated submissions, and requiring a reCaptcha challenge.
                <br><br>
                To report abuse of this tool, please email <a class="font-bold text-gray-600 hover:text-gray-900" href="mailto:support@notifi.us">support@notifi.us</a> and we'll assist as quickly as possible.
            </p>





        </div>

    </div>

@endsection

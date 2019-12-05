@extends('_layouts.master')

@section('title', 'Privacy Policy')

@section('content')

    <div class="container w-full mx-auto px-2">

        <div class="my-4 mx-auto items-center max-w-xl px-3 p-4 rounded shadow-lg bg-gray-100 border border-gray-300">
            <h3 class="text-gray-700 font-bold text-lg">
                Privacy Policy
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                NotifiUs Encrypt is a product of NotifiUs, LLC. This privacy policy will explain how our organization uses the personal data we collect from you when you use our website.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">
                What data do we collect?
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
               We collect the following information when you use this service:
            <ul class="text-sm text-left text-gray-600 list-disc list-inside ml-2">
                <li class="my-2">Your public IP address is temporarily saved to verify reCaptcha challenge and rate limiting/throttling.</li>
                <li class="my-2">We temporarily save an encrypted version of your data and passphrase</li>
                <li class="my-2">The recipients email address is used to send the link to. It is not otherwise used.</li>
            </ul>
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">
                How do we collect your data?
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                You directly provide NotifiUs, LLC with most of the data we collect. We collect data and process data when you:
            <ul class="text-sm text-left text-gray-600 list-disc list-inside ml-2">
                <li>Submit a message to be encrypted and sent</li>
            </ul>
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">
                How will we use your data?
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                NotifiUs, LLC collects your data so that we can encrypt your message and send a link to your recipient so that they can
                decrypt the message once you provide them with the automatically generated passphrase.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">
                How do we store your data?
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                All data and passphrases are encrypted and stored into an automatically expiring in-memory key-value store.
                All data is completely removed once the item expires or if you force expire it using the Expire Now hutton.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">
                What are your data protection rights?
            </h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                NotifiUs, LLC would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:
            </p>
            <ul class="text-sm text-left text-gray-600 list-disc list-inside ml-2">
                <li class="my-2"><strong>The right to access</strong> &mdash; You have the right to request NotifiUs, LLC for copies of your personal data. We may charge you a small fee for this service.</li>
                <li class="my-2"><strong>The right to rectification</strong> &mdash; You have the right to request that NotifiUs, LLC correct any information you believe is inaccurate. You also have the right to request NotifiUs, LLC to complete the information you believe is incomplete.</li>
                <li class="my-2"><strong>The right to erasure</strong> &mdash; You have the right to request that NotifiUs, LLC erase your personal data, under certain conditions.</li>
                <li class="my-2"><strong>The right to restrict processing</strong> &mdash; You have the right to request that NotifiUs, LLC restrict the processing of your personal data, under certain conditions.</li>
                <li class="my-2"><strong>The right to object to processing</strong> &mdash; You have the right to object to NotifiUs, LLC’s processing of your personal data, under certain conditions.</li>
                <li class="my-2"><strong>The right to data portability</strong> &mdash; You have the right to request that NotifiUs, LLC transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
            </ul>

            <p class="text-sm text-left text-gray-600 font-semibold block my-2">

                If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact using one of the following methods:
            </p>
            <ul class="text-sm text-left text-gray-600 list-inside ml-2">
                <li> Email us at support@notifi.us</li>
                <li>Call us at: +1 888-966-9830</li>
                <li class="mt-2">Or write to us:<br>PO Box 2051 <br>
                    Dublin, OH 43017</li>

            </ul>
            <hr class="my-6">


            <h3 class="text-gray-700 font-bold text-lg">What are cookies?</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                Cookies are text files placed on your computer to collect standard Internet log information and visitor behavior information. When you visit our websites, we may collect information from you automatically through cookies or similar technology.
                <br><br>
                For further information, visit <a href="https://allaboutcookies.org">allaboutcookies.org</a>.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">How do we use cookies?</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2 ">
                NotifiUs, LLC uses cookies in a range of ways to improve your experience on our website, including:
            </p>
            <ul class="text-sm text-left text-gray-600 list-inside list-disc ml-2">
                <li>Keeping you signed in to our web application using sessions</li>
                <li>Implementing security mechanisms like XSRF protection</li>
            </ul>

            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">What types of cookies do we use?</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                There are a number of different types of cookies, however, our website uses only functionality cookies.
                NotifiUs, LLC uses these cookies so that we recognize you on our website, perform rate limiting, and deter abuse.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">How to manage your cookies</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                You can set your browser not to accept cookies, and the above website tells you how to remove cookies from your browser. However, in a few cases, some of our website features may not function as a result.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">Privacy policies of other websites</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                The NotifiUs, LLC website contains links to other websites. Our privacy policy applies only to our website, so if you click on a link to another website, you should read their privacy policy.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">Changes to our privacy policy</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                NotifiUs, LLC keeps its privacy policy under regular review and places any updates on this web page. This privacy policy was last updated on 5 December 2019.
            </p>
            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">How to contact us</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                If you have any questions about NotifiUs, LLC’s privacy policy, the data we hold on you, or you would like to exercise one of your data protection rights, please do not hesitate to contact us.

            </p>
            <ul class="text-sm text-left text-gray-600 list-inside ml-2">
                <li class="my-2">Email us at: support@notifi.us</li>
                <li class="my-2">Call us: +1 888-966-9830</li>
                <li class="my-2">Or write to us at:
                    <br><br>
                    PO Box 2051<br>
                    Dublin, OH 43017</li>
            </ul>

            <hr class="my-6">

            <h3 class="text-gray-700 font-bold text-lg">How to contact the appropriate authority</h3>
            <p class="text-sm text-left text-gray-600 font-semibold block my-2">
                Should you wish to report a complaint or if you feel that NotifiUs, LLC has not addressed your concern in a satisfactory manner, you may contact the Information Commissioner’s Office.
                    <br><br>
                <a href="https://ico.org/uk/make-a-complaint/">https://ico.org.uk/make-a-complaint/</a>
            </p>


        </div>

    </div>

@endsection


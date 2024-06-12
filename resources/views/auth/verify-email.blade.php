<x-empty-layout>
    <form method="post" class="narrow" action="{{ route('verification.send') }}">
        @csrf

        <p class="my-2">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <p class="success">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </p>
        @endif

        <ul>
            <li>
                <button class="primary" type="submit">
                    {{ __('Resend Verification Email') }}
                </button>
            </li>

            <li>
                <a href="{{ route('logout') }}" role="button" class="secondary">
                    {{ __('Log Out') }}
                </a>
            </li>
        </ul>
    </form>
</x-empty-layout>

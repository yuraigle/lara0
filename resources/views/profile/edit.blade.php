<x-member-layout>
    <form method="post" action="{{ route('verification.send') }}" id="form-verification">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="max-w-lg">
        @csrf
        @method('patch')

        <h2>{{ __('Profile Information') }}</h2>
        <p class="muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>

        <ul>
            <li>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name"
                       value="{{ old('name', $user->name) }}"
                       required autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')"/>
            </li>

            <li>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email"
                       value="{{ old('email', $user->email) }}"
                       required autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')"/>

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <p class="danger">
                        {{ __('Your email address is unverified.') }}
                        <button class="link" type="submit" form="form-verification">
                            {{ __('Click here') }}
                        </button>
                        {{ __('to re-send the verification email.') }}
                    </p>
                @endif
            </li>

            <li>
                <button class="primary" type="submit">{{ __('Save') }}</button>

                @if (session('status') === 'profile-updated')
                    <p class="success">{{ __('Saved.') }}</p>
                @endif

                @if (session('status') === 'verification-link-sent')
                    <p class="success">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </li>
        </ul>
    </form>

    <a href="{{ route('profile.remove') }}">Delete my account</a>
</x-member-layout>

<x-member-layout>
    <form method="post" action="{{ route('password.update') }}" class="max-w-lg">
        @csrf
        @method('put')

        <h2>{{ __('Update Password') }}</h2>
        <p class="muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <ul>
            <li>
                <label for="update_password_current_password">{{ __('Current Password') }}</label>
                <input id="update_password_current_password" type="password" name="current_password"
                       autocomplete="current-password" required/>
                <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
            </li>

            <li>
                <label for="update_password_password">{{ __('New Password') }}</label>
                <input id="update_password_password" type="password" name="password"
                       autocomplete="new-password" required/>
                <x-input-error :messages="$errors->updatePassword->get('password')"/>
            </li>

            <li>
                <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="update_password_password_confirmation" type="password" name="password_confirmation"
                       autocomplete="new-password" required/>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"/>
            </li>

            <li>
                <button class="primary" type="submit">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'password-updated')
                    <p class="success">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </li>
        </ul>
    </form>
</x-member-layout>

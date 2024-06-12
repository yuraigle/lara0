<x-member-layout>
    <section id="form_delete_2" class="max-w-lg">
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <h2>{{ __('Are you sure you want to delete your account?') }}</h2>
            <p class="muted">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <ul>
                <li>
                    <label for="password">{{ __('Current Password') }}</label>
                    <input id="password" type="password" name="password"
                           placeholder="{{ __('Password') }}" required/>
                    <x-input-error :messages="$errors->userDeletion->get('password')"/>
                </li>

                <li>
                    <div class="flex gap-x-2">
                        <a class="secondary" role="button" href="{{ route('profile.edit') }}">
                            {{ __('Cancel') }}
                        </a>
                        <button class="danger" type="submit">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </li>
            </ul>
        </form>
    </section>
</x-member-layout>

<x-member-layout>
    <form method="get" action="{{ route('profile.remove') }}" class="max-w-lg">
        <input type="hidden" name="ok" value="1"/>

        <h2>{{ __('Delete Account') }}</h2>
        <p class="muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <ul>
            <li>
                <button class="danger" type="submit">
                    {{ __('Delete Account') }}
                </button>
            </li>
        </ul>
    </form>
</x-member-layout>

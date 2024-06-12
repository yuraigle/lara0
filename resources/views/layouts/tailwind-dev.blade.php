<script src="https://cdn.tailwindcss.com?plugins=forms"></script>

<style type="text/tailwindcss">

    /* Main nav */

    nav.main {
        @apply border-b bg-gray-50
    }

    nav.main > ul > li {
        @apply hover:bg-gray-200
    }

    nav.main > ul > li > a {
        @apply block py-3 px-4 text-gray-800 hover:no-underline
    }

    nav.main > ul > li.active {
        @apply font-semibold bg-gray-200
    }

    nav.main > ul > li.brand {
        @apply hover:bg-transparent
    }

    nav.main > ul > li.brand > a {
        @apply p-0 h-[48px]
    }

    /* Member nav */

    nav.member > ul > li > a {
        @apply block py-2 ps-4 text-sm text-gray-800 hover:bg-purple-50 hover:no-underline
    }

    nav.member > ul > li.active {
        @apply font-semibold bg-purple-50 border-e-4 border-purple-900
    }

    nav.member .separator {
        @apply border-t border-gray-300
    }


    h1 {
        @apply text-xl font-semibold
    }

    h2 {
        @apply text-lg font-semibold
    }

    a {
        @apply text-blue-600 hover:underline
    }

    button, [role="button"] {
        @apply py-3 px-4 block w-full text-sm text-center font-semibold border border-transparent
        disabled:opacity-50 disabled:pointer-events-none hover:no-underline
    }

    button.link {
        @apply text-blue-600 hover:underline inline-block w-auto p-0
    }

    button.primary {
        @apply text-white bg-blue-600 border-blue-800 hover:bg-blue-700
    }

    button.secondary, [role="button"].secondary {
        @apply text-gray-700 bg-gray-100 border border-gray-300 hover:bg-gray-200
    }

    button.danger {
        @apply text-white bg-red-600 border-red-800 hover:bg-red-700
    }

    .muted {
        @apply text-gray-600 text-sm
    }

    .danger {
        @apply text-red-600 text-sm
    }

    .success {
        @apply text-green-600 text-sm
    }

    label {
        @apply block text-sm font-medium
    }

    input {
        @apply py-3 px-4 block w-full border-gray-300 text-sm
    }

    form.narrow {
        @apply max-w-md mx-auto p-6
    }

    form > ul {
        @apply my-2
    }

    form > ul > li {
        @apply mb-2
    }

</style>

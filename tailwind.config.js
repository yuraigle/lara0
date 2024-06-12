import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Arial', 'sans-serif'],
                serif: ['Georgia', 'serif'],
            },
        },
    },

    plugins: [forms],
};

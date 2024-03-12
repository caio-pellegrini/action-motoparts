import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class', // Mude para media para alterar com o sistema do usuario

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lateef: ['Lateef', 'serif'],
                aurore: ['La Belle Aurore', 'cursive']
            },

            backgroundColor: {
                'cafune-transparente': '#8190A0CC',
                'cafune': '#019a2d',
                'azur': '#2C2B4C',
            },

            colors:
             {
                'azur': '#2C2B4C',
            },
        },
    },

    plugins: [forms],
};

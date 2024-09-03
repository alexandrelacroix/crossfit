import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                serif: ['New Amsterdam', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                'burgundy': {
                    DEFAULT: '#254D71',
                    lite: '#4F80AC',
                    dark: '#051829',
                },
                'blue': {
                    DEFAULT: '#254D71',
                    lite: '#4F80AC',
                    dark: '#051829',
                },
                'pink': {
                    DEFAULT: '#254D71',
                    lite: '#4F80AC',
                    dark: '#051829',
                },
                'creme': {
                    DEFAULT: '#254D71',
                    lite: '#4F80AC',
                    dark: '#051829',
                },
            },
            boxShadow: {
                'box': '0 0 16px -5px rgba(0, 0, 0, 0.26)',
            }
        },
    },

    plugins: [forms],
};

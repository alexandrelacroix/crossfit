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
            backgroundImage: {
                'header': "url('/storage/images/header.jpg')",
            },
            colors: {
                'burgundy': {
                    DEFAULT: '#5f2e41',
                    dark: '#4a1c2e',
                },
                'blue': {
                    DEFAULT: '#73e9d9',
                },
                'pink': {
                    DEFAULT: '#f168a2',
                },
                'purple': {
                    DEFAULT: '#703480',
                },
                'creme': {
                    DEFAULT: '#f8e5d4',
                },
            },
            boxShadow: {
                'box': '0 0 16px -5px rgba(0, 0, 0, 0.26)',
            }
        },
    },

    plugins: [forms],
};

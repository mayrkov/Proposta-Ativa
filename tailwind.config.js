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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['"Sora"', 'sans-serif'],
                body: ['"DM Sans"', 'sans-serif'],
                mono: ['"JetBrains Mono"', 'monospace'],
            },
            colors: {
                brand: {
                    50:  '#eef5ff',
                    100: '#d9e8ff',
                    200: '#bcd4ff',
                    300: '#8eb6ff',
                    400: '#598dff',
                    500: '#2f63fa',
                    600: '#1a44ef',
                    700: '#1432db',
                    800: '#172ab1',
                    900: '#182a8b',
                    950: '#141d55',
                },
                surface: {
                    DEFAULT: '#0f1117',
                    card:    '#161b27',
                    border:  '#1f2937',
                    hover:   '#1e2535',
                },
            },
            boxShadow: {
                'glow-sm': '0 0 12px rgba(47,99,250,0.25)',
                'glow':    '0 0 24px rgba(47,99,250,0.35)',
            },
        },
    },

    plugins: [forms],
};

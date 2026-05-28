import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // <-- Importa o plugin do Tailwind v4

export default defineConfig({
    plugins: [
        tailwindcss(), // <-- Adiciona o Tailwind aqui antes do Laravel
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
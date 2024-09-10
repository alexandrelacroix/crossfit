import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/css/photoswipe.css", "resources/sass/app.sass", "resources/js/app.js",  "resources/js/photoswipe-lightbox.esm.min.js",  "resources/js/photoswipe.esm.min.js", "resources/js/main.js"],
            refresh: true,
        }),
    ],
});
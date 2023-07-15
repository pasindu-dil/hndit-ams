import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/soft-ui-dashboard.min.css',
                'resources/js/soft-ui-dashboard.min.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
            ],
            refresh: true,
        }),
    ],
});

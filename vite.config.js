import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/dashboard.css',
                'resources/sass/bundle.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/dashboard.js',
                'resources/js/require.min.js',
                'resources/js/core.js',
                'resources/plugins/input-mask/plugin.js',
                'resources/js/jquery.min.js',
            ],
            refresh: true,
        }),
    ],
});

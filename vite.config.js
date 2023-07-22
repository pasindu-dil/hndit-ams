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
                'resources/js/plugins/smooth-scrollbar.min.js',
                'resources/js/core/popper.min.js',
                'resources/js/core/bootstrap.min.js',
                'node_modules/jquery/dist/jquery.min.js',
                'resources/js/sweetalert2.min.js',
                'resources/css/sweetalert2.min.css',
                'resources/js/jquery-validation.min.js'
            ],
            refresh: true,
        }),
    ]
});

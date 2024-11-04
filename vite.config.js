import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/accountstyle.css',
                'resources/css/bestellenstyle.css',
                'resources/css/app.css',
                'resources/css/bezorg.css',
                'resources/css/overonsstyle.css',
                'resources/css/registrationstyle.css',
                'resources/css/style.css',
                'resources/css/style1.css',
                'resources/css/verzoekenstyle.css',
                'resources/css/zakelijkstyle.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js' // Added from the screenshot
            ],
            refresh: true,
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.jsx',
                'resources/css/client-side/client-page.css',
                'resources/customJs/blade.js',
            ],
            refresh: true,
        }),
        react(),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
        server: {
            host: true,
            port: 5173,
            strictPort: true,

            cors: true,

            watch: {
                ignored: ['**/storage/framework/views/**'],
            },

            hmr: {
                host: '192.168.0.12',
            },
        },
});

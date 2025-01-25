import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/ubication.js', // Incluye todos los archivos necesarios
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost', // Forzamos localhost
        port: 5173,
        strictPort: true, // Asegura que el puerto no cambie
        hmr: {
            host: 'localhost', // Forzamos localhost para HMR
        },
    },
});

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
        host: '0.0.0.0', // En producción no debe apuntar a localhost, usar 0.0.0.0 o quitar esta opción
        port: 5173, // El puerto sigue siendo necesario para el desarrollo, pero no debería afectar la producción si no usas Vite en producción.
        strictPort: true, // Asegura que el puerto no cambie, pero en producción esto no debería afectar si no usas Vite directamente.
        hmr: {
            host: '0.0.0.0', // En producción, HMR no es necesario a menos que uses el servidor de desarrollo en ese entorno
        },
    },
    build: {
        // Asegúrate de compilar los archivos correctamente
        outDir: 'public/build', // Establece la salida de los archivos compilados
        manifest: true, // Crea un archivo manifest.json para enlazar los archivos compilados
    },
});

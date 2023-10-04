import  path from 'path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // Importamos Bootstrap 5
            resolve:{
                alias:{
                    '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
                }
            },
            // Fin Importamos Bootstrap 5
        }),
    ],
});

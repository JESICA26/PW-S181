import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            //impirtacion de boostrap
            resolve:{
                alias:{
                    '~bootstrap': path.resolve(__dirname,'node_modules/bootstrap'),
                }
            }
        }),
    ],
});

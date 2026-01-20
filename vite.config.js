import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/app-frontend.css',
                'resources/js/app-frontend.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '10.11.106.42',
        port: 5173,
        strictPort: true,
    },
    build: {
        chunkSizeWarningLimit: 10000, // 5 MB
        commonjsOptions: {
            transformMixedEsModules: true,
        },
    },
})

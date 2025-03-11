import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['alpinejs'],
                },
            },
        },
        chunkSizeWarningLimit: 1000,
        minify: true,
        cssMinify: true,
    },
    optimizeDeps: {
        include: ['alpinejs'],
    },
});

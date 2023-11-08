import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import vue from '@vitejs/plugin-vue'

export default {
  plugins: [
    vue(),
  ],
  build: {
    manifest: true,
    includeAssets: ['favicon.ico', 'fonts/*'],
  },
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./resources', import.meta.url)),
    },
  },
}
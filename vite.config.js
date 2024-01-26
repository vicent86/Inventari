// import { defineConfig } from 'vite'
// import vue from '@vitejs/plugin-vue'

// export default defineConfig(({ command }) => ({
//   plugins: [vue()],
//   root: command === 'serve' ? './' : './public',
//   server: {
//     fs: {
//       strict: true,
//     },
//   },
//   build: {
//     manifest: true,
//     outDir: 'public/build',
//     rollupOptions: {
//       input: 'resources/js/app.js',
//     },
//   },
//   resolve: {
//     alias: {
//       '@': './resources/js',
//     },
//   },
// }))

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vuePlugin from "@vitejs/plugin-vue";
import path from 'path';

export default defineConfig ({
  plugins: [
    laravel(['resources/js/app.js']),
    vuePlugin(),
  ],

  resolve: {
    alias: {
      ziggy: path.resolve(__dirname, "vendor/tightenco/ziggy/dist"),
    },
  }
});
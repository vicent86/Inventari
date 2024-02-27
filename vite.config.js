const { defineConfig } = require("vite");
const laravel = require("laravel-vite-plugin");
const vuePlugin = require("@vitejs/plugin-vue");
const Components = require("unplugin-vue-components/vite");
const { AntDesignVueResolver, ElementPlusResolver } = require("unplugin-vue-components/resolvers");
const path = require('path');

module.exports = defineConfig ({
  plugins: [
    laravel({
      input:['resources/js/app.js', 'resources/css/app.css'],
      refresh: true,
    }),
    Vue({
      template: {
        transformAssetsUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),
    vuePlugin(),
    Components({
      // Configuración automática de componentes de bibliotecas UI
      dts: true, // Genera el archivo .d.ts para TypeScript
      resolvers: [
        // Resuelve automáticamente los componentes de Ant Design Vue, Element Plus, etc.
        AntDesignVueResolver(),
        ElementPlusResolver(),
      ],
      // Configuración de componentes personalizados
      include: [/\.vue$/], // Incluye todos los archivos .vue
      exclude: [/node_modules/, /\.test\.js$/], // Excluye los archivos en node_modules y los archivos de prueba

    }),

    
    
  ],

  resolve: {
    alias: {
      ziggy: path.resolve(__dirname, "vendor/tightenco/ziggy/dist"),
      '@': path.resolve(__dirname, './resources/js'),
      'vue': 'vue/dist/vue.runtime.esm-bundler',
    },
  },

  define: {
    __VUE_OPTIONS_API__: true,
    __VUE_PROD_DEVTOOLS__: false,
    __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: false,
  },

});
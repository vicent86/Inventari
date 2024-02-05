import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vuePlugin from "@vitejs/plugin-vue";
import Components from "unplugin-vue-components/vite";
import { AntDesignVueResolver, ElementPlusResolver } from "unplugin-vue-components/resolvers";
import path from 'path';

export default defineConfig ({
  plugins: [
    laravel(['resources/js/app.js']),
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
    },
  },

  define: {
    __VUE_OPTIONS_API__: true,
    __VUE_PROD_DEVTOOLS__: false,
    __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: false,
  },

});
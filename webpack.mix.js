const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/css/app.css', 'public/css', [
       //
   ])
   .webpackConfig({
       resolve: {
           alias: {
               '@': path.resolve(__dirname, 'resources/js'),
           },
       },
       module: {
           rules: [
               {
                   test: /\.js$/,
                   exclude: function(modulePath) {
                       return /node_modules/.test(modulePath) &&
                              !/node_modules\/@inertiajs\/vue3/.test(modulePath);
                   },
                   use: [{
                       loader: 'babel-loader',
                   }]
               }
           ]
       }
   });

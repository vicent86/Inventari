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
                   use: [{
                       loader: 'babel-loader',
                   }]
               }
           ]
       }
   });

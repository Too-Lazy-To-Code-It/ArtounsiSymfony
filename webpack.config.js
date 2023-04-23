const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './public/assets/app.js')
  .enableSassLoader()
  .enablePostCssLoader()
  .enableSourceMaps(!Encore.isProduction())
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableVersioning(Encore.isProduction())
  .enableSingleRuntimeChunk();
;

module.exports = Encore.getWebpackConfig();
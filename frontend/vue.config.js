module.exports = {
  css: {
    loaderOptions: {
      sass: {
        data: '@import "~@/core/theme/main.scss"',
      },
    },
  },
  assetsDir: 'static',
  runtimeCompiler: true,
};

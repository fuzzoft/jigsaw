import path from 'path';

export default {
  root: './../source',
  css: {
    postcss: './postcss.config.js',
  },
  resolve: {
    alias: {
      'tailwindcss': path.resolve(__dirname, 'node_modules/tailwindcss'),
    }
  },
  build: {
    outDir: 'assets',
    assetsDir: '', // prevent extra “assets” folder
    manifest: true,
    rollupOptions: {
      input: {
        main: '/../source/_assets/js/main.js',
        style: '/../source/_assets/css/main.css',
      },
      output: {
        entryFileNames: '[name].[hash].js',
        chunkFileNames: '[name].[hash].js',
        assetFileNames: '[name].[hash].[ext]'
      }
    }
  }
};
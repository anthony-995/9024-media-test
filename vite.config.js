import { defineConfig } from 'vite';
import { glob } from 'glob';
import path from 'path';
import liveReload from 'vite-plugin-live-reload';

export default defineConfig({
  plugins: [
    liveReload(__dirname + '/**/*.php')
  ],
  build: {
    outDir: 'assets/dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'assets/js/src/index.js'),
        editor: path.resolve(__dirname, 'assets/css/src/editor-style.scss'),
        ...Object.fromEntries(
          glob.sync('functionality/custom-blocks/**/*.js').map(file => [
            path.basename(file, '.js'),
            path.resolve(__dirname, file)
          ])
        ),
      },
      output: {
        entryFileNames: 'js/[name].js',
        assetFileNames: '[ext]/[name].[ext]',
      }
    }
  },
  server: {
    cors: true,
    strictPort: true,
    port: 5173,
    hmr: {
      host: 'localhost',
    }
  }
});

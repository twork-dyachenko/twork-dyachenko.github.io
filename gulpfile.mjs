import pkg from 'gulp';
const { src, dest, parallel, watch } = pkg;

import browserSync from 'browser-sync';
import * as sass from 'sass';
import sassCompiler from 'gulp-sass';
import connect from 'gulp-connect-php';
import autoprefixer from 'gulp-autoprefixer';
import image from 'gulp-image';
import htmlmin from 'gulp-htmlmin';
import { exec } from 'child_process';
import glob from 'glob';

const browsersync = browserSync.create();
const sassCompilerInstance = sassCompiler(sass);

function phpToHtml() {
  return new Promise((resolve, reject) => {
    glob('app/**/*.php', (err, files) => {
      if (err) {
        reject(`Ошибка при поиске файлов: ${err}`);
        return;
      }

      const tasks = files.map((file) => {
        return new Promise((resolveFile, rejectFile) => {
          const outputFile = `dist/${file.replace('app/', '').replace('.php', '.html')}`;
          exec(`php -f ${file} > ${outputFile}`, (error, stdout, stderr) => {
            if (error) {
              rejectFile(`Ошибка при компиляции PHP в HTML: ${error}`);
            } else if (stderr) {
              rejectFile(`stderr: ${stderr}`);
            } else {
              resolveFile(stdout);
            }
          });
        });
      });

      Promise.all(tasks)
        .then(() => resolve())
        .catch(reject);
    });
  });
}

function styles() {
  return src(['app/assets/css/assistant.scss', 'app/assets/css/style.scss'])
    .pipe(sassCompilerInstance({ outputStyle: 'expanded' }))
    .pipe(autoprefixer({ overrideBrowserslist: ['last 15 versions', '> 1%', 'ie 8', 'ie 7'], grid: true }))
    .pipe(dest('dist/assets/css'))
    .pipe(browsersync.stream());
}

function images() {
  return src('app/assets/img/**/*')
    .pipe(image())
    .pipe(dest('dist/assets/img'));
}

function php() {
  connect.server({
    base: 'app',
    port: 8010,
    keepalive: true,
  });
}

function startBrowserSync() {
  browsersync.init({
    proxy: '127.0.0.1:8010',
    notify: false,
    online: false
  });
}

function scripts() {
  return src('app/assets/js/**/*.js')
    .pipe(browsersync.stream());
}

function html() {
  return src('app/**/*.php')
    .pipe(htmlmin({ collapseWhitespace: true, removeComments: true }))
    .pipe(dest('dist/'));
}

function startwatch() {
  watch('app/assets/js/**/*.js', scripts);
  watch('app/assets/css/**/*.scss', styles);
  watch('app/assets/img/**/*', images);
  watch(['app/**/*.php'], phpToHtml);
  watch(['app/**/*.php']).on('change', browsersync.reload);
}

export { startBrowserSync, styles, images, php, scripts, html, startwatch };

export default parallel(php, styles, images, startBrowserSync, startwatch);

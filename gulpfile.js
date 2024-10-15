"use strict";

const jsWatch = ["./assets/js/app.js"],
  jsFiles = ["./assets/js/app.js", "./assets/js/*.js", "!./assets/js/*.min.js"],
  cssWatch = ["./assets/scss/*.scss", "./assets/scss/**/*.scss"],
  cssFiles = ["./assets/scss/app.scss"];

// Initialize modules
// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
import gulp from "gulp";
const { src, dest, watch, series, parallel } = gulp;

// Importing all the Gulp-related packages we want to use
import pkg from "gulp-sourcemaps";
const { init, write } = pkg;
import gulpSass from "gulp-sass";
import * as sass from "sass";
const sassCompiler = gulpSass(sass);
import autoPrefixer from "gulp-autoprefixer";
import svgSprite from "gulp-svg-sprite";
import babel from "gulp-babel";
import uglify from "gulp-uglify-es";
const minifyjs = uglify.default;
import plumber from "gulp-plumber";
import concat from "gulp-concat";
import merge from "merge2";

// SVG спрайт конфігурація
const svgConfig = {
  mode: {
    symbol: {
      sprite: "sprite.svg", // Назва спрайта
    },
  },
};

// Sass task: compiles the style.scss file into style.css
function scssTask() {
  const cssBackFiles = src(
    ["node_modules/normalize.css/normalize.css", ...cssFiles],
    { base: "./" }
  )
    .pipe(
      autoPrefixer({
        cascade: false,
      })
    )
    .pipe(plumber())
    .pipe(init())
    .pipe(
      sassCompiler({
        outputStyle: "compressed",
      })
    )
    .pipe(concat("app.min.css"))
    .pipe(write("."))
    .pipe(dest("./assets/scss/"));

  return merge(cssBackFiles);
}

// JS Task: minify scripts
function jsTask() {
  const jsBackFiles = src(jsFiles, { base: "./" })
    .pipe(
      babel({
        presets: [
          [
            "@babel/env",
            {
              modules: "commonjs",
            },
          ],
        ],
      })
    )
    .pipe(minifyjs())
    .pipe(concat("app.min.js"))
    .pipe(dest("./assets/js/"));

  return merge(jsBackFiles);
}

// SVG Sprite Task
function svgSpriteTask() {
  return src("./assets/svg/*.svg") // Шлях до SVG файлів
    .pipe(svgSprite(svgConfig))
    .pipe(dest("./assets/images/sprites")); // Шлях для збереження спрайта
}

// Watch task: watch SCSS and JS files for changes
// If any change, run scss and js tasks simultaneously
function watchTask() {
  watch(
    [...cssWatch, ...jsWatch, "./assets/svg/*.svg"],
    series(parallel(scssTask, jsTask, svgSpriteTask))
  );
}

// Export the default Gulp task, so it can be run
// Runs the scss and js tasks simultaneously then watch task
const _default = series(parallel(scssTask, jsTask, svgSpriteTask), watchTask);
export { _default as default };

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');
var clean = require('gulp-clean');
var imagemin = require('gulp-imagemin');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

// Static Server + watching scss/html files
gulp.task('serve', ['clean', 'cleansass', 'cleanjs', 'sass', 'printsass', 'scripts', 'svg', 'cookies', 'images'], function() {

  browserSync.init({
    server: {
      proxy: "localhost:8080" // makes a proxy for localhost:8080
    },
  });

  gulp.watch("src/scss/**/*.scss", ['sass']);
  gulp.watch("src/printscss/**/*.scss", ['printsass']);
  gulp.watch("src/js/**/*.js", ['scripts']);
  gulp.watch('perch/templates/**/*.html', browserSync.reload);
  gulp.watch('perch/templates/**/*.php', browserSync.reload);
});

// Clean the assets folder
gulp.task('clean', function() {
  return gulp.src([
    /* Add your folders here */
    'assets/cookies/**/*',
    'assets/img/**/*',
    'assets/svg/**/*'
  ], {
    read: false
  })
.pipe(clean());
});

// Clean the assets folder
gulp.task('cleansass', function() {
  return gulp.src([
    /* Add your folders here */
    'assets/css/**/*'
  ], {
    read: false
  })
.pipe(clean());
});

// Clean the assets folder
gulp.task('cleanjs', function() {
  return gulp.src([
    'assets/js/**/*'
  ], {
    read: false
  })
.pipe(clean());
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass',['cleansass', 'printsass'], function() {
  return gulp.src("src/scss/*.scss")
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssnano())
    .pipe(gulp.dest("assets/css"))
    .pipe(rename('apps.min.css'))
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest("assets/css"))
    .pipe(browserSync.stream());
});

// Compile printsass into CSS & auto-inject into browsers
gulp.task('printsass', function() {
  return gulp.src("src/printscss/*.scss")
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssnano())
    .pipe(gulp.dest("assets/css"))
    .pipe(rename('print.min.css'))
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest("assets/css"))
    .pipe(reload({
      stream: true
    }));
});

// Concat JS Uglify & auto-inject into browsers
gulp.task('scripts', function() {
  return gulp.src([
      /* Add your JS files here, they will be combined in this order */
      'src/js/jquery-3.2.1.min.js',
      'src/js/aos.js',
      'src/js/slick.js',
      'src/js/jquery.mask.min.js',
      'src/js/cookieconsent.min.js',
      'src/js/svgxuse.js',
      'src/js/apps.js'
    ])
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('../maps'))
    .pipe(gulp.dest('assets/js'))
    .pipe(reload({
      stream: true
    }));
});

// images
gulp.task('images', ['clean'], () =>
  gulp.src('./src/img/**/*')
  .pipe(imagemin([
    imagemin.gifsicle({
      interlaced: true
    }),
    imagemin.jpegtran({
      progressive: true
    }),
    imagemin.optipng({
      optimizationLevel: 5
    }),
    imagemin.svgo({
      plugins: [{
          removeViewBox: true
        },
        {
          cleanupIDs: false
        }
      ]
    })
  ]))
  .pipe(gulp.dest('assets/img'))
);

// svg
gulp.task('svg', ['clean'], function() {
  gulp.src('./src/svg/regular.svg')
    .pipe(gulp.dest('assets/svg'));
});

// cookies
gulp.task('cookies', ['clean'], function() {
  gulp.src('./src/cookies/**/*')
    .pipe(gulp.dest('assets/cookies'));
});

gulp.task('default', ['serve']);

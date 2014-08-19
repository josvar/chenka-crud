'use strict'
// Chenkacrud

var gulp = require('gulp');

// load plugins
var $ = require('gulp-load-plugins')();

var bowerDir = 'app/assets/bower_components/';
var scriptsPaths = { vendor: [ bowerDir + 'jquery/dist/jquery.min.js',
                               bowerDir + 'underscore/underscore.js',
                               bowerDir + 'backbone/backbone.js',
                               bowerDir + 'fastclick/lib/fastclick.js',
                               bowerDir + 'jquery.cookie/jquery.cookie.js',
                               bowerDir + 'jquery-placeholder/jquery.placeholder.js',
                               bowerDir + 'foundation/js/foundation.min.js',
                               bowerDir + 'hogan/web/builds/3.0.2/hogan-3.0.2.min.js'] ,
                      user:  [ 'app/assets/scripts/**/*.js' ]
                    };

gulp.task('styles', function () {
  return gulp.src('app/assets/styles/main.scss')
    .pipe($.rubySass({
      style: 'expanded',
      loadPath: 'app/assets/bower_components',
      precision: 10,
      quiet: true
    }))
    .pipe($.autoprefixer('last 1 version'))
    .pipe(gulp.dest('public/assets/styles'))
    .pipe($.size());
});

gulp.task('scripts', function () {
  gulp.src(scriptsPaths.user)
    .pipe($.concat('main.js'))
    .pipe(gulp.dest('public/assets/scripts'));
});

gulp.task('scripts-build-vendor', function () {
  gulp.src(scriptsPaths.vendor)
    .pipe($.uglify())
    .pipe($.concat('vendor.js'))
    .pipe(gulp.dest('public/assets/scripts'));
});

gulp.task('scripts-build', ['scripts-build-vendor'], function () {
  gulp.src(scriptsPaths.user)
    .pipe($.uglify())
    .pipe($.concat('main.js'))
    .pipe(gulp.dest('public/assets/scripts'));
});

gulp.task('images', function () {
    return gulp.src('app/assets/images/**/*')
        .pipe($.cache($.imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('public/assets/images'))
        .pipe($.size());
});

gulp.task('fonts', function () {
  return gulp.src([ 'app/assets/bower_components/foundation-icon-fonts/*',
                    'app/assets/styles/fonts/**/*'])
    .pipe($.filter('*.{eot,svg,ttf,woff,otf}'))
    .pipe($.flatten())
    .pipe(gulp.dest('public/assets/styles/fonts'))
    .pipe($.size());
})

gulp.task('clean', function () {
    return gulp.src(['public/assets'], { read: false }).pipe($.clean());
});


gulp.task('watch', ['clean', 'scripts-build-vendor', 'styles', 'scripts', 'images', 'fonts'],function () {
    // watch for changes
    gulp.watch([
        'public/assets/styles/**/*.css',
        'public/assets/scripts/**/*.js',
        'public/assets/images/**/*'
    ]).on('change', function (file) {
        server.changed(file.path);
    });

    gulp.watch('app/assets/styles/**/*.scss', ['styles']);
    gulp.watch('app/assets/scripts/**/*.js', ['scripts']);
    gulp.watch('app/assets/images/**/*', ['images']);

});

gulp.task('build', ['clean', 'styles', 'scripts-build', 'images', 'fonts' ], function () {
  gulp.src('public/assets/styles/main.css')
    .pipe($.csso())
    .pipe(gulp.dest('public/assets/styles/main.css'));
})

gulp.task('default', function () {
  gulp.start('build');
});

module.exports = function (grunt) {
  'use strict';

  var script_lib = [
    // JQuery
    // './node_modules/jquery/dist/jquery.js',
    // FontAwesome free
    // './node_modules/@fortawesome/fontawesome-free/js/all.js',
  ];

  var style_lib = [
    // spinkit
    './node_modules/spinkit/spinkit.css',
  ];

  var pugDest = 'public/';
  var pugTask = ['pug'];
  var sass = require('node-sass');

  //
  //Grunt config
  var gruntConfig = {
    pkg: grunt.file.readJSON('package.json'),

    meta: {
      banner:
        '/*! <%= pkg.name %> - v<%= pkg.version %> - built on <%= grunt.template.today("dd-mm-yyyy") %> */\n',
      views: 'resources/views/',
      styles: 'resources/scss/',
      scripts: 'resources/js/',
      assets: 'resources/',
      public: 'public/',
      pug_cwd: 'resources/pug/',
      pug_cwd_public: 'resources/pug/src/',
      pug_files: '**/*.pug',
      pug_dest: pugDest,
      node_modules: './node_modules/',
    },

    browserify: {
      main: {
        options: {
          transform: [['babelify', { presets: ['@babel/env'] }]],
        },
        files: [
          {
            expand: true,
            cwd: '<%= meta.scripts %>src',
            src: ['*.js'],
            dest: '<%= meta.public %>js',
            ext: '.js',
          },
        ],
      },
    },

    uglify: {
      general: {
        files: [{
          expand: true,
          cwd: '<%= meta.public %>/js',
          src: ['*.js'],
          dest: '<%= meta.public %>/js',
          ext: '.js',
        }]
      },
    },

    postcss: {
      options: {
        processors: [
          require('postcss-short')(),
          require('postcss-fontpath')(),
          require('autoprefixer')({
            overrideBrowserslist: ['last 2 versions', 'ie 6-8', 'Firefox > 20'],
          }),
          require('cssnano')(),
        ],
      },
      dist: {
        src: '<%= meta.public %>css/*.css',
      },
    },

    sass: {
      basic: {
        options: {
          implementation: sass,
          compass: true,
          sourcemap: 'none',
          style: 'expended',
        },
        files: [
          {
            expand: true,
            cwd: '<%= meta.styles %>src',
            src: ['*.sass', '*.scss'],
            dest: '<%= meta.styles %>_dist',
            ext: '.css',
          },
        ],
      },
    },

    concat: {
      css_libs: {
        src: style_lib,
        dest: '<%= meta.styles %>_dist/libs.css',
      },
      css_general: {
        src: [
          '<%= meta.styles %>_dist/libs.css',
          '<%= meta.styles %>vendors/*.css',
          '<%= meta.styles %>_dist/styles.css',
        ],
        dest: '<%= meta.public %>css/styles.css',
      },
    },

    pug: {
      main: {
        options: {
          pretty: true,
          data: {
            debug: false,
          },
        },
        files: [
          {
            expand: true,
            cwd: '<%= meta.pug_cwd_public %>',
            src: ['<%= meta.pug_files %>'],
            dest: '<%= meta.pug_dest %>',
            ext: '.html',
          },
        ],
      },
    },

    watch: {
      options: {
        spawn: false,
        interrupt: false,
        livereload: true,
      },
      style: {
        files: ['<%= meta.styles %>/**/*.sass', '<%= meta.styles %>/**/*.scss'],
        tasks: ['sass', 'concat:css_libs', 'concat:css_general'],
      },
      script: {
        files: ['<%= meta.scripts %>/**/*.js'],
        tasks: ['browserify'],
      },
      pug: {
        files: ['<%= meta.pug_cwd %>/**/*.pug'],
        tasks: pugTask,
      },
    },

    clean: {
      options: {
        force: true,
      },
      dev: [
        '<%= meta.public %>css',
        '<%= meta.public %>js',
        '<%= meta.public %>*.html',
      ],
      css: ['<%= meta.public %>css'],
      js: ['<%= meta.public %>js'],
      prod: ['<%= meta.public %>*.html'],
    },

    connect: {
      server: {
        options: {
          livereload: true,
          base: 'public/',
          port: 5000,
        },
      },
    },
  };

  grunt.initConfig(gruntConfig);

  grunt.loadNpmTasks('@lodder/grunt-postcss');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-pug');
  // grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-babel');
  grunt.loadNpmTasks('grunt-browserify');

  //
  // Build tasking
  //
  grunt.registerTask('build', [
    'clean:dev',
    'sass',
    'concat:css_libs',
    'concat:css_general',
    'postcss',
    'pug',
    'browserify',
    'uglify',
  ]);
  grunt.registerTask('serve', ['connect:server', 'watch']);
};

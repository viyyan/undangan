module.exports = function (grunt) {
  'use strict';

  var style_lib = [
    // spinkit
    './node_modules/spinkit/spinkit.css',
  ];

  var pugDest = 'public/';
  var pugTask = ['pug'];
  var sass = require('sass');

  //
  //Grunt config
  var gruntConfig = {
    pkg: grunt.file.readJSON('package.json'),

    meta: {
      banner:
        '/*! <%= pkg.name %> - v<%= pkg.version %> - built on <%= grunt.template.today("dd-mm-yyyy") %> */\n',
      views: 'src/views/',
      styles: 'src/scss/',
      scripts: 'src/js/',
      assets: 'src/',
      public: '../public/assets/frontend/',
      pug_cwd: 'src/pug/',
      pug_cwd_public: 'src/pug/src/',
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
            cwd: '<%= meta.scripts %>',
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
            cwd: '<%= meta.styles %>',
            src: ['*.sass', '*.scss'],
            dest: '<%= meta.public %>css',
            ext: '.css',
          },
        ],
      },
    },

    concat: {
      sample: {
        src: [
          '<%= meta.styles %>_dist/libs.css',
          '<%= meta.styles %>vendors/*.css',
          '<%= meta.styles %>_dist/styles.css',
        ],
        dest: '<%= meta.public %>css/styles.css',
      },
      quiz: {
        src: [
          './node_modules/spinkit/spinkit.css',
          '<%= meta.public %>css/quiz.css',
        ],
        dest: '<%= meta.public %>css/quiz.css',
      },
      contact_css: {
        src: [
          // './node_modules/leaflet/dist/leaflet.css',
          '<%= meta.public %>css/contact.css',
        ],
        dest: '<%= meta.public %>css/contact.css',
      },
      our_thinking_css: {
        src: [
          './node_modules/slick-carousel/slick/slick-theme.css',
          './node_modules/slick-carousel/slick/slick.css',
          '<%= meta.public %>css/our-thinking.css',
        ],
        dest: '<%= meta.public %>css/our-thinking.css',
      },
      home_js: {
        src: [
          './node_modules/jquery/dist/jquery.js',
          './node_modules/slick-carousel/slick/slick.js',
          './src/js/vendors/jquery.animateSprite.min.js', 
          '<%= meta.public %>js/home.js',
        ],
        dest: '<%= meta.public %>js/home.js',
      },
      quiz_js: {
        src: [
          './node_modules/jquery/dist/jquery.slim.js',
          // './node_modules/jquery.transit/jquery.transit.js',
          // './node_modules/jquery-validation/dist/jquery.validation.js',
          '<%= meta.public %>js/quiz.js',
        ],
        dest: '<%= meta.public %>js/quiz.js',
      },
      our_thinking_js: {
        src: [
          './node_modules/jquery/dist/jquery.js',
          './node_modules/slick-carousel/slick/slick.min.js',
          '<%= meta.public %>js/our-thinking.js',
        ],
        dest: '<%= meta.public %>js/our-thinking.js',
      },
      contact_js: {
        src: [
          // './node_modules/leaflet/dist/leaflet.js',
          '<%= meta.public %>js/contact.js',
        ],
        dest: '<%= meta.public %>js/contact.js',
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
        tasks: [
          'sass',
          'concat:contact_css',
          'concat:our_thinking_css'
        ],
      },
      script: {
        files: ['<%= meta.scripts %>/**/*.js'],
        tasks: [
          'browserify', 
          'concat:home_js', 
          'concat:quiz_js', 
          'concat:our_thinking_js',
          'concat:contact_js'
        ],
      },
      // pug: {
      //   files: ['<%= meta.pug_cwd %>/**/*.pug'],
      //   tasks: pugTask,
      // },
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
    'concat:contact_css',
    'concat:our_thinking_css',
    // 'concat:quiz',
    'postcss',
    // 'pug',
    'browserify',
    'concat:home_js', 
    'concat:quiz_js', 
    'concat:our_thinking_js',
    'concat:contact_js',
    'uglify',
  ]);
  grunt.registerTask('serve', ['connect:server', 'watch']);
};

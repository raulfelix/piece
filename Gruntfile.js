module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {                             
      dist: {                           
        options: {                 
          style: 'compact'
        },
        files: {
          'css/styles.css': 'sass/master.scss'
        }
      }
    },

    watch: {
      src: {
        files: [
          'scripts/*.js', 'sass/*.scss'
        ],
        tasks: ['jshint', 'sass'],
        options: {
          interrupt: true
        }
      }
    },

    jshint: {
      options: {
        jshintrc: '.jshintrc',
      },
      files: [
        'scripts/*.js'
      ]
    },

    concat: {
      dist: {
        files: {
          'dist/build.js' : [
            'scripts/*.js'
          ]
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['jshint', 'sass', 'concat']);
};
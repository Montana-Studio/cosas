'use strict';

module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('cosas.json'),

        www: 'app/wp-content/themes/cosas',
        dist: 'prod',
        
        jsout:'js/cosas.min.js',
        cssout:'css/cosas.min.css',
        compimg:'img/',

        js:'js/**/*.js',
        scss:'sass/**/*.scss',
        img:'img/',

        sass: {
          deve: {
            options: {
              style: 'nested'
            },
            files: {
              '<%= www %>/<%= cssout %>': '<%= dist %>/<%= scss %>'
            },
          },
          dist: {
            options: {
              style: 'compressed'
            },
            files: {
              '<%= www %>/<%= cssout %>': '<%= dist %>/<%= scss %>'
            },
          },
        },

        jshint: {
            options: {
                reporter: require('jshint-stylish'),

                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                freeze: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                unused: true,
                boss: true,
                eqnull: true,
                indent: 4,
                white: false,
                quotmark: 'single',
                trailing: true,
                jquery: true,
                browser: true,
                debug: false,
                devel: false,
                predef: [
                    'require',
                    'module'
                ]
            },
            gruntfile: {
                options: {
                    node: true
                },
                src: 'Gruntfile.js'
            },
            dev: {
                options: {
                    devel: true,
                    debug: true,
                    unused: false
                },
                src: [
                    '<%= dist %>/<%= js %>'
                ]
            }
        },

        uglify: {
            options: {
                report: 'min'
            },
            compile: {
                files: {
                    '<%= www %>/<%= jsout %>': ['<%= dist %>/<%= js %>']
                }
            }
        },

        imagemin: {
          static:{
            options:{
              optimizationLevel: 3,
              svgoPlugins: [{ removeViewBox: false }]
            }
          },
          dynamic: {
            files: [{
              expand: true,               
              cwd: '<%= dist %>/<%= compimg %>',
              src: ['**/*.{png,jpg,gif}'],
              dest: '<%= www %>/<%= img %>'
            }]
          }
        },

        parallel:{
          grunt: {
            options: {
              grunt: true
            },
            tasks: ['sass:dist', 'uglify', 'jshint']
          },
        },

        watch: {
          configFiles:{
            files:['<%= dist %>/<%= scss %>','<%= dist %>/<%= js %>','<%= www %>/**/*.php'],
            options:{
              livereload: true,
            },
          },
          sass:{
            files:['<%= dist %>/<%= scss %>'],
            tasks: ['sass:deve'],
            options:{
              livereload:true,
            },
          },
          javascript:{
            files:['<%= dist %>/<%= js %>','Gruntfile.js'],
            tasks: ['uglify','jshint'],
            options:{
              livereload:true,
            },
          },
        }
    });

    require('jit-grunt')(grunt);
    require('time-grunt')(grunt);

    grunt.registerTask('dev', ['parallel','watch']);
    grunt.registerTask('uploads', ['sass:deve','uglify']);
    grunt.registerTask('default', ['sass:dist','uglify','imagemin']);

};
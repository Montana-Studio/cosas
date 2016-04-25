'use strict';

module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('cosas.json'),

        www: 'app/wp-content/themes/cosas',
        wwwcasas: 'app/wp-content/themes/casas',
        dist: 'prod',
        
        jsoutcosas:'js/cosas.min.js',
        jsoutcasas:'js/casas.min.js',
        csscosas:'css/cosas.min.css',
        csscasas:'css/casas.min.css',

        jscosas:'js/cosas/**/*.js',
        jscasas:'js/casas/**/*.js',
        scsscosas:'sass/cosas/**/*.scss',
        scsscasas:'sass/casas/**/*.scss',

        sass: {
          deve: {
            options: {
              style: 'nested'
            },
            files: {
              '<%= www %>/<%= csscosas %>': '<%= dist %>/<%= scsscosas %>',
              '<%= wwwcasas %>/<%= csscasas %>': '<%= dist %>/<%= scsscasas %>'
            },
          },
          dist: {
            options: {
              style: 'compressed'
            },
            files: {
              '<%= www %>/<%= csscosas %>': '<%= dist %>/<%= scsscosas %>',
              '<%= wwwcasas %>/<%= csscasas %>': '<%= dist %>/<%= scsscasas %>'
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
                    '<%= dist %>/<%= jscosas %>',
                    '<%= dist %>/<%= jscasas %>'
                ]
            }
        },

        uglify: {
            options: {
                report: 'min'
            },
            compile: {
                files: {
                    '<%= www %>/<%= jsoutcosas %>': ['<%= dist %>/<%= jscosas %>'],
                    '<%= wwwcasas %>/<%= jsoutcasas %>': ['<%= dist %>/<%= jscasas %>']
                }
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
            files:['<%= dist %>/<%= scss %>','<%= dist %>/<%= js %>','<%= www %>/**/*.php','<%= dist %>/<%= scsscasas %>','<%= dist %>/<%= jscasas %>','<%= wwwcasas %>/**/*.php'],
            options:{
              livereload: true,
            },
          },
          sass:{
            files:['<%= dist %>/<%= scsscosas %>','<%= dist %>/<%= scsscasas %>'],
            tasks: ['sass:deve'],
            options:{
              livereload:true,
            },
          },
          javascript:{
            files:['<%= dist %>/<%= jscosas %>','<%= dist %>/<%= jscasas %>','Gruntfile.js'],
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
    grunt.registerTask('default', ['sass:dist','uglify']);

};
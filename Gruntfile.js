"use strict";

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
		typescript: {
			base: {
				src: ['ts/**/*.ts'],
				dest: 'js/functions.js',
				options: {
					module: 'amd', //or commonjs
					target: 'es5', //or es3
					sourceMap: true,
					declaration: false
				}
			}
		},
		sass: {                              // Task 
			dist: {                            // Target 
				options: {                       // Target options 
					style: 'expanded'
				},
				files: {                         
					'css/main.css': 'scss/main.scss',       // 'destination': 'source' 
				}
			},
		},
		cssmin: {
			options: {
				mergeIntoShorthands: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					'css/main.min.css': ['css/main.css']
				}
			}
		},
		uglify: {
			my_target: {
				files: {
					'js/functions.min.js': ['js/slider.js', 'js/functions.js']
				}
			}
		},
});

  // Load all plugins.
  grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-typescript');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	
  
  // Register all Tasks.
	//grunt.registerTask('default',  ['sass:dist', 'cssmin', 'typescript', 'uglify']);
	grunt.registerTask('default',  ['sass:dist', 'cssmin']);
	grunt.registerTask('js',  ['typescript', 'uglify']);
};
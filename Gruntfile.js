module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'/wordpress/wp-content/themes/connect/style.css' : '/wordpress/wp-content/themes/connect/sass/style.scss',
					'/wordpress/wp-content/themes/connect/navigation.css' : '/wordpress/wp-content/themes/connect/sass/navigation.scss'
				}
			}
		},
		watch: {
			css: {
				files: '/wordpress/wp-content/themes/connect/sass/*.scss',
				tasks: ['sass']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}
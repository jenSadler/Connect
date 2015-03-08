module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'wp-content/themes/connect/css/style.css' : 'wp-content/themes/connect/sass/style.scss',
					'wp-content/themes/connect/css/navigation.css' : 'wp-content/themes/connect/sass/navigation.scss',
					'wp-content/themes/connect/css/slider.css' : 'wp-content/themes/connect/sass/slider.scss'
				}
			}
		},
		watch: {
			css: {
				files: 'wp-content/themes/connect/sass/*.scss',
				tasks: ['sass']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
}
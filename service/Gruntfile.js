module.exports = function(grunt) {

	grunt.initConfig({

		// Import package manifest
		pkg: grunt.file.readJSON("package.json"),

		// Banner definitions
		meta: {
			banner: "/*\n" +
				" *  <%= pkg.title || pkg.name %> - v<%= pkg.version %>\n" +
				" *  <%= pkg.description %>\n" +
				" *  <%= pkg.homepage %>\n" +
				" *\n" +
				" *  Made by <%= pkg.author.name %>\n" +
				" *  Under <%= pkg.license %> License\n" +
				" */\n"
		},

		// Concat definitions
		concat: {
			options: {
				banner: "<%= meta.banner %>"
			},
			dist: {
				src: ["build/*.js", "src/jquery.password-validator.js"],
				dest: "dist/jquery.password-validator.js"
			}
		},

		// Lint definitions
		jshint: {
			files: ["src/jquery.password-validator.js"],
			options: {
				jshintrc: ".jshintrc"
			}
		},

		// Minify definitions
		uglify: {
			my_target: {
				src: ["dist/jquery.password-validator.js"],
				dest: "dist/jquery.password-validator.min.js"
			},
			options: {
				banner: "<%= meta.banner %>"
			}
		},

		// CoffeeScript compilation
		coffee: {
			compile: {
				files: {
					"dist/jquery.password-validator.js": "src/jquery.password-validator.coffee"
				}
			}
		},


		jst: {
			compile: {
				options: {
					processName: function ( filePath ) {
						return filePath.match(/src\/templates\/(.*)\.jst/)[1];
					}
				},

				files: {
					"build/templates.js": ["src/templates/**/*.jst"]
				}
			}
		},

		sass: {
			dist: {
				options: {
					cacheLocation: 'build/sass-cache'
				},

				files: {
					'dist/jquery-password-validator.css': 'src/stylesheets/jquery-password-validator.scss'
				}
			}
		},

		// watch for changes to source
		// Better than calling grunt a million times
		// (call 'grunt watch')
		watch: {
		    files: ['src/**/*'],
		    tasks: ['default']
		}

	});

	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-jshint");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-coffee");
	grunt.loadNpmTasks("grunt-contrib-watch");
	grunt.loadNpmTasks('grunt-contrib-jst');
	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.registerTask("build", ["sass", "jst", "concat", "uglify"]);
	grunt.registerTask("default", ["jshint", "build"]);
	grunt.registerTask("travis", ["default"]);

};

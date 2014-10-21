module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            build: {
                src: 'js/site.js',
                dest: 'js/site.min.js'
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'assets/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'img/'
                }]
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    noCache: true
                },
                files: {
                    'style.css': 'assets/sass/style.scss',
                    'editor-style.css': 'assets/sass/editor-style.scss'
                }
            } 
        },

        autoprefixer: {
            dist: {
                files: {
                    'style.css': 'style.css',
                    'editor-style.css': 'editor-style.css'
                }
            }
        },

        pixrem: {
            options: {
                rootvalue: '10px'
            },
            dist: {
                files: {
                    'style.css': 'style.css',
                    'editor-style.css': 'editor-style.css'
                }
            }
        },

        replace: {
            version_number: {
                src: 'functions.php',
                dest: 'functions.php',
                replacements: [{ 
                    from: /(define\(\'STYLESHEET_VERSION\', )([0-9]+)(\);)/,
                    to: '$1<%= grunt.template.today(\'yyyymmddHHMMss\') %>$3'
                }]
            }
        },

        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                }
            },

            images: {
                files: ['assets/img/**/*.{png,jpg,gif}', 'img/*.{png,jpg,gif}'],
                tasks: ['imagemin'],
                options: {
                    spawn: false,
                }
            },

            css: {
                files: ['assets/sass/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false,
                }
            },

            cache: {
                files: ['assets/js/*.js', 'assets/sass/*.scss'],
                tasks: ['replace'],
                options: {
                    spawn: false,
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-pixrem');

    grunt.registerTask('default', ['uglify', 'imagemin', 'sass', 'autoprefixer', 'pixrem', 'replace']);

};



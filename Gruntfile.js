module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    includes: {
      files: {
        src: ['templates/base/*.html', 'templates/examples/*.html'],
        dest: 'tmp',
        flatten: true,
        cwd: '.',
        options: {
          includeRegexp: /^\s*\/\*\s*[Ii]nclude\s+([^'"\s]+)\s*\*\/$/,
          includePath: 'css',
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-includes');

  grunt.registerTask('default', ['includes']);
};
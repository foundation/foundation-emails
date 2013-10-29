module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    includes: {
      templates: {
        src: 'templates/base/*.html',
        dest: 'build/downloads/templates',
        cwd: '.',
        options: {
          includeRegexp: /^\s*\/\*\s*[Ii]nclude\s+([^'"\s]+)\s*\*\/$/,
          includePath: 'css',
        }
      },
      docs: {
        src: 'docs/examples/*.html',
        dest: 'build',
        cwd: '.',
        options: {
          includeRegexp: /^\s*\/\*\s*[Ii]nclude\s+([^'"\s]+)\s*\*\/$/,
          includePath: 'css',
        }
      }
    },
    shell: {
      makeStage: {
        command: [
          'rm -rf build',
          'mkdir build',
          'mkdir build/downloads',
          'mkdir build/downloads/templates',
          'mkdir build/downloads/framework',
          'mkdir build/docs',
        ].join('&&')
      },
      zipTemplates: { 
        command: [
          'cd build/downloads/templates',
          'zip all-templates.zip *.html',
          'for i in *.html; do zip "${i%}.zip" "$i"; done',
          'cd ../../../'
        ].join('&&')
      },
      zipFramework: {
        command: [
          'cp css/ink.css build/downloads/framework/ink.css',
          'cp templates/boilerplate.html build/downloads/framework/boilerplate.html',
          // 'cp -r templates/examples build/downloads/framework/examples',
          'cd build/downloads/framework',
          'zip ink-<%= pkg.version %>.zip *',
          'cd ../../../',
        ].join('&&')
      },
      linkFramework: {
        command: [
          'cd build/downloads',
          'echo \'<?php $download_file = \"framework/ink-<%= pkg.version %>.zip\" ?>\' > latest.php',
          'cd ../../',
        ].join('&&')
      },
      deployDownloads: {
        command: [
          'cd build/downloads',
          'rsync -r . ink@zurb.com:/var/www/ink/shared/downloads',
          'cd ../../'
        ].join('&&')
      },
      testDocs: {
        command: [
          'cp -r docs/test/* build/docs',
          'cp docs/docs.php build/docs/docs.php',
        ].join('&&')
      },
      deployDocs: {
        command: [
          'rsync -r docs build/docs --exclude test',
          'cd build/docs',
          'rsync -r . ink@zurb.com:/var/www/ink/shared/docs',
          'cd ../../'
        ].join('&&')
      },
      cleanUp: {
        command: [
          'rm -rf build',
          'Say "Deploy Completed"'
        ].join('&&')
      }
    }
  });

  grunt.loadNpmTasks('grunt-includes');
  grunt.loadNpmTasks('grunt-shell');


  grunt.registerTask('make:templates', ['includes:templates', 'shell:zipTemplates']);
  grunt.registerTask('deploy:downloads', ['shell:makeStage', 'includes:templates', 'shell:zipTemplates', 'shell:zipFramework', 'shell:linkFramework', 'shell:deployDownloads', 'shell:cleanUp']);
  grunt.registerTask('make:docs', ['shell:makeStage', 'shell:testDocs', 'includes:docs']);
  grunt.registerTask('deploy:docs', ['shell:makeStage', 'includes:docs', 'shell:deployDocs', 'shell:cleanUp']);
  // grunt.registerTask('default', ['includes']);
};
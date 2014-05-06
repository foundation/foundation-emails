module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    assemble: {
      options: {partials: 'css/*.css'},
      templates: {
        src: 'templates/**/*.html',
        dest: 'build/downloads',
        cwd: './'
      },
      docsDev: {
        src: 'docs/examples/*.html',
        dest: 'build/docs',
        cwd: './'
      },
      docsDeploy: {
        src: 'docs/examples/*.html',
        dest: 'build',
        cwd: './'
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
          'cd build/downloads/templates/base',
          'cp * ../',
          'cd ../',
          'rm -rf base',
          'zip all-templates.zip *.html',
          'for i in *.html; do zip "${i%}.zip" "$i"; done',
          'cd ../../../'
        ].join('&&')
      },
      zipFramework: {
        command: [
          'cp css/ink.css build/downloads/framework/ink.css',
          'cp templates/boilerplate.html build/downloads/framework/boilerplate.html',
          'cp -r build/downloads/templates/examples build/downloads/framework/examples',
          'cd build/downloads/framework',
          'zip -r ink-<%= pkg.version %>.zip *',
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
          'cp -r docs/components build/docs/components',
          'cp docs/docs.php build/docs/docs.php',
        ].join('&&')
      },
      deployDocs: {
        command: [
          'rsync -r docs build --exclude test --exclude examples',
          'cd build/docs',
          'rsync -r . ink@zurb.com:/var/www/ink/shared/docs',
          'cd ../../'
        ].join('&&')
      },
      cleanUp: {
        command: [
          'rm -rf build',
          'echo "Deploy Completed"'
        ].join('&&')
      }
    },
    watch: {
      docs: {
        files: ['docs/docs.php', 'docs/**/*.php', 'docs/**/*.html', 'css/*.css'],
        tasks: ['shell:makeStage', 'assemble:docsDev', 'shell:testDocs'],
        options: {
          livereload: true,
        },
      },
    },
  });

  grunt.loadNpmTasks('assemble');
  grunt.loadNpmTasks('grunt-shell');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('make:templates', ['assemble:templates', 'shell:zipTemplates']);
  grunt.registerTask('deploy:downloads', ['shell:makeStage', 'assemble:templates', 'shell:zipTemplates', 'shell:zipFramework', 'shell:linkFramework', 'shell:deployDownloads', 'shell:cleanUp']);
  grunt.registerTask('make:docs', ['shell:makeStage', 'assemble:docsDev', 'shell:testDocs']);
  grunt.registerTask('deploy:docs', ['shell:makeStage', 'assemble:docsDeploy', 'shell:deployDocs', 'shell:cleanUp']);
  grunt.registerTask('default', ['make:docs', 'watch']);
};
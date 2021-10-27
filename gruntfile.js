module.exports = function (grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        /*options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },*/
        files: {
          "css/calendar.css": "less/calendar.less", // destination file and source file
          "css/print.css": "less/print.less", // destination file and source file
          "css/styles-l.css": "less/styles-l.less", // destination file and source file
          "css/styles-m.css": "less/styles-m.less", // destination file and source file
          "css/styles.css": "less/styles.less", // destination file and source file
          "css/custom.css": "less/custom.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        files: ['less/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });
  grunt.registerTask('default', ['less', 'watch']);
};
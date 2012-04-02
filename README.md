[proper docs coming soon...]


What does it do?

- deploys your php projects in Git to your live server
- lints all your PHP files
- lints all your JS files
- can minify JS and CSS when deploying to live

What does it need?

- PHP or Zend Server on your live server (and prob also your dev server)
- Phing on your live server (and prob also your dev server)
- yuic task for Phing (https://github.com/rchouinard/phing-tasks)
- PEAR's HTTP/Request2.php (for FOPO obfuscation)
- uses jsllint which is a Phing builtin BUT needs jsl (javascriptlint.com) in path

How to install?

- put server files in one place on your dev server. and then in one place on your live server.
- put client files into your PHP project


What does it support?

- running from dev server and live server

Weak points

- supports only one source folder for JS
- supports only one source folder for CSS
- probably won't work on Windows... (JS minification report uses 'du')

Good points

- two different JS minification techniques and reports which one has best result
- supports multiple source folder locations for PHP
- all / nothing CSS minification (*.css in the specified CSS folder)
- configurable JS minification
- configurable PHP obfuscation (using http://fopo.com.ar)
- writes PHP and JS files that don't pass lint to a log file

NOTE

Phing build script for deploy should go in its own folder in the project source
Amethyst-LP
============

### Requires

* Node.js
* npm

## Setup your project

You don't need to install gulp globaly.


1.  Install some dependencies.


        $ cd path/to/directory ; npm install
  

1.  To run gulp tasks with proxy mode, Set hostname on line 18 in gulpfile.js.


        'vhost'          : 'example.dev'
    

1.  Run gulp.

        // proxy mode
        $ npm run gulp

        // server-mode for static websites
        $ npm run gulp-server

## Options

### Foundation

    ├── components/
    ├── forms/
    ├── grid/
    ├── typography/
    ├── util/
    ├── _global.scss
    ├── _settings.scss
    └── _foundation.scss

### autoprefix

You'd like to autoprefix specific browsers, edit gulpfile.js below these lines.

```javascript
.pipe($.autoprefixer({
  browsers: ['last 2 versions', 'ie 10', 'ie 9'],
  cascade: false
}))
```
## File structure
Basically source file placed in `src/`. It passed to `dist/` as destination through some gulp tasks.
~~~~
.
├── LICENSE.md
├── README.md
├── bower.json
├── bower_components
├── dist
│   ├── css
│   │   └── app.css
│   ├── images
│   │   ├── pages
│   │   │   └── dummy.png
│   │   ├── sprite.png
│   │   └── sprite.symbol.svg
│   ├── index.html
│   └── js
│       ├── lib.min.js
│       └── script.min.js
├── gulpfile.js
├── package.json
├── node_modules
├── setting.json
├── src
│   ├── images
│   │   ├── sprite/
│   │   └── sprite-svg/
│   ├── jade
│   │   ├── inc
│   │   │   ├── core
│   │   │   │   ├── _base.jade
│   │   │   │   ├── _config.jade
│   │   │   │   └── _mixins.jade
│   │   │   ├── layout
│   │   │   │   ├── _l-footer.jade
│   │   │   │   └── _l-header.jade
│   │   │   └── module
│   │   │       └── _m-buttons.jade
│   │   └── index.jade
│   ├── js
│   │   ├── app
│   │   │   └── script.js
│   │   └── lib
│   │       └── jquery.js
│   ├── scss
│   │   ├── app.scss
│   │   ├── core
│   │   │   ├── foundation/
│   │   │   ├── _config.scss
│   │   │   ├── _default.scss
│   │   │   ├── _mixins.scss
│   │   │   └── _placeholder.scss
│   │   ├── layout
│   │   │   ├── _l-footer.scss
│   │   │   └── _l-header.scss
│   │   └── module
│   │       ├── _m-buttons.scss
│   │       └── _m-sprite.scss
│   └── shell
│       └── foundation.sh
└── style.css

~~~~

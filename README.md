Amethyst
============

[![Deployment status from DeployBot](https://amethyst.deploybot.com/badge/02267418010971/47642.svg)](http://deploybot.com)

![Amethyst](./screenshot.png)

Simple WordPress Theme based on Foundation. See details at [readme.txt](readme.txt).

## Requires

- Bower
- Node.js
- npm

## Setup your project


1.  Install some dependencies.


        $ cd path/to/directory ; npm install
  

2.  To run gulp tasks with proxy mode, Set hostname on line 18 in gulpfile.js.


        'vhost'          : 'example.dev'


2.  Run gulp. You don't need to install gulp globally.

        // proxy mode
        $ npm run gulp

        // server mode for static websites
        $ npm run gulp-server

### Options

#### Distribution

    $ npm run gulp-zip

#### Autoprefix

You'd like to autoprefix specific browsers, edit gulpfile.js below these lines.

```javascript
.pipe($.autoprefixer({
  browsers: ['last 2 versions', 'ie 10', 'ie 9'],
  cascade: false
}))
```

## Third Party Resources

### Foundation

    src/scss/core/foundation/
    src/scss/core/_settings.scss
    src/scss/core/_foundation.scss

- License: MIT
- Source: [http://foundation.zurb.com/](http://foundation.zurb.com/)

### FastClick

    src/js/lib/fastclick.js

- License: MIT
- Source: [https://github.com/ftlabs/fastclick](https://github.com/ftlabs/fastclick)
    

### Genericons

    assets/genericons/

- License: GPLv2
- Source: [http://genericons.com/](http://genericons.com/)

### HTML5 Shiv

    src/js/html5shiv.js

- License: MIT/GPL2 License
- Source: [https://github.com/aFarkas/html5shiv](https://github.com/aFarkas/html5shiv)


## License

[GNU GENERAL PUBLIC LICENSE Version 2](license.txt)

# Page View Counter Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.1-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.7.0-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Page View Counter plugin will help you to know how many readers of every page in your website.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in the template

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Display page view counter
```
Page views: <?php echo getPageViewCounter(); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin

```

## License
See [LICENSE](https://github.com/flextype-plugins/page-view-counter/blob/master/LICENSE)

# Page View Counter Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)]

Page View Counter plugin will help you to know how many readers of every page in your website.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
...
plugins:
  - page-view-counter
```

## Usage in the template

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Display page view counter
```
<?php echo getPageViewCounter(); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin

```

## License
See [LICENSE](https://github.com/flextype-plugins/page-view-counter/blob/master/LICENSE)

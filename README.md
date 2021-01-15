<h1 align="center">Page View Counter Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/page-view-counter/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/icon.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/icon"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/icon"><img src="https://img.shields.io/github/downloads/flextype-plugins/page-view-counter/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.16-green.svg?color=black" alt="Flextype"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Page View Counter plugin will help you to know how many readers of every page in your website.

## Dependencies

The following dependencies need to be installed for Page View Counter Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.16 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=2.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `/project/plugins/icon`
3. Download Page View Counter Plugin and unzip plugin content to the folder `/project/plugins/icon`

## Settings

| Key | Value | Description |
|---|---|---|
| enabled | true | true or false to disable the plugin |
| priority | 1 | Icon plugin priority |

## Documentation

Function `pageViewCounter()` in namespace `Flextype\Plugin\PageViewCounter`

```php
/**
 * Get page view counter
 *
 * @return int
 */
function pageViewCounter(): int
```

### Usage

**Display page view counter in the twig templates**

```
{{ pageViewCounter() }}
```

**Display page view counter in the entry content**
```
[pageViewCounter]
```

**Display page view counter in the php**

```php
echo Flextype\Plugin\PageViewCounter\pageViewCounter();
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/page-view-counter/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)

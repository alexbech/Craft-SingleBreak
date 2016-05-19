# SingleBreak plugin for Craft CMS

SingleBreak is a twig filter that removes leading, trailing and orphaned linebreaks in your paragraphs.

## Installation

To install SingleBreak, follow these steps:

1. Download & unzip the file and place the `singlebreak` sub-directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

SingleBreak works on Craft 2.5.x.

## Usage

```twig
{{ someRichText | singlebreak }}
```

## Changelog

### 1.0.0 -- 2016.05.19

* Initial release

Brought to you by [Alexander Bech](http://vaersaagod.no)
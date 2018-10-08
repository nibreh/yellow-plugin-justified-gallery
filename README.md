Justified Gallery plugin for Yellow 0.7.7
====================
Based on [Justified Gallery v3.7.0 by Miro](https://github.com/miromannino/Justified-Gallery)

*Justified Gallery is a JavaScript library that allows you to create an high quality justified gallery of images.*

__This plugin comes in addition to [Gallery plugin](https://github.com/datenstrom/yellow-plugins/tree/master/gallery)__

<p align="center"><img src="example-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install plugin

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download and install Gallery Plugin](https://github.com/datenstrom/yellow-plugins/tree/master/gallery/).
3. [Download plugin](https://github.com/nibreh/yellow-plugin-justified-gallery/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
4. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the [plugin files](update.ini).

## How to use Justified Gallery

Justified Gallery comes in addition to Gallery plugin. You don't have to do nothing, just use the gallery shortcut the same way as usual.

    [gallery photo-album/]
    [gallery photo-album/ - 70%]
    
It's not the perfect plugin because you can't configure Justified Gallery with shortcut. You must found balance between width of your site & rowHeight on [line 26](https://github.com/nibreh/yellow-plugin-justified-gallery/blob/718ad449ebd849e9e0b2277d72d8c3b16f9f23dd/justifiedgallery.php#L26).

You don't have to use xx% if your pictures are < 500ko and small enough. That's what we suggest before upload pictures on your server:

- pictures must be smaller than 500ko 
- 1280x720 is enough
- Quality 70% is enough

You can do all this with [ImageMagick](https://www.imagemagick.org).

## How to configure Justified Gallery

You can custom justified gallery on [line 26](https://github.com/nibreh/yellow-plugin-justified-gallery/blob/718ad449ebd849e9e0b2277d72d8c3b16f9f23dd/justifiedgallery.php#L26) in `system/plugins/justifiedgallery.php`:

Take a look to the documentation on the [official website](http://miromannino.github.io/Justified-Gallery/options-and-events/).

By default, this plugin use this configuration: 

    rowHeight : 150,
    lastRow : 'nojustify',
    margins : 3,
    waitThumbnailsLoad:true

## Developers

Juh Nibreh for this plugin.  
Miro Mannino for Justified Gallery Javascript (MIT Licence)

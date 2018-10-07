<?php
// Justified Gallery plugin v3.7.0, https://github.com/nibreh/yellow-plugin-justified-gallery
// Copyright (c) 2018 Juh Nibreh & Miro Mannino - http://miromannino.github.io/Justified-Gallery/
// This file may be used and distributed under the terms of the public license.

class YellowJustifiedGallery {
    const VERSION = "3.7.0";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

	// Handle page extra HTML data
	public function onExtra($name)
	{
		$output = null;
		if($name=="footer")
		{			
			$pluginLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation");
			$output .= "<script type=\"text/javascript\" src=\"{$pluginLocation}justifiedgallery.min.js\"></script>\n";
			$output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$pluginLocation}justifiedgallery.min.css\">\n";
			$output .= "<script type=\"text/javascript\">\n";
			$output .= "\$('.photoswipe').justifiedGallery ({";
			$output .= "rowHeight:'230', lastRow:'nojustify', margins:3, waitThumbnailsLoad:true});</script>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("JustifiedGallery", "YellowJustifiedGallery", YellowJustifiedGallery::VERSION);

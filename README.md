# Placem.at UNOFFICIAL php class 
Last updated 24/10/2017
### What is this repository for? ###
This is an unofficial php class for http://placem.at that will allow you to generate random place holder images. 

# TLDR

    <?php 
	$place = new place;
	?>
	<img src="<?php echo $place->get(array('w'=> '500', 'h'=> '500', ))?>">




## Options 

####Width & Height
Specifies the height of the returned image. Can be used alone, or alongside w. A number in pixels.
Random random

    array('w'=> '500', 'h'=> '500', )


####random
    array('random'=> '1', )

By default, Placemat will always return the same image for a given size. If you want to mix things up a bit, pass random=1. If you want to get the same "random" image every time, pass any other value for random, e.g. random=hello or random=2. This tends to be especially handy for the /people endpoint.

#### txt

Placemat will add your requested dimensions to the returned image by default, but you can bypass that by passing txt=0. If you want to display custom text, just send along something like: 

    array('txt'=> 'Hello+World')

####txtclr

Change the displayed text color. Accepts a 3 (RGB), 4 (ARGB), 6 (RRGGBB), or 8 digit (AARRGGBB) hexadecimal value. The first two digits of an 8 digit hex value represent the color's alpha transparency. Defaults to BFFF.

####overlay_color
Allows changing the overlay's blend mode. Defaults to multiply, and can be assigned to any of the imgix blend modes.

    array('overlay_color'=> 'difference')


### Who do I talk to? ###
* Repo owner or admin
* Other community or team contact
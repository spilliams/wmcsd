#wmcsd

Williams &amp; Meyer, and the Corps of Self-Discovery

#Todo

- bio images, bios
- figure out what the site **is**: blog? tumblr? static?
- mobile?
- load bg image asynchronously or compress it or something (use a smaller res too--something 1080h?)

##thoughts

###Sticky header

    #header.stuck {
      padding-top: 0;
      position: fixed;
      width: 100%;
      background-attachment: fixed;
      background-size: cover;
      background-image: url('../images/bg-doctored.jpg');
      z-index: 10;
    }
    #header.stuck .row {
      min-height: auto;
    }
    #header.stuck h2 {
      display: none;
    }
    
    #content.header-stuck {
      padding-top: 94px; /* must match header height! which can change with device width btw */
    }

#Credits

background image: [Wikimedia](http://en.wikipedia.org/wiki/File:Rendezvous_Peak_WY3.jpg)  
typeset: [Google Webfonts](http://www.google.com/webfonts)  
colorset: [Colour Lovers](http://www.colourlovers.com/)  
grid: [ZURB Foundation](http://foundation.zurb.com/)  
style: [Compass](http://compass-style.org/)  

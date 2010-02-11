plTheme
=======
plTheme is a simple theming plugin that allows you to configure themed decorator templates (layout.php) and assets.

Installation
------------

### 1. Install the plugin
To install the plugin for a symfony project just use:
    git clone git://github.com/webPragmatist/plThemePlugin.git

### 2. Set your configuration (optional)
#### app.yml 
    # default values
    all:
        plThemedView:
            enabled: true
            theme: default
            assetPath: theme/%theme%/%type%
            
Example
-------
#### app.yml 
    # default values
    all:
        plThemedView:
            theme: hawtsauce

#### directory structure for layout
    apps/admin/templates/
    `-- hawtsauce
        |-- _navigation.php
        `-- layout.php

#### directory structure for assets
    web/themes/
    `-- hawtsauce
        |-- css
        |-- images
        `-- js
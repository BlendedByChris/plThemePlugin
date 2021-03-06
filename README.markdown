plTheme
=======
plTheme is a simple theming plugin that allows you to configure themed 
decorator templates (layout.php) and assets. I've modified this plugin since
it's original release to support plugin based themes.

Installation
------------
### 1. Install the plugin
To install the plugin just use the following in your /plugins directory:
    git clone git://github.com/webPragmatist/plThemePlugin.git


### 2. Configure your app.yml (optional)
    # default values
    all:
        plTheme:
            enabled: true
            theme: default
            decoratorPath: %plugins%/%theme%/templates
            assetPath: %theme%/%type%
        
Example (plugin based theme)
-------
### 1. Install the theme plugin
To install the theme plugin just use the following in your /plugins directory.
plTheme uses plugin based decorator templates by default which are stored in
/plugins/plThemeMyThemePlugin/templates.
    git clone git://github.com/webPragmatist/plThemeSamplePlugin.git

### 2. Configure your app.yml 
    # default values
    all:
        plTheme:
            theme: plThemeSamplePlugin            

### 3. Publish your plugin assets
    ./symfony plugin:publish-assets

Example (custom themes in web/themes)
-------
### 1. Configure your app.yml
This configuration uses apps/admin/templates to store decorator templates:
    # default values
    all:
        plTheme:
            theme: hawtsauce
            assetPath: themes/%theme%/%type%
            decoratorPath: %app%/templates/%theme%

### 2. Create your directory structure for layout
    apps/admin/templates/
    `-- hawtsauce
        |-- _partial.php
        `-- layout.php

### 3. Create your directory structure for assets
    web/themes/
    `-- hawtsauce
        |-- css
        |-- images
        `-- js
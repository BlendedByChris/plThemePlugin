plTheme
=======
plTheme is a simple theming plugin that allows you to configure themed decorator templates (layout.php) and assets.
Installation
============
## 1. Install the plugin
To install the plugin for a symfony project just use:
    git clone git://github.com/webPragmatist/plThemePlugin.git
## 2. Set your configuration (optional)
app.yml 
    # default values
    all:
        plThemedView:
            enabled: true
            theme: default
            assetPath: theme/%theme%/%type%
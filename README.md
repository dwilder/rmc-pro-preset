# RMC Pro Preset

This is a base plugin for adding a custom preset calculator to Responsive Mortgage Calculator Pro plugin for WordPress. It can be used most easily by exporting settings from a custom calculator, replacing the contents of the inc > json-preset.json file.

Function and class names are generic and should be renamed for specific uses.

### Instructions

This example plugin is fully functional as a WordPress plugin as long as you _also_ have RMC Pro installed and activated. What you will need to do is open the file inc > json-preset.json, erase the contents of the file, and paste in the contents of the settings file you previously exported from your RMC Pro Calculator. That’s it.

Next, open the rmc-pro-preset.php file, change the WordPress plugin information at the top of the file to help identify the plugin on the WordPress Plugins screen. Change the class name RMCP\_Example\_Preset and function name rmcp\_example\_preset to something more unique. This will help prevent code clash if you are using multiple presets deployed in this way.

Locate the add\_preset method that defines the calculator $id and $title variables. The id is the string that will be used to identify this calculator in code, such as inside the RMC Pro shortcode. This can contain only letters, numbers and the underscore(_) – no spaces. The title is the human readable name of the calculator that will be displayed in the WordPress Admin wherever this calculator is referenced.

### About RMC Pro

Responsive Mortgage Calculator Pro is a WordPress plugin available through https://liddweaver.com.
# Iconpicker plugin for Craft CMS 3.x

Craft plugin that provides a new field type that offers users an easy way to pick an icon from a .woff or .ttf font file.
You can easily use ionicons or font awesome icons

**Note**: This plugin may become a paid add-on when the Craft Plugin store becomes available.

## Requirements
* Craft 3.0 (beta 20)+
* PHP 7.0+
* PhenX PHP Font Lib
* One or more .ttf or .woff files

## Example

### Example of the field usage in the template for a cms user
![Screenshot](resources/screenshots/field_example.png)

### Example of the selection popup
![Screenshot](resources/screenshots/popup_example.png)

## Installation
1. Install with Composer
    
       composer require dolphiq/iconpicker
       
2. Install plugin in the Craft Control Panel under Settings > Plugins

3. Add the plugin assets to your application by adding the following line at the begin of your template:
        
        {% do view.registerAssetBundle("plugins\\dolphiq\\iconpicker\\assets\\sharedAsset") %}
        
4. Add the fonts you want to the following directory 
        
        /storage/iconfonts/fonts
               
5. The `Iconpicker Field` type will be available when adding a new field - Settings > Fields > Add new field

## Creating a field with the iconpicker field type
1. Choose the `Iconpicker Field` type
2. When adding a new field with the `Iconpicker Field` type, you can choose which font you want to use for that field from the dropdown

## Using the iconpicker field type
1. Add the field to a field layout (for example to a section)
2. You can now choose an icon when creating or updating a section

## Usage sample in twig template

### Quick example code
        {% do view.registerAssetBundle("plugins\\dolphiq\\iconpicker\\assets\\sharedAsset") %}
        <html style="padding: 0; margin: 0;">
        <head>
            <title></title>

            {{ head() }}

        </head>

        <body>

        {{ beginBody() }}

        {% if entry.iconPickerField.icon %}
            Hex: {{ entry.iconPickerField.icon }}<br>
            {{ entry.iconPickerField.iconSpan|raw }}
        {% endif %}

        {{ endBody() }}

        </body>
        </html>

Display an icon with a custom class:

    <span class='{{ entry.iconClass }} myCustomClass'>{{ entry.iconChar }}</span>


##### Properties of the icon field
1. Get the icon unicode (decimal) 
    
       {{ entry.fieldName.icon }}
    
2. Get the icon unicode (hexadecimal) 

       {{ entry.fieldName.iconHex }}
       
3. Display the icon as html character `&#00000`

       {{ entry.fieldName.iconChar|raw }}
       
4. Display the icon as html character hex `&#xf100` 

       {{ entry.fieldName.iconCharHex|raw }}
       
5. Display the icon as span with character and font class 

       {{ entry.fieldName.iconSpan|raw }}
       
6. Get the icon font class 
       
       {{ entry.fieldName.iconClass }}
       
7. Conditional example of showing icon only when it is set

       {% if entry.fieldName.icon %}
            {{ entry.fieldName.iconSpan|raw }}
       {% endif %}

## Iconpicker Roadmap
- Select and upload the fonts in the UI
- Enable (name) search while picking an icon

### Contributors & Developers
Lucas Weijers - Original developer
Johan Zandstra - Minor changes
Brought to you by [Dolphiq](Https://dolphiq.nl) info@dolphiq.nl

# U.S. Web Design Standards (USWDS)

Drupal integration of the [U.S. Web Design Standards](https://standards.usa.gov/)
library.

This base theme focuses on tweaking Drupal's markup so that it will work with
the USWDS library. Some CSS is added to deal with unavoidable Drupal quirks, but
only as a last resort.

## Subtheming

As with most Drupal themes, it's recommended that your active theme be a
subtheme of this one, to make updates easier. Simply copy out the
/examples/my_subtheme folder to get started, following the directions in
/examples/my_subtheme/README.md.

## Customizing

The theme makes no assumptions about how you would like to add site-specific
CSS. You can either:

1. use the pre-compiled USWDS library along with your own normal CSS files, or
2. use npm to include the USWDS Sass source files in your own front-end workflow

### Using the pre-compiled USWDS library

If you would like to use the pre-compiled USWDS library, download the [zip file](https://github.com/18F/web-design-standards/releases/download/v1.1.0/uswds-1.1.0.zip),
extract and rename the folder to "assets", and place it in your theme folder.
Afterwards, this should be a valid path inside your theme folder: `assets/css/uswds.css`

### Using npm to include the USWDS Sass source files into your own workflow

The library's source can be installed directly in the subtheme directory by
running `npm install` in that location. However it is assumed that you have
a preferred front-end workflow and will adjust the package.json file
accordingly.

If you take this route, make sure that your assets are placed so that the paths
in uswds.libraries.yml will be valid, or override those paths in your subtheme
as needed.

## Configuration

After installation, see the theme settings inside Drupal for various
customizations, like configuring the header, footer, and menus.

## Notes

Note: This code was originally forked from [this repository](https://github.com/18F/web-design-standards-drupal),
and was split off at 18F's suggestion. It is now maintained [here](https://www.drupal.org/project/uswds).

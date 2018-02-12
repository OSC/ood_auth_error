# ood_auth_error

OSC OnDemand Open ID Connect CI Logon Error Page

Summary:

* An ondemand branded custom error page

## Install

Requires [ood_auth_registration](https://github.com/OSC/ood_auth_registration) to be installed.

Deploy to the `/public` location in the ood portal.

## Configuration and Branding

Edit the config.php file to change the branding of the error page. A global instance of Config is used in the php that renders these pages.

## Code overview

* error_template.html - collects the error name and description and redirects it to the view
* error.php - renders the error view
* config.php - branding

## References

* https://github.com/zmartzone/mod_auth_openidc/issues/280
* https://github.com/zmartzone/mod_auth_openidc/wiki#19-how-do-i-customize-the-user-facing-error-pages
* https://github.com/zmartzone/mod_auth_openidc/blob/7324a89ab15a2de867b96ad0a278d8cee1609c4c/auth_openidc.conf#L558-L569

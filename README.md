Invoice
=======

Self-hosted web based invoicing system for freelancers and small businesses. A hack of FusionInvoice 1.3.4, adapted in accordance with Slovenian law.

Installation
------------

1. Upload files to your server.

2. In your browser, open [http://www.your-domain.com/sub-folder/index.php/setup](http://www.your-domain.com/sub-folder/index.php/setup) and follow installation instructions.
    * Choose a language
    * Check requirements (make files and folders readable)
    * Configure database
    * Configure accounts and company details/info

3. Make URLs shorter and prettier.
    * Open `application/config/config.php`.
    * In line 29, replace `'index.php' with ''`.

Configuration
-------------

1. Define custom fields.
2. For both invoice groups, set Year prefix to Yes.
3. For Quote Default, erase Prefix.
4. Set user accounts contact information.
5. Set tax rates if needed.
6. System settings:
    * Date format
    * Currency
    * Currency position
    * Thousands separator
    * Decimal point
    * Logo
    * Invoice and Quote default templates
    * Invoice Terms
7. Hide logo in templates

TODO
----

Write changelog of features added with this hack.

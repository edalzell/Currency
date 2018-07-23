# Currency

Install as normal Statamic addon.

In your template, use `{{ var | currency }}` to get a string formatted properly for your locale (based on your site locale).

You can pass in a locale as a parameter if you don't want to use the site locale, `{{ var | currency:no_NO }}`.
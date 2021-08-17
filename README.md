#Installation
###1.Install
```composer require twin-elements/manual-bundle```

###2.Add to routes.yaml
```
te_manual:
    resource: "@TwinElementsManualBundle/Controller/"
    prefix: /admin
    type: annotation
    requirements:
        _locale: '%app_locales%'
    defaults:
        _locale: '%locale%'
        _admin_locale: '%admin_locale%'
    options: { i18n: false }
```
###3.Done

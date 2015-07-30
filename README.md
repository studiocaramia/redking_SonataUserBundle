RedkingSonataUserBundle
=====================

This bundle extends SonataUserBundle in order to customize Users and Groups

## Installation

Add bundle to composer.json

```js
{
    "require": {
        "redking/sonata-user-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@bitbucket.org:redkingteam/redkingsonatauserbundle.git"
        }
    ]
}
```

Register the bundle

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // Must be added after SonataUserBundle
        new Redking\Bundle\SonataUserBundle\RedkingSonataUserBundle(),

    );
}
```

## Configuration

We have to tell FosUser to use our classes : 


```yaml
# app/config/config.yml
fos_user:
    # ...
    user_class: Redking\Bundle\SonataUserBundle\Document\User
    group:
        group_class:   Redking\Bundle\SonataUserBundle\Document\Group
```

Then, we must redefine the Admin classes to be able to use the new attributes :

```yaml
# app/config/sonata.yml
sonata_user:
    # ...
    class:
        user: Redking\Bundle\SonataUserBundle\Document\User
        group: Redking\Bundle\SonataUserBundle\Document\Group
    admin:
        user:
            class: Redking\Bundle\SonataUserBundle\Admin\Document\UserAdmin
```

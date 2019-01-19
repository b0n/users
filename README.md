# Users plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require funayaki/users:dev-master
```

### AppController's Auth Setting

/src/Controller/Admin/AppController.php

set userModel Users.Users

```php
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'prefix' => 'admin',
                    'userModel' => 'Users.Users',
                    'finder' => 'auth'
                ],
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Users'
            ],
            'loginRedirect' => false,
            'logoutRedirect' => false,
            'authorize' => [
                'Acl.Actions' => [
                    'actionPath' => 'controllers/',
                    'userModel' => 'Users.Users',
                ]
            ],
            'unauthorizedRedirect' => false,
            'authError' => null,
            'flash' => null,
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Users\Users',
            ]
        ]);

```


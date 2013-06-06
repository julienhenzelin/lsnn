Naturoromandie
==============

naturoromandie.ch – Naturopatie related people directory 
A Symfony2 project. base on github.com/zufrieden/lsnn

How to install
==============


```bash

    $ cp app/config/parameters.yml.dist app/config/parameters.yml
    $ edit app/config/parameters.yml
    $ php composer.phar install
    $ php app/console assets:install --symlink web
    $ php app/console assetic:dump -e prod --no-debug

    $ php app/console doctrine:database:create
    $ php app/console doctrine:schema:create
    $ php app/console doctrine:fixtures:load

```


How to deploy
=============
We use [Capifony](http://capifony.org/) to handle deployment.

Installation
------------
Install Capifony:
```bash
    $ gem install capifony
```

Configure the deploy script:
```bash
    $ cp app/config/deploy.rb.dist app/config/deploy.rb
    $ edit app/config.deploy.rb # and change all 'CHANGE ME' flag
```

Deploy
------

```bash
   $ cap deploy:migrations
```
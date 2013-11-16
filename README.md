EtreeDb Database API
=======================

Introduction
------------
This is the database for a rewrite of db.etree.org.  It is also a demonstration 
of soliantconsuting-apigility Doctrine entity API creation.

Installation
------------

1. Clone the repository  ```git clone git@github.com:etreedb/etreedb-api```

2. Run composer ```./composer.phar install --dev```

3. Create a database in MariaDB or MySQL ```create database etreedb;```

4. Copy ```config/development.config.php.dist``` to ```config/development.config.php```

5. Copy ```config/autoload/local.php.dist``` to ```config/autoload/local.php``` and edit for your database connection from 3.

6. Run ```./vendor/bin/doctrine-module orm:schema-tool:create``` to create the tables

7. Run ```./vendor/bin/doctrine-module data-fixture:import```

8. Run ```php -S localhost:8090 -t public/ public/index.php```

9. Browse to ```http://localhost:8090/```

    Because the API has not been created yet take note no urls from /api/ resolve.

10. Click ```Create API```, give it a name.  

11. Select all entities *except the Abstracts*.  Click ```Create Api``` and be patient while work is done.

12. Make a request to ```GET http://localhost:8090/api/performer``` of ```Accept-Type: application/json```


The available api routes are:

```
    /api/performer
    /api/user
    /api/user_meta
    /api/user_role
    /api/user_to_user_role
    /api/producer
    /api/event
    /api/band_group
    /api/band
    /api/performer_alias
    /api/lineup
    /api/performer_lineup
    /api/song
    /api/user_to_band_group
    /api/band_alias
    /api/venue
    /api/venue_group
    /api/venue_to_venue_group
    /api/performance
    /api/performer_performance
    /api/performance_set
    /api/performance_set_song
    /api/source
    /api/checksum
    /api/band_comment
    /api/band_link
    /api/event_comment
    /api/event_link
    /api/lineup_comment
    /api/performance_comment
    /api/performance_link
    /api/performer_comment
    /api/performer_link
    /api/producer_link
    /api/song_comment
    /api/song_link
    /api/source_comment
    /api/source_link
    /api/venue_comment
    /api/venue_group_link
    /api/venue_link
```
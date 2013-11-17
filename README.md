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

3. Create a doctrine-compatible database 

4. Copy ```config/development.config.php.dist``` to ```config/development.config.php```

5. Copy ```config/autoload/local.php.dist``` to ```config/autoload/local.php``` and edit for your database connection from 3.

6. Run ```./vendor/bin/doctrine-module orm:schema-tool:create``` to create the tables

7. Run ```./vendor/bin/doctrine-module data-fixture:import```

8. Run ```php -S localhost:8090 -t public/ public/index.php```

9. Browse to ```http://localhost:8090/```

    Because the API has not been created yet take note no urls from /api/ resolve.

10. Click ```Create API```, give it a name.  

11. Select all entities *except the Abstracts*.  You may choose to namespace the created resources.  Click ```Create Api``` and be patient while work is done.

12. Make a request to ```GET http://localhost:8090/api/performer``` of ```Accept-Type: application/json``` or ```GET http://localhost:8090/api/etree_db/db/entity/performer```

The final step in API module creation is a list of routes.


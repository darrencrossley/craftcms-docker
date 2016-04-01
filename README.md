
## CraftCMS on Docker

### Usage


#### Dockerfile Setup

(In the same folder as your source code):

    FROM darrencrossley/craftcms:latest

    COPY ./src/config /var/www/craft/config
    COPY ./src/plugins /var/www/craft/plugins
    COPY ./src/templates /var/www/craft/templates
    COPY ./html /var/www/html



Your source code folder should have a html folder for public apache data and a src folder for craft data.

#### In development

Mount volumes in the master image

e.g.

    docker run -d -P --name crafty-site -v src/templates:/var/www/craft/templates -v src/config:/var/www/craft/config -v src/plugins:/var/www/craft/plugins  -v html:/var/www/html darrencrossley/craftcms

You can now work locally while running a (more or less) production env.


#### In Production

Build your image using the above docker file snippet

#### ENV Vars

if you use the bundled config you can set:

 DB_HOST
 DB_NAME
 DB_PASS
 DB_PORT
 DB_USER


## Todo

A lot.

Some kind of shared session handling would be good.

It also relies on an external database.

It probably wont work for you.

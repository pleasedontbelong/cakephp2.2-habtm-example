cakephp2.x-habtm-example
==========

**cakephp2.x-habtm-example** is an example on how to save and validate a HABTM relationship between two models using CakePHP 2.x (The version used in this code is actually 2.2) 

We are using two models: Post and Tags. One post is related to N tags and one tag is related to N posts. This example was based on the generated code using cake bake.

The validation is made on server side only and it's done by using the validation methods provided by cake.

For a more detailed explanation of the code, visit [my website](http://www.pabloleanomartinet.com/cakephp-2-x-saving-and-validating-a-habtm-relation-example/).

Feel free to modify and push your modifications to this code.

### Installation ###

- This is a classic cakephp project, so all you need to do is to copy/clone/pull the folder to your webroot folder
- There is a "database" folder on the root of the project. There you'll find a sql file and a workbench file. I'm using mysql for this example 

### Using docker ###

- pull the image

  `docker pull pleasedontbelong/cakephp_habtm_save`

- run the container
  `docker run -d -p 80:80 pleasedontbelong/cakephp_habtm_save`

- the container is now running and mapped to the port 8 (so you can go to `localhost`on your
browser and it should work fine. You can also map the container to
a different port or mount the volume for tne `/code` folder if you want to modify
the code

### Live Demo ###

You can find a [live demo here](http://cakehabtm.pabloleanomartinet.com)

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/pleasedontbelong/cakephp2.2-habtm-example/trend.png)](https://bitdeli.com/free "Bitdeli Badge")


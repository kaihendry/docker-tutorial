# How to Dockerize a PHP application

Using [abiosoft/caddy:php](https://github.com/abiosoft/caddy-docker/blob/master/php/Dockerfile)

<img src="http://s.natalian.org/2016-08-21/1471745879_2558x1404.png" alt="PHP tutorial">

First please [install Docker](https://docs.docker.com/engine/installation/)

Following contains tutorial steps to help familiarise yourself with running and
building Docker images.

## Lessons

* [1.txt](1.txt) - how to run a Docker container. If you don't have it, it should automatically pull
* [2.txt](2.txt) - we need to specify a host to container port binding, else it won't be accessible
* [3.txt](3.txt) - you can alter the host port
* [4.txt](4.txt) - you can introduce new environment variables
* [5.txt](5.txt) - you can shell into a running container
* [6.txt](6.txt) - you can bind directories between your host and the container
* [7.txt](7.txt) - lets put some examples together
* [8.txt](8.txt) - lets put our source into the image by creating our own [Dockerfile](Dockerfile)
* [9.txt](9.txt) - lets run an "official image"

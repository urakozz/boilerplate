# Docker

#### Install 
``` wget -qO- https://get.docker.com/ | sudo sh ```

#### Run single command in container
```sudo docker run ubuntu:14.04 cat /etc/apt/sources.list```
 - ```ubuntu:14.04``` image from DockerHub [https://registry.hub.docker.com/_/ubuntu/]
 - ```cat /etc/apt/sources.list``` command to run

#### Run container with terminal
```sudo docker run -t -i ubuntu:14.04 /bin/bash```
 - ```-t``` assign terminal
 - ```-i``` interactive connection

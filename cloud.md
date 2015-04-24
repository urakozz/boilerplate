# Cloud Hosting (PaaS)

## Openshift
```rhc env-set APP_DEBUG=true -a php```

```
ctl_app stop
ctl_app start
#OR
rhc app stop -a php
rhc app start -a php
```
- old php
- 3 apps

## Heroku

- 1 app
- fast

# CI & CD

## Travis
- popular swiss knife
- 150/month
- openshift: 4 min build + 5-10min wait
- randomly fails on node-sass build

## Circle CI 
- superfast (cache, containers)
- out of box config with several languages
- 50/month/container
- private is free?..
- most awesome for now
- openshift: 3 min build + 0sec wait

## Codeship
- not bad
- 5 private repos, 100 private builds free

## Shippable
 - good documentation
 - fucken cheap
 - somtimes ultraslow


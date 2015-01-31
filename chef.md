```
mkdir .chef
echo "cookbook_path [ 'provision/cookbooks' ]" > .chef/knife.rb

cd provision/cookbooks
knife cookbook site download apt
tar zxf apt*
rm apt*.tar.gz

Vagrant, VirtualBox, Chef-DK
http://downloads.getchef.com/chef-dk/

vagrant plugin install vagrant-berkshelf
vagrant plugin install vagrant-omnibus 


solo http://habrahabr.ru/company/staply/blog/244111/#first_unread
knife solo bootstrap username@host -i ~/.ssh/ssh_key.pem


psql -U postgres -h localhost
CREATE USER vagrant WITH PASSWORD 'vagrant';
ALTER USER vagrant WITH SUPERUSER;
CREATE DATABASE vagrant

REVOKE ALL ON schema public FROM public;
GRANT ALL ON schema public TO vagrant;
ALTER USER postgres WITH PASSWORD 'postgres';
```

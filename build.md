```
sudo apt-get -y install nano build-essential checkinstall zip
sudo apt-get install pkg-config libxml2-dev libssl-dev libzip2 libbz2-dev libcurl4-openssl-dev libjpeg-dev libpng-dev libfreetype6-dev libicu-dev libmcrypt-dev libxslt1-dev 



sudo apt-get build-dep php5 php5-fpm


apt-get source php5

sudo dpkg-buildpackage -rfakeroot
sudo DEB_BUILD_OPTIONS=nocheck dpkg-buildpackage -rfakeroot

sudo make dependencies

sudo checkinstall --install=no

exts:
phpize --clean
phpize
./configure
make
make install

#extension build deb
sudo apt-get install php5-dev dh-make-php fakeroot xsltproc
sudo dh-make-pecl --depends libv8-dev --build-depends libv8-dev —-maintainer 'Yury Kozyrev <email@email.com>' v8js-0.1.3
# echo 'debian/v8js.ini etc/php5/mods-available' | tee -a debian/php5-v8js.install

#to .bashrc 
export DEBFULLNAME="Yury Kozyrev"
export DEBEMAIL="email@email.com"
export LC_ALL='en_US.UTF-8'

--enable-maintainer-zts --enable-pthreads \

dch
sudo DEB_BUILD_OPTIONS=nocheck debuild
cd ../
dupload

echo "deb http://trusty.dist.somehost.ru/some-trusty unstable/amd64/" | sudo tee -a /etc/apt/sources.list

curl dist.somehost.ru/REPO.asc | sudo apt-key add -

#from Makefile
fakeroot debian/rules clean
fakeroot debian/rules build
fakeroot debian/rules binary
# http://santi-bassett.blogspot.se/2014/07/how-to-create-debian-package.html

#From git
http://lpenz.org/articles/debgit/

```

https://wiki.debian.org/IntroDebianPackaging

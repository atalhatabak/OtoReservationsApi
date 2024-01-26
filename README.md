
Kurulum
git clone https://github.com/atalhatabak/OtoReservationsApi.git

cd OtoReservationsApi

composer install

php artisan migrate

php artisan db:seed

Bu proje sadece apidir, GUI için <a href="https://github.com/atalhatabak/OtoReservationsWeb">OtoReservationsWeb Projesini></a> Kurun

<code> // .env dosyasındaki DB_DATABASE=Your/Project/Path/Database.sqlite bölümüne kendi proje yolunu ekleyin. </code>

<code> Database olarak sqlite kullanıyor, sqlite kullanımı için php sqlite eklentisini kurun ve php.ini dosyasında sqlite eklentisini etkinleştirin</code>



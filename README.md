# VisitPackage-laravel
Using this package, you can save the information including the IP and its browser in your database and then see your visit statistics.

Composer Install (for Laravel 5+)
```
composer require mobin/visit-package
```
Publish and Run the migrations
```
php artisan vendor:publish --provider="Mobin\VisitPackage\VisitServiceProvider" --tag=migrations

php artisan migrate
```
if you're using Laravel version 5.5+, Likeable package will be auto-discovered by Laravel. and if not: register the package in config/app.php providers array manually.
```
'providers' => [
	...
	\Mobin\VisitPackage\VisitServiceProvider::class,
],
```
Useage
Get statistics in the controls of the pages you want:
```
Visit::make();
```
Show total hits
```
Visit::count(); 
```
> Credits:
> Mobiniranir@gmail.com

> Btc Donate : 1FsTmJ99h5Ztd6EdPFr9Dn918bQ8VgDscR

> Ether Donate : 0xa30d5E6DE149c6da703158d698086d77fFC75A45

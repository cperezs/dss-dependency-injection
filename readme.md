# Dependency injection example

Important files:
- Controller class `App\Http\Controllers\TestControler` depends upon `App\ISerializer`
- `App\CommaSerializer` and `App\DashSerializer` implement `App\ISerializer`
- `App\Providers\SerializerServiceProvider` registers a serializer implementation in the service container to perform automatic dependency injection

How to test the project:
- Execute:
```shell
php artisan key:generate # only the first time after downloadint the project
php artisan serve
```
- Open a web browser and type `http://localhost:8000`
- Modify `App\Providers\SerializerServiceProvider` and register `App\DashSerializer` instead of `App\CommaSerializer`
- Reload your browser

<!-- <p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->









## About Solving Pen API

The Solving Pen API is the backend of a Laravel powered Question and Answer (Q and A) platform. Solving Pen aims to provide a means by which students can help other students in the university.

## Consuming the API

### Endpoints
The base url is not known at this time, whatever it turns out to be should be prepended to the endpoints.

### User Login
**endpoint**: POST /api/login<br>
**parameters**: email, password<br>
**payload type**: json<br>
**sample body**:<br>
```json     
{
    "email": "example@example.com",
    "password": "password"
}
```
**sample response**:

```json
    {
        "success": {
            "status": "OK",
            "token": "QiOiIxIiwianRpIjoiNTJjNzJiZWU3N2ZmZmUzYzY3MDM1ODI5ODkzNWFiY2YwNzg1OTZjYTVmZDQyN2M5ZmU5NGQxYTNmZDRmZDA0MzhjMjkwNDdhZTBhZGU1YzEiLCJpYXQiOjE1ODE1NzY4MjMsIm5iZiI6MTU4MTU3NjgyMywiZXhwIjoxNjEzMTk5MjIzLCJzzvTdT3oDAJB6VYBOz2-Oxl_Evfl6a9icLunan0ohi4x9-GIhqSBOFbIU9qqok8sFpO_bPOyyCbAUNpYwwM_kCnBM0w2Yz6YEbzz6k_lxJWLjHfwurbGZF69nNvjc7CceE6uaLfZsV6AvIexPC6LDQp6YpH1wn0RIPUfeZkx15567-OYrtZSQu60i42kSU7btR6rAuKAH",
            "user": {
                "id": 11,
                "firstName": "Adebimpe",
                "lastName": "Babatunde",
                "email": "c@d.com",
                "email_verified_at": null,
                "created_at": "2020-02-13 05:54:51",
                "updated_at": "2020-02-13 05:54:51"
            }
        }
    }
```
<hr>

### User Register
**endpoint**: POST /api/register<br>
**parameters**: firstName, lastName, email, password, password_confirmation<br>
**payload type**: json<br>
**payload sample**: 
```json
{
    "firstName": "Adebimpe",
    "lastName": "Babatunde",
    "email": "c@d.com",
    "password": "123456",
    "password_confirmation": "123456"
}
```
**sample response**:
```json
{
    "success": {
        "status": "OK",
        "user": {
            "firstName": "Adebimpe",
            "lastName": "Babatunde",
            "email": "c@d.com",
            "updated_at": "2020-02-13 05:54:51",
            "created_at": "2020-02-13 05:54:51",
            "id": 11
        }
    }  
}
```
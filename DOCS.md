## About Solving Pen API

The Solving Pen API is the backend of a Laravel powered Question and Answer (Q & A) platform. Solving Pen aims to provide a means by which students can help other students in the same university.

## Consuming the API

### Endpoints
The base url is not known at this time, whatever it turns out to be should be prepended to the endpoints.

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
**response sample**:
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

<hr>

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
**response sample**:

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
After the above response is obtained, the token should be stored temporarily for subsequent requests. Subsequent requests should include two headers, `Accept` and `Authorization`. `Accept` should have the value `application/json` while `Authorization` should have the value `Bearer` and the previously stored token separated by a space, for example `Bearer QiOiIxIiwianRpIjoiNTJjNzJiZWU3N2ZmZmUzYzY3MDM1ODI5ODkzNWFiY2YwNzg1OTZjYTVmZDQyN2M5ZmU5NGQxYTNmZDRmZDA0MzhjMjkwNDdhZTBhZGU1YzEiLCJpYXQiOjE1ODE1NzY4MjMsIm5iZiI6MTU4MTU3NjgyMywiZXhwIjoxNjEzMTk5MjIzLCJzzvTdT3oDAJB6VYBOz2-Oxl_Evfl6a9icLunan0ohi4x9-GIhqSBOFbIU9qqok8sFpO_bPOyyCbAUNpYwwM_kCnBM0w2Yz6YEbzz6k_lxJWLjHfwurbGZF69nNvjc7CceE6uaLfZsV6AvIexPC6LDQp6YpH1wn0RIPUfeZkx15567-OYrtZSQu60i42kSU7btR6rAuKAH`.

<hr>

### Get client details
**endpoint**: GET /api/me<br>
**response sample**:
```json
{
    "user": {
        "id": 11,
        "firstName": "Adebimpe",
        "lastName": "Babatunde",
        "email": "c@d.com",
        "email_verified_at": null,
        "created_at": "2020-02-13 05:54:51",
        "updated_at": "2020-02-13 05:54:51"
    },
    "userMeta": null
}
```

If the user does not have updated information, the value of `userMeta` is null, else it will return other user details as shown below.
```json
{
    "user": {
        "id": 10,
        "firstName": "Damilola",
        "lastName": "Agboola",
        "email": "olumide.saheed@tamunoemi.gov.ng",
        "email_verified_at": null,
        "created_at": "2020-02-09 06:01:35",
        "updated_at": "2020-02-09 06:01:35"
    },
    "userMeta": {
        "id": 3,
        "user_id": 10,
        "interest_id": 10,
        "profile_pic": "https://lorempixel.com/640/480/?16072",
        "date_of_birth": "1990-11-15",
        "website": "oyinkansola.net",
        "gender": "male",
        "phone": "08123232323",
        "points": 0,
        "description": "Possimus voluptatem nisi at odio. Cum autem mollitia omnis. Repellendus excepturi est dicta id. Pariatur provident aspernatur ratione voluptatem."
    }
}
```


+--------+----------+-----------------------------------------+-----------------------------------+---------------------------------------------------------------------------+------------+
| Domain | Method   | URI                                     | Name                              | Action                                                                    | Middleware |
+--------+----------+-----------------------------------------+-----------------------------------+---------------------------------------------------------------------------+------------+
|        | GET|HEAD | /                                       |                                   | Closure                                                                   | web        |
|        | POST     | api/auth/login                          |                                   | App\Http\Controllers\AuthController@login                                 | api        |
|        | GET|HEAD | api/auth/logout                         |                                   | App\Http\Controllers\AuthController@logout                                | api        |
|        |          |                                         |                                   |                                                                           | auth:api   |
|        | GET|HEAD | api/auth/userinfo                       |                                   | App\Http\Controllers\AuthController@userInfo                              | api        |
|        |          |                                         |                                   |                                                                           | auth:api   |
|        | GET|HEAD | api/v1/countries                        |                                   | App\Http\Controllers\CountryController@index                              | api        |
|        |          |                                         |                                   |                                                                           | auth:api   |
|        | GET|HEAD | api/v1/user                             |                                   | App\Http\Controllers\AuthController@user                                  | api        |
|        |          |                                         |                                   |                                                                           | auth:api   |
|        | GET|HEAD | api/v1/users                            |                                   | App\Http\Controllers\UserController@index                                 | api        |
|        | POST     | api/v1/users                            |                                   | App\Http\Controllers\UserController@store                                 | api        |
|        | GET|HEAD | oauth/authorize                         | passport.authorizations.authorize | Laravel\Passport\Http\Controllers\AuthorizationController@authorize       | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | POST     | oauth/authorize                         | passport.authorizations.approve   | Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | DELETE   | oauth/authorize                         | passport.authorizations.deny      | Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | GET|HEAD | oauth/clients                           | passport.clients.index            | Laravel\Passport\Http\Controllers\ClientController@forUser                | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | POST     | oauth/clients                           | passport.clients.store            | Laravel\Passport\Http\Controllers\ClientController@store                  | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | PUT      | oauth/clients/{client_id}               | passport.clients.update           | Laravel\Passport\Http\Controllers\ClientController@update                 | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | DELETE   | oauth/clients/{client_id}               | passport.clients.destroy          | Laravel\Passport\Http\Controllers\ClientController@destroy                | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | GET|HEAD | oauth/personal-access-tokens            | passport.personal.tokens.index    | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@forUser   | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | POST     | oauth/personal-access-tokens            | passport.personal.tokens.store    | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@store     | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | DELETE   | oauth/personal-access-tokens/{token_id} | passport.personal.tokens.destroy  | Laravel\Passport\Http\Controllers\PersonalAccessTokenController@destroy   | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | GET|HEAD | oauth/scopes                            | passport.scopes.index             | Laravel\Passport\Http\Controllers\ScopeController@all                     | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | POST     | oauth/token                             | passport.token                    | Laravel\Passport\Http\Controllers\AccessTokenController@issueToken        | throttle   |
|        | POST     | oauth/token/refresh                     | passport.token.refresh            | Laravel\Passport\Http\Controllers\TransientTokenController@refresh        | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | GET|HEAD | oauth/tokens                            | passport.tokens.index             | Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser | web        |
|        |          |                                         |                                   |                                                                           | auth       |
|        | DELETE   | oauth/tokens/{token_id}                 | passport.tokens.destroy           | Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy | web        |
|        |          |                                         |                                   |                                                                           | auth       |
+--------+----------+-----------------------------------------+-----------------------------------+---------------------------------------------------------------------------+------------+

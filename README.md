Example implementation of [vizir/laravel-keycloak-web-guard](https://github.com/Vizir/laravel-keycloak-web-guard).

Make sure you have docker and docker-compose.

Copy `docker-compose.sample.yml` to `docker-compose.yml`.

Run `docker/development/generate-certificate.sh laravel.localtest.me` to generate the web certificate.

Run `docker/development/generate-certificate.sh mail.laravel.localtest.me` to generate the mail certificate.

Run `docker/development/generate-certificate.sh sso.laravel.localtest.me` to generate the SSO certificate.

Now run `docker-compose up`.

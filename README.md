
> [!CAUTION]
> es necesario por tema de seguridad crear una nueva `APP_KEY`, para ello corre el comando `php artisan key:generate` o genera uno de 44 caracteres [generador online](https://generate-random.org/laravel-key-generator?count=1)

### registrar una aplicación en https://dev.twitch.tv/console/apps

### Crear el archivo `.env` y agregar las siguientes variables
```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:IDHF3rh6KUKeXZhZhCyFXDAlH7veBeYrZkGfW9HdmEQ=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


TWITCH_CLIENT_ID="XXXXXX"
TWITCH_SECRET="XXXXXX"

# url de la web (URL de redireccionamiento de OAuth en https://dev.twitch.tv/console/apps)
TWITCH_REDIRECT_URI="https://baitybail.tv/auth/twitch/callback"

# el codigo de seguridad, igual que la variable `WEB_TOKEN` .env de obs-twitch-gift
HASH_OBS_TWITCH_API="XXXXXX"

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=baitybait
DB_USERNAME=XXXX
DB_PASSWORD=XXXX
```

2. crear la base de datos
importar la base de datos [baitybait.sql](https://github.com/Veronesi/api-twitch-gift/blob/master/baitybait.sql)

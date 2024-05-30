1. Crear el archivo `.env` (copiar el `.env.demo`) y agregar las siguientes variables

# registrar una aplicación en https://dev.twitch.tv/console/apps
```env
TWITCH_CLIENT_ID="123456"
TWITCH_SECRET="ASDFGH"


# url de la web (URL de redireccionamiento de OAuth en https://dev.twitch.tv/console/apps)
TWITCH_REDIRECT_URI="https://baitybail.tv/auth/twitch/callback"

# el codigo de seguridad, igual que la variable `WEB_TOKEN` .env de obs-twitch-gift
HASH_OBS_TWITCH_API="123456"

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=baitybait
DB_USERNAME=root
DB_PASSWORD=password1234
```

2. crear la base de datos
importar la base de datos [baitybait.sql](https://github.com/Veronesi/api-twitch-gift/blob/master/baitybait.sql)

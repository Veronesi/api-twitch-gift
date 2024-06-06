# 🎁 Web para Bot de Twitch para dropeo masivo de llaves

> [!NOTE]  
> Es necesario correr el 'dropeador' de claves, [ver repositorio](https://github.com/Veronesi/obs-twitch-gift) (o insertarlas manualmente en la base de datos)

> [!CAUTION]
> Por tema de seguridad crear una nueva `APP_KEY`, para ello corre el comando `php artisan key:generate` o genera uno de 44 caracteres [generador online](https://generate-random.org/laravel-key-generator?count=1)

### 🎬 Ejemplo de uso con un reclamador automatico [Link Youtube](https://www.youtube.com/watch?v=Kjc9XxFy2dA)

## Tabla de contenido
- [Crear el archivo de variables](#crear-el-archivo-de-variables)
- [Registrar aplicación en twitch](#registrar-aplicación-en-twitch)
- [Crear la base de datos](#crear-la-base-de-datos)
- [Modificar textos e imagenes](#modificar-textos-e-imagenes)
- [Subir archivos al servidor web](#subir-los-archivos-incluidos-en-este-repositorio-al-servidor-web)

### Crear el archivo de variables 
1. Crear el archivo `.env` en la carpeta raíz del proyecto y agregar las siguientes variables
en la varialbe `TWITCH_REDIRECT_URI` poner la misma que pusiste al crear la aplicación en twitch [registrar aplicación en twitch](#registrar-aplicación-en-twitch)
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
WEB_TOKEN="XXXXXX"

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=baitybait
DB_USERNAME=XXXX
DB_PASSWORD=XXXX
```

### Registrar aplicación en twitch
1. registrar una aplicación https://dev.twitch.tv/console/apps
2. haz click en el botón `+ Registra tu aplicación`
3. En el campo `URL de redireccionamiento de OAuth` deberás poner la url de la web donde se reclamaran las claves, recuerda de agregar al final `/auth/twitch/callback` por ejemplo `https://baitybait.tv/auth/twitch/callback`
4. En `categoría` selecciona `Website Integration`
5. Copia el `ID de cliente` para luego ponerlo en el archivo `.env` en la variable de entorno `TWITCH_CLIENT_ID`
6. Copia el `Secreto del cliente` o genera una nueva para ponerlo en el archivo `.env` en la variable de entorno `TWITCH_SECRET`

### Crear la base de datos
1. Crear una base de datos en el servidor web ([guía para hostinger](https://support.hostinger.com/es/articles/1583542-como-crear-una-base-de-datos-mysql))
2. Copiar el `nombre de la base de datos` para ponerlo en el archivo `.env` en la variable de entorno `DB_DATABASE`
3. Copiar el `nombre de usuario` para ponerlo en el archivo `.env` en la variable de entorno `DB_USERNAME`
4. Copiar la `contraseña` para ponerlo en el archivo `.env` en la variable de entorno `DB_PASSWORD`
5. importar la tabla para alamacenar los ganadores junto con la clave ganada [baitybait.sql](https://github.com/Veronesi/api-twitch-gift/blob/master/baitybait.sql), en caso de tener phpmyadmin en el servidor, [ver articulo de turorial](https://support.hostinger.com/en/articles/1884149-how-to-import-a-database-with-phpmyadmin)

### Modificar textos e imagenes
en caso de querer modificar la páginas:

1. 🏠 Página del home: `resources/views/welcome.blade.php` [ver](https://github.com/Veronesi/api-twitch-gift/blob/master/resources/views/welcome.blade.php)
2. 👑 Página con las listas de claves `resources/views/profile.blade.php` [ver](https://github.com/Veronesi/api-twitch-gift/blob/master/resources/views/profile.blade.php)

### Subir los archivos incluidos en este repositorio al servidor web
en caso de utilizar hostinger, [ver articulo de tutorial](https://www.hostinger.com.ar/tutoriales/como-usar-el-administrador-de-archivos-de-hostinger)

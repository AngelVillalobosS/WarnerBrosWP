# Envioroment Configuration
## Primeros Pasos
### Configurando tu git para usar GitHub
#### Deberás contar con las siguientes extensiones para VScode
[GitHub Codespaces | Id: GitHub.codespaces | Version: 1.17.3](https://marketplace.visualstudio.com/items?itemName=GitHub.codespaces)

[Nodejs code snippets | Id: harsh-dobariya.nodejs-code-snippets | Version: 1.1.2](https://marketplace.visualstudio.com/items?itemName=harsh-dobariya.nodejs-code-snippets)

[PHP Intelephense | Id: bmewburn.vscode-intelephense-client | Version: 1.12.6
](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
#### Clonar el proyecto
Para clonar el proyecto deberás de ya tener instaladas las extensiones antes solicitadas, a su vez GitHub Codespaces te pedirá que inicies sesion en tu cuenta de GitHub.

Una vez que ya tengas dichas extensiones dentro de ***VScode*** ingresarás el siguiente comando con el teclado `Ctrl + Shift + P`.

En la barra de comandos ingresarás los siguientes comandos:
``` 
git: Clone
```
Te dará a escoger entre los repositorios que tienes, donde deberás localizar el repositorio con nombre: `WarnerBrosWP`

Al cual le darás `ENTER`, una vez se termine de clonar el respositorio, deberás seguir los siguientes pasos.

#### En la misma ruta donde se aloja el proyecto ***WarnerBrosWP***
Ingresar los siguientes comandos:
```bash 
git config user.name "Tu nombre de usuario de github"
git config user.email "El correo electronico con el que te registraste en github"
```
### Crear con artisan
Para crear con artisan deberás estar localizado en la ruta donde clonaste el proyecto de laravel, por ejemplo: `C:\xampp\htdocs\WarnerBrosWP`
#### Esto se hace usando el comando "cd"
```bash
cd .. #Para subir una carpeta dentro de la terminal
cd /nombrecarpeta #Para entrar en una carpeta
```
#### Crear Modelos
```bash
php artisan make:model nombremodelo
```
#### Crear Controladores
```bash
php artisan make:controller nombreController
```
###
## Instalación y Configuración de Node.js y Vite
### Paso 1
Primero tendrás que instalar Node.js
 - https://nodejs.org/en

Una vez lo tengas instalado deberas seguir el paso dos.

### Paso 2
Una vez ya tengas instalado Node.js deberás ir a Powershell y ejecutar el siguiente comando:

```bash 
Set-ExecutionPolicy RemoteSigned
```
### Paso 3
Deberás dirigirte a la ruta donde tengas tu proyecto 
- Por ejemplo: ```C:\xampp\htdocs\Hero```

Una vez ya estes ahí deberás ingresar los siguientes comandos:
```bash
npm install
```
En cuanto finalice la instalación pondrás el siguiente comando:

 ***ADVERTENCIA: Usar este comando en "Configuración  previa a la ejecución"***
```bash
npm run dev
```
## Configuración previa a la ejecución
### Paso 1 | Asegurarse de tener el archivo .env
Deberás buscar el archivo .env en la raiz del proyecto, si no cuentas con dicho archivo deberás ingresar el siguiente comando en la ruta del proyecto.
```bash
cp .env.example .env
```
### Paso 2 | Configurar la Variable "APP_URL" en .env

Abre el archivo .env y asegúrate de que APP_URL esté configurada correctamente. Debe apuntar a la URL local de tu servidor Laravel, por ejemplo:

```dotenv
APP_URL=http://localhost
```

### Paso 3 | Deten y reinicia el Servidor Vite

Después de actualizar el archivo .env, detén el proceso de Vite y reinícialo para que cargue las nuevas configuraciones:

```bash
npm run dev
```

### Paso 4 | Verifica vite.config.js

En tu archivo vite.config.js, verifica que APP_URL esté siendo usada de la manera correcta. Puedes utilizar dotenv para cargar automáticamente las variables de entorno de tu archivo .env en el archivo de configuración. Asegúrate de que vite.config.js esté configurado así:

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dotenv from 'dotenv';

dotenv.config(); // Cargar las variables de entorno

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

## Paso 5 | Limpia Caché (Si es neceario)

Si aún tienes problemas, intenta limpiar el caché de configuración de Laravel:

```bash
php artisan config:cache
```

Luego, vuelve a intentar ejecutar el servidor.

## Posibles errores

Si Laravel no ha encontrado una clave de cifrado para la aplicación, la cual es esencial para varias funcionalidades, como la encriptación de sesiones y datos sensibles

### 1. Genera una Nueva Clave de Cifrado
Puedes generar una clave de cifrado ejecutando el siguiente comando en la terminal en la raíz de tu proyecto:

```bash
php artisan key:generate
```
### 2. Verifica el Archivo .env
Después de ejecutar el comando, abre el archivo .env y verifica que ahora haya una línea que defina APP_KEY. Debe verse algo así:

```dotenv
APP_KEY=base64:abcdefgh1234567890abcdefghijklmnopqrstuvwxyz=
```

### 3. Limpiar Caché de Configuración (si es necesario)
Si aún tienes problemas después de generar la clave, intenta limpiar la caché de configuración de Laravel con el siguiente comando:

```bash
php artisan config:cache
```


## Solución para el siguiente problema:
*Database file at path [C:\xampp\htdocs\Hero\database\database.sqlite] does not exist. Ensure this is an absolute path to the database. (Connection: sqlite, SQL: select * from "sessions" where "id" = lM0bxtmfe0bZMGUPX1rQSTcN97z670hgc0RKZjEA limit 1)*

### 1. Crea el Archivo database.sqlite
Si deseas usar SQLite como tu base de datos, sigue estos pasos para crear el archivo:

Ve a la carpeta ``C:\xampp\htdocs\Hero\database.``
Dentro de esa carpeta, crea un archivo vacío llamado ***database.sqlite.***

### 2. Configura .env para SQLite
Asegúrate de que el archivo .env está configurado correctamente para usar SQLite. En el archivo .env, verifica que la configuración de la base de datos tenga las siguientes líneas:

```dotenv
DB_CONNECTION=sqlite
DB_DATABASE=C:\xampp\htdocs\Hero\database\database.sqlite
```

### 3. Verifica Permisos
Asegúrate de que el archivo database.sqlite tenga los permisos necesarios para que Laravel pueda escribir en él. Esto es especialmente importante en Windows.

### 4. Limpia la Caché de Configuración (Opcional)
Después de realizar estos cambios, puede ser útil limpiar la caché de configuración para asegurarte de que Laravel reconoce la nueva configuración:

```bash
php artisan config:cache
```
### 5. Alternativa: Usar MySQL
Si prefieres usar MySQL en lugar de SQLite, puedes cambiar la configuración de la base de datos en el archivo .env de la siguiente manera:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

Si optas por MySQL, asegúrate de crear la base de datos en phpMyAdmin o en el cliente de MySQL y de tener las credenciales correctas.

### Posible Error:
*SQLSTATE[HY000]: General error: 1 no such table: sessions (Connection: sqlite, SQL: select * from "sessions" where "id" = kXkoQzPD4Ftl10NILY1eumjqDjrAG0FQGRx0jU2s limit 1)*

Este error indica que Laravel está tratando de acceder a la tabla `sessions` en la base de datos, pero dicha tabla no existe. Para resolver este problema, puedes crear la tabla `sessions` en tu base de datos ejecutando las migraciones de Laravel.

### Pasos para solucionar el error:

1. **Ejecuta las migraciones de Laravel**:
   Las migraciones de Laravel se encargan de crear las tablas necesarias en la base de datos, incluidas las tablas para sesiones, usuarios, etc.

   Ejecuta el siguiente comando en la terminal en el directorio de tu proyecto Laravel:

   ```bash
   php artisan migrate
   ```

   Esto ejecutará todas las migraciones que no se hayan aplicado aún, creando las tablas que Laravel necesita, incluyendo `sessions`.

2. **Verifica que estás usando la base de datos correcta**:
   Asegúrate de que en el archivo `.env` la configuración de la base de datos esté correctamente configurada. Si estás utilizando SQLite, verifica que el archivo `database.sqlite` está en la ruta especificada (`C:\xampp\htdocs\Hero\database\database.sqlite`), y que `.env` tiene la siguiente línea:

   ```dotenv
   DB_CONNECTION=sqlite
   DB_DATABASE=C:\xampp\htdocs\Hero\database\database.sqlite
   ```

3. **Limpiar la caché de configuración**:
   Si realizaste cambios en el archivo `.env`, es buena idea limpiar la caché de configuración para que Laravel reconozca esos cambios:

   ```bash
   php artisan config:cache
   ```

4. **Si el problema persiste**:
   Si después de ejecutar las migraciones el error persiste, es posible que Laravel no esté accediendo a la base de datos correcta. Verifica que la ruta del archivo SQLite sea absoluta y esté bien especificada.

5. **Revisa el archivo `.env` para otras configuraciones**:
   Asegúrate de que no haya problemas en otras configuraciones de conexión en el archivo `.env` (por ejemplo, que no esté utilizando otra base de datos).

Si los pasos anteriores fueron realizados correctamente, el error debería solucionarse y Laravel debería poder acceder a la tabla `sessions`.

## Aditional command
```bash
npm install dotenv
```
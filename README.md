# PlanIt – Gestor de Proyectos con Laravel + DDEV

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

---

## ✅ Requisitos

Antes de empezar, asegúrate de tener instalados:

- **DDEV** (recomendado para entorno local)  
- **PHP** 8.1 o superior  
- **Composer**  
- **Node.js** y **npm**  
- **Git**  

> DDEV se encargará de crear contenedores de PHP, MariaDB/MySQL y servir la app automáticamente.

---

## ⚙️ Clonar y configurar el proyecto

1. **Clona el repositorio**  
```bash
git clone https://github.com/mtirador/Laravel.git
cd Laravel
````

2. **Configura DDEV**

```bash
ddev config --project-type=laravel --docroot=public
ddev start
```

* `project-type=laravel` → para configurar PHP, Composer y MySQL/MariaDB
* `docroot=public` → Laravel sirve el contenido desde `public`

3. **Instala dependencias de PHP y Node**

```bash
ddev composer install
ddev npm install
```

4. **Compila assets (Vite/JS/CSS)**

```bash
ddev npm run dev
```

---

## 🗄 Configuración de la base de datos

Laravel está configurado para usar MariaDB (compatible con MySQL) en DDEV:

```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=db
DB_PASSWORD=db
```

* La base de datos `db` ya existe dentro de DDEV.
* Se usarán **sesiones, cache y colas en la base de datos**.

Si quieres simplificar durante el desarrollo, puedes usar archivos en lugar de base de datos para sesiones/cache:

```env
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

---

## 🧪 Migraciones necesarias

Para dejar el proyecto completamente funcional:

```bash
# Crear tablas para sesiones, cache y jobs
ddev php artisan session:table
ddev php artisan cache:table
ddev php artisan queue:table

# Ejecutar todas las migraciones
ddev php artisan migrate

# Limpiar caché de configuración
ddev php artisan config:clear
```

> Después de esto, tu aplicación estará lista y sin errores de tablas faltantes.

---

## 🚀 Levantar la aplicación

Una vez configurado todo, abre tu navegador en:

[https://planit.ddev.site](https://planit.ddev.site)

> Todos los comandos de Artisan y Composer se ejecutan con `ddev php` o `ddev composer`.

---

## 🧪 ¿Qué incluye este proyecto?

* Laravel 12.x
* Entorno **DDEV** listo para desarrollo local
* Autenticación con **Laravel Breeze**
* Migraciones listas para **sessions**, **cache** y **jobs**
* Estructura preparada para desarrollar el **Gestor de Proyectos con Tareas**
* Base de datos MariaDB/MySQL configurada y funcional
* `.env` listo para desarrollo local
* Base para empezar a crear modelos, controladores y vistas

---

## 🗂 Estructura del repositorio

* `app/` → Lógica de la aplicación (modelos, controladores, etc.)
* `bootstrap/` → Arranque de Laravel
* `config/` → Archivos de configuración
* `database/` → Migraciones y seeds
* `public/` → Punto de entrada público
* `resources/` → Vistas Blade, CSS y JS
* `routes/` → Definición de rutas
* `storage/` → Caché, logs y sesiones
* `tests/` → Pruebas automatizadas
* `.env` → Variables de entorno ya configuradas

---

## 📦 No se incluye

Para mantener el repositorio ligero:

* `/vendor` → dependencias de PHP
* `/node_modules` → dependencias de JS

> Se regeneran con `ddev composer install` y `ddev npm install`.

---

## 💡 Consejos de desarrollo

* Usa `php artisan make:model`, `make:controller` y recursos Blade para crear proyectos y tareas.
* Si cambias `.env`, siempre limpia la caché de config:

```bash
ddev php artisan config:clear
```

* Breeze ya provee autenticación lista para usar.
* Para pruebas rápidas, puedes usar:

```env
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

* Mantén tu código en `app/`, vistas en `resources/views/` y assets en `resources/js/` o `resources/css/`.

---

## 📝 Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).



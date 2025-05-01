



Este es un proyecto Laravel creado como entorno de práctica

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

---

## ✅ Requisitos

Antes de empezar, asegúrate de tener instalados:

- **PHP** 8.1 o superior  
- **Composer**  
- **Node.js** y **npm**  
- **Git**

---

## ⚙️ Clonar y ejecutar

1. **Clona el repositorio**  
   ```bash
   git clone https://github.com/mtirador/Laravel.git
   cd Laravel
   ```

2. **Instala dependencias de PHP**  
   ```bash
   composer install
   ```

3. **Instala dependencias de JavaScript** (si vas a compilar assets)  
   ```bash
   npm install
   ```

4. **Inicia el servidor de Laravel**  
   ```bash
   php artisan serve
   ```  
   Esto levanta la aplicación en `http://127.0.0.1:8000`.

5. **Compila assets en segundo terminal** (opcional)  
   ```bash
   npm run dev
   ```  
   Si tienes CSS/JS personalizados, Vite los servirá en caliente.

¡Y ya está! Tu proyecto arrancará **exactamente** como en mi máquina, con la base de datos SQLite incluida y la clave de app generada.

---

## 🧪 ¿Qué incluye este proyecto?

- Laravel 12.x  
- Base de datos **SQLite** preconfigurada en `database/database.sqlite`  
- Archivo de entorno **`.env`** listo para usar  
- Una vista de ejemplo en `resources/views/home.blade.php`

---

## 🗂 Estructura del repositorio

- `app/` → Lógica de tu aplicación  
- `bootstrap/` → Arranque de Laravel  
- `config/` → Archivos de configuración  
- `database/` → Migraciones y base de datos SQLite  
- `public/` → Punto de entrada público  
- `resources/` → Vistas Blade, CSS y JS  
- `routes/` → Definición de rutas  
- `storage/` → Caché, logs y sesiones  
- `tests/` → Pruebas automatizadas  
- `.env` → Variables de entorno (ya configurado)  

---

## 📦 No se incluye

> Para mantener el repositorio ligero, **solo** se ignoran:

- `/vendor`  (dependencias de PHP)  
- `/node_modules`  (dependencias de JavaScript)  

Ambos se regeneran con `composer install` y `npm install`.

---

## 📬 Contacto

Si tienes dudas o sugerencias, abre un [issue](https://github.com/mtirador/Laravel/issues) o contáctame por GitHub.

---

## 📝 Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).


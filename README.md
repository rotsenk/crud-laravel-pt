# CRUD Laravel - MySQL

Este es un CRUD desarrollado en Laravel que permite gestionar registros en una base de datos.

## **Requisitos**
- PHP >= 8.0
- Composer
- Laravel >= 10
- MySQL 
- Servidor local (WAMP, Laravel)

## **Instalación**

### 1️⃣ **Clonar el repositorio**
```bash
git clone https://github.com/rotsenk/crud-laravel-pt.git
cd crud-laravel-pt
```

### 2️⃣ **Instalar dependencias**
```bash
composer install
```

### 3️⃣ **Configurar el archivo `.env`**
Copia el archivo `.env.example` y renómbralo a `.env`:
```bash
cp .env.example .env
```
Luego, edita el archivo `.env` y configura la base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crudfacultad
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ **Generar clave de aplicación**
```bash
php artisan key:generate
```

### 5️⃣ **Migrar la base de datos**
```bash
php artisan migrate --seed
```

### 6️⃣ **Iniciar el servidor**
```bash
php artisan serve
```
Luego accede en el navegador a: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

<!-- ## 🖼 **Capturas de pantalla**
_Agrega aquí imágenes de la aplicación en funcionamiento_ -->

## 📝 **Licencia**
Este proyecto está bajo la licencia MIT.

---

🚀 _Desarrollado por [Nestor Rivas](https://github.com/rotsenk)_ 

# Gestión de Tareas - Cliente Servidor

Esta es una aplicacion desarrollado con la arquitectura cliente-servidor utilizando "Laravel", como parte del curso de Analisis de sistemas II.

# Características principales
- Registro y autenticación de usuarios.
- Creación, edición y eliminación de tareas.
- Listado de tareas con estado (pendiente, completada).
- Diseño minimalista y moderno con Blade.

# Requisitos
- PHP >= 8.1
- Composer
- Laravel 10
- MySQL o MariaDB
- Node.js (para compilar assets con Vite)

# Instalación
1. Clonar el repositorio:
   
   git clone https://github.com/TU_USUARIO/tareas_cliente-servidor.git
   cd tareas_cliente-servidor

2. Instalar dependencias:
   composer install
   npm install && npm run dev

3. Configurar archivo .env
   cp .env.example .env
   php artisan key:generate

4. Crear base de datos y ejecutar migraciones:
   php artisan migrate

5. Levantar el servidor de desarrllo:
   php artisan serve




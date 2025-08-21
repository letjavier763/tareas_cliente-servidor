<p align="center"><a href="#" target="_blank"><img src="https://img.icons8.com/?size=512&id=74402&format=png" width="200" alt="Logo Tareas"></a></p>

<p align="center">
<a href="https://github.com/TU_USUARIO/tareas_cliente-servidor/actions"><img src="https://img.shields.io/github/actions/workflow/status/TU_USUARIO/tareas_cliente-servidor/laravel.yml?branch=master" alt="Build Status"></a>
<a href="#"><img src="https://img.shields.io/github/stars/TU_USUARIO/tareas_cliente-servidor" alt="Stars"></a>
<a href="#"><img src="https://img.shields.io/github/license/TU_USUARIO/tareas_cliente-servidor" alt="License"></a>
</p># Gestión de Tareas - Cliente Servidor

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
   
   git clone https://github.com/letjavier763/tareas_cliente-servidor.git
   cd tareas_cliente-servidor

2. Instalar dependencias:
   - composer install
   - npm install && npm run dev

3. Configurar archivo .env:
   - cp .env.example .env
   - php artisan key:generate

4. Crear base de datos y ejecutar migraciones:
   - php artisan migrate

5. Levantar el servidor de desarrllo:
   - php artisan serve

# Uso
- Los usuarios pueden registrarse e iniciar sesión.
- Crear nuevas tareas desde el panel.
- Editar o eliminar tareas existentes.
- Marcar tareas como completadas.

# Autor
- Javier Maldonado


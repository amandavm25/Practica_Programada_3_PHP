Práctica Programada 3 - Reservaciones para Restaurante

Este proyecto consiste en un sistema web básico que permite a los usuarios realizar reservaciones en un restaurante. Fue desarrollado como parte de una práctica académica utilizando HTML, CSS, JavaScript, PHP y MySQL.

🔧 Tecnologías utilizadas
- HTML5 y CSS3
- JavaScript para validación de formularios
- PHP para procesamiento de datos
- MySQL como sistema de base de datos
- XAMPP como servidor local

📅 Funcionalidades principales
- Formulario para realizar reservaciones
- Validación de campos obligatorios con JavaScript
- Almacenamiento seguro de datos en base de datos (clave encriptada)
- Estilos personalizados con CSS

⚡ Requisitos
- Tener instalado XAMPP
- Habilitar Apache y MySQL desde el panel de XAMPP
- Crear la base de datos `restaurantes` y la tabla `reservaciones`

Script SQL para crear la tabla

CREATE DATABASE IF NOT EXISTS restaurantes;
USE restaurantes;

CREATE TABLE reservaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente VARCHAR(100) NOT NULL,
    fecha DATETIME NOT NULL,
    num_personas INT NOT NULL,
    clave VARCHAR(255) NOT NULL
);

Autor: Amanda Valverde Mora

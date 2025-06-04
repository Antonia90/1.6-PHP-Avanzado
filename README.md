# Ejercicios de PHP - Nivel 1

Este repositorio contiene tres ejercicios correspondientes al **Nivel 1** del curso/práctica de PHP. En cada uno se exploran conceptos fundamentales como formularios, variables superglobales, constantes mágicas y métodos mágicos.

---

## 📂 Contenido

### 📝 Ejercicio 1 – Formularios y variables superglobales

- Se crea un formulario HTML con al menos un campo obligatorio (por ejemplo, `nombre` o `username`).
- El formulario tiene como `action` un archivo PHP que procesa los datos enviados.
- Se muestran los valores de los campos utilizando **variables superglobales** (`$_POST`, `$_GET`).
- Se almacenan algunos de estos valores en **variables de sesión** (`$_SESSION`).

📁 Carpeta: [`/Ejercicio1_nivel1`](./Ejercicio1_nivel1)

---

### ✨ Ejercicio 2 – Constantes mágicas

- Se desarrolla un programa que utiliza al menos **dos constantes mágicas** de PHP, como:
  - `__FILE__`
  - `__LINE__`
  - `__DIR__`
  - `__FUNCTION__`, entre otras.
- El objetivo es familiarizarse con cómo PHP proporciona información del entorno de ejecución.

📁 Carpeta: [`/Ejercicio2_nivel1`](./Ejercicio2_nivel1)

---

### 🧙 Ejercicio 3 – Métodos mágicos

- Se sobreescribe uno de los **métodos mágicos de PHP** (excepto `__construct`), como:
  - `__toString()`
  - `__get()`, `__set()`
  - `__call()`, entre otros.
- El ejercicio tiene como fin comprender cómo estos métodos permiten modificar el comportamiento de los objetos.

📁 Carpeta: [`/Ejercicio3_nivel1`](./Ejercicio3_nivel1)

---

## 🚀 Cómo usar este repositorio

1. Clona el repositorio:

   git clone <https://github.com/Antonia90/1.6-PHP-Avanzado.git>

2. Abrí las carpetas de los ejercicios en tu entorno local.

3. Ejecutá los archivos PHP en un servidor local (por ejemplo, XAMPP, Laragon o usando php -S).

## Requisitos

-PHP 7.4 o superior

-Navegador web

-Servidor local o CLI para ejecutar los scripts

## Cómo visualizar el formulario en localhost

Asegurate de tener un servidor local instalado.

Coloca la carpeta del repositorio dentro de la carpeta htdocs (en XAMPP) o la raíz de tu servidor local.

Abrí tu navegador y accede a: <http://localhost/1.6-PHP-Avanzado/Ejercicio1_nivel1/index.php>

Completa el formulario y envia los datos para ver cómo se procesan y se almacenan con superglobales y sesiones.

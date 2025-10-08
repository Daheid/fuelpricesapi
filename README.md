
# Project Title

API REST en Laravel para obtener el precio de la gasolina de distintas zonas y distintos procutos derivados en los Estados Unidos, esta api trae el precio de la fecha ams cercana a la ingresada ya que el gobierno actualiza los precios una vez a la semana. 


## API Reference

#### Obtener Productos

```http
  GET /api/v1/products/filter/eia
```

#### Obtener Areas

```http
  GET api/v1/areas/filter/eia
```

#### Obtener Precios
```http
  POST /api/v1/prices/filter/eia
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `period`      | `string` | **Required**. Periodo para los precios. |
| `area`      | `string` | **Required**. Area, puede ser all. |
| `product`      | `string` | **Required**. Producto, puede ser all. |


## Correr en Local

Para desplegar esta API en local debes tener en tu equipo PHP 4.4, Composer 2.8 y PostgreSQL.

Clone el repositorio

```bash
  https://github.com/Daheid/PruebaTecnica.git
```

Entre a la carpeta del backend

```bash
  cd PruebaTecnica/Backend
```

Instale el proyecto

```bash
  composer install
```

cambie de .env.example a .env (configure las variables de entorno)

```bash
  ren .env.example .env
```

cree una llave

```bash
  php artisan key:generate
```

ejecute las migraciones

```bash
  php artisan migrate
```

ejecute las seeders para poblar divisas, documentos y transacciones

```bash
  php artisan db:seed
```

inicie el servidor

```bash
  php artisan serve
```
## variables de entorno

Para correr el proyecto, debe agregar el valor correspondiente a las siguientes variables.

`DB_DATABASE=`
`DB_USERNAME=`
`DB_PASSWORD=`
`EIA_API_KEY=`


## 🔗 Links
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://www.nelsoncarrero.dev/)

[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/nelson-carrero-96b984202/)
````

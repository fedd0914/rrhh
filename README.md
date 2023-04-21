# Proyecto RRHH IPDUV
Descripción


## Entornos


[Pruebas](http://url-prueba.chaco.gob.ar/)
[Producción](https://url.chaco.gob.ar/)




## Instalación


Clonar el repositorio y luego


```console
cd rrhh
docker-compose up -d
docker exec rrhh composer install
```

## Agregar al .env

```console
DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE=admin
DB_USERNAME=root
DB_PASSWORD=admin
```


#### Variables adicionales .env.local:


#### Database


```console
docker exec rrhh-php php artisan migrate
```


#### Docker url
   * http://127.0.0.1:8082


### Usado
## Nombrar todos los frameworks utilizados.
- Laravel Versión 10
- [Breeze]
- [TailwindCSS](https://tailwindcss.com/) | [Bootstrap 5] 

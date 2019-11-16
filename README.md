# pDoxa
Sistema Gestión de Horarios Academicos, [AIS UNERG](http://ais.unerg.edu.ve)

## Demo
http://arodu.web.ve/demo/pdoxa/
```
usuario: demo
contraseña: demo
```

## Requisitos

* Servidor web con rewrite activado (Apache preferiblemente)
* Php 5.x o superior
* MySql

## Instalación

* Restarurar archivo de base de datos 'sql/pdoxa.sql'
* Copiar archivo de configuracion de base de datos
	```bash
	cp app/Config/database.php.default app/Config/database.php
	```

* Modificar archivo de configuracion de base de datos `app/Config/database.php` con los accesos correspondientes
* Usuario `admin`, clave `1234`

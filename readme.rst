**************
Prueba Paises 
**************

Se necesita realizar una aplicación web que muestre en la pantalla el significado de cada sigla ISO por país. Para ello, se cuenta con una base de datos MySQL con una tabla llamada Paises, con la
siguiente estructura:

**Paises**
.- id INTEGER AUTOINCREMENT
.- sigla VARCHAR(2)
.- nombre VARCHAR(255)

Se considera que la tabla se encuentra completa con datos, por ejemplo:

id sigla nombre
1   AR   Argentina
2   BR   Brasil
3   IT   Italia


También existe otra tabla, Registros donde se debe registrar cada elección que hace el usuario, indicando el id del país elegido y el dia y horas actuales al momento de la elección. Dicha tabla tiene la siguiente estructura:

**Registro**
.- id INTEGER AUTOINCREMENT
.- pais_id INT (Foreign Key Paises)
.- acceso DATETIME

Para programarlo, puede utilizar el framework MVC de PHP Laminas o Codeigniter y las
actualizaciones en pantalla deben realizarse mediante AJAX/JSON. Se debe respetar el patrón
MVC en la codificación y validar el input del usuario. Los modelos deben implementar ORM y se
debe utilizar para todas las consultas de lectura e inserción.

Solo es necesario enviar el código de la aplicación, de forma tal que al instalarlo se deba ejecutar perfectamente con dicha base de datos.

La única pantalla que debe mostrar la aplicación debe poder elegir de un combobox la sigla del
país que se desea conocer la sigla y debe mostrar su campo en algún lugar. Una vez elegido el país, se debe grabar en la tabla Registro la elección (utilizando la hora y fecha de ese momento) y mostrar en pantalla el nombre del Pais elegido. Si el usuario elige otra sigla de la lista, debe actualizarse con el nuevo valor y generar otra entrada en Registro

***
Run
***

- Clonar el repositorio en la carpeta de htdocs o la del servidor de apache

- Cambiar el nombre de la base de datos en application/config/database.php

- Iniciar la app con la url: http://localhost/paises


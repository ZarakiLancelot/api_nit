# API NIT INFILE
Consumo de API de Infile para obtener los datos de los contribuyentes a través del NIT

Se debe de instalar ```composer``` para poder descargar las librerías requeridas o bien tener ```curl``` instalado.

Al tener composer se ejecuta el comando:
```composer install```

Esto descargará e instalará las dependencias que se encuentren en el archivo ```composer.json```, que son solamente dos.

1. ```curl```
2. ```phpdotenv```

La primera es para hacer uso de curl y consumir el API de Infile, la segunda para poder utilizar archivos ```.env``` y colocar allí variables de entorno
y no exponer data sensible en el código, este lo utilicé solamente para colocar los valores de código y clave que requieren el API al enviar la
petición en el cuerpo del ```JSON```.

Se debe de crear un archivo ```.env``` en la raíz del proyecto (preferentemente) y luego en la clase o archivo a utilizar estas variables,
instanciar y cargar.

Un ejempo para el archivo ```.env```:

```
EMISOR_CODIGO=XXXXXXXX
EMISOR_CLAVE=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
```

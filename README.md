<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# UNIDAD 6 - PRACTICA EVALUABLE - FORMULARIOS CON LARAVEL

## Tareas

1. [x] Crea una migración a partir de las indicaciones que encontrarás en el formulario base.

2. [x] Crea el formulario para introducir los datos del formulario, usando Html y Bootstrap.- El campo acceso será de tipo select
3. [x] Añade a este formulario los old values
4. [x] Añade soporte multilingüe para todos los labels del formulario. Utiliza las dos formas de traducción, alternativamente.
5. [x] De acuerdo con lo indicado en la migración, marca como ‘required’ las entradas de formulario de los campos no nulos. Será la única validación realizada en el cliente.
6. [x] Modifica el formulario, usando Blade, para tratar los errores de validación que puedan producirse. Obligatoriamene se mostrarán al principio del formulario cuando falle la validación, Se valora también que se informe a pie de input.
7. [x] Crea un controlador de tipo resource para la implementación de un CRUD, ‘PostController’ (en este caso se llama ChirpController)
8. [x] Crea la validación del formulario en el controlador anterior, aplicada al método que inserta los datos en la tabla. Máxima puntuación si validas con FormRequest. (No se usa form request)
9. [x] Crea las rutas que manejen las operaciones del controlador anterior.
10. [x] Crea una ruta predeterminada que dirija las peticiones al punto de posts/create (la ruta de tipo Resource dirige las peticiones al punto necesario)
11. [x] Crea el modelo Post, añadiendo lo necesario para permitir una inserción usando Eloquent.
12. [x] Inserta al menos 2 post, manualmente o con otro método. Puedes usar sentencias raw (dependientes del SGBD) , QueryBuilder o Eloquent.
13. [ ] Usa Gate para controlar que la actualización solo pueda hacerla el autor del post.
14. [x] Subida a GitHub
15. [x] Despliegue en remoto

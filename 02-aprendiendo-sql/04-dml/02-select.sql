--  *************************************
--  **********  02-select.sql  **********
--  *************************************


--  **********  Mostrar Todos los Registros / Filas de una Tabla  **********
SELECT email, nombre, apellidos FROM usuarios;


--  **********  Mostrar Todos los Campos / Filas de una Tabla  **********
SELECT * FROM usuarios;


--  **********  Operadores Aritméticos  **********
SELECT email, (4+7) FROM usuarios;
SELECT email, (4+7) as 'Operacion' FROM usuarios;
SELECT (id + 11) FROM usuarios;

--  **********  Ordenar por un Campo  **********
SELECT id, email, (7%7) as 'Operacion' FROM usuarios ORDER BY id;
SELECT id, email, (7%7) as 'Operacion' FROM usuarios ORDER BY id DESC;


--  **********  Funciones Matemáticas  **********
SELECT ABS(7) AS 'Valor Absoluto' from usuarios;
SELECT CEIL(id + 0.2) AS 'Redondeo a la Alta' from usuarios;
SELECT floor(id + 0.2) AS 'Redondeo a la Baja' from usuarios;

SELECT pi() AS 'Numero PI' from usuarios;
SELECT RAND() * 10 AS 'Numero Aleatorio' from usuarios;
SELECT ROUND(500.45) AS 'Redondeo' from usuarios;
SELECT ROUND(500.45, 3) AS 'Redondeo' from usuarios;
SELECT ROUND(id, 3) AS 'Redondeo id con 3 decimales' from usuarios;
SELECT SQRT(1000) AS 'Raiz Cuadrada' from usuarios;
SELECT TRUNCATE(500.454578, 4) AS 'Redondeo' from usuarios;


--  **********  Funciones para Caracteres o Textos  **********
SELECT nombre FROM usuarios;
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' - ', apellidos) AS 'Conversión' FROM usuarios;

SELECT UPPER( CONCAT(nombre, ' - ', apellidos) ) AS 'Conversión en Mayusculas' FROM usuarios;
SELECT LENGTH( CONCAT(nombre, ' - ', apellidos) ) AS 'Caracteres de la Cadena de Texto Concatenada' FROM usuarios;
SELECT email, LENGTH( CONCAT(nombre, ' - ', apellidos) ) AS 'Caracteres de la Cadena de Texto Concatenada' FROM usuarios;
SELECT TRIM(CONCAT('   ', nombre, ' - ', apellidos, '   ', email, '    ')) AS 'TRIM' FROM usuarios;


--  **********  Funciones para Fechas  **********
SELECT email, fecha FROM usuarios;
SELECT email, fecha, CURDATE() as 'Fecha Actual' FROM usuarios;
SELECT email, fecha, CURTIME() as 'Hora Actual' FROM usuarios;
SELECT email, fecha, DATEDIFF(CURDATE(), fecha) as 'Diferencia entre Fechas' FROM usuarios;
SELECT email, fecha, DAYNAME(fecha) as 'Nombre del Dia en Ingles' FROM usuarios;
SELECT email, fecha, DAYOFMONTH(fecha) as 'Dia del Mes en Ingles' FROM usuarios;
SELECT email, fecha, DAYOFWEEK(fecha) as 'Dia de la Semana en Ingles' FROM usuarios;
SELECT email, fecha, DAYOFYEAR(fecha) as 'Dia del Año en Ingles' FROM usuarios;
SELECT email, fecha, MONTH(fecha) as 'Mes' FROM usuarios;
SELECT email, fecha, YEAR(fecha) as 'Año' FROM usuarios;
SELECT email, fecha, WEEK(fecha) as 'Semana' FROM usuarios;
SELECT email, fecha, WEEKDAY(fecha) as 'Dia de la Semana' FROM usuarios;
SELECT email, fecha, HOUR(fecha) as 'Hora' FROM usuarios;

SELECT email, fecha, SYSDATE() as 'Fecha del Sistema' FROM usuarios;
SELECT email, fecha, DATE_FORMAT(fecha, '%d-%M-%Y') as 'Formato de Fecha' FROM usuarios;


--  **********  Funciones Generales  **********

SELECT * FROM usuarios;

SELECT email, ISNULL(apellidos) as 'Apellidos Nulos - 0 = NO, 1 = SI' FROM usuarios;
SELECT email, STRCMP('HOLA', 'HOLA') as '2 Campos Iguales - 0 = SI, 1 = NO' FROM usuarios;
SELECT email, STRCMP('HOLA', 'HOLALA') as '2 Campos Iguales - 0 = SI, 1 = NO' FROM usuarios;
SELECT email, VERSION() as 'Version de MySql' FROM usuarios;
SELECT email, USER() as 'Usuario Base de Datos' FROM usuarios;
SELECT DISTINCT USER() as 'Usuario Distintos de la Base de Datos' FROM usuarios;
SELECT DATABASE() as 'Nombre de la Base de Datos' FROM usuarios;
SELECT IFNULL(apellidos, 'Este campo esta vacio') as 'Si el Campo apellidos esta vacio' FROM usuarios;


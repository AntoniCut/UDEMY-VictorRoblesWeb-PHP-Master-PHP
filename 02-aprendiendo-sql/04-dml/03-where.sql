--  ************************************
--  **********  03-where.sql  **********
--  ************************************


--  *****  Consulta con una Condición  *****

SELECT * FROM usuarios;
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

--  *****  Operadores de Comparación  *****
--  igualdad                =
--  distinto                !=
--  menor que               <  
--  menor o igual que       <=
--  mayor que               >
--  mayor o igual que       >=
--  entre                   BETWEEN
--  en una lista            IN
--  no está en una lista    NOT IN
--  nulo                    IS NULL
--  no nulo                 IS NOT NULL
--  como                    LIKE
--  No es como              NOT LIKE


--  *****  Ejemplos de Operadores de Comparación  *****

--  1.  Mostrar nombre y apellidos de todos los usuarios registrados en 2025
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2025;

--  2.  Mostrar nombre y apellidos de todos los usuarios No registrados en 2025
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2025;
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2025 OR ISNULL(fecha);


--  *****  Operadores Lógicos  *****
--  O                   OR
--  Y                   AND
--  NO                  NOT  

--  *****  Comodines  *****
--  Cualquier cantidad de caracteres:   %
--  Un caracter desconocido:            __


--  *****  Ejemplos de Operadores Lógicos  *****

--  3.  Sacar todos los registros de usuarios cuyos apellidos contenga la letra A
--      y su contraseña sea 111111.
SELECT nombre, apellidos FROM usuarios WHERE apellidos LIKE '%A%' AND password = '111111';

--  4.  Sacar todos los registros de usuarios cuyos apellidos contenga las letras UTI

SELECT nombre, apellidos FROM usuarios WHERE apellidos LIKE '%UTI%' AND password = '111111';


--  *****  Mas Ejemplos  *****
--  5.  Sacar todos los registros de usuarios cuyo año sea par.
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

--  6.  Sacar todos los registros de usuarios cuyo nombre tenga mas de 5 letras
--      y que se hayan registrado antes de 2023 y mostrar el nombre en mayusculas.
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2025;


--  7.  Sacar todos los registros de usuarios y ordenarlos por id descendente limitado a 3 registros.
SELECT * FROM usuarios ORDER BY id DESC LIMIT 3;

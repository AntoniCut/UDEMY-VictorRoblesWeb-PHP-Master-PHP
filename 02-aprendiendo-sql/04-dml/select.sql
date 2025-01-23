--  **********************************
--  **********  select.sql  **********
--  ********************--************

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

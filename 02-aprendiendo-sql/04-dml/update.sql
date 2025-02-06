--  **********************************
--  **********  update.sql  **********
--  ********************--************

--  **********  Modificar o Actualizar Filas o Registros  **********

USE master_php_blog;

SELECT * from usuarios;


-- UPDATE usuarios SET fecha = CURDATE() WHERE id=4;
UPDATE usuarios SET fecha = '2026-11-12', apellidos = 'Gutierrez' WHERE id=7;



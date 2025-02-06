--  *************************************
--  **********  05-delete.sql  **********
--  *************************************

--  **********  Borrar Filas o Registros  **********

USE master_php_blog;

SELECT * from usuarios;


-- UPDATE usuarios SET fecha = CURDATE() WHERE id=4;
DELETE FROM usuarios where email = 'admin@admin.com';



--  **********************************
--  **********  insert.sql  **********
--  ********************--************

--  **********  Insertar Nuevos Registros  **********

USE master_php_blog;

INSERT INTO usuarios VALUES (null, 'Antonio', 'Cutillas', 'antonicut@gmail.com', '111111', '16-01-2025');
INSERT INTO usuarios VALUES (null, 'Victor', 'Robles', 'victor@gmail.com', '222222', '17-01-2025');
INSERT INTO usuarios VALUES (null, 'Juan', 'Gil', 'juangil@gmail.com', '222222', '18-01-2025');


--  **********  Insertar Filas solo con ciertas columnas  **********

INSERT INTO usuarios(email, password) VALUES('admin@admin.com', '555555');




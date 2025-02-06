--  ************************************************************
--  **********  05-agrupamiento/02-consultas-sql.sql  **********
--  ************************************************************


use master_php_blog;


-- **********  Consultas de Agrupamiento  **********

SELECT * from entradas;
SELECT titulo, categoria_id from entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'Nº Entradas', categoria_id from entradas GROUP BY categoria_id;



--  *****************************************************
--  **********  05-agrupamiento/01-insert.sql  **********
--  *****************************************************


use master_php_blog;

--  **********  USUARIOS  **********
SELECT * from usuarios;



--  **********  Insert CATEGORIAS  **********
INSERT INTO categorias VALUES(null, 'Acción');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

SELECT * from categorias;


--  **********  Insert ENTRADAS  **********


SELECT * from entradas;

INSERT INTO entradas VALUES(null, 1, 1, 'Novedades del GTA 5 online', 'Review del GTA 5', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'Review de LOL online', 'Todo sobre el LOL', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Nuevos jugadores de FIFA 19', 'Review del FIFA 19L', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'Novedades del Assasing online', 'Review del Assasing', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Review de WOW online', 'Todo sobre el WOW', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Nuevos jugadores de PES 19', 'Review del PES 19', CURDATE());

INSERT INTO entradas VALUES(null, 3, 1, 'Novedades del Call of Duty online', 'Review del Call of Duty', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'Review del Fornite online', 'Todo sobre el Fornite', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Nuevos jugadores de Formula 1 2020', 'Review del Formula 1 2020', CURDATE());



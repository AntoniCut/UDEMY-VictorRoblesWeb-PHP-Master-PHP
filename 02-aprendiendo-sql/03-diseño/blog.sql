--  ********************************
--  **********  blog.sql  **********
--  ********************************

--  **********  master_php_blog  --  Base de Datos  **********


--  **********  usuarios  --  Tabla  **********
CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha VARCHAR(255) NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDB;



--  **********  categorias  --  Tabla  **********
CREATE TABLE categorias(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;


--  **********  entradas  --  Tabla  **********
CREATE TABLE entradas(
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) NOT NULL,
    categoria_id int(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion MEDIUMTEXT NULL,
    fecha VARCHAR(255) NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entradas_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;

--  ON DELETE CASCADE SET NULL
--  ON DELETE CASCADE SET DEFAULT
--  ON DELETE CASCADE NO ACTION
--  ON UPDATE CASCADE



/*  -----------------------------------
    ----------  Modificar Tablas  ----------
    -----------------------------------
*/


# ----------  Cambiar el Nombre de una tabla  ----------
ALTER TABLE usuarios RENAME TO usuarios_renom;


# ----------  Renombrar una columna  ----------
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) NULL;


# ----------  Modificar columna sin cambiar nombre  ----------
ALTER TABLE usuarios_renom MODIFY apellido char(50) NOT NULL;


# ----------  Añadir una nueva columna  ----------
ALTER TABLE usuarios_renom ADD website varchar(100) NOT NULL;


# ----------  Añadir una restriccion a una columna  ----------
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE (email);


# ----------  Borrar una columna  ----------
ALTER TABLE usuarios_renom DROP website;
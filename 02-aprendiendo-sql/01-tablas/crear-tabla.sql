/*  -----------------------------------
    ----------  Crear Tabla  ----------
    -----------------------------------

  ----------  Tipos de Datos  ----------

    int (nº cifras)                     - Enteros
    integer (nº cifras)                 - Números enteros (Max 4294967295)      
    varchar (nº caracteres              - String / Alfanumerico (Max 255 caracteres)
    char (nº cifras)                    - String / Alfanumerico
    float(nº cifras, nº decimales)      - Números decimales
    date (YYYY-MM-DD)                   - Fechas
    time, timestamp                     - Horas
    
    -----  STRING MÁS GRANDES  -----
    TEXT                                - Texto 65535 Caracteres
    MEDIUMTEXT                          - Texto largo 16 Millones de Caracteres
    LONGTEXT                            - 16 Billones de Caracteres


    -----  ENTEROS MÁS GRANDES  -----
    MEDIUMINT                           
    BIGINT                            
    
*/

CREATE TABLE usuarios(
    id          int (11) AUTO_INCREMENT NOT NULL,
    nombre      varchar(100) NOT NULL,
    apellidos   varchar(255) DEFAULT 'hola que tal',
    email       varchar(100),
    password    varchar(255),
    constraint pk_usuarios primary key (id)
);



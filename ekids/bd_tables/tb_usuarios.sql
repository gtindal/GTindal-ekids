CREATE TABLE tb_usuarios
(
    id      INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cod_usuario     VARCHAR(255) NULL,
    nombre          VARCHAR(255) NULL,
    email           VARCHAR(255) NULL,
    email_verificado    VARCHAR(255) NULL,
    pass_usuario        VARCHAR(255) NULL,
    token           VARCHAR(255) NULL,
    creacion_fyh    DATETIME NULL.
    actualizacion_fyh   DATETIME NULL.
    eliminacion_fyh     DATETIME NULL.
    estado              VARCHAR(10),
    rol_user    INT(10)
);
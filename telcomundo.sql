DROP DATABASE if exists Telcomundo;
create database Telcomundo;
use Telcomundo;
### TABLAS

    create table Informe_ventas(
        orden_trabajo int primary key, 
        paquete varchar(40), 
        servicios int,
        estrato char, 
        ciudad varchar(40), 
        localidad varchar(40), 
        legalizacion char,
        fecha date, 
        cod_tarifa varchar(40),
        id_usuario int, 
        pago char
    );

    create table Comisiones(
        cod_tarifa varchar(40)primary key, 
        ciudad_com varchar(40), 
        comision float(10),
        paquete_com varchar(40), 
        servicios_com int, 
        estrato_com char,
        pago char
    );

    create table bonos_descuentos (
        id_usuario int primary key,
        Tipo_bono varchar (50),
        Tipo_descuento varchar (50), 
        valor float
    );

    create table Rol (
        id_rol int auto_increment primary key, 
        Rol varchar(40)
    );

    create table usuario(
        id_usuario int primary key, 
        id_rol int, 
        nombre varchar(40), 
        apellido varchar(40),
        tel int, 
        Contraseña varchar(40), 
        correo varchar(40), 
        direccion varchar(50)
    
    );
    
    CREATE TABLE banco_asesor (
        id_usuario INT,
        banco VARCHAR(45),
        numero_cuenta INT
    );
    
    create table modulo(
        id_modulo int auto_increment primary key, 
        nombre varchar(20)
    );
    
    create table permisos(
        id_permiso int auto_increment primary key, 
        nombre varchar(40), 
        id_modulo int
    );
    create table Historico
    select I.orden_trabajo, 
                I.id_usuario, 
                    I.paquete, 
                        I.servicios, 
                            I.pago, 
                                C.cod_tarifa, 
                                    C.comision
                                        from Informe_ventas I
                                            inner join Comisiones as C on 
                                                C.cod_tarifa=I.cod_tarifa;
    create table Liquidacion
    select I.orden_trabajo, 
                I.id_usuario, 
                    I.paquete, 
                        I.servicios, 
                            C.cod_tarifa, 
                                C.comision, 
                                    C.pago
                                        from Informe_ventas as I
                                            inner join Comisiones as C on
                                                C.cod_tarifa=I.cod_tarifa and C.pago=I.pago;
    
    create table Bonos(
        cedula varchar(40),
        Observacion varchar(40),
        valor float
    );
    
    create table Descuentos (
        cedula varchar(40),
        Observacion varchar(40), 
        valor float
    );

### LLAVES FORANEAS

    alter table usuario add constraint fk_usuario_rol FOREIGN KEY (id_rol) REFERENCES Rol(id_rol);
    
    alter table banco_asesor add constraint fk_banco_asesor_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);

    alter table permisos add constraint fk_permisos_modulo FOREIGN KEY (id_modulo) REFERENCES Modulo(id_modulo);

    alter table Informe_ventas add constraint fk_Informe_ventas_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);

    alter table Informe_ventas add constraint fk_Informe_ventas_comisiones FOREIGN KEY (cod_tarifa) REFERENCES comisiones(cod_tarifa);
### VISTAS 


 
### DATOS
    ### TABLA ROL
        insert into Rol(id_rol,rol )values (1,'lider');
        insert into Rol(id_rol,rol )values (2,'analista');
        insert into Rol(id_rol,rol )values (3,'asesor');
       
        

create database estructuramvc;
use estructuramvc;
create table alumno (
    id_alumno int primary key auto_increment,
    nombre_alumno varchar(30),
    apellidos_alumno varchar(30)
);
CREATE TABLE computer(
	id_computer int primary key auto_increment,
	name_computer varchar(30),
	price_computer varchar(30),
	model_computer varchar(30),
	color_computer varchar(10)
);

CREATE TABLE materia(
    id_materia int primary key auto_increment,
    nombre_materia varchar(50),
    grupo_materia varchar(50),
	alumnos_materia int
);

CREATE TABLE maestro(
	id_maestro int primary key auto_increment,
	nombre_maestro varchar(30),
	apppat_maestro varchar(30),
	appmat_maestro varchar(30),
	edad_maestro varchar(2)
);

CREATE TABLE categoria(
    id_categoria int primary key auto_increment,
    nombre_categoria varchar(30)
);

CREATE TABLE sucursal(
    id_sucursal int primary key auto_increment,
    nombre_sucursal varchar(50),
	numero_sucursal varchar(30),
	descripcion_sucursal varchar(50)
);

CREATE TABLE lenguajeProgramacion(
	id_lenguajeProgramacion int primary key auto_increment,
	nombre_lenguajeProgramacion varchar(50),
	paradigma_lenguajeProgramacion varchar(50),
	creador_lenguajeProgramacion varchar(50),
	fecha_creacion_lenguajeProgramacion date
);

CREATE TABLE autos(
	id_auto int primary key auto_increment,
	marca_auto varchar(30),
	modelo_auto varchar(30),
	color_auto varchar(10),
	anio_auto varchar(30),
	precio_auto varchar(30)
);

CREATE TABLE deporte(
    id_deporte int primary key auto_increment,
    nombre_deporte varchar(50),
    descripcion_deporte varchar(30),
    num_participantes_deporte varchar(50)
);

CREATE TABLE pelicula(
    id_pelicula int primary key auto_increment,
    nombre_pelicula varchar(50),
	genero varchar(30),
	fecha_lanzamiento DATE,
	descripcion varchar(100)
);

CREATE TABLE plant(
	plant_id int primary key auto_increment,
	plant_name varchar(30),
	plant_price varchar(4),
	plant_availability varchar(30),
	plant_size varchar(2)
);

CREATE TABLE perro(
	id_perro int primary key auto_increment,
	nombre_perro varchar(30),
	raza_perro varchar(30),
	edad_perro int (2),
	sexo_perro varchar(10)
);

CREATE TABLE mesa(
	id_mesa int primary key auto_increment,
	material varchar(30),
	altura decimal(5,2),
	acabado varchar(30),
	precio decimal(9,2)
);

CREATE TABLE motos(
    id_moto int primary key auto_increment,
    marca varchar(50),
	modelo varchar(30),
	cc integer,
	precio integer
);

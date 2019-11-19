
-- use papelreria;

-- Creamos la tablas de los proudctos

-- create table Producto ( 
-- id int(11) auto_increment not null,
-- nombreProducto varchar(100),
-- marcaProducto varchar(100),
-- precioCompra double,
-- precioVenta double,
-- cantidad int(100) not null,
-- constraint pk_producto primary key (id)
-- );

-- describe Producto;

-- alter table Producto add total numeric;

-- alter table Producto add descripcion varchar(255);

-- alter table Producto add totalVenta numeric;

-- select sum( total ) as total, sum( precioCompra )  as compraTotal, sum( precioVenta ) as totalVenta from Producto;


-- ESTE ES UN PRODUCTO DE PRUEBA QUE SE INSERTO



-- insert into Producto values (null, "Lapiz de prueba", "Mapped", 1.50, 3.00, 20, 60, "Este es un lapiz para probar la sentecia update" , 60);

-- select * from Producto where id = 20;

-- Esta sentencia es para el update

-- update Producto set nombreProducto = 4, marcaProducto = "Marca", descripcion = "Este sigue siendo un lapiza de prueba" where id = 20;


-- Nota en esta versión el Delete necesita permisos cuando se quiere eliminar todos los registros



-- select count( cantidad ) as 'Cantidad de los productos' from Producto;

-- la funcio count nos cuenta las filas de los registros


-- select sum(cantidad) as 'Suma de los productos registrados' from Producto;

-- la funcion suma nos suma los registros de un campo especifico en este caso la cantidad


-- ESTA SERÁ LA CONSULTA PARA LA FUNCIÓN QUE NOS MOSTRARÁ LOS PRODUCTOS QUE ESTÁN PROXIMOS A AGOTARSE

-- Esta funcion se debe de implementar despues de que la sentencia update haga lo correspondiente
-- select * from Producto where cantidad <= 5;


-- use papelreria;

-- select * from Producto where nombreProducto like '%gises%';

-- select * from Producto where id = 20;

-- select * from Producto where marcaProducto like '%xerox%';

-- update Producto set nombreProducto = 4, marcaProducto = "Marca", descripcion = "Este sigue siendo un lapiza de prueba" where id = 20;
-- Nota en esta versión el Delete necesita permisos cuando se quiere eliminar todos los registros
-- Esta funcion se debe de implementar despues de que la sentencia update haga lo correspondiente
-- select * from Producto where cantidad <= 5;

-- update Producto set precioCompra = ? ,precioVenta = ?,  cantidad = ?, total = ?, totalVenta = ? where id = ?;



-- create table Usuarios (
--                          id int (11) not null auto_increment,
 --                         nombre varchar(100),
--                          apellidos varchar(100),
--                          img varchar(100),
--                          statu varchar(15),
--                      puesto varchar (20),
--                       constraint pk_usuarios primary key (id)
-- );

-- select * from Producto;


-- insert into Usuarios values (null, 'Emma', 'Guerrero','../../assets/images/olinala.png', 'true', 'Jefa' );

-- select * from Producto;

-- Se usó para las pruebas de las imagenes

-- delete from Producto where id= 50;
-- delete from Producto where id= 51;
-- delete from Producto where id= 52;

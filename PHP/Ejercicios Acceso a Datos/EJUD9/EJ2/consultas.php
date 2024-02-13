<?php
/**
 * @autor Silvia Vilar
 * Ejercicio 2. Consultas
 */
// include_once __DIR__ . '\..\..\db.php';
include_once __DIR__ . "/../traitDB.php";
include_once __DIR__ . "/functions.php";

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    


    switch ($_POST['tipoConsulta']) {
            //consultas de Clientes
        case 'ClientePorDni':
            //Datos de cliente por DNI
            $sql = "SELECT * FROM EMPRESA.CLIENTE WHERE DNI = :dni;";

            $parametros = array(':dni' => $_POST['dni']);

            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados (esto como ejemplo lo he puesto ya que puedes almacenar las funciones en otro php y luego llamarlas, aunque al haber tantas distintas las he puesto a mano)
            // en el resto de cases están a mano, pero es lo mismo que si estuviesen en otro fichero
            CLIENTE($result);
            break;

        case 'ListadoClientes':
            // Listado de todos los clientes ordenados por dni de cliente
            $sql = "SELECT * FROM EMPRESA.CLIENTE ORDER BY DNI;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCION</th><th>POBLACION</th><th>TELEFONO</th><th>FECHA_NAC</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "<td>{$row['TELEFONO']}</td>";
                echo "<td>{$row['FECHA_NAC']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ClientesDadapoblacion':
            // Datos de Clientes de una Población seleccionada ordenados por dni de cliente
            $sql = "SELECT * FROM EMPRESA.CLIENTE WHERE POBLACION = :poblacion ORDER BY DNI;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCION</th><th>POBLACION</th><th>TELEFONO</th><th>FECHA_NAC</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "<td>{$row['TELEFONO']}</td>";
                echo "<td>{$row['FECHA_NAC']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesPorPoblacion':
            // Listado de Clientes de una población seleccionada ordenados por población
            $sql = "SELECT * FROM EMPRESA.CLIENTE WHERE POBLACION = :poblacion ORDER BY POBLACION, DNI;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCION</th><th>POBLACION</th><th>TELEFONO</th><th>FECHA_NAC</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "<td>{$row['TELEFONO']}</td>";
                echo "<td>{$row['FECHA_NAC']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'NumeroClientesPorPoblacion':
            // Listado de Clientes de una población seleccionada ordenados por población
            $sql = "SELECT POBLACION, COUNT(DNI) AS NUM_CLIENTES FROM EMPRESA.CLIENTE GROUP BY POBLACION;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>POBLACION</th><th>NUM_CLIENTES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "<td>{$row['NUM_CLIENTES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesConCompras':
            // Datos de Clientes que han realizado compras ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.CLIENTE, CL.NOMBRE, CL.APELLIDOS
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    ORDER BY C.CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesSinCompras':
            // Datos de Clientes que no han realizado compras ordenados por dni de cliente
            $sql = "SELECT DNI, NOMBRE, APELLIDOS
                    FROM EMPRESA.CLIENTE
                    WHERE DNI NOT IN (SELECT DISTINCT CLIENTE FROM EMPRESA.COMPRA)
                    ORDER BY DNI;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesConComprasDadaPoblacion':
            // Datos de Clientes que han realizado compras de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.CLIENTE, CL.NOMBRE, CL.APELLIDOS
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    WHERE CL.POBLACION = :poblacion
                    ORDER BY C.CLIENTE;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesSinComprasDadaPoblacion':
            // Datos de Clientes que no han realizado compras de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT DNI, NOMBRE, APELLIDOS
                    FROM EMPRESA.CLIENTE
                    WHERE DNI NOT IN (SELECT DISTINCT CLIENTE FROM EMPRESA.COMPRA)
                    AND POBLACION = :poblacion
                    ORDER BY DNI;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesConComprasValencia':
            // Datos de Clientes que han realizado compras con algún cliente de la población de Valencia ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.CLIENTE, CL.NOMBRE, CL.APELLIDOS
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    WHERE CL.POBLACION = 'Valencia'
                    ORDER BY C.CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesConTresOMasCompras':
            // Listado de clientes que han realizado 3 o más compras ordenados por dni de cliente
            $sql = "SELECT CLIENTE, COUNT(*) AS NUM_COMPRAS
                    FROM EMPRESA.COMPRA
                    GROUP BY CLIENTE
                    HAVING COUNT(*) >= 3
                    ORDER BY CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NUM_COMPRAS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NUM_COMPRAS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ListadoClientesConTresComprasOMasPorPoblacion':
            // Listado de clientes que han realizado 3 compras o más de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT C.CLIENTE, CL.NOMBRE, CL.APELLIDOS, COUNT(*) AS NUM_COMPRAS
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    WHERE CL.POBLACION = :poblacion
                    GROUP BY C.CLIENTE
                    HAVING COUNT(*) >= 3
                    ORDER BY C.CLIENTE;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>NUM_COMPRAS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "<td>{$row['NUM_COMPRAS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        // Consultas con proveedores
        case 'ListadoProveedores':
            // Listado de todos los proveedores ordenados por nif de proveedor
            $sql = "SELECT * FROM EMPRESA.PROVEEDOR ORDER BY NIF;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>NIF</th><th>NOMBRE</th><th>DIRECCION</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['NIF']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProveedorPorNif':
            // Datos de proveedor por NIF
            $sql = "SELECT * FROM EMPRESA.PROVEEDOR WHERE NIF = :nif;";
            $parametros = array(':nif' => $_POST['nif']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>NIF</th><th>NOMBRE</th><th>DIRECCION</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['NIF']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProveedoresEmpiezanPorTexto':
            // Datos de proveedores que empiezan por un texto seleccionado ordenados por nif de proveedor
            $sql = "SELECT * FROM EMPRESA.PROVEEDOR WHERE NOMBRE LIKE :texto ORDER BY NIF;";
            $parametros = array(':texto' => $_POST['texto'] . "%");
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>NIF</th><th>NOMBRE</th><th>DIRECCION</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['NIF']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProveedoresProductosPvpMayor1000':
            // Datos de proveedores con productos con precio mayor a 1000€ ordenados por nif de proveedor
            $sql = "SELECT DISTINCT P.NIF, P.NOMBRE, P.DIRECCION
                    FROM EMPRESA.PROVEEDOR P
                    JOIN EMPRESA.PRODUCTO PR ON P.NIF = PR.PROVEEDOR
                    WHERE PR.PVP > 1000
                    ORDER BY P.NIF;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>NIF</th><th>NOMBRE</th><th>DIRECCION</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['NIF']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        // Consultas con productos
        case 'ListadoProductos':
            // Listado de todos los productos ordenados por codigo de producto
            $sql = "SELECT * FROM EMPRESA.PRODUCTO ORDER BY COD_PROD;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>COD_PROD</th><th>NOMBRE</th><th>PROVEEDOR</th><th>PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['COD_PROD']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['PROVEEDOR']}</td>";
                echo "<td>{$row['PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProductosPvpMenorOIgual100':
            // Datos de productos con precio menor a 100 ordenados por codigo de producto
            $sql = "SELECT * FROM EMPRESA.PRODUCTO WHERE PVP <= 100 ORDER BY COD_PROD;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>COD_PROD</th><th>NOMBRE</th><th>PROVEEDOR</th><th>PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['COD_PROD']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['PROVEEDOR']}</td>";
                echo "<td>{$row['PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProductosPVPMayorPromedio':
            // Productos con precio mayor al promedio ordenados por codigo de producto
            $sql = "SELECT * FROM EMPRESA.PRODUCTO WHERE PVP > (SELECT AVG(PVP) FROM EMPRESA.PRODUCTO) ORDER BY COD_PROD;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>COD_PROD</th><th>NOMBRE</th><th>PROVEEDOR</th><th>PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['COD_PROD']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['PROVEEDOR']}</td>";
                echo "<td>{$row['PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'PvpMaximoProductos':
            // PVP máximo de los productos
            $sql = "SELECT MAX(PVP) AS MAX_PVP FROM EMPRESA.PRODUCTO;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>MAX_PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['MAX_PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'PvpMinimoProductos':
            // PVP mínimo de los productos
            $sql = "SELECT MIN(PVP) AS MIN_PVP FROM EMPRESA.PRODUCTO;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>MIN_PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['MIN_PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'PvpPromedioProductos':
            // PVP promedio de los productos
            $sql = "SELECT AVG(PVP) AS AVG_PVP FROM EMPRESA.PRODUCTO;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>AVG_PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['AVG_PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ProductosNombreContieneTexto':
            // Productos cuyo nombre contiene un texto dado ordenados por codigo de producto
            $sql = "SELECT * FROM EMPRESA.PRODUCTO WHERE NOMBRE LIKE :texto ORDER BY COD_PROD;";
            $parametros = array(':texto' => "%" . $_POST['texto'] . "%");
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>COD_PROD</th><th>NOMBRE</th><th>PROVEEDOR</th><th>PVP</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['COD_PROD']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['PROVEEDOR']}</td>";
                echo "<td>{$row['PVP']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        // Consultas con compras
        case 'ListadoCompras':
            // Listado de todas las compras mostrando nombre y apellidos de cliente, código y nombre de producto, nombre de proveedor, fecha y unidades ordenados por dni de cliente y código de producto
            $sql = "SELECT C.CLIENTE, CL.NOMBRE AS NOMBRE_CLIENTE, CL.APELLIDOS AS APELLIDOS_CLIENTE,
                    C.PRODUCTO, P.NOMBRE AS NOMBRE_PRODUCTO, P.PROVEEDOR, PR.NOMBRE AS NOMBRE_PROVEEDOR,
                    C.FECHA, C.UDES
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    JOIN EMPRESA.PRODUCTO P ON C.PRODUCTO = P.COD_PROD
                    JOIN EMPRESA.PROVEEDOR PR ON P.PROVEEDOR = PR.NIF
                    ORDER BY C.CLIENTE, C.PRODUCTO;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE_CLIENTE</th><th>APELLIDOS_CLIENTE</th><th>PRODUCTO</th><th>NOMBRE_PRODUCTO</th><th>PROVEEDOR</th><th>NOMBRE_PROVEEDOR</th><th>FECHA</th><th/UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE_CLIENTE']}</td>";
                echo "<td>{$row['APELLIDOS_CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['NOMBRE_PRODUCTO']}</td>";
                echo "<td>{$row['PROVEEDOR']}</td>";
                echo "<td>{$row['NOMBRE_PROVEEDOR']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDeAnyo':
            // Datos de compras a partir de un año dado ordenados por fecha
            $sql = "SELECT * FROM EMPRESA.COMPRA WHERE YEAR(FECHA) >= :anyo ORDER BY FECHA;";
            $parametros = array(':anyo' => $_POST['anyo']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDeCliente':
            // Datos de compras de un cliente dado ordenados por dni de cliente
            $sql = "SELECT * FROM EMPRESA.COMPRA WHERE CLIENTE = :cliente ORDER BY CLIENTE;";
            $parametros = array(':cliente' => $_POST['cliente']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDeProducto':
            // Datos de compras de un producto dado ordenados por código de producto
            $sql = "SELECT * FROM EMPRESA.COMPRA WHERE PRODUCTO = :producto ORDER BY PRODUCTO;";
            $parametros = array(':producto' => $_POST['producto']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDeProveedor':
            // Datos de compras de un proveedor dado ordenados por nif de proveedor
            $sql = "SELECT C.ID_COM, C.CLIENTE, C.PRODUCTO, C.FECHA, C.UDES
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.PRODUCTO P ON C.PRODUCTO = P.COD_PROD
                    WHERE P.PROVEEDOR = :proveedor
                    ORDER BY P.PROVEEDOR;";
            $parametros = array(':proveedor' => $_POST['proveedor']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDePoblacion':
            // Datos de compras de una población dada ordenados por población
            $sql = "SELECT C.ID_COM, C.CLIENTE, C.PRODUCTO, C.FECHA, C.UDES, CL.POBLACION
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    WHERE CL.POBLACION = :poblacion
                    ORDER BY CL.POBLACION;";
            $parametros = array(':poblacion' => $_POST['poblacion']);
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th><th>POBLACION</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasDeClientesValencia':
            // Datos de compras con algún cliente de la población de Valencia ordenados por dni de cliente
            $sql = "SELECT C.CLIENTE, CL.NOMBRE AS NOMBRE_CLIENTE, CL.APELLIDOS AS APELLIDOS_CLIENTE, C.PRODUCTO, P.NOMBRE AS NOMBRE_PRODUCTO, C.FECHA, C.UDES
                    FROM EMPRESA.COMPRA C
                    JOIN EMPRESA.CLIENTE CL ON C.CLIENTE = CL.DNI
                    WHERE CL.POBLACION = 'Valencia'
                    ORDER BY C.CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE_CLIENTE</th><th>APELLIDOS_CLIENTE</th><th>PRODUCTO</th><th>NOMBRE_PRODUCTO</th><th>FECHA</th><th/UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NOMBRE_CLIENTE']}</td>";
                echo "<td>{$row['APELLIDOS_CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['NOMBRE_PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasConIgualOMasDe2Unidades':
            // Datos de compras con igual o más de 2 unidades ordenados por dni de cliente
            $sql = "SELECT * FROM EMPRESA.COMPRA WHERE UDES >= 2 ORDER BY CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasConMasDe3productos':
            // Datos de compras con más de 3 productos ordenados por dni de cliente
            $sql = "SELECT CLIENTE, COUNT(DISTINCT PRODUCTO) AS NUM_PRODUCTOS
                    FROM EMPRESA.COMPRA
                    GROUP BY CLIENTE
                    HAVING COUNT(DISTINCT PRODUCTO) > 3
                    ORDER BY CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>CLIENTE</th><th>NUM_PRODUCTOS</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['NUM_PRODUCTOS']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

        case 'ComprasMinimo10Unidades':
            // Datos de compras con un mínimo de 10 unidades ordenados por dni de cliente
            $sql = "SELECT * FROM EMPRESA.COMPRA WHERE UDES >= 10 ORDER BY CLIENTE;";
            $parametros = array();
            $result = traitDB::queryPreparadaDB($sql, $parametros);

            // Tabla Resultados
            echo "<table border='1'>";
            echo "<tr><th>ID_COM</th><th>CLIENTE</th><th>PRODUCTO</th><th>FECHA</th><th>UDES</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['ID_COM']}</td>";
                echo "<td>{$row['CLIENTE']}</td>";
                echo "<td>{$row['PRODUCTO']}</td>";
                echo "<td>{$row['FECHA']}</td>";
                echo "<td>{$row['UDES']}</td>";
                echo "</tr>";
            }

            echo "</table>";
            break;

            default:
                break;
        }

        // Ejecuta la consulta si está definida, y lo pasa a JSON si hay datos
        if (isset($consulta)) {
            $resultados = traitDB::queryPreparadaDB($consulta['sql'], $consulta['parametros']);
            $conn = null;

            if ($resultados) {
                $jsonResultados = json_encode($resultados);
                echo $jsonResultados;
            } else {
                echo json_encode(array("mensaje" => "No hay resultados."));
            }
        }
        
    }
    ?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Ejercicios Consulta</title>
</head>

<body>
    <h1>Consultas de la BD Empresa</h1>
    <form action="consultas.php" method="post">
        <label for="tipoConsulta">Tipo de consulta:</label>
        <select name="tipoConsulta" id="tipoConsulta">
            <option value="ClientePorDni">Cliente dado dni</option>
            <option value="ListadoClientes">Listado clientes</option>
            <option value="ClientesDadapoblacion">Clientes de una población</option>
            <option value="ListadoClientesPorPoblacion">Listado de clientes por población</option>
            <option value="NumeroClientesPorPoblacion">Número de clientes por población</option>
            <option value="ListadoClientesConCompras">Clientes con compras</option>
            <option value="ListadoClientesSinCompras">Clientes sin compras</option>
            <option value="ListadoClientesConComprasDadaPoblacion">Clientes con compras de una población</option>
            <option value="ListadoClientesSinComprasDadaPoblacion">Clientes sin compras de una población</option>
            <option value="ListadoClientesConComprasValencia">Clientes con compras de Valencia</option>
            <option value="ListadoClientesConTresOMasCompras">Clientes con 3 compras o más</option>
            <option value="ListadoClientesConTresComprasOMasPorPoblacion">Clientes con 3 compras o más de una población</option>
            <option value="ProveedorPorNif">Proveedor dado NIF</option>
            <option value="ListadoProveedores">Listado de proveedores</option>
            <option value="ProveedoresEmpiezanPorTexto">Proveedores que empiezan por un texto</option>
            <option value="ProveedoresProductosPvpMayor1000">Proveedores con productos con precio mayor a 1000€</option>
            <option value="ProductoPorCodProd">Producto dado codigo</option>
            <option value="ListadoProductos">Listado de productos</option>
            <option value="ProductosPvpMenorOIgual100">Productos con precio menor a 100</option>
            <option value="ProductosPVPMayorPromedio">Productos con precio mayor al promedio</option>
            <option value="PvpMaximoProductos">PVP máximo de los productos</option>
            <option value="PvpMinimoProductos">PVP mínimo de los productos</option>
            <option value="PvpPromedioProductos">PVP promedio de los productos</option>
            <option value="ProductosNombreContieneTexto">Productos cuyo nombre contiene un texto</option>
            <option value="ListadoCompras">Listado de compras</option>
            <option value="ComprasDeAnyo">Compras a partir de un año dado</option>
            <option value="ComprasDeCliente">Compras de un cliente dado</option>
            <option value="ComprasDeProducto">Compras de un producto dado</option>
            <option value="ComprasDeProveedor">Compras de un proveedor dado</option>
            <option value="ComprasDePoblacion">Compras de una población dada</option>
            <option value="ComprasDeClientesValencia">Compras con algún cliente de la población de Valencia</option>
            <option value="ComprasConIgualOMasDe2Unidades">Compras con 2 unidades o más</option>
            <option value="ComprasConMasDe3productos">Compras con más de 3 productos</option>
            <option value="ComprasMinimo10Unidades">Compras con un mínimo de 10 unidades</option>
        </select>
        </select>
        <label for="dni">DNI:</label>
        <select name="dni" id="dni">
            <?php
            $sql = "SELECT DISTINCT DNI FROM EMPRESA.CLIENTE ORDER BY DNI";

            $parametros = array();

            $result = traitDB::queryPreparadaDB($sql, $parametros);
            foreach ($result as $dni) {
                echo "<option value='{$dni['DNI']}'>{$dni['DNI']}</option>";
            }
            ?>
        </select>
        <label for="poblacion">Población:</label>
        <select name="poblacion" id="poblacion">
            <?php
           $sql = "SELECT DISTINCT POBLACION FROM EMPRESA.CLIENTE ORDER BY POBLACION";

           $parametros = array();

           $result = traitDB::queryPreparadaDB($sql, $parametros);
            foreach ($result as $poblacion) {
                echo "<option value='{$poblacion['POBLACION']}'>{$poblacion['POBLACION']}</option>";
            }
            ?>
        </select>
        <label for="proveedor">Proveedor:</label>
        <select name="proveedor" id="proveedor">
            <?php
           $sql = "SELECT DISTINCT NIF FROM EMPRESA.PROVEEDOR ORDER BY NIF";

           $parametros = array();

           $result = traitDB::queryPreparadaDB($sql, $parametros);
            foreach ($result as $proveedor) {
                echo "<option value='{$proveedor['NIF']}'>{$proveedor['NIF']}</option>";
            }
            ?>
        </select>
        <label for="producto">Producto:</label>
        <select name="producto" id="producto">
            <?php
            $sql = "SELECT DISTINCT COD_PROD FROM EMPRESA.PRODUCTO ORDER BY COD_PROD";

            $parametros = array();

            $result = traitDB::queryPreparadaDB($sql, $parametros);
            foreach ($result as $producto) {
                echo "<option value='{$producto['COD_PROD']}'>{$producto['COD_PROD']}</option>";
            }
            ?>
        </select>
        <label for="parametro">Parámetro de consulta:</label>
        <input type="text" name="parametro" id="parametro">
        <br>
        <input type="submit" value="Consultar">

</body>

</html>
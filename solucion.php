<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/estiloss.css">
    <link rel="stylesheet" type="text/css" href="css/estiloss.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>EL GUSTAZZO</title>
<link rel="stylesheet" href="css/estilo.css">	
	
	
</head>


<body>
 


        <!-- Cabecera -->
        <header>
            <center>
            <table>
                <td>
            <img src="imagenes/logo.jpeg.jpeg" width="150" height="150" > </td>
            <td>
            <h1>DERIVADOS LACTEOS EL GUSTAZZZO</h1></td>
</table>
</center>
        </header>
        <br>
        <div>
            <center>
                <table>
                    <td>
                        <button type="button" class="btn btn-outline-success"><a href="index.html">INICIO</a></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-success"><a href="productos.html">PRODUCTOS</a></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-success">SOLUCIÓN</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-success"><a href="proceso.html">PROCESOS</a></button>
                    </td>
                </table>
            </center>
        </div>

        <hr>
        <!-- Contenido -->
        <section>
            <figure>
                   <b> <h1 id="historia">PREGUNTA PROBLEMA</h1></b>
            </figure>
            ¿Cómo optimizar el proceso de elaboración de quesito para incrementar el rendimiento de la materia prima (leche)?
            <br>
            <br>
            <figure>
                   <b> <h1 id="historia">PROBLEMA PLANTEADO</h1></b>
            </figure>
            Desde el año 2021 se ha hecho evidente el aumento en los precios de la leche en Colombia, explicado principalmennte por el alza en los precios de los concentrados y balanceados que se utilizan dentro del ciclo de producción. Debido al alto costo de la materia prima (leche) en la elaboración de productos lácteos, las organizaciones han aumentado el precio de sus productos, lo que impacta directamente sobre las finanzas de los usuarios finales y reduciendo competitividad. Teniendo en cuenta esto, es imperativo la optimización del proceso de elaboración de quesito reflejado en litros de leche por kilo de queso elaborado, de tal manera que se permita alcanzar una mayor cantidad de quesito elaborado con una igual o menor cantidad de leche.
            <br>
            <br>
            <figure>
                   <b> <h1 id="historia">PROPUESTA DE SOLUCIÓN</h1></b>
            </figure>
            Según lo que estuvimos investigando, presentamos 2 productos (que no tienen sabor) para darle volumen  a la materia prima (la leche), lo cual hace que haya más cantidad del producto final (queso) y así se puedan bajar los precios o aumentar la cantidad de producción por lotes. <p></p> Abajo de estas descripciones hay un formulario, en el cual solo necesitas diligenciar la cantidad de leche que van a utilizar, y cuál de los cuatro productos van a utilizar y al calcular, este va a mandar un mensaje donde diga cuanta es la cantidad exacta de producto que necesitan en ese lote. Seguido de esto, en la pestaña productos está una foto de los productos que nosotros presentamos, los productos que venden en la empresa y otros productos que pueden utilizar como alternativa para no tener desperdicios de nada de lo que produzcan, todos con una muy breve descripción. <p>A parte de todo esto se presenta en la página, una nueva actualización del proceso de producción del quesito y de una manera más llamativa y que los empleados puedan tener un fácil acceso actualizado al proceso de este y así poderlos mantener informados.
            <br>
            <br>
            <figure>
                   <b> <h1 id="historia">FORMULARIO</h1></b>
            </figure>
            <center>
                <form action="index.php" method="post">
                    <h1>Calcular cantidad de producto</h1>
                    <label for="">Producto:</label>
                    <select name="Producto" id="">
                        <option value="Arroz">Lecitina</option>
                        <option value="Azucar">CMC</option>
                    </select>
                    <label for="">Cantidad leche</label>
                    <input type="text" name="Cantidad" placeholder="Ingresa la cantidad de leche en litros">
                    <br>
                    <input type="submit" name="Calcular" value="Calcular">
                </form>
            </center>
  
        </section>


        <!-- Contenido relacionado-->
        <aside>
                    <img src="imagenes/quesito.jpg">
                    <br>
                    <br>
                    <img src="imagenes/gusto.jpg">
                    <br>
                    <br>
                    <img src="imagenes/productos.jpg">
        </aside>



        <!-- Pie de pagina -->
        <footer>
            <h4>LINEAS DE ATENCIÓN</h4>
                <h5>Teléfono: 853 64 85</h5>
                <h5>Correo: elgustazzzo@gmail.com</h5>
        </footer>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Re-Read</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

  <div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>



<div class="row">
 
  <div class="column left">
        <div class="topnav">
          <a href="../index.php">Re-Read</a>
          <a href="libros.php">Libros</a>
          <a href="ebooks.php">eBooks</a>
        </div>
    <h3>Toda la actualidad en eBook</h3>
    <!---
    <div class="gallery">
        <img src="../img/cell.jpeg" alt="Cell">
        <div class="desc">A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
      </div>
    -->
    <?php
    // 1. Conexión con la base de datos
    include '../services/connection.php';

    // 2. Selección y muestra de datos de la base de datos
    $result = msqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books");

    if (!empty($result) && mysqli_num_rows($result) > 0) {
      // datos de salida de cada fila (fila = row)
      while ($row = mysqli_fetch_array($result)) {
        echo "<div class='gallery'>";
        // Añadimos la imagen a la página con la etiqueta img de HTML
        echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
        // Añadimos el título a la página con la etiqueta h2 de HTML
        // echo "<div class='desc'".$row['Title']."</div>";
        echo "</div>";
      }
    } else {
      echo "0 resultados";
    }
    ?>

    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-el-ciclo-del-hombre-lobo/9788499081281/1819674"><img src="../img/elciclodelhombrelobo.jpeg" alt="ebook 1">
      <div>El Ciclo del Hombre Lobo</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-las-tinieblas-y-el-alba/9788401022876/11595826"><img src="../img/imagen1.jpg" alt="ebook 2">
      <div>Las Tinieblas y el Alba</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-sol-de-medianoche-saga-crepusculo-5/9788420456591/11651147"><img src="../img/imagen2.jpg" alt="ebook 3">
      <div>Sol de Medianoche</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.casadellibro.com/libro-mientras-escribo/9788497597326/907511"><img src="../img/mientrasescribo.jpeg" alt="ebook 4">
      <div>Mientras Escribo</div></a>
    </div>
  </div>
  
  <div class="column right">
    <h2>Top Ventas</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
  </div>
</div>
  
</body>
</html>

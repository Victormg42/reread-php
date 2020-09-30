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
    $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books");

    if (!empty($result) && mysqli_num_rows($result) > 0) {
      // datos de salida de cada fila (fila = row)
      $i=0;
      while ($row = mysqli_fetch_array($result)) {
        $i++;
        echo "<div class='ebook'>";
        // Añadimos la imagen a la página con la etiqueta img de HTML
        echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
        // Añadimos el título a la página con la etiqueta h2 de HTML
        echo "<div class='desc'>".$row['Description']."</div>";
        echo "</div>";
        if ($i%3==0) {
          echo "<div style='clear:both;'></div>";
        }
      }
    } else {
      echo "0 resultados";
    }
    ?>
  </div>
  
  <?php
  echo  "<h2>Top Ventas</h2>";
  $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = 1");
  if (!empty($result) && mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila (fila = row)
    while ($row = mysqli_fetch_array($result)) {
    echo "<div style='margin-top: -30px;' class='column right'>";
    echo "<p>".$row['Title']."</p>";
    echo "</div>";
    }
  } else {
    echo "Sin resultados";
  }
  ?>
</div>
  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilocss.css">
</head>
<body>
    <section>
        <?php 
        $conexion = new mysqli("localhost", "root", "", "proyecto1");
        
        $sql ="SELECT id, nombre , contenido, fecha, autor FROM articulos ";
        
        $resultado = $conexion->query($sql);
        
        while ($fila = $resultado->fetch_assoc()){
            echo"
        <article>
            <h3>{$fila["nombre"]}</h3>
            <div>
            <img src='https://highxtar.com/wp-content/uploads/2024/07/highxtar-jacquemus-la-puchaina-destacada-1440x1080.jpg' alt='gua'>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores veritatis eligendi exercitation
                em suscipit magni nihil ipsum molestiae eos, harum reiciendis sunt, impedit alias aut officia, asp
                ernatur nobis quaerat fugiat inventore.
                
            </p>
        </article>";
        }
        ?> 

    </section>
</body>
</html>
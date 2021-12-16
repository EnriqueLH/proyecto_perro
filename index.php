<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <!-- Menu -->
    <?php include("components/menu.php"); ?>

    <div style="margin-left: 20px;margin-right: 20px;">
    <h3 style="margin-top: 100px;">Hombres</h3>
    <div class="row">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tienda";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM productos WHERE categoria = 'ropa_hombre' OR categoria = 'calzado_hombres' OR categoria = 'accesorios_hombres'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col s12 m6 l3 xl3">
            <div class="card">
                <div class="card-image" style="height: 300px;background-image: url('<?php echo $row["imagen"];?>');background-size: cover;">
                </div>
                    <div class="card-content">
                    <h6><?php echo $row["nombre"]; ?></h6>
                    <p>$<?php echo $row["precio"];?></p>
                    <p><?php echo $row["marca"];?></p>
                    </div>
                    <div class="card-action">
                    <p><?php echo $row["descripcion"];?></p>
                </div>
            </div>
        </div>
        <?php
            }
            } else {
            echo "No hay productos registrados aún.";
            }
            $conn->close();
        ?>
    </div>

    <h3>Mujeres</h3>
    <div class="row">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tienda";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM productos WHERE categoria = 'ropa_mujeres' OR categoria = 'calzado_mujeres' OR categoria = 'accesorios_mujeres'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col s12 m6 l3 xl3">
            <div class="card">
            <div class="card-image" style="height: 300px;background-image: url('<?php echo $row["imagen"];?>');background-size: cover;">
                </div>
                    <div class="card-content">
                    <h6><?php echo $row["nombre"]; ?></h6>
                    <p>$<?php echo $row["precio"];?></p>
                    <p><?php echo $row["marca"];?></p>
                    </div>
                    <div class="card-action">
                    <p><?php echo $row["descripcion"];?></p>
                </div>
            </div>
        </div>
        <?php
            }
            } else {
            echo "No hay productos registrados aún.";
            }
            $conn->close();
        ?>
    </div>

    <h3>Niños</h3>
    <div class="row">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tienda";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM productos WHERE categoria = 'ropa_niños' OR categoria = 'calzado_niños'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col s12 m6 l3 xl3">
            <div class="card">
            <div class="card-image" style="height: 300px;background-image: url('<?php echo $row["imagen"];?>');background-size: cover;">
                </div>
                    <div class="card-content">
                    <h6><?php echo $row["nombre"]; ?></h6>
                    <p>$<?php echo $row["precio"];?></p>
                    <p><?php echo $row["marca"];?></p>
                    </div>
                    <div class="card-action">
                    <p><?php echo $row["descripcion"];?></p>
                </div>
            </div>
        </div>
        <?php
            }
            } else {
            echo "No hay productos registrados aún.";
            }
            $conn->close();
        ?>
    </div>

    <h3>Calzado</h3>
    <div class="row">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "tienda";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM productos WHERE categoria = 'calzado_mujeres' OR categoria = 'calzado_hombres' OR categoria = 'calzado_niños'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col s12 m6 l3 xl3">
            <div class="card">
            <div class="card-image" style="height: 300px;background-image: url('<?php echo $row["imagen"];?>');background-size: cover;">
                </div>
                    <div class="card-content">
                    <h6><?php echo $row["nombre"]; ?></h6>
                    <p>$<?php echo $row["precio"];?></p>
                    <p><?php echo $row["marca"];?></p>
                    </div>
                    <div class="card-action">
                    <p><?php echo $row["descripcion"];?></p>
                </div>
            </div>
        </div>
        <?php
            }
            } else {
            echo "No hay productos registrados aún.";
            }
            $conn->close();
        ?>
    </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/dropdown-menu.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioIF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(https://p4.wallpaperbetter.com/wallpaper/185/914/378/hexagon-white-abstract-3d-abstract-hd-wallpaper-preview.jpg) ;">
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <img src="img/Captura de pantalla (15).png" width="400px" alt="">
            </div>
            <div class="col">
                <form method="POST" action="Ejercicio.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ingresa el sueldo</label>
                        <input name="txtSueldo" type="number" min="1.00" class="form-control" id="exampleFormControlInput1" step="0.01" required placeholder="1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Ingrese el tiempo de trabajo</label>
                        <input type="number" name="txtTiempo" placeholder="1" min="0" class="form-control">
                        <br>
                        <input type="submit" value="Calcular" name="btn_Calcular" class="btn btn-warning">
                    </div>
                </form>

            </div>

        </div>
    </div>
    <br>
    <?php
    if (isset($_POST["btn_Calcular"])) {
        $Sueldo = $_POST["txtSueldo"];
        $Tiempo = $_POST["txtTiempo"];
        $Descuento = 0.00;
        if ($Tiempo >= 0 && $Tiempo <= 5) {
            $Descuento = 0.10;
        } else {
            if ($Tiempo >= 6 && $Tiempo <= 10) {
                $Descuento = 0.20;
            } else {
                if ($Tiempo >= 11) {
                    $Descuento = 0.30;
                }
            }
        }
    }
    ?>
    <?php
    if (isset($_POST["btn_Calcular"])) {
    ?>
        <div class="container">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Salario del empleado</th>
                                <td><?php echo "$" . $Sueldo; ?></td>

                            </tr>
                            <tr>
                                <th scope="row" >Porcentaje del aumento</th>
                                <td><?php echo "%" . $Descuento * 100; ?></td>

                            </tr>
                            <tr>
                                <th scope="row">Aumento Recibido</th>
                                <td><?php echo "$" . $Sueldo * $Descuento; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nuevo salario</th>
                                <td> <?php echo "$" . $Sueldo + ($Descuento * $Sueldo); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">

                </div>
            </div>
        </div>

    <?php
    }
    ?>
</body>

</html>
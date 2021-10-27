<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>

<body>
    <?php
    require './vendor/autoload.php';
    use App\CV;
    ?>

    <header>
        <h1>CV</h1>
    </header>
    <hr>
    <main>
        <section>
            <form action="#">
                <fieldset>
                    <legend>Datos personales</legend>

                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="nombre">

                    <label for="apellido">Apelldio</label>
                    <input type="text" placeholder="apellido">

                    <label for="edad">Edad</label>
                    <input type="number" placeholder="edad">
                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>
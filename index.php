<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9 -DWES</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Krub&display=swap');</style>
    <style>@import url("/Tarea_9_DWES/css/styles.css");</style>
</head>
<body>
    <header>
        <a href="/Tarea_9_DWES/php/index.php"><img src="/Tarea_9_DWES/images/pngfind.com-rick-and-morty-portal-165525.png" alt="imagen_cabecera"/></a>
    </header>
    <nav>

    </nav>
    <main>
        <section>
            <h2 id="subtitulo">Main Characters</h2>
                <?php
                    /**
                     * @param string $url con url de la api pública
                     */            
                    $url = "https://rickandmortyapi.com/api/character/?pages=826";
                    /**
                     * @var con método para conectar y obtener datos de la api pública
                     */
                    $json = file_get_contents($url, false);
                    /**
                     * @var donde se convierte el fichero json recibido en array. Para poder trabajar con él
                     */
                    $json = json_decode($json, true);
                    //var_dump($json);

                    /**
                     * A partir de aquí se obtienen los datos del array, y se va formateando la salida en html
                     */
                ?>
            <div class="grid_container">
                <?php   for($i = 0; $i < count($json['results']); $i++ ) 
                        { ?>
                
                    <div class="grid_element">
                            <div id="centrar_imagen"> 
                                <img src="<?php echo $json['results'][$i]['image']; ?>" alt="imagen_personaje"/>
                            </div>
                            <h2><?php echo $json['results'][$i]['name']; ?></h2>
                            <div class="caja_listado">
                                <ul>
                                    <li><span>Status</span> <?php echo $json['results'][$i]['status']; ?></li>
                                    <li><span>Species</span> <?php echo $json['results'][$i]['species']; ?></li>
                                    <li><span>Gender</span> <?php echo $json['results'][$i]['gender']; ?></li>
                                    <li><span>Origin</span> <?php echo $json['results'][$i]['origin']['name']; ?></li>
                                    <li><span>Location</span> <?php echo $json['results'][$i]['location']['name']; ?></li>
                                    <li><span>id</span> <?php echo $json['results'][$i]['id']; ?></li>
                                </ul>
                            </div> <!-- fin caja_flex -->                            
                    </div> <!-- fin grid_element -->                
                <?php   } ?>
            </div> <!-- fin grid_container -->
            
        </section>
    </main>    
    <footer>
        <h2>Roberto Díaz Oriol | Tarea 9 DWES</h2>
    </footer>
    
</body>
</html>
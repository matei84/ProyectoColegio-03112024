<!doctype html>
<html lang="en">
    <head>
        <title>Registro Notas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="js/funciones.js"></script> 
 

    </head>

    <body>
        <header>
            <?php include 'log/header.php';?>
            
        </header>

        <main>

            <div class="container" style="margin-top: 50px; margin-left: 550px">

                <button type="button" class="btn btn-primary">IFC2365</button>
                <button type="button" class="btn btn-primary">IFC2366</button>
                <button type="button" class="btn btn-primary">IFC2367</button>

            </div> 
        
            <div class="container" style="margin-top: 50px; border:2px solid black;">
            
                <table>
                    <thead>
                            <tr>
                                <th scope="col"> Modulos </th>
                                <th scope="col"> Hora Modulos </th>
                                <th scope="col"> Nota Final </th>
                            </tr>
                    </thead>

                    <tbody>
                        <tr class="table table-primary">
                            <td scope="row"> MF0950_2: Construccion de paginas web </td>
                            <td> 120 </td>
                            <td id="demo1"> </td>
                        </tr>

                        <tr class="table table-primary">
                            <td scope="row"> MF0951_2: Integracion componentes de software </td>
                            <td> 120 </td>
                            <td id="demo2"></td>
                        </tr>

                        <tr class="table table-primary">
                            <td scope="row"> MF0951_2: Publicacion de paginas Web: </td>
                            <td> 120 </td>
                            <td id="demo3"></td>
                        </tr>
                    </tbody>
                
                </table>

                <h5>Nota Promedio: <h3 id="demo" name= "nota" ></h3></h5>

                <button type="button" class="btn btn-primary" style="float: right; margin-top:-40px" onclick="nota()">Calcular Nota</button>
                            
            </div>

            <form action="procesarNotas.php" method="post">
                
                <div class="container" style="border: 2px solid black; margin-top:50px">
                    <!-- <div class="mb-3">  -->

                    <label for="nombreEstudiante" style="width: 200px">
                        <span> Nombre del estudiante </span>              
                        <input type="text" id="nombrEstudiante" 
                                placeholder="Nombre del estudiante" name="nombre" required>
                                <!-- style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px" -->
                            
                    </label>
                    <!-- </div> -->
                    
                    <!-- <div class="mb-3">  -->
                    <label for="identificacion" style="width: 200px;">
                        <span>Identificacion</span>              
                        <input type="text" id="identificacion" 
                        placeholder="ID"  name= "identificacion" required>
                        <!-- style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px" -->
                        
                    </label>
                    <!-- </div> -->

                    <!-- <div class="mb-3">  -->
                    <label for="calificacion" style="width: 200px">
                    <span>Calificacion</span>
                    <select name="calificacion" id="calificacion" name= "cualificacionFinal" style="float:right">
                        <option value="1"> Apto </option>
                        <option value="0"> No apto </option>
                    </select>
                    </label>
                    <!-- </div>  class="form-label"  "float:right"-->

                    <input type="submit" value= "Enviar Informacion" />
                    
                    <input type="reset" value= "Borrar Informacion" />

                </div>
            </form>
     
        </main>
        <footer>
            <?php include 'log/footer.php';?>
        
        </footer>
        <!-- Bootstrap JavaScript Libraries -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    </body>

</html>




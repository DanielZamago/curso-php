<script>
    window.onload = function(){
        var lista =  document.getElementById("contacto");
        lista.onchange = seleccionarContacto;

        function seleccionarContacto(){
            window.location="?op=cambios&contacto_slc="+lista.value;
        }
    }
</script>

<form id="cambio_contacto" name="cambio_frm" action="php/update_contacto.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambio Contacto</legend>
        <div>
            <label for="contacto">Contacto: </label>
            <select id="contacto" class="cambio" name="contacto_slc" required>
                <option value="" >- - -</option>
                <?php include("select_email.php"); ?>
            </select>
        </div>
        <div>
            <?php
                if($_GET["contacto_slc"]!=null){
                    $conexion2 = conectarse();
                    $contacto = $_GET["contacto_slc"];
                    $consulta_contacto = "SELECT * from contactos where email = '$contacto'";
                    $ejecutar_consulta = $conexion2 -> query($consulta_contacto);
                    $registro = $ejecutar_consulta->fetch_assoc();
                    include("php/cambio_form.php");
                }
            ?>
        </div>
        <?php include("php/mensajes.php"); ?>
    </fieldset>
</form>
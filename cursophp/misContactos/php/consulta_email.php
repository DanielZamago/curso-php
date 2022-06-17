<br/>
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="email">EMAIL:</label>
    <input type="email" id="emial" class="cambio" name="email_txt" placeholder="Excribe el email" title="Email" required />
</div>
<input type="submit" id="enviar_busqueda" class="cambio" name="enviar_btn" value="Buscar"/>

<?php 
    if(!empty($_GET["email_txt"])){
        $email = $_GET["email_txt"];
        $consulta = "SELECT * from contactos where email like '%$email%'";
        include("tabla_resultados.php");
    }
?>
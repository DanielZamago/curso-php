<br/>
<div>
    <input type="hidden" name="op" value="consultas" />
    <label for="buscador">Buscador:</label>
    <input type="buscador" id="buscador" class="cambio" name="q" placeholder="Ecribe una palabra" title="Tu busqueda" required />
</div>
<input type="submit" id="enviar_busqueda" class="cambio" name="enviar_btn" value="Buscar"/>

<?php 
    if(!empty($_GET["q"])){
        $q = $_GET["q"];
        $consulta = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$q' IN BOOLEAN MODE)";
	    include("tabla_resultados.php");
    }
?>
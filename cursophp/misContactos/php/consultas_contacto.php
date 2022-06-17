<form action="" id="consulta_contacto" name="consulta_frm" method="GET">
    <fieldset>
        <legend>Consulta de contactos</legend>
        <label for="consulta_lista">Tipo de conusulta</label>
        <select name="consulta_slc" id="consulta_lista" required>
            <option value="">- - -</option>
            <option value="todos" <?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos los contactos</option>
            <option value="email" <?php if($_GET["consulta_slc"]=="email"){ echo " selected"; } ?>>Por email</option>
            <option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){ echo " selected"; } ?>>Por inicial</option>
            <option value="sexo" <?php if($_GET["consulta_slc"]=="sexo"){ echo " selected"; } ?>>Sexo</option>
            <option value="pais" <?php if($_GET["consulta_slc"]=="pais"){ echo " selected"; } ?>>Por pais</option>
            <option value="buscador" <?php if($_GET["consulta_slc"]=="buscador"){ echo " selected"; } ?>>Tipo buscador</option>
        </select>
        <?php  
            switch($_GET["consulta_slc"]){
                case "todos":
                    include("php/consulta_todo.php");
                    break;
                case "email":
                    include("php/consulta_email.php");
                    break;
                case "inicial":
                    include("php/consulta_inicial.php");
                    break;
                case "sexo":
                    include("php/consulta_sexo.php");
                    break;
                case "pais":
                    include("php/consulta_pais.php");
                    break;
                case "buscador":
                    include("php/consulta_buscador.php");
                    break;
            }
        ?>
    </fieldset>
</form>
<script>
    window.onload = function(){
        var lista = document.getElementById("consulta_lista");
        lista.onchange = function(){
            window.location="?op=consultas&consulta_slc="+lista.value;
        };
    }
</script>
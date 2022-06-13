<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de datos PHP</title>
</head>
<body>
    <?php 
        if($_GET["error"]=="si"){
            echo "<span style='color:red'>Verifica tus datos :(</span>";
        }
    ?>
    <hgroup><h1>Formulario con GET</h1></hgroup>
    <form name="valida_get_frm" action="validar-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        Ingresa tu nombre:
        <input type="text" name="nombre_txt" />
        <br/><br/>
        Ingresa tu password:
        <input type="password" name="password_txt" />
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="M"/>
        Masculino&nbsp;
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="F"/>
        Femenino&nbsp;
        <br/><br/>
        <input type="hidden" name="enviar_hdn" value="get" />
        <input type="button" id="enviar-get" name="enviar_btn" value="Enviar GET" />
    </form>
    <hgroup><h1>Formulario con POST</h1></hgroup>
    <form name="valida_post_frm" action="validar-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        Ingresa tu nombre:
        <input type="text" name="nombre_txt" />
        <br/><br/>
        Ingresa tu password:
        <input type="password" name="password_txt" />
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="M"/>
        Masculino&nbsp;
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="F"/>
        Femenino&nbsp;
        <br/><br/>
        <input type="hidden" name="enviar_hdn" value="post" />
        <input type="button" id="enviar-post" name="enviar_btn" value="Enviar POST" />
</body>
</html>

<script>
    function validarDatosGET(){
        var verificar=true;
        if(!document.valida_get_frm.nombre_txt.value){
            alert('El campo nombre es requerido.');
            document.valida_get_frm.nombre_txt.focus();
            verificar=false;
        }else if(!document.valida_get_frm.password_txt.value){
            alert('El campo password es requerido.');
            document.valida_get_frm.password_txt.focus();
            verificar=false;
        }else if(!document.valida_get_frm.sexo_rdo[0].checked && !document.valida_get_frm.sexo_rdo[1].checked){
            alert('El radio sexo es requerido.');
            document.valida_get_frm.sexo_rdo[0].focus();
            verificar=falsa;
        }
        if(verificar){
            document.valida_get_frm.submit();
        }
    }
    function validarDatosPOST(){
        var verificar=true;
        if(!document.valida_post_frm.nombre_txt.value){
            alert('El campo nombre es requerido.');
            document.valida_post_frm.nombre_txt.focus();
            verificar=false;
        }else if(!document.valida_post_frm.password_txt.value){
            alert('El campo password es requerido.');
            document.valida_post_frm.password_txt.focus();
            verificar=false;
        }else if(!document.valida_post_frm.sexo_rdo[0].checked && !document.valida_post_frm.sexo_rdo[1].checked){
            alert('El radio sexo es requerido.');
            document.valida_post_frm.sexo_rdo[0].focus();
            verificar=falsa;
        }
        if(verificar){
            document.valida_post_frm.submit();
        }
    }
    
    window.onload = function(){
        document.getElementById("enviar-get").onclick = validarDatosGET;
        document.getElementById("enviar-post").onclick = validarDatosPOST;
    }
</script>
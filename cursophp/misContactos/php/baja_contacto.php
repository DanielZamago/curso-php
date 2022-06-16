<form id="baja_contacto" name="baja_frm" action="php/eliminar_contacto.php" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>Baja Contacto</legend>
        <div>
            <label for="email">Correo: </label>
            <select id="email" class="cambio" name="email_slc" required>
                <option value="" >- - -</option>
                <?php include("select_email.php"); ?>
            </select>
        </div>
        <div>
            <input type="submit" id="enviar_baja" class="cambio" name="enviar_boton" value="Eliminar" />
        </div>
        <?php include("php/mensajes.php"); ?>
    </fieldset>
</form>
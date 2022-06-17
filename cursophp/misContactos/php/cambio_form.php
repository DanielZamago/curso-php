<legend>EDITAR CONTACTO</legend>
<div>
    <label for="email">Correo</label>
    <input type="email" id="email" class="cambio" name="email_txt" placeholder="Ingresa tu correo" title="Tu correo" value="<?php echo $registro["email"]; ?>" required />
</div>
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre_txt" id="nombre" class="cambio" placeholder="Ingresa tu nombre" title="Tu nombre" value="<?php echo $registro["nombre"]; ?>" required />
</div>
<div>
    <label for="m">Sexo</label>
    <br />
    <input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" <?php if ($registro["sexo"] == "M") {
                                                                            echo "checked";
                                                                        } ?> required /> <label for="m">Masculino</label>
    <br />
    <input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" <?php if ($registro["sexo"] == "F") {
                                                                            echo "checked";
                                                                        } ?> required /> <label for="f">Femenino</label>
</div>
<div>
    <label for="nacimiento">Fecha de nacimiento: </label> <br />
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumpleaños" value="<?php echo $registro["nacimiento"]; ?>" required>
</div>
<div>
    <label for="telefono">Num. de telefono:</label><br />
    <input type="text" id="numero" class="cambio" placeholder="Ingresa tu numero" name="telefono_txt" title="Tu telefono" value="<?php echo $registro["telefono"]; ?>" required>
</div>
<div>
    <label for="pais">Pais: </label>
    <select id="pais" class="cambio" name="pais_slc" required>
        <option value="">- - -</option>
        <?php include("select_pais.php"); ?>
    </select>
</div>
<div>
    <label for="foto">Foto: </label>
    <div class="adjuntar-archivo cambio">
        <input type="file" id="foto" name="foto_fls" title="Sube tu foto" />
        <input type="hidden" name="foto_hdn" value="<?php echo $registro["foto"]; ?>" required />
    </div>
    <div>
        <img src="<?php echo "img/fotos/" . $registro["foto"] ?>" alt="">
    </div>
</div>
<div>
    <input type="submit" id="enviar_cambio" class="cambio" name="enviar_btn" title="Enviar" />
</div>
<?php include("php/mensajes.php") ?>

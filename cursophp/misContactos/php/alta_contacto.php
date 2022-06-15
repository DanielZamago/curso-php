<form id="alta_contacto" name="alta_frm" action="php/agregar_contacto.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de contacto</legend>
        <div>
            <label for="email">Correo</label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Ingresa tu correo" title="Tu correo" required/>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre_txt" id="nombre" class="cambio" placeholder="Ingresa tu nombre" title="Tu nombre" required/>
        </div>
        <div>
            <label for="m">Sexo</label>
            <br/>
            <input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" required /> <label for="m">Masculino</label>
            <br/>
            <input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" required /> <label for="f">Femenino</label>
        </div>
        <div>
            <label for="nacimiento">Fecha de nacimiento: </label> <br/>
            <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumpleaños" required>
        </div>
        <div>
            <label for="telefono">Num. de telefono:</label><br/>
            <input type="text" id="numero" class="cambio" placeholder="Ingresa tu numero" name="telefono_txt" title="Tu telefono" required>
        </div>
        <div>
            <label for="pais">Pais: </label>
            <select id="pais" class="cambio" name="pais_slc" required>
                <option value="" >- - -</option>
                <?php include("select_pais.php"); ?>
            </select>
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <div class="adjuntar-archivo cambio">
                <input type="file" id="imagen" class="cambio" name="imagen_fls" title="Sube tu imagen"/>
            </div>
        </div>
        <div>
            <input type="submit" id="enviar_alta" class="cambio" name="enviar_btn" title="Enviar"/>
        </div>
        <?php include("php/mensajes.php") ?>
    </fieldset>

</form>
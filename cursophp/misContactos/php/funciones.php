<?php

function borrar_imagenes($ruta, $extension)
{
    switch ($extension) {
        case ".jpg":
            if (file_exists($ruta . ".png"))
                unlink($ruta . ".png");
            if (file_exists($ruta . ".gif"))
                unlink($ruta . ".gif");
            break;
        case ".gif":
            if (file_exists($ruta . ".png"))
                unlink($ruta . ".png");
            if (file_exists($ruta . ".jpg"))
                unlink($ruta . ".jpg");
            break;
        case ".png":
            if (file_exists($ruta . ".jpg"))
                unlink($ruta . ".jpg");
            if (file_exists($ruta . ".gif"))
                unlink($ruta . ".gif");
            break;
    }
}
function subir_imagen($tipo, $imagen, $email)
{
    if (strstr($tipo, "image")) {
        if (strstr($tipo, "jpg"))
            $extension = ".jpg";
        else if (strstr($tipo, "gif"))
            $extension = ".gif";
        else if (strstr($tipo, "png"))
            $extension = ".png";

        $tam_imag = getimagesize($imagen);
        $ancho_img = $tam_imag[0];
        $alto_img = $tam_imag[1];
        $ancho_img_deseado = 420;

        if ($ancho_img > $ancho_img_deseado) {
            $nuevo_ancho_img = $ancho_img_deseado;
            $nuevo_alto_img = ($alto_img / $ancho_img) * $nuevo_ancho_img;
            $imagen_reajustada = imagecreatetruecolor($nuevo_ancho_img, $nuevo_alto_img);

            switch ($extension) {
                case ".jpg":
                    $img_original = imagecreatefromjpeg($imagen);
                    imagecopyresampled(
                        $imagen_reajustada,
                        $img_original,
                        0,
                        0,
                        0,
                        0,
                        $nuevo_ancho_img,
                        $nuevo_alto_img,
                        $ancho_img,
                        $alto_img
                    );
                    break;
                    $nombre_img_ext = "../img/fotos/" . $email . $extension;
                    $nombre_img = "../img/fotos/" . $email;
                    imagejpeg($imagen_reajustada, $nombre_img_ext, 100);
                    //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img, ".jpg");
                    break;
                case ".gif":
                    $img_original = imagecreatefromgif($imagen);
                    //Reajusto la imagen nueva con respecto a la original
                    imagecopyresampled($imagen_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    //Guardo la imagen reescalada en el servidor
                    $nombre_img_ext = "../img/fotos/" . $email . $extension;
                    $nombre_img = "../img/fotos/" . $email;
                    imagegif($imagen_reajustada, $nombre_img_ext, 100);
                    //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img, ".gif");
                    break;
                case ".png":
                    $img_original = imagecreatefrompng($imagen);
                    //Reajusto la imagen nueva con respecto a la original
                    imagecopyresampled($imagen_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    //Guardo la imagen reescalada en el servidor
                    $nombre_img_ext = "../img/fotos/" . $email . $extension;
                    $nombre_img = "../img/fotos/" . $email;
                    imagepng($imagen_reajustada, $nombre_img_ext);
                    //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img, ".png");
                    break;
            }
        } else {
            $destino = "../img/fotos" . $email . $extension;
            move_uploaded_file($imagen, $destino) or die("No de pudo subir la imagen");

            $nombre_img = "../img/fotos/" . $email;
            borrar_imagenes($nombre_img, $extension);
        }

        $imagen = $email . $extension;
        return $imagen;
    } else {
        return false;
    }
}

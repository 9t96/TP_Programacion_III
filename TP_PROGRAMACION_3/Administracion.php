<?php 

require_once('Empleado.php');

if(isset($_POST["guardar"]) && isset($_FILES["foto"]))
{

    $fotoOK = FALSE;
    
    $destino = "fotos/".$_FILES["foto"]["name"];

    //Devuelve exclusivamente extension del archivo.(ej jpg)
    $tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);
    
    //Si no es una imgen retorna FALSE.
    $esImagen = getimagesize($_FILES["foto"]["tmp_name"]);
    
    //Tamaño menor a 1mb.
    if ($esImagen !== FALSE) {
        
        if ($_FILES["foto"]["size"]<1000000) {
            $fotoOK = TRUE;

            // JPG, BMP, GIF, PNG o JPEG.
            if ($tipoArchivo=="jpg" || $tipoArchivo=="bmp" || $tipoArchivo=="gif" || $tipoArchivo=="png" || $tipoArchivo=="jpeg") {
                
                $fotoOK = TRUE;
            }
            else
            {
                $msj = "Verifique el archivo sea jpg, bmp, gif, png o jpeg.";
                $fotoOK = FALSE;
            }
        }
        else
        {
            $msj = "Verifique que el tamaño de la imagen sea menor a 1Mb.";
        }
    }

    if ($fotoOK == TRUE) {
        
        $cambioDeNombre = $_POST["txtApellido"]."_".$_POST["txtNombre"].".".$tipoArchivo;

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], "fotos/".$_POST["txtApellido"]."_".$_POST["txtNombre"].".".$tipoArchivo)) {

            $emp = new Empleado($_POST["txtNombre"], $_POST["txtApellido"], $_POST["txtDni"], $_POST["txtSexo"], $_POST["txtLegajo"], $_POST["txtSueldo"],$cambioDeNombre);
            
            $arch = fopen("empleados.txt","a");

            if(fwrite($arch,$emp->ToString()."\r\n"))
            {
                echo "<a href='"."mostrar.php'".">Mostrar Empleados</a>";
            }
            else
            {
                echo "<a href='"."index.html'"."></a>";
            }

            fclose($arch); 
        }
    }
    else
    {
        echo "PROBLEMAS CON LA IMAGEN".$msj;
    }

}
else
{
	echo "<a href='"."mostrar.php'".">Mostrar Empleados</a>";
}

?>
<?php
function AccesoLogin($user, $passw)
{
    $consultas = new Login();
    $data = $consultas->GetDataUser($user);

    if ($data) {
        foreach ($data as $result) {
            $idusuario = $result['idusuario'];
            $hash = $result['clave'];
            $tipo = $result['tipo'];
            $estado = $result['estado'];
        }
        if ($estado == 1)
        {
            if (password_verify($passw,$hash))
            {
                if($tipo==1) //Vista Admin
                {
                    $_SESSION["idusuario"] = $idusuario;
                    $_SESSION["user"] = $user;
                    $_SESSION["tipo"] = $tipo;
                    header("Location: ../views/admin/");
                }
                else
                {
                    $_SESSION["idusuario"] = $idusuario;
                    $_SESSION["user"] = $user;
                    $_SESSION["tipo"] = $tipo;
                    header("Location: ../views/operador/");

                }
            }
            else
            {
                header("Location:../index.php?msj=".base64_encode("Contraseña incorrecta...")); 
            }
        }
        else
        {
        header("Location:../index.php?msj=".base64_encode("El usuario no tiene permisos de acceso..."));  
        }

    }
    else
    {
    header("Location:../index.php?msj=".base64_encode("El usuario no existe..."));  
    }
}

/* FUncion para realizar un CRUD en cualquier tabla */
function CRUD($query,$tipo)
{
    $consultas = new Procesos();
    $data = $consultas->isdu($query,$tipo);
    return $data;
}

/* Funcion para contar registros en cualquier tabla */
function CountReg($query)
{
    $consultas = new Procesos();
    $data = $consultas->row_data($query);
    return $data;
}
?>
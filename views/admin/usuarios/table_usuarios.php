<style>
    .cHead {
        vertical-aling: middle;
        text-aling: center;
    }
</style>
<table class="table table-borderless table-responsive-xl">
    <thead class="bg-dark text-white">
        <tr>
            <th>N°</th>
            <th>Usuarios</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th colspan="4"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($dataUser AS $result):?>
                <tr>
                <td><?php echo $cont +=1;?></td>
                <td><?php echo $result['usuario'];?></td>
                <td>
                <?php 
                    if($result['tipo'] == 1)
                    {
                        echo "Administrador";
                    }
                    else{
                        echo "Operador";
                    }
                ?>
                </td>
                <td>
                <?php 
                    if($result['estado'] == 1)
                    {
                        echo "Habilitado";
                    }
                    else{
                        echo "Deshabilitado";
                    }
                ?> 
                </td>
                <td>
                    <?php if($result['estado'] == 1):?>
                        <a href="" class="btn btn-info btnHDUser" id-user="<?php echo $result['idusuario'];?>" estado="0"><i class="fas fa-user-lock"></i></a>
                    <?php else:?>
                        <a href="" class="btn btn-info btnHDUser" id-user="<?php echo $result['idusuario'];?>" estado="1"><i class="fas fa-user-check" ></i></a>
                    <?php endif?>    
                </td>
                <td>
                    <a href="" class="btn btn-success updateUser" id-user="<?php echo $result['idusuario'];?>" data-toggle="modal" ><i class="fas fa-user-edit"></i></a>
                </td>
                <td>
                <a href="" class="btn btn-danger exit-sys1" id-user="<?php echo $result['idusuario'];?>"> <i class="fas fa-user-times"></i> </a>
                </td>
                <td>
                <a href="" class="btn btn-dark upd-key" id-user="<?php echo $result['idusuario'];?>" data-toggle="modal"><i class="fas fa-key"></i></a>
                </td>
            </tr>
            <?php endforeach?>
    </tbody>
</table>
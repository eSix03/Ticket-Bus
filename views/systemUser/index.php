<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>systemUser/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1 class="titulos">Usuarios Del Sistema</h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        echo '<P class="magOk"> Dato Eliminado Correctamente</p>';
    }
    ?>
    <div id="tSize">
        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Nombre De Usuario</th>
                        <th>No Empleado</th>
                        <th>Nombre De Empleado</th>
                        <th>Numero Movil</th>
                        <th>Servicio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nombre De Usuario</th>
                        <th>No Empleado</th>
                        <th>Nombre De Empleado</th>
                        <th>Numero Movil</th>
                        <th>Servicio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (isset($this->searchAllSystemUser)) {
                        foreach ($this->searchAllSystemUser as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['userName'] . '</td>';
                            echo '<td>' . $value['empolyeeNo'] . '</td>';
                            echo '<td>' . $value['empolyeeName'] . '</td>';
                            echo '<td>' . $value['empolyeeMNo'] . '</td>';
                            echo '<td>' . $value['privilege'] . '</td>';
                            if ($value['privilege'] == 'Not User')
                                echo '<td><a href="' . URL . 'systemUser/createUserLogin/' . $value['userName'] . '/' . $value['privilege'] . '"> Crear</a></td>';
                            else
                                echo '<td><a href="' . URL . 'systemUser/createUserLogin/' . $value['userName'] . '/' . $value['privilege'] . '">Editar Privilegio</a></td>';
                            echo '<td>
                                <a href="' . URL . 'systemUser/updateFromTable/' . $value['userName'] . '"><img class="table-edit-button" alt=""/></a>
                                <a href="' . URL . 'systemUser/deleteSystemUser/' . $value['userName'] . '"><img class="table-delete-button" alt=""/></a>
                                </td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="spacer"></div>
    </div>
</div>


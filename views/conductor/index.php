<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>conductor"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>conductor/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1 class="titulos">Conductores</h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
            echo '<P class="magOk"> Dato Eliminado Correctamente.</p>';
    }
    ?>
    <div id="tSize">
        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>ID Conductor</th>
                        <th>Nombre Conductor</th>
                        <th>No. Celular Conductor</th>
                        <th>No. Bus</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No. Conductor</th>
                        <th>Nombre Conductor</th>
                        <th>No. Celular Conductor</th>
                        <th>No. Bus</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    foreach ($this->searchAllConductor as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['conductorNo'] . '</td>';
                        echo '<td>' . $value['conductorName'] . '</td>';
                        echo '<td>' . $value['conductorMNo'] . '</td>';
                        echo '<td>' . $value['busNo'] . '</td>';
                        echo '<td>
                            <a href="' . URL . 'conductor/updateFromTable/' . $value['conductorNo'] . '"><img class="table-edit-button" alt=""/></a>
                            <a href="' . URL . 'conductor/deleteConductor/' . $value['conductorNo'] . '"><img class="table-delete-button" alt=""/></a>
                     </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="spacer"></div>
    </div>
</div>


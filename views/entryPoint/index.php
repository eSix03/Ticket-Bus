<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>entryPoint"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>entryPoint/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1 class="titulos">Todos los puntos de entrada</h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
            echo '<P class="magOk">Dato Eliminado Correctamente</p>';
    }
    ?>
    <div id="tSize">
        <div id="tSizeEntryPoint">
        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Anden </th>
                        <th>Punto de entrada</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No. Punto de entrada </th>
                        <th>Punto de entrada</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    foreach ($this->searchAllEntryPoint as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['entryPointNo'] . '</td>';
                        echo '<td>' . $value['entryPoint'] . '</td>';
                        echo '<td>
                            <a href="' . URL . 'entryPoint/updateFromTable/' . $value['entryPointNo'] . '"><img class="table-edit-button" alt=""/></a>
                            <a href="' . URL . 'entryPoint/deleteEntryPoint/' . $value['entryPointNo'] . '"><img class="table-delete-button" alt=""/></a>
                     </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
            
        </div>
        <div class="spacer"></div>
    </div>
</div>


<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>journey"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>journey/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1 class="titulos">Todos Los Viajes</h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
            echo '<P class="magOk">Dato Eliminado Correctamente</p>';
    }
    ?>
    <div id="tSize">
        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>No. Viaje</th>
                        <th>No. ruta</th>
                        <th>De</th>
                        <th>A</th>
                        <th>Dep. Hora</th>
                        <th>Arr. Hora</th>
                        <th>Precio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No. Viaje</th>
                        <th>No. ruta</th>
                        <th>De</th>
                        <th>A</th>
                        <th>Dep. Hora</th>
                        <th>Arr. Hora</th>
                        <th>Precio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if(isset($this->searchAllJourney)){
                    foreach ($this->searchAllJourney as $key => $value) {
                        echo '<tr>';
                        echo '<td style="text-align:left;">' . $value['journeyNo'] . '</td>';
                        echo '<td>' . $value['routeNo'] . '</td>';
                        echo '<td>' . $value['journeyFrom'] . '</td>';
                        echo '<td>' . $value['journeyTo'] . '</td>';
                        echo '<td>' . $value['departureTime'] . '</td>';
                        echo '<td>' . $value['arrivalTime'] . '</td>';
                        echo '<td>' . $value['price'] . '</td>';
                        echo '<td> <a href="' . URL . 'journey/entryPoint/' . $value['journeyNo'] . '"> Punto de entrada </a> </td>';
                        echo '<td>
                            <a href="' . URL . 'journey/updateFromTable/' . $value['journeyNo'] . '"><img class="table-edit-button" alt=""/></a>
                            <a href="' . URL . 'journey/deleteJourney/' . $value['journeyNo'] . '"><img class="table-delete-button" alt=""/></a>
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


<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>bus"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>bus/create"><img class="add-button"/></a></button>
</div>

<div class="">
    <div id="bodyhead"><h1 class="titulos">Autobuses</h1></div>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
            echo '<P class="magOk">Dato Eliminado Correctamente </p>';
    }
    ?>
    <div id="tSizeforBusData">
        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>No. Bus</th>
                        <th>Modelo</th>
                        <th>Número de asiento</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No. Bus</th>
                        <th>Modelo</th>
                        <th>Número de asiento</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    foreach ($this->searchAllBus as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['busNo'] . '</td>';
                        echo '<td>' . $value['busModel'] . '</td>';
                        echo '<td>' . $value['numberOfSeat'] . '</td>';
                        echo '<td><a href="' . URL . 'bus/addJourneytoBus/' . $value['busNo'] . '">J. No</a></td>';
                        echo '<td>
                            <a href="' . URL . 'bus/updateFromTable/' . $value['busNo'] . '"><img class="table-edit-button" alt=""/></a>
                            <a href="' . URL . 'bus/deleteBus/' . $value['busNo'] . '"><img class="table-delete-button" alt=""/></a>
                     </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="spacer"></div>
    </div>
   <!-- <div class="UploadeBusNo">
        <input type="button" name="" id="UploadeBusNo" value="Uploade to Parse">
        <div class="loadingDefault"></div>
 </div>-->
    
</div>


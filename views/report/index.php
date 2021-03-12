<?php 
Session::init(); 
?>
<pre>
<?php 
//print_r($this->searchBookingData);
?>
</pre>
<?php if (Session::get('privilege') == 'Admin') { ?>
    <div class="main">
        <h3 class="titulos">Reporte De Reservas</h3><br/>
        <form id="" target="_blank" action="<?php echo URL; ?>report/bookingData/" method="post">
            <label for="" class="repot_date_la">Fecha de</label>
            <input  size="10" name="date_from" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="" class="repot_date_la">Fecha a</label>
            <input  size="10" name="date_to" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="busNo" class="required">Numero Bus</label>
            <select name="busNo" data-validation="required">
                <option value="AB">Todos los autobuses</option>
                <?php
                foreach ($this->searchAllBus as $key => $value) {
                    echo '<option value="' . $value['busNo'] . '" > ' . $value['busNo'] . '</option>';
                }
                ?>
            </select><br/>
            <label for="journeyNo" class="required">Numero De Viaje</label>
            <select name="journeyNo" data-validation="required">
                <option value="AJ">Todos</option>
                <?php
                foreach ($this->searchAllJourney as $key => $value) {
                    echo '<option value="' . $value['journeyNo'] . '" > ' . $value['journeyNo'] . '</option>';
                }
                ?>
            </select><br/>
            <label ></label>
            <input type="submit" name="" id="" value="Mostrar Reporte">	
        </form>
    </div>
<?php } ?>

<?php if (Session::get('privilege') == 'Admin') { ?>
    <div class="reportConducter1">
        <h3 class="titulos">Informe  Reservador</h3><br/>
        <form id="bus_create_form" target="_blank" action="<?php echo URL; ?>report/bookerReport/" method="post">
            <label for="" class="repot_date_la">Fecha viaje</label>
            <input  size="10" name="journeyDate" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="busNo" class="required">Numero Bus</label>
            <select name="busNo" data-validation="required">
                <option >Seleccione</option>
                <?php
                foreach ($this->searchAllBus as $key => $value) {
                    echo '<option value="' . $value['busNo'] . '" > ' . $value['busNo'] . '</option>';
                }
                ?>
            </select><br/>
            <label ></label>
            <input type="submit" name="" id="" value="Mostrar Reporte">	
        </form>
    </div>
<?php } ?>

<?php if (Session::get('privilege') == 'Admin') { ?>
    <div class="reportConducter2">
        <h3 class="titulos">Informe De Pasajeros</h3><br/>
        <form id="bus_create_form" target="_blank" action="<?php echo URL; ?>report/passengerReport/" method="post">
            <label for="" class="repot_date_la">Fecha de viaje</label>
            <input  size="10" name="journeyDate" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="busNo" class="required">Número de autobús</label>
            <select name="busNo" data-validation="required">
                <option >Seleccione</option>
                <?php
                foreach ($this->searchAllBus as $key => $value) {
                    echo '<option value="' . $value['busNo'] . '" > ' . $value['busNo'] . '</option>';
                }
                ?>
            </select><br/>
            <label ></label>
            <input type="submit" name="" id="" value="Mostrar Reporte">	
        </form>
    </div>
<?php } ?>



<?php if (Session::get('privilege') == 'Admin_Not') { ?>
    <div class="reportConducterBookingforA">
        <h3 class="titulos">Informe de información de reserva</h3><br/>
        <form id="bus_create_form" target="_blank" action="" method="post">
            <label for="" class="repot_date_la">Fecha viaje</label>
            <input  size="10" name="journeyDate" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="busNo" class="required">Numero Bus</label>
            <select name="busNo" data-validation="required">
                <option ></option>
                <?php
                foreach ($this->searchAllBus as $key => $value) {
                    echo '<option value="' . $value['busNo'] . '" > ' . $value['busNo'] . '</option>';
                }
                ?>
            </select><br/>
            <label ></label>
            <input type="submit" name="" id="" value="Mostrar Reporte">	
        </form>
    </div>
<?php } ?>

<?php if (Session::get('privilege') == 'Conduct') { ?>
    <div class="reportConducterBookingforC">
        <h3 class="titulos">Informe de información de reserva</h3><br/>
        <form id="bus_create_form" action="<?php echo URL; ?>report/bookingReport/" method="post">
            <label for="" class="repot_date_la">Fecha de viaje</label>
            <input  size="10" name="journeyDate" id="" class="datepicker_repot" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br/>
            <label for="busNo" class="required">Numero Bus</label>
            <select name="busNo" id="busNoforBookingReport" data-validation="required">
                <option ></option>
                <?php
                foreach ($this->searchAllBus as $key => $value) {
                    echo '<option value="'.$value['busNo'].'" > '.$value['busNo'].'</option>';
                }
                ?>
            </select><br/>
            <label for="journeyNo" class="required">No. Viaje</label>
            <select name="journeyNo" id="journeyNoforBookingReport" data-validation="required">
               
            </select><br/>
            <label ></label>
            <input type="submit" name="" id="" value="Mostrar Reporte">	
        </form>
    </div>
<?php } ?>

<?php if (Session::get('privilege') == 'Conduct') { ?>
    <div class="reportTable">
        <div id="tSize">
            <div class="demo_jui"> 
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="exampleBooker">
                    <thead>
                        <tr>
                            <th>No. Asiento</th>
                            <th>Estado</th>
                            <th>No. Ticket</th>
                            <th>Nombre</th>
                            <th>Genero</th>
                            <th>Punto de entrada</th>
                            <th>No. celular</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($this->searchBookingData)) {
                            foreach ($this->searchBookingData as $key => $value) {
                                echo '<tr class="">';
                                echo '<td>' . $value['seatNo'] . '</td>';
                                echo '<td>' . $value['status'] . '</td>';
                                echo '<td>' . $value['ticketNo']. '</td>';
                                echo '<td>' . $value['passengerName']. '</td>';
                                echo '<td>' . $value['gender']. '</td>';
                                echo '<td>' . $value['entryPoint']. '</td>';
                                echo '<td>' . $value['bookerMNo']. '</td>';
                                
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
 <div class="reportConducterBookingforPDF">
        <form id="bus_create_form" target="_blank" action="<?php echo URL; ?>report/bookingReportforPDF/" method="post">
            <input type="hidden" name="journeyDate" id="r_journeyDate" value="<?php if(isset($this->journeyDate)) {echo $this->journeyDate;} ?>"/>
            <input type="hidden" name="busNo" id="r_busNo" value="<?php if(isset($this->journeyDate)) { echo $this->busNo; }?>"/>
            <input type="hidden" name="journeyNo" id="r_journeyNo" value="<?php if(isset($this->journeyNo)) { echo $this->journeyNo; }?>"/>
            <input type="submit" name="booking" id="" value="View PDF Report"><br/><br/>	
            <input type="button" name="" id="Uploade" value="Uploade">
        </form>
        <div class="loading"></div>
 </div>
<?php } ?>
<!--<a  target="_blank" href="<?php //echo URL;     ?>report/view_report/">View Report </a>-->



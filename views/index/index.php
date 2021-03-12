<!--<script>
    $(window).unload(function(){
        console.log('s');
    });
</script>-->

<?php 
//print_r(date("Y-m-d"));
//echo date("H:i:s")
date_default_timezone_set("America/Guayaquil");
    //echo date('d-m-Y H:i:s');
?>

<h1 class="titulos">Reserva Tu Ticket De Bus! </h1>.

<div class="abc">
    <form id="search_buses_form" action="<?php echo URL; ?>booker/" method="post">
        
        <label for="journeyFrom" class="required">Viaje desde</label>
        <select class="select" name="journeyFrom" id="journeyFrom" style="width:110px;" data-validation="required">
            <option value="" >Partida</option>
            <?php
            $journeyFrom = null;
            foreach ($this->journeyFrom as $key => $value) {
                if($value['journeyFrom'] == $journeyFrom){}
                else{
                echo '<option value="' . $value['journeyFrom'] . '">' . $value['journeyFrom'] . '</option>';
                $journeyFrom = $value['journeyFrom'];
                }
            }
            ?>
        </select><br/>
        <label for="journeyTo" class="required">Viaje a</label>
        <select class="select" name="journeyTo" id="journeyTo" style="width:110px;" data-validation="required">
            <option value="" >Destino</option>
            <?php
            foreach ($this->journeyTo as $key => $value) {
                echo '<option value="' . $value['journeyTo'] . '">' . $value['journeyTo'] . '</option>';
            }
            ?>
        </select><br/>

        <label for="dateofJourney" class="required">Fecha</label>
        <input  style="width:110px;" name="dateOfJourney" id="dateOfJourney" type="text" class="datepicker_bus_date" data-validation="required" value="<?php echo date("Y-m-d"); ?>"><br />
        <label ></label>
        <input style="margin:5px 5px 0;" type="submit" name="searchBuses" id="searchBuses" value="Search Buses">	

    </form>     
</div>




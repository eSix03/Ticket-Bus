<!--http://formvalidator.net/#default-validators-->
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>bus"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>bus/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1 class="titulos">Agregar nuevo bus</h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Datos Agregados Correctamente </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Este numero de bus ya existe</p>';
    }
    ?>
    <form id="bus_create_form" action="<?php echo URL; ?>bus/createBus/" method="post">


        <label for="Bus_busNo" class="required">No. Bus</label>		
        <input size="10" maxlength="10" name="cBus_busNo" id="Bus_busNo" type="text"  data-validation="required" ><br />			

        
        <label for="Bus_busModel" class="required">Modelo Bus</label>
        <input size="15" maxlength="15" name="cBus_busModel" id="Bus_busModel" type="text" data-validation="required"><br />			

        <label for="Bus_numberOfSeat" class="required">Número de asiento</label>
        <input size="10" name="cBus_numberOfSeat" id="Bus_numberOfSeat" type="text" data-validation="number" data-validation-allowing="range[40;49]"><br />			

        <label ></label>
        <input type="submit" name="addNewBus" id="addNewBus" value="Add Data">	

    </form>
</div>
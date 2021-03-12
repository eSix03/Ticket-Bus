<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>journey"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>journey/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1 class="titulos">Editar Viaje</h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Actualización de datos exitosa ... ! </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Fallo De Actualizacion De Datos</p>';
    }
    ?>
    <form id="bus_update_form" action="<?php echo URL; ?>journey/updateJourney/" method="post">



        <input type="hidden" name="ujourneyNo" value="<?php
    if (isset($this->journey[0]['journeyNo'])) {
        echo $this->journey[0]['journeyNo'];
    }
    ?>">
        <label for="routeNo" class="required">No. Viaje</label>
        <label for="routeNo" class="required"><?php
               if (isset($this->journey[0]['journeyNo'])) {
                   echo $this->journey[0]['journeyNo'];
               }
    ?></label><br />

        <label for="routeNo" class="required">No. ruta</label>
        <input size="10" maxlength="15" name="uRouteNo" id="uRouteNo" type="text" value="<?php
            if (isset($this->journey[0]['routeNo'])) {
                echo $this->journey[0]['routeNo'];
            }
    ?>" data-validation="required"><br />			

        <label for="journeyFrom" class="required">Viaje desde</label>
        <input size="10" name="uJourneyFrom" id="uJourneyFrom" type="text"  value="<?php
               if (isset($this->journey[0]['journeyFrom'])) {
                   echo $this->journey[0]['journeyFrom'];
               }
    ?>" data-validation="required"><br />			

        <label for="journeyTo" class="required">Viaje a</label>
        <input size="10" name="uJourneyTo" id="uJourneyTo" type="text"  value="<?php
               if (isset($this->journey[0]['journeyTo'])) {
                   echo $this->journey[0]['journeyTo'];
               }
    ?>" data-validation="required"><br />

        <label for="Bus_departureTime" class="required">Dep. Hora</label>
        <input size="10" name="uBus_departureTime" type="text"  value="<?php
               if (isset($this->journey[0]['departureTime'])) {
                   echo $this->journey[0]['departureTime'];
               }
    ?>" value="00:00" type="text" data-validation="required"> 24 horas<br />

        <label for="Bus_arrivalTime" class="required">Arr. Hora</label>
        <input size="10" name="uBus_arrivalTime" type="text"  value="<?php
               if (isset($this->journey[0]['arrivalTime'])) {
                   echo $this->journey[0]['arrivalTime'];
               }
    ?>" value="24:00" data-validation="required"> 24 horas<br />

        <label for="price" class="required">Precio</label>
        <input  size="10" name="uPrice" id="uPrice" type="text"  value="<?php
               if (isset($this->journey[0]['price'])) {
                   echo $this->journey[0]['price'];
               }
    ?>" data-validation="required"><br />

        <label ></label>
        <input type="submit" name="updateJourney" id="updateJourney" value="Save">	

    </form>
</div>

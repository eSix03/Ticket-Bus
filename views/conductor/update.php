<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>conductor"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>conductor/create"><img class="add-button"/></a></button>
</div>
<div class="main-form">
    <h1 class="titulos">Editar Datos Del Conductor</h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Datos Actualizados </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Fallo De Actualizacion De Datos</p>';
    }
    ?>
    <form id="conductor_create_form" action="<?php echo URL; ?>conductor/updateConductor/" method="post">


        <label for="conductorNo" class="required">ID Conductor</label>		
        <input size="10" maxlength="10" name="uConductorNo" id="uConductorNo" type="text" value="<?php
    if (isset($this->conductor[0]['conductorNo'])) {
        echo $this->conductor[0]['conductorNo'];
    }
    ?> "  data-validation="required" ><br />			

        <label for="conductorName" class="required">Nombre Conductor </label>
        <input size="15" maxlength="15" name="uConductorName" id="uConductorName" type="text" value="<?php
               if (isset($this->conductor[0]['conductorName'])) {
                   echo $this->conductor[0]['conductorName'];
               }
    ?> "  data-validation="required"><br />			

        <label for="conductorMNo" class="required">No. Celular Conductor</label>
        <input size="10" name="uConductorMNo" id="uConductorMNo" type="text" value="<?php
               if (isset($this->conductor[0]['conductorMNo'])) {
                   echo $this->conductor[0]['conductorMNo'];
               }
    ?> "  data-validation="required"><br />			

        <label for="busNo" class="required">No. Bus</label>
        <select name="uBusNo" data-validation="">
            <option value="<?php if (isset($this->conductor[0]['busNo'])) {
                   echo $this->conductor[0]['busNo'];
               } ?>" selected><?php if (isset($this->conductor[0]['busNo'])) {
                echo $this->conductor[0]['busNo'];
            } ?></option>
<?php
foreach ($this->searchAllBus as $key => $value) {
    echo '<option value="' . $value['busNo'] . '" > ' . $value['busNo'] . '</option>';
}
?>
        </select><br/>

        <label ></label>
        <input type="submit" name="updateNewConductor" id="updateNewConductor" value="Add Data">	

    </form>
</div>
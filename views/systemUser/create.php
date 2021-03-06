<!--http://formvalidator.net/#default-validators-->
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>systemUser"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>systemUser/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1 class="titulos">Agregar nuevo usuario al sistema</h1></br>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Datos Agregados Correctamente</p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo">Usuario Existente</p>';
    }
    ?>
    <form id="user_update_form" action="<?php echo URL; ?>systemUser/createSystemUser/" method="post">


        <label for="cUserName" class="required">Nombre de usuario</label>		
        <input size="10" maxlength="10" name="cUserName" id="cUserName" type="text"  data-validation="required" ><br />			

        <label for="cEmpolyeeNo" class="required">No. Empleado</label>
        <input size="10" maxlength="15" name="cEmpolyeeNo" id="cEmpolyeeNo" type="text" data-validation="required"><br />			

        <label for="cEmpolyeeName" class="required">Nombre de empleado</label>
        <input size="20" name="cEmpolyeeName" id="cEmpolyeeName" type="text" data-validation="required"><br />			

        <label for="cEmpolyeeMNo" class="required">No. Celular</label>
        <input size="10" name="cEmpolyeeMNo" id="cEmpolyeeMNo" type="text" data-validation="required"><br />			

        <label ></label>
        <input type="submit" name="addNewUser" id="addNewBus" value="Agregar datos">	

    </form>
</div>
<div class="main-button">
    <button class="btn"><a href="<?php echo URL; ?>entryPoint"><img class="table-button"/></a></button>
    <button class="btn"><a href="<?php echo URL; ?>entryPoint/create"><img class="add-button"/></a></button>
</div>

<div class="main-form">
    <h1 class="titulos">Editar Punto De Entrada</h1>
    <?php
    $url = explode('/', $_GET['url']);
    if (isset($url[2])) {
        if ($url[2] == 'Success')
            echo '<P class="magOk"> Datos Actualizados </p>';
        if ($url[2] == 'Fail')
            echo '<P class="magNo"> Fallo De Actualizacion De Datos</p>';
    }
    ?>
    <form id="bus_update_form" action="<?php echo URL; ?>entryPoint/updateEntryPoint/" method="post">
        <input type="hidden" name="uEntryPointNo" value="<?php
    if (isset($this->entryPoint[0]['entryPointNo'])) 
        echo $this->entryPoint[0]['entryPointNo'];
    ?>">
        <label for="entryPoint" class="required">Punto de entrada</label>
        <input size="15" maxlength="15" name="uEntryPoint" value="<?php
    if (isset($this->entryPoint[0]['entryPoint']))
        echo $this->entryPoint[0]['entryPoint'];
    ?>" id="uEntryPoint" type="text" data-validation="required"><br />			

        <label ></label>
        <input type="submit" name="updateNewEntryPoint" id="updateNewEntryPoint" value="Save Data">	

    </form>
</div>

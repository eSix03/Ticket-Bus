<div id="timeOutBooking" style="text-align:center; color: #d14"></div>
<?php //print_r($this->bookingTicket)      ?>
<?php
echo '<div class="printBookinName"><h3>Boleto de reserva</h3></div>';
echo '<link href="http://localhost/SLTB/public/css/booker/ticket.css" rel="stylesheet"></link>';
echo '<div id="booking_ticket_area">';
if (isset($this->bookingTicket)) {
    foreach ($this->bookingTicket as $key => $value) {
        echo '<label class="b_ticket_la">ID de reserva </label><label class="">: ' . $value['bookingID'] . '</label><br/>';
        echo '<label class="b_ticket_la">NIC Reservador </label><label class="">: ' . $value['bookerNICNo'] . '</label><br/>';
        echo '<label class="b_ticket_la">No. Bus  </label><label class="">: ' . $value['busNo'] . '</label><br/>';
        echo '<label class="b_ticket_la">No. ruta  </label><label class="">: ' . $value['routeNo'] . '</label><br/>';
        echo '<label class="b_ticket_la">Viaje  </label>: <label class="">From - ' . $value['journeyFrom'] . '</label><br/>';
        echo '<label class="b_ticket_la"> .</label><label class=""> To - ' . $value['journeyTo'] . '</label><br/>';
        echo '<label class="b_ticket_la">Punto de entrada  </label><label class="">: ' . $value['entryPoint'] . '</label><br/>';
        echo '<label class="b_ticket_la">Número de asiento </label><label class="">: ' . $value['no_of_seat'] . '</label><br/>';
        echo '<label class="b_ticket_la">Cantidad  </label><label class="">: ' . $value['ammount'] . '</label><br/>';
        echo '<label class="b_ticket_la">Fecha  </label><label class="">: ' . $value['date'] . '</label><br/>';
        echo '<label class="b_ticket_la">estado de pago </label><label class="">: Pending</label><br/><br/>';
    }
}
echo '</div>';

    
?>
<form id="" action="http://localhost/E-Wallet_files/E-Wallet.php" method="post">
    <?php
    if (isset($this->bookingTicket))
        foreach ($this->bookingTicket as $key => $value) {
            echo '<input type="hidden" name="bookingID" id="selecting_s" value="' . $value['bookingID'] . '">';
            echo '<input type="hidden" name="ammount" id="selecting_s" value="' . $value['ammount'] . '">';
        }
    ?>
    <div class="payment">
        <div style ="width: 50%; float: right; margin-top: -150px; margin-right: 0px; padding: 15px;">
            <input type="radio" name="payMethord" id="" value="" checked="checked" style="width: 30px;" />Dialog EZ Cash<br/>
            <input type="radio" name="payMethord" id="" value=""  style="width: 30px;" />VISA / MASTER<br/>
            <input type="radio" name="payMethord" id="" value="" style="width: 30px;"/>PayPal<br/>
            <input type="submit" name="payment" id="" value="Conform Payment">	
        </div>
    </div>
</form>
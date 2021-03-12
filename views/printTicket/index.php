
<?php //print_r($this->busTicket)  ?>
<?php
echo '<h1 class="titulos">Reserva impresa</h1>';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $this->bookingTicket['bookingID'];
echo '<div class="printBookinName"><h3>Boleto De Reserva</h3></div>';
echo '<div id="booking_ticket_area">';
echo '<link href="http://localhost/SLTB/public/css/booker/ticket.css" rel="stylesheet"></link>';
if(isset($this->bookingTicket)){
    foreach ($this->bookingTicket as $key => $value) {
    echo '<label class="b_ticket_la">ID de reserva  </label><label class="">: '.$value['bookingID'].'</label><br/>';
    echo '<label class="b_ticket_la">NIC reservador  </label><label class="">: '.$value['bookerNICNo'].'</label><br/>';
    echo '<label class="b_ticket_la">No. Bus  </label><label class="">: '.$value['busNo'].'</label><br/>';
    echo '<label class="b_ticket_la">No. ruta  </label><label class="">: '.$value['routeNo'].'</label><br/>';
    echo '<label class="b_ticket_la">Viaje  </label>: <label class="">Desde - '.$value['journeyFrom'].'</label><br/>'; 
    echo '<label class="b_ticket_la"> .</label><label class=""> a - '.$value['journeyTo'].'</label><br/>';
    echo '<label class="b_ticket_la">Punto de entrada  </label><label class="">: '.$value['entryPoint'].'</label><br/>';
    echo '<label class="b_ticket_la">Número de asiento  </label><label class="">: '.$value['no_of_seat'].'</label><br/>';
    echo '<label class="b_ticket_la">Cantidad  </label><label class="">: '.$value['ammount'].'</label><br/>';
    echo '<label class="b_ticket_la">Fecha  </label><label class="">: '.$value['date'].'</label><br/><br/>';
    }
}
echo '</div>';
echo '<div class="printBookinbtn"><input type="button" name="" id="test" value="Print"></div>';

echo '<div id="bus_ticket_area_main">';
echo '<h3>Boleto de autobús</h3>';
echo '<div id="bus_ticket_sub_area">';
echo '<link href="http://localhost/SLTB/public/css/booker/ticket.css" rel="stylesheet"></link>';
if(isset($this->busTicket)){
    foreach ($this->busTicket as $key => $value) {
    echo '<div id="bus_ticket_area">';
    echo '<label class="b_ticket_la">No. Ticket : </label><label class="">'.$value['ticketNo'].'</label><br/>';
    echo '<label class="b_ticket_la"></label><label class="">Desde - '.$value['journeyFrom'] .'</label>'; 
    echo '<label class="b_ticket_la"></label><label class=""> a - '.$value['journeyTo'].'</label><br/>';
    echo '<label class="b_ticket_la">No. asiento : </label><label class="">'.$value['seatNo'].'</label>';
    echo '<label class="">'.' , '.' Género : </label><label class="">'.$value['gender'].'</label><br/>';
    echo '<label class="b_ticket_la">Fecha : </label><label class="">'.$value['date'].'</label><br/>';
    echo '<label class="b_ticket_la">ID de reserva : </label><label class="">'.$value['bookingID'].'</label><br/><br/>';
    echo '</div>';
    }
}
echo '</div>';
echo '</div>';
echo '<div class="printbusTicketsbtn"><label></label><input type="button" name="" id="printbusTicketsbtn" value="Print"></div>';
?>



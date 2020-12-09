


<?php if($_SESSION['responseCode']=='0') : ?>
  <div class="alert alert-success" role="alert">
          Tu pago se a realizado con exito, gracias por preferirnos      

  </div>
<?php else :?>
  <div class="alert alert-danger" role="alert">
          Ups lo sentimos , tu tarjeta fue rechazada, vuelve a inciar sesion e intenalo nuevamente
  </div>

<?php endif; ?>

<?php



    /**
     *
     */
    class pedidoController{

      public function index()
      {
        echo "Controllador Pedidos, Accion index";
      }
      public function hacer()
      {
        $stats = Utils::statsCarrito();
			 $coste = $stats['total'];
       echo $coste;
      }
      // public function addCarrito()
      // {
      //
      //
      // }
    }

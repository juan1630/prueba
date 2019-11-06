<?php
require_once  '../../models/models/findByNameProduct.php';
require_once '../../includes/components/header.php';




if(!isset( $_GET['name'] ) && $_GET['name'] == "" ){
    header('Location: ../../views/home.php');
}else {
    $nameProduct = $_GET['name'];
    $findProduct = new findByNameProduct($nameProduct);

    $products = $findProduct->findByName();


    # Nota la sintaxis del foreach cambia a la del ciclo while ya que el foreach primero se pasa el arrary y despues la variable en la
    # que se va a guardar la iteración  de cada vuelta
    foreach ($products as $res):

    ?>


    <div class="col-md-3 ml-3 mt-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title"> Nombre: <?php echo $res['nombreProducto'];   ?> </h5>

                <p class="card-text"> Marca: <?php echo $res['marcaProducto']  ?>   </p>
                <p class="card-text">Precio compra: <?php  echo $res['precioVenta'];  ?>    </p>
                <p class="card-text"> Cantidad del producto: <?php  echo $res['cantidad'];  ?>   </p>
                <a href="../../views/pages/producto.php?id=<?php  echo $res['id'];  ?>" class="btn btn-block btn-info" > Ver más </a>
            </div>
        </div>

    </div>

<?php
endforeach;

}
?>

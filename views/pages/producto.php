<?php  require_once '../../includes/components/header.php' ?>
<?php require_once '../components/sidebar.php' ?>
<?php require_once '../../models/models/GetAProudcto.php' ?>

<?php

$id = $_GET['id'];


if( !isset( $id ) ){
    echo "Error";
}else {
    $product = new GetAProudcto($id);
    $producto = $product->GetOneProduct();

}




?>

<div class="col-md-6 offset-md-2 mt-4">

        <div class="card" style="width: 20rem;" >
                <div class="card-body">

                    <h5 class="card-title"> Nombre del producto: <?php  echo $producto[0]["nombreProducto"]; ?> </h5>

                    <p> Marca: <?php  echo $producto[0]["marcaProducto"];  ?> </p>
                    <p> Precio de compra: <?php  echo $producto[0]["precioCompra"];  ?> </p>
                    <p> Precio al público: <?php  echo $producto[0]["precioVenta"];  ?> </p>
                    <p> Cantidad del proudcto: <?php  echo $producto[0]["cantidad"];  ?> </p>
                    <p> Descripción: <?php  echo $producto[0]["descripcion"];  ?> </p>
                    <p> Total: <?php  echo $producto[0]["total"];  ?> </p>
                    <p> Total de la venta <?php echo $producto[0]["totalVenta"]; ?> </p>


                </div>

        </div>

</div>




<script>




</script>
<?php  require_once '../../includes/components/header.php' ?>
<?php require_once '../components/sidebar.php' ?>
<?php require_once '../../models/models/GetAProudcto.php' ?>


<?php
if( !isset( $_GET['id'] ) ){
    header('Location: ../home.php');
} else {
    $product = new GetAProudcto($_GET['id']);
    $producto = $product->GetOneProduct();

    #session_start();
    #$_SESSION['id'] = $producto[0]['id'];

}
?>

<div class="col-md-3 offset-md-1 mt-4">

        <div class="card" style="width: 24rem;" >
            <div class="card-img-top" >
                <img src="../<?php echo $producto[0]['imageRoute'] ?>"  class="card-img-top" >
            </div>
                <div class="card-body">

                    <h5 class="card-title"> Nombre: <?php  echo $producto[0]["nombreProducto"]; ?> </h5>
                    <p> Marca: <?php  echo $producto[0]["marcaProducto"]; ?>  --- Cantidad del producto: <?php  echo $producto[0]["cantidad"];?> </p>

                    <p> Precio de compra: <?php  echo $producto[0]["precioCompra"];?> </p>
                    <p>Precio al público: <?php  echo $producto[0]["precioVenta"];?> </p>

                    <p> Descripción: <?php  echo $producto[0]["descripcion"];?> </p>
                    <p> Total: <?php  echo $producto[0]["total"];  ?> ---  Total de la venta: <?php echo $producto[0]["totalVenta"]; ?> </p>
                </div>

        </div>

</div>


<div class="col-md-3" >

    <a href="./updateAProduct.php?id=<?php echo $producto[0]['id']?>" class="btn btn-block btn-info margin-12" > Actualizar </a>
    <a href="../../controls/queries/controlDeleteAProduct.php?id=<?php echo $producto[0]['id'] ?>" id="btnDelete" class="btn btn-danger btn-block margin-12" > Eliminar producto </a>

</div>

<style>

    .margin-12{
        margin-top: 8em;
        margin-left: 4em;
    }
</style>


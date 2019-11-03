<?php  require_once '../../includes/components/header.php' ?>
<?php require_once '../components/sidebar.php' ?>

<?php


if(  isset($_GET["id"]) ){


}else {
    header('Location: ../home.php');
}


?>




<div class="col-md-3 offset-md-1 mt-4" >

    <h2 class="text-center" > Actualizar el producto </h2>

    <div id="formUpdate" class="mt-3" >



    </div>
    <button class="btn btn-success btn-block" id="buttonPrecios" > Actualizar precios </button>
</div>

<div class="col-md-3 mt-4 offset-md-1" id="precios" > </div>

<script>

    const formUpdate = document.getElementById('formUpdate');
    const btn_precio = document.getElementById('buttonPrecios');
    const preciosDiv = document.getElementById('precios');

    var products = [];


    // ==============================================
    //  LA MULTIPLICACIÓN DE LOS PRODUCTOS
    //===============================================


    const totalesVenta = () => {

        const  totalesDiv = document.getElementById('totalDiv');

        var precioVenta = document.getElementById('precioVenta').value;
        var cantidad = document.getElementById('cantidad').value;
        var totalVenta = precioVenta * cantidad;


        totalesDiv.innerHTML = `<input type="number" class="form-control" id="totales" name="totales" value="${totalVenta}" class="form-oontrol"> `;

    };

    // =============================================
    //  ENVIO DE LA PETICIÓN PARA EL UPDATE
    // =============================================


    const sendData = () => {

        fetch('../../controls/queries/controlUpdate.php')
            .then( res => {
                console.log(res )
            } )

    };


    // ==============================================
    //  MOSTRAMOS EL FORMULARIO GENERAL
    //===============================================



    const showFormPrecios = () => {
        console.log(products );

        preciosDiv.innerHTML = ``;

        preciosDiv.innerHTML += `<form>
           <h3> Actualizar los precios </h3>
    <div class="form-group" >
        <label> Precio de compra: </label>
        <input type="number" name="precio" id="precio"  class="form-control" value="${products[0][0].precioCompra }">
    </div>

    <div class="form-group" >
        <label for="precioVenta" > Precio de venta: </label>
          <input  type="number" class="form-control" id="precioVenta" name="precioVenta"  value="${products[0][0].precioVenta}" >
    </div>

    <div class="form-group">
        <label for="cantidad"> Cantidad: </label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="${products[0][0].cantidad}" >
    </div>

    <div class="form-group" >
        <label for="total" > Total en venta: </label>
       <div id="totalDiv" >

             <input type="number" class="form-control" id="total" name="total" value="${products[0][0].total}" >

</div>

    </div>

    <div class="form-group" >
         <a class="btn btn-block btn-info"  href="../../controls/queries/controlUpdate.php?id="${products[0][0].id}"> Actualizar </a>
    </div>
</form>`;



        const txtCantidad = document.getElementById('cantidad');
        const btn_update = document.getElementById('btn_update');


        txtCantidad.addEventListener('blur', totalesVenta);
        btn_update.addEventListener('clic', sendData );

    };




    // ==============================================
    //  IMPRIMIMOS LA INFORMACIÓN DEL PRODUCTO
    //===============================================


    const renderForm = (producto) => {

        formUpdate.innerHTML += ``;
            products.push(producto);

        for( i in producto ){


            formUpdate.innerHTML += `<form>
    <div class="form-group">
        <label for="nombreProduct" > Nombre del producto: </label>
        <input type="text" name="nombreProduct" class="form-control" id="nombreProduct" value="${producto[i].nombreProducto}" >
    </div>
    <div class="form-group" >

        <label for="maracProduct" > Maraca del producto: </label>
        <input type="text" name="marcaProduct" class="form-control" id="marcaProduct" value=" ${producto[i].marcaProducto } " >
    </div>
    <div class="form-group" >

        <label for="descProduct" > Descripción del producto: </label>
        <input type="text" name="descProduct" class="form-control" id="descProduct" value= "${producto[i].descripcion}" >
    </div>
    <div class="form-group" >
                   <input type="submit" class="btn btn-info btn-block" value="Enviar" >
</div>
</form>`;

        }
    };


    // ==============================================
    //  OBTENEMOS LA INFORMACIÓN DEL PRODUCTO
    //===============================================

    const  getData = ()=> {

        const url = '../../controls/queries/controlFinById.php';


        fetch( url )
            .then( (res) => {

               return respuesta =  res.json();

            })
            .then( (respuesta) => {

                renderForm( respuesta )

            })
            .catch( error  => {
                console.log(error)
            });
    };


    // EVENTOS

    window.addEventListener('load', getData);

    btn_precio.addEventListener('click', showFormPrecios );


</script>


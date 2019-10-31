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
    <button class="btn btn-info" id="buttonPrecios" > Actualizar precios </button>
</div>

<div class="col-md-3 mt-4" id="precios" > </div>

<script>

    const formUpdate = document.getElementById('formUpdate');
    const btn_precio = document.getElementById('buttonPrecios');
    const preciosDiv = document.getElementById('precios');

    const showFormPrecios = (precios) => {

        preciosDiv.innerHTML = ``;


        preciosDiv.innerHTML += `
        <form>
        <h3> Actualizar los precios </h3>
    <div class="form-group" >

        <label> Precio: </label>
        <input type="text" name="precio" id="precio"  class="form-control" value="${precios[0].precioCompra}">
    </div>

</form>
        `;

    };


    const renderForm = (producto) => {

        formUpdate.innerHTML += ``;

        for( i in producto ){
            console.log( producto )
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
    <div class="form-group" id="buttons" > </div>
</form>`;

        }
    };



    const  getData = ()=> {

        const url = '../../controls/queries/controlFinById.php';


        fetch( url )
            .then( (res) => {

               return respuesta =  res.json();

            })
            .then( (respuesta) => {

                renderForm( respuesta )
                showFormPrecios( respuesta)

            })
            .catch( error  => {
                console.log(error)
            });
    };


    // EVENTOS

    window.addEventListener('load', getData);

    btn_precio.addEventListener('click', showFormPrecios);


</script>


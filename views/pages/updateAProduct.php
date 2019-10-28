<?php  require_once '../../includes/components/header.php' ?>
<?php require_once '../components/sidebar.php' ?>


<?php


if(  isset($_GET["id"]) ){

}else {
    header('Location: ../home.php');
}


?>




<div class="col-md-4 offset-md-1 mt-4 " >

    <h2 class="text-center" > Actualizar el producto </h2>

    <form id="formUpdate" class="mt-3" >



    </form>

</div>


<script>



    const  getData = ()=> {

    //EN ESTÁ AREÁ IRÁ LA PETICIÓN DEL TIPO GET

        fetch('../controls/queries/controlFinById.php')
            .then( res => {
                console.log( res )
                console.log( res.text() );
            } )
            .then( response => {
                console.log( response );
            }  )

        renderForm();

    };

    const renderForm = () => {

        const formUpdate = document.getElementById('formUpdate');

        formUpdate.innerHTML += "";


        formUpdate.innerHTML += `<div class="form-group">
        <label for="nombreProduct" > Nombre del producto: </label>
        <input type="text" name="nombreProduct" class="form-control" id="nombreProduct">
</div>

<div class="form-group" >

        <label for="maracProduct" > Maraca del producto: </label>
        <input type="text" name="marcaProduct" class="form-control" id="marcaProduct">
</div>
<div class="form-group" >

        <label for="maracProduct" > Maraca del producto: </label>
        <input type="text" name="marcaProduct" class="form-control" id="marcaProduct">
</div>

`;
    };



    window.addEventListener('load', getData);


</script>


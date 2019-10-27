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

    <form id="formUpdate" >



    </form>

</div>


<script>



    const  getData = ()=> {



    };

    const renderForm = () => {

        const formUpdate = document.getElementById('formUpdate');

        formUpdate.innerHTML += `<div class="form-group">

</div>`;
    };



    window.addEventListener('load', getData);


</script>


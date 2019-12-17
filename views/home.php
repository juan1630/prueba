<?php  require_once '../includes/components/header.php' ?> 
<?php require_once './components/sidebar.php' ?>

<div class="col-md-10">

<div class="container-fluid">
<div  id="showPeoducts" class="row">


</div>

</div>

</div>

<script>

    window.addEventListener("load", function getData() {


    showProducts = document.getElementById('showPeoducts');
    showProducts.innerHTML += "";
    

        const renderCard = function (data) {
            
            console.log(data[0])
            
            for ( i in data ){
                
                showProducts.innerHTML += `
                <div class="col-md-3 mt-3 ml-4">


                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="${data[i].imageRoute }" >
                        <div class="card-body">

                            <h5 class="card-title"> Nombre: ${ data[i].nombreProducto} </h5>

                            <p class="card-text"> Marca: ${ data[i].marcaProducto } </p>
                            <p class="card-text">Precio compra: ${data[i].precioVenta }  </p>
                            <p class="card-text"> Cantidad del producto:  ${data[i].cantidad } </p>
                                <a href="./pages/producto.php?id=${data[i].id}" class="btn btn-block btn-info" > Ver más </a>
                        </div>
                    </div>
                </div>`;
                

            }
        
        };

        const getData = function (){
            fetch('../controls/queries/getProducts.php')
            .then((resp)=>{ 

            console.log( resp );

            return respuesta = resp.json()

            })
            .then( (respuesta) => {
                alertify.success('Success message');
                renderCard(respuesta);
            })

            .catch( (error)=>{

                alertify.error(error);
                console.log(error);

            } );
            };

    getData();

})

</script>

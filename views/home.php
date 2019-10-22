<?php  require_once '../includes/components/header.php' ?> 
<?php require_once './components/sidebar.php';  ?>

<div class="col-md-10">

<div class="container">
<div  id="showPeoducts" class="row">
    <!-- <div  class="col-md-12"> -->
        <!-- <div  >
        
        </div> -->
    <!-- </div> -->
</div>

</div>

</div>

<script>

    window.addEventListener("load", function getData() {

    showProducts = document.getElementById('showPeoducts');
    showProducts.innerHTML= "";
    

        const renderCard = function (data) {
            
            console.log(data[0])
            
            for ( i in data ){
                
                showProducts.innerHTML += `
                <div class="col-md-3 mt-3 ml-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> Nombre: ${ data[i].nombreProducto} </h5>
                            <p class="card-text"> Marca: ${ data[i].marcaProducto } </p>
                            <p class="card-text">Precio compra: ${data[i].precioVenta }  </p>
                            <p class="card-text">Precio compra: ${data[i].precioCompra }  </p>
                            <p class="card-text"> Cantidad del producto:  ${data[i].cantidad } </p>
                        </div>
                    </div>
                </div>`;
                

            }
        
        }

        const getData = function (){
            fetch('../controls/queries/getProducts.php')
            .then((resp)=>{ 

            console.log( resp )
            return respuesta = resp.json()

            })
            .then( (respuesta) => {
                renderCard(respuesta)
            })

            .catch( (error)=>{
                console.log(error);

            } );
            };

    getData();

})

</script>



<?php require_once '../includes/components/footer.php'  ?>
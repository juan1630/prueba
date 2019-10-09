<?php  require_once '../includes/components/header.php' ?> 
<?php require_once './components/sidebar.php';  ?>


<div class="container">
<div class="row">
    <div class="col-md-12">
        <div id="showPeoducts" >
        
        </div>
    </div>
</div>

</div>

<script>

    window.addEventListener("load", function getData() {

    showProducts = document.getElementById('showPeoducts');
    showProducts.innerHTML= "";
    

        const renderCard = function (data) {

            showProducts.innerHTML= `<div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> Nombre: ${ data.nombreProducto} </h5>
                <p class="card-text"> Marca: ${ data.marcaProducto } </p>
                <p class="card-text">Precio compra: ${data.precioVenta }  </p>
                <p class="card-text">Precio compra: ${data.precioCompra }  </p>
            </div>
            </div>`;
        }

        const getData = function (){
            fetch('../controls/queries/getProducts.php')
            .then((resp)=>{ 
            
            console.log(resp)
            return respuesta = resp.json()

            })
            .then( (respuesta) => {
                
                console.log(respuesta)
                renderCard(respuesta);

            })
            .catch( (error)=>{
                console.log(error);

            } );
            
            }

    getData();

})

</script>



<?php require_once '../includes/components/footer.php'  ?>
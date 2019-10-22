<?php  require_once '../../includes/components/header.php' ?> 
<?php require_once '../components/sidebar.php' ?>

<div class="col-md-6 offset-md-1 mt-5">
    <h2 class="text-center"> Sumas  </h2>
    <form >
        <div class="form-group">
            <label for="total" > Ganancia total es:  </label>
                <div id="content"> </div>
        </div>

        <div class="form-group">
            <label for="invertido" >  Total de la venta es:  </label>
            <div id="invertido"> </div>
        </div>

        <div class="form-group">
            <label for="total" > Compra total es:  </label>
            <div id="compra"> </div> 
        </div>

        <div class="form-group">
            <label> Suma total del precio de compra </label>
            <div id="totalesVenta">

            </div>
        </div>

    </form>

</div>


<script>


    const content = document.getElementById('content');
    const invertido = document.getElementById('invertido');
    const compra = document.getElementById('compra');
    const totalesVenta = document.getElementById('totalesVenta');




    const renderTotal = (data) => {

            console.log( data );
        for( i  in data  ) {

            content.innerHTML += `<input type="number" value="${data[i].total}" class="form-control" > `;
            invertido.innerHTML += `<input type="text"  value="${data[i].totalVenta } " class="form-control" >`;
            compra.innerHTML += `<input type="text" value="${data[i].compraTotal}" class="form-control" > `;
            totalesVenta.innerHTML += `<input type="text" value="${data[i].ventaTotal}" class="form-control" id="totalesVentas">`
        }



    }


    window.addEventListener('load', () =>{

        fetch('../../controls/queries/getTotal.php')
            .then(( resp ) => {
                return resp.json()
            })

            .then( (resp)  => {
                renderTotal( resp )
                }
            )

            .catch(( error) => {
                console.log( error )
            })
    })




</script>

<?php  require_once  '../../includes/components/footer.php'  ?>
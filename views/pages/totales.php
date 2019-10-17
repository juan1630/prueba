<?php  require_once '../../includes/components/header.php' ?> 
<?php require_once '../components/sidebar.php' ?>

<div class="col-md-6 offset-md-1">
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

    </form>

</div>


<script>


    const content = document.getElementById('content');
    const invertido = document.getElementById('invertido');
    const compra = document.getElementById('compra');




    const renderTotal = (data) => {

        console.log( data )


        for( i  in data  ) {


            content.innerHTML += `<input type="number" value="${data[i].total}" class="form-control" > `;
            invertido.innerHTML += `<input type="text"  value="${data[i].totalVenta } " class="form-control" >`;
            compra.innerHTML += `<input type="text" value="${data[i].compraTotal}" class="form-control" > `;

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
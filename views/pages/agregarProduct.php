<?php  require_once '../../includes/components/header.php' ?> 
<?php require_once '../components/sidebar.php';  ?>


    <h2>Agrega el producto</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <form   id="formulario" >

                <div class="form-group">
                    <label for="nombre" > Nombre del producto: </label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto">
                </div>

                <div class="form-group">
                    <label for="marca" > Maraca del producto: </label>
                    <input type="text" id="marca" name="marca" placeholder="Marca del producto">
                </div>

                <div class="form-group">
                    <label for="compra" > Precio de compra: </label>
                    <input type="number" id="compra" name="compra" placeholder="Precio de compra" min="0">
                </div>


                <div class="form-group">
                    <label for="venta" > Precio de venta: </label>
                    <input type="number" id="venta" name="venta" min="0" placeholder="Precio de venta">
                </div>

                <div class="form-group">
                    <label for="cantidad" > Cantidad </label>
                    <input type="number" id="cantidad" min="0" name="cantidad" placeholder="Cantidad del producto">
                </div>

                <div class="form-group">
                    <label for="Imagen" > Imagen  </label>
                    <input type="file" id="Imagen" name="Imagen" placeholder="Imagen del producto">
                </div>


                    <!-- <button type="submit" class="btn btn-block btn-info"> Registrar </button> -->

                    <input type="submit" id="btnEnvio" value="Enviar" class="btn btn-info btn-block" />

                </form>
            </div>
        </div>
    </div>
    

<script>

        const formEnvio = document.getElementById('formulario');
        const btnEnvio = document.getElementById('btnEnvio');


        const validar = function(aForm){
            

            if( aForm.get('nombre') == null || aForm.get('nombre').length == 0 ){
                alert('Falta algun campo')
                validado = false;
            }else if( aForm.get('marca') == null || aForm.get('marca').length == 0 ){
                alert('Falta algun campo')
                validado = false;
            }else if( aForm.get('compra') ==""  ){
                alert('Falta algún campo')
                validado = false;
            }else if(aForm.get('venta') =="" ){
                alert('Falta algún campo')
                validado = false;
            }else if(aForm.get('cantidad') == ""  ){
                alert('Falta algún campo')
                validado = false;
            }
          return  validado = true;
        }

        

const sendData = function (datos) {

    url =  "../../controls/queries/insertProduct.php";

    config = {
        method: 'POST',
         body: datos
    }

    fetch( url,  config)
    
    .then( (resp) => {

        console.log( resp.json() )
        
    })
    
    .then( res => {
          console.log( res );
    })
    
    .catch( error =>  {
        console.log(error)
    })

}
    

        formEnvio.addEventListener('submit', (e)=> {
            
            e.preventDefault();
            formulario = new FormData (formEnvio);
            
        if (validar(formulario)){

            sendData(formulario);
            alert("Datos guardados");
            formEnvio.reset();

       
        }
        
        
        })


</script>

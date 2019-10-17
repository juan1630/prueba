<?php  require_once '../../includes/components/header.php' ?> 
<?php require_once '../components/sidebar.php' ?>


<div class="col-md-9">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3">

                <form id="formulario" >

                <h2 class="center" >Agrega el producto</h2>


                <div class="form-group">
                    <label for="nombre" > Nombre del producto: </label>
                    <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
                </div>

                <div class="form-group">
                    <label for="marca" > Maraca del producto: </label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del producto">
                </div>

                <div class="form-group">
                    <label for="compra" > Precio de compra: </label>
                    <input type="number" class="form-control" id="compra" name="compra" placeholder="Precio de compra" min="0">
                </div>


                <div class="form-group">
                    <label for="venta" > Precio de venta: </label>
                    <input type="number" class="form-control" id="venta" name="venta" min="0" placeholder="Precio de venta">
                </div>

                <div class="form-group">
                    <label for="cantidad" > Cantidad </label>
                    <input type="number" class="form-control" id="cantidad" min="0" name="cantidad" placeholder="Cantidad del producto">
                </div>
                
                <div class="form-group">
                    <label for="total" > Total: </label>
                        <div id="total">
                        </div>
                
                </div>
                

                <div class="form-group">
                    <label for="Imagen" > Imagen  </label>
                    <input type="file" class="form-control" id="Imagen" />
                </div>

                    <input type="submit" id="btnEnvio" value="Enviar" class="btn btn-info btn-block" />

                </form>
            </div>
        </div>
    </div>
    </div>

    <?php  require_once  '../../includes/components/footer.php'  ?>

<script>

        const formEnvio = document.getElementById('formulario');
        const btnEnvio = document.getElementById('btnEnvio');
        const total = document.getElementById('total');
        const btnCantidad = document.getElementById('cantidad');


        console.log( total )


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
            }else if( aForm.get('toal') == "" ){
                valido = false;
                alert ("El campo total está vacio")
            }
            
          return  validado = true;
        }

        

const sendData = function (datos) {

    url =  "../../controls/queries/insertProduct.php";

    config = {
        method: 'POST',
         body: datos

    }


    
    products = [];

    fetch( url,  config)
    
    .then( (resp) => {

        console.log( resp )
        return resp.json();
        
    })
    
    .then( (res) => {
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


        // Termina el script del formulario
        var resultado = 0


        btnCantidad.addEventListener ('blur', () => {
            let cantidad = parseInt(document.getElementById('cantidad').value)
            let venta = parseInt( document.getElementById('venta').value )
            

            if(!cantidad == "" || !cantidad === null ){
                if(!venta == "" || !venta == null  ){
                    
                    
                    resultado = cantidad * venta;
                    total.innerHTML= `<input type="number" name="total" class="form-control"  value="${resultado}" />`;
                
                }else {

                    alert('Algún campo no es correcto');
                    
                
                }
            }

        })


</script>

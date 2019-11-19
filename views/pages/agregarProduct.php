<?php  require_once '../../includes/components/header.php' ?> 
<?php require_once '../components/sidebar.php' ?>

<div class="col-md-9 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <h2 class="center"> Agregar el producto</h2>

                <form id="formulario" enctype = "multipart/form-data" >
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="nombre" > Nombre del producto: </label>
                            <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
                        </div>

                        <div class="form-group">
                            <label for="marca" > Maraca del producto: </label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del producto">
                        </div>

                        <div class="form-group">
                            <label for="descripcion" >
                                Descripción del producto:
                            </label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Agrega una descripción del producto" >

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="compra" > Precio de compra: </label>
                            <input type="text" class="form-control" id="compra" name="compra" placeholder="Precio de compra" min="0">
                        </div>


                        <div class="form-group">
                            <label for="venta" > Precio de venta: </label>
                            <input type="text" class="form-control" id="venta" name="venta" min="0" placeholder="Precio de venta">
                        </div>

                        <div class="form-group">
                            <label for="cantidad" > Cantidad </label>
                            <input type="number" class="form-control" id="cantidad" min="0" name="cantidad" placeholder="Cantidad del producto">
                        </div>
                    </div>

                    <div class="col-md-4">


                        <div class="form-group">
                            <label for="total" > Total venta: </label>
                            <div id="totalVenta">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="total" > Total compra: </label>
                            <div id="totalCompra">
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="Imagen" > Imagen  </label>
                            <input type="file"name="imagen"  class="form-control" id="Imagen" />
                        </div>

                        <input type="submit" id="btnEnvio" value="Enviar" class="btn btn-info btn-block" />
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <?php  require_once  '../../includes/components/footer.php'  ?>

<script>

        const formEnvio = document.getElementById('formulario');
        const btnEnvio = document.getElementById('btnEnvio');
        const total = document.getElementById('totalVenta');
        const btnCantidad = document.getElementById('cantidad');
        const totalCompra = document.getElementById('totalCompra');

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
            }else if(aForm.get('descripcion') == "" ){
                alert('Falta agregar una descripcion')
                validado = false;
            }
            else if(aForm.get('venta') =="" ){
                alert('Falta algún campo')
                validado = false;
            }else if(aForm.get('cantidad') == ""  ){
                alert('Falta algún campo')
                validado = false;
            }else if( aForm.get('total') == "" ){
                valido = false;
                alert ("El campo total está vacio")
            }
          return  validado = true;
        };

        

const sendData = function (datos) {

    url =  "../../controls/queries/insertProduct.php";
    // url =  "../../controls/queries/pruebaIkages.php";

    config = {
        method: 'POST',
         body: datos
    };


    products = [];

    fetch( url,  config)
    
    .then( (resp) => {
        // Aca irán las demas validaciones
        return resp.json();
    })
    .then( (res) => {

          console.log( res );
          if(res.mensaje == "Producto insertado"){
                alert( res.mensaje );
                return;
          }else if( res.mensaje  == "Producto no insertado" ) {
                alert("Producto no insertado");
                return;
          }else if( res.mensaje  == "Imagen grande" ){
              alert("Imagen muy grande")
              return;
          }else if( res.mensaje == "Archvio no valido" ){
              alert("Archivo no valido")
              return;
          }else if(  res.mensaje == "Algo paso" ) {
              alert("Algo pasó");
              return;
          }
    })
    .catch( error =>  {
        console.log(error)
    })

};
    

        formEnvio.addEventListener('submit', (e)=> {
            
            e.preventDefault();
            formulario = new FormData (formEnvio);
            
        if (validar(formulario)){

            sendData(formulario);
            formEnvio.reset();

        }
        
        
        });


        // Termina el script del formulario
        var resultado = 0


        function getTotalVenta () {

            total.innerHTML = "";

            let cantidad = parseFloat(document.getElementById('cantidad').value)
            let venta = parseFloat(document.getElementById('venta').value)

            console.log( cantidad);
            console.log( venta );


            if (!cantidad == "" || !cantidad == null) {
                if (!venta == "" || !venta == null) {


                    resultado = cantidad * venta;
                    total.innerHTML += `<input type="number" name="totalesVenta" class="form-control"  value="${resultado}" />`;

                } else {

                    alert('Algún campo no es correcto');


                }
            }
        }

          var totalDeCompra = 0;

        function getTotalCompra () {

            totalCompra.innerHTML = "";

            let cantidad = parseFloat( document.getElementById('cantidad').value );
            let compra = parseFloat(document.getElementById('compra').value);

            if( cantidad != null && compra != null ){
                totalDeCompra = cantidad * compra;

                totalCompra.innerHTML += `<input type="text" id="compraTotales" name="compraTotales" class="form-control" value="${totalDeCompra}" > `;

            }


        }


        btnCantidad.addEventListener ('blur', ()=> {
            getTotalVenta()
            getTotalCompra()

        } );


</script>

<?php  require_once '../../includes/components/header.php' ?>
<?php require_once '../components/sidebar.php' ?>

<div class="col-md-3 offset-md-1 mt-4" >

    <h2 class="text-center" > Actualizar el producto </h2>

    <div id="formUpdate" class="mt-3">



    </div>
    <button class="btn btn-success btn-block" id="buttonPrecios"> Actualizar precios </button>
</div>

<div class="col-md-3 mt-4 offset-md-1" id="precios"> </div>

<script>

    const formUpdate = document.getElementById('formUpdate');
    const btn_precio = document.getElementById('buttonPrecios');
    const preciosDiv = document.getElementById('precios');

    var products = [];


    // ==============================================
    //  LA MULTIPLICACIÓN DE LOS PRODUCTOS
    //===============================================

    // VALIDACIÓN DEL FORMULARIO


    const validar = (aForm) => {

        if( aForm.get('nombre') == null || aForm.get('nombre').length == 0 ){
            alert('Falta algun campo')
            validado = false;
        }else if( aForm.get('marca') == null || aForm.get('marca').length == 0 ){
            alert('Falta algun campo')
            validado = false;
        } else if(aForm.get('desc') == "" ){
            alert('Falta agregar una descripcion')
            validado = false;
        }

        return validado = true;
    };


    const totalesVenta = () => {

        const  totalesDiv = document.getElementById('totalDiv');

        let precioVenta = document.getElementById('precioVenta').value;
        let cantidad = document.getElementById('cantidad').value;
        let precioCompra = document.getElementById('precioCompra').value;
        let  totalVenta = precioVenta * cantidad;
        let  totalCompra =  precioCompra * cantidad;

        totalesDiv.innerHTML = `<input type="number" class="form-control mb-2" id="totalVenta" name="totalVentas" value="${totalVenta}" class="form-control">
    <label  for="totalCompra" > Total de la compra: </label>
    <input type="number" class="form-control mt-2" id="totalCompra" value="${totalCompra}"  name="totalCompra" >`;

    };

    // =============================================
    //  ENVIO DE LA PETICIÓN PARA EL UPDATE
    // =============================================

    const sendData = () => {

        fetch('../../controls/queries/controlUpdate.php')
            .then( res => {
                console.log(res )
            } )
    };


    // ==============================================
    //  MOSTRAMOS EL FORMULARIO GENERAL
    //===============================================



    const showFormPrecios = () => {

        preciosDiv.innerHTML = ``;

        preciosDiv.innerHTML += `<form id="formUpdatePrice" method="post" >
           <h3> Actualizar los precios </h3>
    <div class="form-group">
        <label for="precioCompra"> Precio de compra: </label>
        <input type="number" name="precioCompra" id="precioCompra"  class="form-control" value="${products[0][0].precioCompra }" />
    </div>

    <div class="form-group" >
        <label for="precioVenta" > Precio de venta: </label>
          <input  type="number" class="form-control" id="precioVenta" name="precioVenta"  value="${products[0][0].precioVenta}" />
    </div>

    <div class="form-group">
        <label for="cantidad"> Cantidad: </label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="${products[0][0].cantidad}" />
    </div>

    <div class="form-group" >
        <label for="totalVenta" > Total de la compra: </label>
       <div id="totalDiv">
             <input type="number" class="form-control" id="total" name="total" value="${products[0][0].total}" />
        </div>
    </div>


    <div class="form-group" >
         <input type="button" class="btn btn-block btn-info" id="btnSendPrice" value="Actualizar" />
    </div>
</form>`;

        const txtCantidad = document.getElementById('cantidad');
        const btnSendPrice = document.getElementById('btnSendPrice');
        const formDataUpdate = document.getElementById('formUpdatePrice');

        btnSendPrice.addEventListener('click', ()=> {
            let formPrice = new FormData( formDataUpdate );

            let conf = {
              method: 'POST',
              body: formPrice
            };

            fetch('../../controls/queries/updatePrice.php', conf)
                .then(( res ) => {
                    return res.json();
                })
                .then( res => {
                    if( res.mensaje == "ok"  ){
                        alert("Precios actualizados")
                    }else if(res.mensaje == "fallo" ) {
                        alert("Algó fallo")
                    }

                } )


        });

        txtCantidad.addEventListener('blur', totalesVenta);


    };

    // ==============================================
    //  IMPRIMIMOS LA INFORMACIÓN DEL PRODUCTO
    //===============================================


    const renderForm = (producto) => {

        formUpdate.innerHTML = ``;

        products.push(producto);

        for( i in producto ){
            formUpdate.innerHTML += `<form id="formUpdateText">
    <div class="form-group">
        <label for="nombreProduct" > Nombre del producto: </label>
        <input type="text" name="nombre" class="form-control" id="nombreProduct" value="${producto[i].nombreProducto}" >
    </div>
    <div class="form-group" >

        <label for="maracProduct" > Maraca del producto: </label>
        <input type="text" name="marca" class="form-control" id="marcaProduct" value="${producto[i].marcaProducto}" >
    </div>
    <div class="form-group">

        <label for="descProduct" > Descripción del producto: </label>
        <input type="text" name="desc" class="form-control" id="descProduct" value= "${producto[i].descripcion}" >
    </div>
    <div class="form-group" >
               <input type="button" id="btnActualizar" class="btn btn-info btn-block" value="Actualizar" >
</div>
</form>`;



            const  btnActualizar = document.getElementById('btnActualizar');
            const formUpdateTxt = document.getElementById('formUpdateText');


            btnActualizar.addEventListener('click', () => {

                formValidate = new FormData( formUpdateTxt );

                if(validar(  formValidate )){

                    config =  {
                        method: 'POST',
                        body: formValidate
                    };

                    fetch('../../controls/queries/contorlUpdateProduct.php', config)
                        .then( res => {
                            console.log( res )
                           return  res.text()
                        })
                        .then( resultado => {
                                console.log( resultado )
                            if( resultado == "Consulta hecha" ){
                                formUpdateTxt.reset();
                                alert("Proudcto actualizado");
                            }

                        })
                        .catch( error => {
                            console.log( error )
                        })
                }
            });


    }

    };



    // ==============================================
    //  OBTENEMOS LA INFORMACIÓN DEL PRODUCTO
    //===============================================

    const getData = () => {

        fetch(  '../../controls/queries/controlFinById.php' )
            .then( (res) => {

               return respuesta =  res.json();

            })
            .then( (respuesta) => {
                console.log( respuesta );
                renderForm( respuesta )

            })
            .catch( error  => {
                console.log(error)
            });
    };


    // EVENTOS

    window.addEventListener('load', getData);

    btn_precio.addEventListener('click', showFormPrecios );


</script>


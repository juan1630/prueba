<style>

.sidebar {
    width:auto;
    height:625px;
    background: #7F00FF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #E100FF, #7F00FF);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #E100FF, #7F00FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}


.col-md-2 h3{
    color:white;
    text-align:center;
    padding-bottom:10px;
    border-bottom: 1px solid transparent;

}
 
.fa {
    font-size: 3em;
    color:white;
    margin-top: .3em;
    margin-bottom: .3em;

}

.font {

    list-style: none;
    text-align: center;
    
}

.font:hover {
   
    border-bottom: 1px solid white;
    border-top:1px solid white;
   
    
}

</style>

<div class="col-md-2 sidebar mt-2">

    <nav id="sidebar">
    <div class="sidebar-header">
        <img src="../assets/images/olinala.png" class="img-fluid mt-3"  alt="imagen de Ólinala Guerrero">
        <h3 class="mt-2"> Opciones </h3>
    </div>
        <ul class="list-unstyled components">
       <li class="font" >  
            <a href="../home.php">
        <i class="fa fa-home"></i>
        </a>
       
        </li>

       <li class="font">
        <a href="./pages/agregarProduct.php"> 
             <i class="fa fa-plus"></i>
         </a>
        </li>

        <li class="font">
            <a href="./pages/totales.php"> 
                <i class="fa fa-dollar"></i>
            </a>
        </li>
       </ul>

</nav>


</div>
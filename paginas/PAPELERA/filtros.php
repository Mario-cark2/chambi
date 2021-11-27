<div class="row">
   <div class="col-sm-12">
      <form class="form-inline">
          <div class="form-group mb-2">
             <label>CP</label>
          </div>
          <div class="form-group mx-sm-3 mb-2">
               <select class="form-control" id="filtros">
                   <option value="0">Todos</option>
                   <?php
                   require_once("conexion.php");
                   $conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                   $acentos=mysqli_query($conexion, "SET NAMES 'utf8'");
                   $sql="SELECT * FROM colonias ORDER BY cp";
                   $resultado=mysqli_query($conexion,$sql);
                   while($registro=mysli_fetch_array($resultado)){
                       echo"<option value='".$registro['Id']."'>".$registro['cp']."</option>";
                   }
                   ?>
               </select>
          </div>
      </form>
   </div>
</div>


    

     
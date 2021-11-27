<?php
// En este apartado se puede agregar sesion para usuarios registrados
$member_id = 1;
require_once ("Valoracion.php");
$rate = new Rate();
$result = $rate->getAllPost();
?>
<!DOCTYPE html>
<html>
<head>
<title>Busqueda PHP MySQL Ajax</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

<script>function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.demo-table #tutorial-'+id+' li').removeClass('selected');
	$('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#tutorial-'+id+' #valoracion').val((index+1));
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "Agregar_valoracion.php",
	data:'id='+id+'&valoracion='+$('#tutorial-'+id+' #valoracion').val(),
	type: "POST",
    success: function(data) {
        $("#star-rating-count-"+id).html(data);    
        }
	});
}

function resetRating(id) {
	if($('#tutorial-'+id+' #valoracion').val() != 0) {
		$('.demo-table #tutorial-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#tutorial-'+id+' #valoracion').val()) {
				return false;	
			}
		});
	}
} </script>

</HEAD>
<BODY>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="./">BaulPHP</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="./">INICIO <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Esto lo robe de un video</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
<div class="panel-body">

<!--Inicio elementos contenedor-->

<table class="demo-table">
        <tbody>
            <tr> 
                <th><strong>Sistema de valoracion PHP y jQuery</strong></th>
            </tr>
<?php
if (! empty($result)) {
    $i = 0;
    foreach ($result as $tutorial) {
        $ratingResult = $rate->getRatingByTutorialForMember($tutorial["id"], $member_id);
        $ratingVal = "";
        if (! empty($ratingResult[0]["valoracion"])) {
            $ratingVal = $ratingResult[0]["valoracion"];
        }
        ?>
<tr>
                <td valign="top">
                    <div class="feed_title"><?php echo $tutorial["mititulo"]; ?></div>
                    
                    <div><?php echo $tutorial["midescripcion"]; ?></div>
                    <div id="tutorial-<?php echo $tutorial["id"]; ?>"
                        class="star-rating-box">
                        <input type="hidden" name="valoracion" id="valoracion"
                            value="<?php echo $ratingVal; ?>" />
                        <ul
                            onMouseOut="resetRating(<?php echo $tutorial["id"]; ?>);">
  <?php
        for ($i = 1; $i <= 5; $i ++) {
            $selected = "";
            if (! empty($ratingResult[0]["valoracion"]) && $i <= $ratingResult[0]["valoracion"]) {
                $selected = "selected";
            }
            ?>
  <li class='<?php echo $selected; ?>'
                                onmouseover="highlightStar(this,<?php echo $tutorial["id"]; ?>);"
                                onmouseout="removeHighlight(<?php echo $tutorial["id"]; ?>);"
                                onClick="addRating(this,<?php echo $tutorial["id"]; ?>);">&#9733;</li>  
  <?php }  ?>
</ul>
                        <div
                            id="star-rating-count-<?php echo $tutorial["id"]; ?>"
                            class="star-rating-count">
                                <?php
        
        if (! empty($tutorial["rating_total"])) {
            $average = round(($tutorial["rating_total"] / $tutorial["rating_count"]), 1);
            echo "La calificación promedio es " . $average . " del Total " . $tutorial["rating_count"] . " Valoración";
            ?>
                                
                                <?php } else { ?>
                                No hay valoración
                                <?php  } ?>
                                </div>

                    </div>
                    
                </td>
            </tr>
<?php
    }
}
?>
</tbody>
    </table>
<!--Fin elementos contenedor-->
</div>
</div>
  </div>
</div>
<div class="panel-footer">
  <div class="container">
    <p>Ira donde robe el codigo <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
  </div>
</div>

</body>
</html>
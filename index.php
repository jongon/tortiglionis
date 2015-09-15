<?php 
	function tipoMenu()
	{
		if (isset($_GET['menu']))
		{	
            if ($_GET['menu']=='aperitivo')
            	include_once('sections/menu/aperitivos.html');
            else if ($_GET['menu']=='sopasyensaladas')
            	include_once('sections/menu/sopasyensaladas.html');
            else if ($_GET['menu']=='paninisycalzones')
            	include_once('sections/menu/paninisycalzones.html');
            else if ($_GET['menu']=='pastas')
            {
            	if (!isset($_GET['tipopasta']))
            		include_once('sections/menu/pastas.php');
            	else if ($_GET['tipopasta']=='clasica')
            		include_once('sections/menu/pastas_clasicas.html');
            	else if ($_GET['tipopasta']=='chef')
            		include_once('sections/menu/pastas_chef.html');
            }
            else if ($_GET['menu']=='pizzas')
            	include_once('sections/menu/pizzas.html');
            else if ($_GET['menu']=='carnepollosypescado')
            	include_once('sections/menu/carnepolloypescado.html');
            else if ($_GET['menu']=='postres')
            	include_once('sections/menu/postres.html');
            else if ($_GET['menu']=='bebidas')
            {
            	if (!isset($_GET['tipobebida']))
            		include_once('sections/menu/bebidas.php');
            	else if ($_GET['tipobebida']=='bebidasnoalcoholicas')
            		include_once('sections/menu/bebidasnoalcoholicas.html');
            	else if ($_GET['tipobebida']=='vinos')
            		include_once('sections/menu/vinos.html');
            	else if ($_GET['tipobebida']=='cocteles')
            		include_once('sections/menu/cocteles.html');
            	else if ($_GET['tipobebida']=='cervezas')
            		include_once('sections/menu/cervezas.html');
            }
            else if ($_GET['menu']=='ninos')
            {
            	if (!isset($_GET['tiponino']))
            		include_once('sections/menu/pequenosdelacasa.php');
            	else if ($_GET['tiponino']=='platosprincipales')
            		include_once('sections/menu/platosprincipalesninos.html');
            	else if ($_GET['tiponino']=='postres')
            		include_once('sections/menu/postresninos.html');
            }
        }
        else
	        include_once('sections/menu/menu.php');
    }

    function tipoReceta()
    {
        if (isset($_GET['tiporecetas']))
        {
             if ($_GET['tiporecetas']=='aperitivos')
                include_once('sections/recetas/aperitivos.html');
            else if ($_GET['tiporecetas']=='platosprincipales')
                include_once('sections/recetas/platosprincipales.html');
            else if ($_GET['tiporecetas']=='pizzas')
                include_once('sections/recetas/pizzas.html');
            else if ($_GET['tiporecetas']=='salsas')
                include_once('sections/recetas/salsas.html');
            else if ($_GET['tiporecetas']=='guarniciones')
                include_once('sections/recetas/guarniciones.html');
            else if ($_GET['tiporecetas']=='sopas')
                include_once('sections/recetas/sopas.html');
            else if ($_GET['tiporecetas']=='bebidas')
                include_once('sections/recetas/bebidas.html');
            else if ($_GET['tiporecetas']=='postres')
                include_once('sections/recetas/postres.html');
        }
        else
            include_once('sections/recetas.php');
    }

    include_once('header.html');
?>
    <div id="container">
        <div id="container-wrapper">
    		 <?php   
    		 	if (!isset($_GET['site']))
    		        include_once('slider.html');
    		    else
    		    {
    		        if ($_GET['site']=='menu')
    		        {
    		        	tipoMenu();
    		        }
                    else if ($_GET['site']=='recetas')
                    {
                        tipoReceta();
                    }
                    else if ($_GET['site']=='restaurante')
                    {
                        include_once('sections/restaurante/restaurante.html');
                    }
                    else if ($_GET['site']=='ubicaciones')
                    {
                        include_once('sections/ubicaciones/ubicaciones.html');
                    }
                    else if ($_GET['site']=='sugerenciasycontacto')
                    {
                        include_once('sections/sugerenciasycontacto/sugerenciasycontacto.html');
                    }
                    else if ($_GET['site']=='empleo')
                    {
                        include_once('sections/empleo/empleo.html');
                    }
                    else if ($_GET['site']=='conectate')
                    {
                        include_once('sections/conectate/conectate.html');
                    }
    		    }	         
		 ?>
 	</div>
 </div>
<?php   
    include_once('footer.html');
?>
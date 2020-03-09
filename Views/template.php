<html>
    <head>
        <title>EAD</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js" ></script>
        
    </head>
    
    <body>
    	<div class="topo">
    		<div class="topoint">
    			<div class="topoleft">Ensino à Distância</div>
    			<div class="toporight"> - <a href="<?php echo BASE_URL; ?>login/logout">Sair</a></div>
    			<div style="clear:both"></div>
    		</div>
    	</div>
    	<div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    	</div>
    </body>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/javascript.js" ></script>
</html>
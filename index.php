<?php include("config.php") ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt-BR" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt-BR" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt-BR" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR" class="no-js"> <!--<![endif]-->
<head>
<?php include("head_before.php") ?>
<title><?php echo $titleSite?></title>
<meta name="title" content="--PAGE TITLE HERE-- - <?php echo $titleSite?>">
<meta name="description" content="--DESCRIPTION HERE--">
<?php include("head_after.php") ?>
</head>
<body class="<?php body_class()?>">

<?php include("header.php") ?>

<div id="main" class="clearfix" role="main">

    <div class="container">
        <div class="arrow">
            <a href="#medica" title="<?php echo $titleSite ?>">
                <img src="<?php echo $base_url?>assets/img/arrow.png" class="img-responsive" alt="<?php echo $titleSite ?>"/>
            </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="content bio-columns" id="medica">
                    <h2>Médica cirurgiã de Cabeça e Pescoço</h2>

                    <div class="row">
                        <div class="col-sm-8">

                            <p>
                                A Dra. Maria Cristina Matteotti atua na especialidade de Cirurgia de Cabeça e Pescoço e<br/>
                                possui vasta experiência em cirurgias de alta complexidade e tratamentos oncológicos.<br/>

                            </p>
                            <p><a href="perfil.php" target="_blank">SAIBA MAIS SOBRE A MÉDICA</a></p>

                        </div>
                    </div>

                </div>

            </div>
        </div>

</div><!-- main -->

<?php include("footer.php") ?>

<script type="text/javascript">
(function($){

})(jQuery);
</script>

</body>
</html>
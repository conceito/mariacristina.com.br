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
<body class="<?php body_class()?>" id="internas">

<?php include("header_interno.php") ?>

<div id="main" class="clearfix" role="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content -bio-columns" id="body-internas">
                    <h1 class="titulo" >Links</h1>
                    <h1 class="subtitulo"></h1>
                    <div class="row">
                        <div class="col-sm-6">

                            <img src="<?php echo $base_url?>assets/img/logo-inca.jpg"  alt="<?php echo $titleSite ?>"/>
                            <p class="link">INCA<br/>
                                <a href="http://www2.inca.gov.br" target="_blank">www2.inca.gov.br</a></p>
                        </div>
                        <div class="col-sm-6">

                            <img src="<?php echo $base_url?>assets/img/logo-abccmf.jpg"  alt="<?php echo $titleSite ?>"/>
                            <p class="link">ABCCMF<br/>
                                <a href="http://www.abccmf.org.br" target="_blank">www.abccmf.org.br</a></p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $base_url?>assets/img/logo-accamargo.jpg"  alt="<?php echo $titleSite ?>"/>
                            <p class="link">ACCamargo Cancer Center<br/>
                                <a href="http://www.accamargo.org.br" target="_blank">www.accamargo.org.br</a></p>
                        </div>
                        <div class="col-sm-6">

                            <img src="<?php echo $base_url?>assets/img/logo-into.jpg"  alt="<?php echo $titleSite ?>"/>
                            <p class="link">INTO<br/>
                                <a href="http://www.into.saude.gov.br" target="_blank">www.into.saude.gov.br</a></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $base_url?>assets/img/logo-sbccp.jpg"  alt="<?php echo $titleSite ?>"/>
                            <p class="link">SBCCP<br/>
                                <a href="http://www.sbccp.org.br" target="_blank">www.sbccp.org.br</a></p></div>
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
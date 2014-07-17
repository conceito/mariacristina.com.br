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

<div id="main-internas" class="clearfix" role="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="content -bio-columns" id="body-internas">

                    <h1 class="titulo" >Procedimentos Cirurgicos</h1>
                    <h2 class="subtitulo"></h2>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="procedimentos"> <p> Cirurgias</p></div>
                            <div class="procedimentos"> <p> Laringe</p></div>
                            <div class="procedimentos"> <p> Boca</p></div>
                            <div class="procedimentos"> <p> Glândulas salivares</p></div>
                            <div class="procedimentos"> <p> Tireoide</p></div>
                            <div class="procedimentos"> <p>Seios paranasais</p></div>
                            <div class="procedimentos"> <p>Base de crânio</p></div>
                            <div class="procedimentos"> <p>Tumores de pele</p></div>
                            <div class="procedimentos"> <p>Tumores e mal-formações de pescoço e face</p></div>
                            <div class="procedimentos"> <p>Tumores de órbita</p></div>

                        </div>
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
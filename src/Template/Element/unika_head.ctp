<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Focux</title>
    <meta name="description" content="Focux Microsystems">
    <meta name="keywords" content="Aplicativos, Sites, Sistemas, Javascript, Node, PHP" />
    <meta name="author" content="focuxmicrosystems.co">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <?php
        echo $this->element('unika_favicon'); 
    ?>
    <?php
        echo $this->Html->css(
        [
            '/unika/inc/bootstrap/css/bootstrap.min.css',
            '/unika/inc/animations/css/animate.min.css',
            '/unika/inc/font-awesome/css/font-awesome.min.css',
            '/unika/inc/owl-carousel/css/owl.carousel.css',
            '/unika/inc/owl-carousel/css/owl.theme.css',
            '/unika/css/reset.css',
            '/unika/css/style.css',
            '/unika/css/mobile.css',
            '/unika/css/skin/cool-red.css',
        ]);
    ?>
</head>
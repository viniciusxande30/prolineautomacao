<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Pro Line - Automação Residencial</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/images/off2.jpg">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{url('/')}}/assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/inc/custom-slider/css/preview.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/responsive.css">
        
    </head>
    <body class="defult-home">

    <?php
    /*
    Trecho de exemplo extraído do WordPress - wp_is_mobile()
    */
 
    function isMobile() {
        $is_mobile = false;
 
        //Se tiver em branco, não é mobile
        if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
            $is_mobile = false;
 
        //Senão, se encontrar alguma das expressões abaixo, será mobile
        } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
                $is_mobile = true;
 
        //Senão encontrar nada, não será mobile
        } else {
            $is_mobile = false;
        }
 
        return $is_mobile;
    }
?>
    
        <style>
            html{
                scroll-behavior: smooth;
            }
            .btn-whatsapp {
                width: 80px;
                position: fixed;
                right: 15px;
                bottom: 25px;
                z-index: 99999;
            }
            img {
                max-width: 100%;
                height: auto;
            }
            /* .full-width-header .rs-header .menu-area {
                background: black;
                opacity: 0.8;
            } */
           
        </style>

<a href="https://api.whatsapp.com/send?phone=5511979595047&amp;text=Ol%C3%A1,%20gostaria%20de%20saber%20mais%20sobre%20a%20Proline%20Automação" target="_blank" class="btn-whatsapp">
<img src="https://seeklogo.com/images/W/whatsapp-icon-logo-8CA4FB831E-seeklogo.com.png" class="btn-whatsapp" title="Suporte Via WhatsApp" alt="Cotação Rápida por WhatsApp">
</a>
        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="archtek-load">
            <div class="archtek-loader la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> 
        <!--Preloader area end here-->
     
		<!-- Main content Start -->
        <div class="main-content" id="home">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header home2-header-style1 header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container-fluid">
                            <div class="row-table">
                                <div class="col-cell header-logo">                                  
                                    <div class="logo-area">
                                        <a href="{{url('/')}}">
                                            <img src="assets/images/logo-lite.png" alt="logo" style="max-height:50px">  
                                            <img class="sticky-logo" src="assets/images/logo.png" alt="logo">  
                                        </a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu">
                                                    <li class="menu-item-has-children  current-menu-item">
                                                        <a href="{{url('/')}}/#home">Home</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="{{url('/')}}/#sobre-nos">Sobre Nós</a>                                                        
                                                       
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="{{url('/')}}/corporativo">Soluções Corporativas</a>                                                        
                                                       
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Serviços</a>                                                        
                                                        <ul class="sub-menu">
                                                            <li><a href="{{url('/')}}/automacao">Automação</a></li>                                                            
                                                            <li><a href="{{url('/')}}/sonorizacao">Sonorização</a></li>
                                                            <li><a href="{{url('/')}}/monitoramento">Monitoramento e Controle de Acesso</a></li>                                                            
                                                            <li><a href="{{url('/')}}/wifi">Rede Estruturada e Wi-Fi</a></li>
                                                            <li><a href="{{url('/')}}/aspiracao">Aspiração Central</a></li>                                                            
                                                            <li><a href="{{url('/')}}/hometheater">Home Theater</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('/')}}/#apresentacao">Apresentação</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('/')}}/#contato">Contato</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">                                       
                                        <ul>
                                            <li class="contact-phone">
                                                <i class="flaticon-call"></i>                                      
                                                <a href="tel:+55 11 97959-5047"> +55 11 97959-5047</a>                   
                                            </li>
                                            <?php if(isMobile()){ ?>
                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
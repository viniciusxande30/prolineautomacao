@include('includes.top')
<style>
@media only screen and (max-width: 1366px){
    .rs-services.style2 .rs-addon-number .addon-wrap {
    padding: 50px 40px 60px 40px;
    height: 400px;
}
}

</style>
                    <!-- Canvas Menu start -->
                    <nav class="right_menu_togle hidden-md">
                        <div class="close-btn">
                            <a id="nav-close" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <div class="canvas-logo">
                            <a href="{{url('/')}}"><img src="assets/images/logo-lite.png" alt="logo"></a>
                        </div>
                        <div class="offcanvas-text">
                            <p>Com uma equipe altamente capacitada e experiente, a empresa oferece soluções personalizadas de automação residencial que visam melhorar o conforto, a segurança e a eficiência energética dos ambientes residenciais.</p>
                        </div>
                        <div class="media-img">
                            <img src="assets/images/off2.jpg" alt="Images">
                        </div>
                        <div class="canvas-contact">
                            <div class="address-area">
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Endereço</h4>
                                        <em>São Paulo - SP</em>
                                    </div>
                                </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">E-mail</h4>
                                        <em><a href="mailto:contato@prolineautomacao.com.br">contato@prolineautomacao.com.br</a></em>
                                    </div>
                                 </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                      <i class="flaticon-call"></i>
                                    </div>
                                    <div class="info-content">
                                      <h4 class="title">Telefone</h4>
                                      <em>
                                        +55 11 97959-5047</em>
                                    </div>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a href="https://www.instagram.com/prolineautomacao/" target="_BLANK"> <i class="fa fa-instagram"></i></a></li>
                               
                            </ul>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->

                    <!-- Canvas Mobile Menu start -->
                    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                        <div class="close-btn">
                            <a id="nav-close2" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu">
                                                    <li class="menu-item-has-children  current-menu-item">
                                                        <a href="#home">Home</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#sobre-nos">Sobre Nós</a>                                                        
                                                       
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
                                                        <a href="#apresentacao">Apresentação</a>
                                                    </li>
                                                    <li>
                                                        <a href="#contato">Contato</a>
                                                    </li>
                                                </ul> <!-- //.nav-menu -->
                        <div class="canvas-contact">
                              <div class="address-area">
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-location"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Atendimento</h4>
                                          <em>Atendemos Todas as Regiões</em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-email"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">E-mail</h4>
                                          <em><a href="mailto:contato@prolineautomacao.com.br">contato@prolineautomacao.com.br</a></em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-call"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Telefone</h4>
                                          <em>+55 11 97959-5047</em>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->                      
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Slider Start -->
            <!-- <div id="rs-slider" class="rs-slider slider1 home2-slider-style">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">

                        <img src="assets/images/slider/h2-sl1.jpg" alt="" title="#slide-1" />
                        <div class="nivo-caption" style="display: block;opacity:1;">
                        <div class="content-part" style="background-color:transparent">
                            <div class="container custom2">
                                
                                <div class="slider-bottom ">
                                    <a class="readon project" href="{{url('/')}}/#servicos"><div class="text-btn"><span style="opacity:0.8"><p>Projetos Especiais<p></span></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div> -->
            <!-- Slider End -->


            <div class="rs-breadcrumbs img1">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">Projetos Especiais</h1>
                       
                    </div>
                </div>
            </div>
            

            

            <!-- About Section Start -->
            <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70 bg5" id="sobre-nos">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50 pr-45 md-pr-15">
                            <div class="images-part">
                                <img class="js-tilt" src="assets/images/about/about2.png" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-30 md-pl-15">
                            <div class="sec-title2">
                                <h2 class="title pb-30">
                                    <span class="watermark" style="font-size:80px">Sobre Nós</span>
                                    Automação Residencial | Projetos Especiais
                                </h2>
                                <p class="desc margin-0 pb-47">Bem-vindo ao nosso site! Somos uma empresa com mais de 15 anos de experiência no segmento de áudio, vídeo e automação. Ao longo dos anos, construímos uma reputação sólida como líderes nesse setor em constante evolução</p>
                                <div class="row y-middle">
                                   
                                   <div class="col-lg-12 pl-27 md-pl-15">
                                       <div class="box-wrapper mb-22">
                                           <div class="icon-box">
                                               <i class="fa fa-adn"></i>
                                           </div>
                                           <h4 class="box-title">CONVERSE COM NOSSO TIME </h4>
                                       </div>
                                       <div class="box-wrapper mb-22">
                                           <div class="icon-box">
                                               <i class="fa fa-bandcamp"></i>
                                           </div>
                                           <h4 class="box-title">TRABALHO QUALIFICADO</h4>
                                       </div>
                                       <div class="box-wrapper">
                                           <div class="icon-box">
                                               <i class="fa fa-telegram"></i>
                                           </div>
                                           <h4 class="box-title">SUPORTE PERSONALIZADO</h4>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->



 <!-- Slider Start -->
 
            <!-- <img id="Image-Maps-Com-image-maps-2023-05-17-010225" class="servicos" src="assets/images/bg/servicos.png" border="0" width="100%" orgWidth="1170" usemap="#image-maps-2023-05-17-010225" alt="" />
<map name="image-maps-2023-05-17-010225" id="ImageMapsCom-image-maps-2023-05-17-010225">
<area  alt="Sonorização de Ambientes e Home Theater" title="Sonorização de Ambientes e Home Theater" href="{{url('/')}}/sonorizacao" shape="rect" coords="56,213,385,263" style="outline:none;" target="_self"     />
<area  alt="" title="" href="{{url('/')}}/wifi" shape="rect" coords="82,355,411,405" style="outline:none;" target="_self"     />
<area  alt="Aspiração Central" title="Aspiração Central" href="{{url('/')}}/aspiracao" shape="rect" coords="166,475,495,525" style="outline:none;" target="_self"     />
<area  alt="Automação de Iluminação" title="Automação de Iluminação" href="{{url('/')}}/automacao" shape="rect" coords="491,132,820,182" style="outline:none;" target="_self"     />
<area  alt="Automação de Áudio e Vídeo" title="Automação de Áudio e Vídeo" href="{{url('/')}}/automacao" shape="rect" coords="759,196,1088,246" style="outline:none;" target="_self"     />
<area  alt="Automação de Ar Condicionado e Persianas" title="Automação de Ar Condicionado e Persianas" href="{{url('/')}}/automacao" shape="rect" coords="796,349,1125,399" style="outline:none;" target="_self"     />
<area  alt="Cameras de Monitoramento e Fechaduras" title="Cameras de Monitoramento e Fechaduras" href="{{url('/')}}/monitoramento" shape="rect" coords="748,493,1077,543" style="outline:none;" target="_self"     />
<area shape="rect" coords="1168,628,1170,630" alt="Image Map" style="outline:none;" title="Image Map" href="https://www.image-maps.com/" />
</map> -->


<!-- Slider End -->



           <!-- Project Section Start -->
           <div class="rs-project style1 home2-project-style" id="apresentacao">
            <div class="container-fluid">
                <div class="slider team-style1">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="slider-style.html"><img src="assets/images/project/style2/1.jpg" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title"><a href="{{url('/')}}/automacao">Automação</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{url('/')}}/hometheater"><img src="assets/images/project/style2/2.jpg" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title"><a href="{{url('/')}}/hometheater">Home Theater</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{url('/')}}/sonorizacao"><img src="assets/images/project/style2/3.jpg" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title"><a href="{{url('/')}}/sonorizacao">Sonorização</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{url('/')}}/wifi"><img src="assets/images/project/style2/4.jpg" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title"><a href="{{url('/')}}/wifi">Rede Estruturada de WI-FI</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
       </div>

       



       <!-- Project Section End --> 
            <!-- Services Section Start -->
            <div class="rs-services style2 gray-bg pt-110 pb-100 md-pt-80 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <h2 class="title pb-20">
                            <span class="watermark" id="servicos">Serviços</span>
                            Serviços Personalizados
                        </h2>
                        <p class="desc margin-0">Trabalho de Automação Residencial Personalizado<br>Para sua Casa de Alto Padrão </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-addon-number">
                                <div class="addon-wrap">
                                    <div class="number-part">
                                        <span class="number-prefix">01</span>
                                    </div>
                                    <div class="icon-img">
                                        <img src="{{url('/')}}/assets/images/services/style2/4.png" alt="Services">
                                    </div>
                                    <h3 class="title">Iluminação</h3>
                                    <p class="number-txt">Permite o controle das luzes da sua residência de forma inteligente</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-addon-number">
                                <div class="addon-wrap">
                                    <div class="number-part">
                                        <span class="number-prefix">02</span>
                                    </div>
                                    <h3 class="title">Climatização</h3>
                                    <p class="number-txt">  Controlar o ar-condicionado, o aquecedor e a ventilação de forma centralizada</p>
                                    <div class="icon-img">
                                        <img src="{{url('/')}}/assets/images/services/style2/4.png" alt="Services">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sm-mb-30">
                            <div class="rs-addon-number">
                                <div class="addon-wrap">
                                    <div class="number-part">
                                        <span class="number-prefix">03</span>
                                    </div>
                                    <div class="icon-img">
                                        <img src="{{url('/')}}/assets/images/services/style2/4.png" alt="Services">
                                    </div>
                                    <h3 class="title">Áudio e Vídeo</h3>
                                    <p class="number-txt">  Permite o controle de equipamentos de som e imagem de forma integrada</p>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="rs-addon-number">
                                <div class="addon-wrap">
                                    <div class="number-part">
                                        <span class="number-prefix">04</span>
                                    </div>
                                    <div class="icon-img">
                                        <img src="{{url('/')}}/assets/images/services/style2/4.png" alt="Services">
                                    </div>
                                    <h3 class="title">Segurança</h3>
                                    <p class="number-txt">  Permite o monitoramento e controle de sistemas de câmeras, alarmes, sensores e fechaduras</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->



          </div>
        <!-- Main content End -->
     

















        



        <div id="rs-contact" class="rs-contact main-home bg14 pt-50 pb-100 md-pb-70">
                <div class="container" id="contato">
                    <div class="sec-title text-center mb-60">
                        <div class="spacer-inner text-center mb-90 md-mb-50">
                            <div class="spacer inner-style"></div>
                        </div>
                        <h2 class="title pb-17">
                           Entre em Contato Conosco
                        </h2>
                        <p class="margin-0">Somos Especialistas em Projetos Especiais de Automação Residencial para Casas de Alto Padrão<br> Entre em Contato Conosco</p>
                    </div>
                    <div class="row y-middle">
                        
                        <div class="col-lg-12 pl-30 md-pl-15">
                            <div class="contact-section onepage">
                                <div class="contact-wrap">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="name" name="name" placeholder="Seu Nome" required="">
                                                </div> 
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                                </div>   
                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Telefone" required="">
                                                </div>   
                                            
                                          
                                                <div class="col-lg-12 mb-35">
                                                    <textarea class="from-control" id="message" name="msg" placeholder="Mensagem" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0">
                                                    <div class="btnblack"><span class="btn-text"> <span><input type="submit" value="Enviar Mensagem" class="wpcf7-form-control wpcf7-submit"></span></span></div>
                                                </div>
                                            </div> 
                                        </fieldset>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@include('includes.footer')
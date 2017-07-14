<?php

/* ::base.html.twig */
class __TwigTemplate_ae7fb9f3bd1a5c5298cd6236fdbdc4f85a42702b607c73d2871e1cff88cf6a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'title' => array($this, 'block_title'),
            'estilo' => array($this, 'block_estilo'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a648ecee8abd6699bc8baf29a85d7c02d06b1ceb44f04a0c9e26af450bbe2565 = $this->env->getExtension("native_profiler");
        $__internal_a648ecee8abd6699bc8baf29a85d7c02d06b1ceb44f04a0c9e26af450bbe2565->enter($__internal_a648ecee8abd6699bc8baf29a85d7c02d06b1ceb44f04a0c9e26af450bbe2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"es\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "
<style>

    .dark #header-wrap:not(.not-dark) #top-account a,
    .dark #header-wrap:not(.not-dark) #top-account a:hover {
        color: #EEE;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    }

    ";
        // line 58
        $this->displayBlock('estilo', $context, $blocks);
        // line 60
        echo "</style>

</head>

<body class=\"stretched no-transition\">    

    <!-- Document Wrapper
    ============================================= -->
    <div id=\"wrapper\" class=\"clearfix\">

        ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 157
        echo "                                 

    ";
        // line 159
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "
    <!-- Footer
    ============================================= -->
    ";
        // line 163
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "
</body>
</html>
";
        
        $__internal_a648ecee8abd6699bc8baf29a85d7c02d06b1ceb44f04a0c9e26af450bbe2565->leave($__internal_a648ecee8abd6699bc8baf29a85d7c02d06b1ceb44f04a0c9e26af450bbe2565_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_74187d30c84f0ec1bfcbdd655d7a632ebc34157cec9559a048dcd63bb7e43cc1 = $this->env->getExtension("native_profiler");
        $__internal_74187d30c84f0ec1bfcbdd655d7a632ebc34157cec9559a048dcd63bb7e43cc1->enter($__internal_74187d30c84f0ec1bfcbdd655d7a632ebc34157cec9559a048dcd63bb7e43cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
            <meta name=\"author\" content=\"SemiColonWeb\" />

            <!-- Stylesheets
            ============================================= -->
            <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />

            
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/style.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/dark.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/font-icons.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/radio-checkbox.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/animate.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/magnific-popup.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/calendar.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/jquery-ui.css"), "html", null, true);
        echo "\"/>
        ";
        // line 23
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <!--[if lt IE 9]>
                <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
        <![endif]-->

        <!-- External JavaScripts
        ============================================= -->

        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>            
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/events-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/jquery.calendario.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    ";
        // line 41
        $this->displayBlock('scripts', $context, $blocks);
        // line 42
        echo "    ";
        // line 43
        echo "

    <!-- Document Title
    ============================================= -->
    <title>Padel Schedule - ";
        // line 47
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        
        $__internal_74187d30c84f0ec1bfcbdd655d7a632ebc34157cec9559a048dcd63bb7e43cc1->leave($__internal_74187d30c84f0ec1bfcbdd655d7a632ebc34157cec9559a048dcd63bb7e43cc1_prof);

    }

    // line 23
    public function block_css($context, array $blocks = array())
    {
        $__internal_db6fd24b8efd287bbc99f2b8dd0e82c9a5f1a25580225efb4b1e841cb7ca0129 = $this->env->getExtension("native_profiler");
        $__internal_db6fd24b8efd287bbc99f2b8dd0e82c9a5f1a25580225efb4b1e841cb7ca0129->enter($__internal_db6fd24b8efd287bbc99f2b8dd0e82c9a5f1a25580225efb4b1e841cb7ca0129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_db6fd24b8efd287bbc99f2b8dd0e82c9a5f1a25580225efb4b1e841cb7ca0129->leave($__internal_db6fd24b8efd287bbc99f2b8dd0e82c9a5f1a25580225efb4b1e841cb7ca0129_prof);

    }

    // line 41
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_28ad6a94401156dc390295d3fed35b3d3abe55aa65a75f64d29fb5225f907ae3 = $this->env->getExtension("native_profiler");
        $__internal_28ad6a94401156dc390295d3fed35b3d3abe55aa65a75f64d29fb5225f907ae3->enter($__internal_28ad6a94401156dc390295d3fed35b3d3abe55aa65a75f64d29fb5225f907ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_28ad6a94401156dc390295d3fed35b3d3abe55aa65a75f64d29fb5225f907ae3->leave($__internal_28ad6a94401156dc390295d3fed35b3d3abe55aa65a75f64d29fb5225f907ae3_prof);

    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        $__internal_26c9ed7a465e2a4f6e55aaa3c901a92a00656d9a60152c340439c62560aea574 = $this->env->getExtension("native_profiler");
        $__internal_26c9ed7a465e2a4f6e55aaa3c901a92a00656d9a60152c340439c62560aea574->enter($__internal_26c9ed7a465e2a4f6e55aaa3c901a92a00656d9a60152c340439c62560aea574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_26c9ed7a465e2a4f6e55aaa3c901a92a00656d9a60152c340439c62560aea574->leave($__internal_26c9ed7a465e2a4f6e55aaa3c901a92a00656d9a60152c340439c62560aea574_prof);

    }

    // line 58
    public function block_estilo($context, array $blocks = array())
    {
        $__internal_c7e6c2df242bdc36581da789e0a7a26b3dac59c56d8d87c9ef43be3dd1f69940 = $this->env->getExtension("native_profiler");
        $__internal_c7e6c2df242bdc36581da789e0a7a26b3dac59c56d8d87c9ef43be3dd1f69940->enter($__internal_c7e6c2df242bdc36581da789e0a7a26b3dac59c56d8d87c9ef43be3dd1f69940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilo"));

        // line 59
        echo "    ";
        
        $__internal_c7e6c2df242bdc36581da789e0a7a26b3dac59c56d8d87c9ef43be3dd1f69940->leave($__internal_c7e6c2df242bdc36581da789e0a7a26b3dac59c56d8d87c9ef43be3dd1f69940_prof);

    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        $__internal_9c43a60ba880252464fb48ee3425d73190f669e85bd7531ec92dd8c76324eaea = $this->env->getExtension("native_profiler");
        $__internal_9c43a60ba880252464fb48ee3425d73190f669e85bd7531ec92dd8c76324eaea->enter($__internal_9c43a60ba880252464fb48ee3425d73190f669e85bd7531ec92dd8c76324eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "            <!-- Header
    ============================================= -->
            <header id=\"header\" class=\"full-header dark\">

                <div id=\"header-wrap\">

                    <div class=\"container clearfix\">

                        <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                        <!-- Logo
                                                          ============================================= -->
                        <div id=\"logo\">
                            <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"standard-logo\" data-dark-logo=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/LogoLetras.png"), "html", null, true);
        echo "\" data-sticky-logo=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/Logo.png"), "html", null, true);
        echo "\" data-mobile-logo=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/Logo.png"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/Logo.png"), "html", null, true);
        echo "\" alt=\"Canvas Logo\"></a>
                                ";
        // line 86
        echo "                        </div><!-- #logo end --> 


                        ";
        // line 89
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 90
            echo "                            <div id=\"top-account\" class=\"dropdown\">
                                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><i class=\"icon-user\"></i>
                                    ";
            // line 92
            $context["mensajesNoLeidos"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getMensajesNoLeidos", array(), "method");
            // line 93
            echo "                                    ";
            $context["notificacionesNoVistas"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getNotificacionesNoVistas", array(), "method");
            // line 94
            echo "                                    ";
            if (((isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos")) || (isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas")))) {
                // line 95
                echo "                                        <span class=\"label label-success\">!";
                echo twig_escape_filter($this->env, ((isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos")) + (isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas"))), "html", null, true);
                echo "</span>
                                    ";
            }
            // line 97
            echo "                                    <i class=\"icon-angle-down\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                                    <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                                            <img class=\"img-circle img-thumbnail img-responsive\" height=\"25px\" width=\"25px\" src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getWebFotoPerfilRuta", array(), "method")), "html", null, true);
            echo "\" alt=\"Foto de perfil\">
                                            <span>Perfil</span>
                                        </a>
                                    </li>                                            
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("buzon");
            echo "\"><i class=\"icon-mail\"></i><span>  Buzón</span>
                                                ";
            // line 106
            if ((isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos"))) {
                // line 107
                echo "                                                <span class=\"label label-success\">!";
                echo twig_escape_filter($this->env, (isset($context["mensajesNoLeidos"]) ? $context["mensajesNoLeidos"] : $this->getContext($context, "mensajesNoLeidos")), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 108
            echo "                                            
                                        </a></li>
                                    <li><a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("listadoNotificaciones");
            echo "\"><i class=\"icon-exclamation-sign\"></i><span>  Notificaciones</span>
                                            ";
            // line 111
            if ((isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas"))) {
                // line 112
                echo "                                                <span class=\"label label-success\">!";
                echo twig_escape_filter($this->env, (isset($context["notificacionesNoVistas"]) ? $context["notificacionesNoVistas"] : $this->getContext($context, "notificacionesNoVistas")), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 114
            echo "                                        </a></li>              
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"icon-signout\"></i><span>  Cerrar sesión</span> </a></li>
                                </ul>
                            </div>                          
                        ";
        } else {
            // line 120
            echo "                            <div id=\"top-account\" class=\"dropdown\">
                                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><i class=\"icon-line2-login\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                                    <li><a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"> Ingresar </a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">¿Aún no tiene cuenta?</a></li>
                                </ul>                                    
                            </div>
                        ";
        }
        // line 129
        echo "



                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id=\"primary-menu\">

                            <ul>
                                <li><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><div>Inicio</div></a> </li>
                                    ";
        // line 139
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 140
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("crearCompeticion");
            echo "\"><div>Crear competición</div></a> </li>
                                    ";
        }
        // line 142
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("listadoCompeticiones");
        echo "\"><div>Competiciones</div></a> </li>
                                <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("listadoUsuarios");
        echo "\"><div>Usuarios</div></a></li>                                                                          
                            </ul>

                        </nav>

                    </div>

                </div>

            </header><!-- #header end -->




        ";
        
        $__internal_9c43a60ba880252464fb48ee3425d73190f669e85bd7531ec92dd8c76324eaea->leave($__internal_9c43a60ba880252464fb48ee3425d73190f669e85bd7531ec92dd8c76324eaea_prof);

    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
        $__internal_b22f1057317e634e1b5c999a707753be294f08c043e059467bd5002a9fc3e913 = $this->env->getExtension("native_profiler");
        $__internal_b22f1057317e634e1b5c999a707753be294f08c043e059467bd5002a9fc3e913->enter($__internal_b22f1057317e634e1b5c999a707753be294f08c043e059467bd5002a9fc3e913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b22f1057317e634e1b5c999a707753be294f08c043e059467bd5002a9fc3e913->leave($__internal_b22f1057317e634e1b5c999a707753be294f08c043e059467bd5002a9fc3e913_prof);

    }

    // line 163
    public function block_footer($context, array $blocks = array())
    {
        $__internal_57b5a1b2d635163e57c1a29d99989b286265608cec03bf24042e54b91bd7aad9 = $this->env->getExtension("native_profiler");
        $__internal_57b5a1b2d635163e57c1a29d99989b286265608cec03bf24042e54b91bd7aad9->enter($__internal_57b5a1b2d635163e57c1a29d99989b286265608cec03bf24042e54b91bd7aad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 164
        echo "        <footer id=\"footer\" class=\"dark notopmargin\">


            <!-- Copyrights
            ============================================= -->
            <div id=\"copyrights\">

                <div class=\"container clearfix\">

                    <div class=\"col_half\">
                        Proyecto de fin de carrera. Escuela de Ingeniería informática.<br>
                        Universidad de Las Palmas de Gran Canaria.<br>                        
                        Alumno: Aday López Ramírez
                    </div>

                    <div class=\"col_half col_last tright\">
                         <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/LogoULPGC.png"), "html", null, true);
        echo "\" alt=\"Canvas Logo\" alt=\"Logo de la universidad\" height=\"70px\">
                        
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id=\"gotoTop\" class=\"icon-angle-up\"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/functions.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_57b5a1b2d635163e57c1a29d99989b286265608cec03bf24042e54b91bd7aad9->leave($__internal_57b5a1b2d635163e57c1a29d99989b286265608cec03bf24042e54b91bd7aad9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  487 => 198,  466 => 180,  448 => 164,  442 => 163,  431 => 159,  409 => 143,  404 => 142,  398 => 140,  396 => 139,  392 => 138,  381 => 129,  374 => 125,  369 => 123,  364 => 120,  357 => 116,  353 => 114,  347 => 112,  345 => 111,  341 => 110,  337 => 108,  331 => 107,  329 => 106,  325 => 105,  317 => 100,  313 => 99,  309 => 97,  303 => 95,  300 => 94,  297 => 93,  295 => 92,  291 => 90,  289 => 89,  284 => 86,  272 => 84,  257 => 71,  251 => 70,  244 => 59,  238 => 58,  226 => 47,  215 => 41,  204 => 23,  195 => 47,  189 => 43,  187 => 42,  185 => 41,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  145 => 24,  143 => 23,  139 => 22,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  93 => 5,  87 => 4,  77 => 200,  75 => 163,  70 => 160,  68 => 159,  64 => 157,  62 => 70,  50 => 60,  48 => 58,  37 => 49,  35 => 4,  30 => 1,);
    }
}
/* {# empty Twig template #}<!DOCTYPE html>*/
/* <html dir="ltr" lang="es">*/
/*     <head>*/
/*         {% block head %}*/
/*             <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*             <meta name="author" content="SemiColonWeb" />*/
/* */
/*             <!-- Stylesheets*/
/*             ============================================= -->*/
/*             <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />*/
/* */
/*             */
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/bootstrap.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/style.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/dark.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/font-icons.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/radio-checkbox.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/animate.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/magnific-popup.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/calendar.css')}}"/>*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/jquery-ui.css')}}"/>*/
/*         {% block css %}{% endblock css %}*/
/* */
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <!--[if lt IE 9]>*/
/*                 <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- External JavaScripts*/
/*         ============================================= -->*/
/* */
/*         <script src="{{asset('bundles/padelschedulemain/js/jquery.js')}}"></script>*/
/*         <script src="{{asset('bundles/padelschedulemain/js/jquery-ui.js')}}"></script>            */
/*         <script src="{{asset('bundles/padelschedulemain/js/events-data.js')}}"></script>*/
/*         <script src="{{asset('bundles/padelschedulemain/js/jquery.calendario.js')}}"></script>*/
/*         <script src="{{asset('bundles/padelschedulemain/js/plugins.js')}}"></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* */
/*     {% block scripts %}{% endblock scripts %}*/
/*     {#modificar por página para evitar sobrecarga en todas#}*/
/* */
/* */
/*     <!-- Document Title*/
/*     ============================================= -->*/
/*     <title>Padel Schedule - {% block title %} {% endblock %}</title>*/
/* {% endblock %}*/
/* */
/* <style>*/
/* */
/*     .dark #header-wrap:not(.not-dark) #top-account a,*/
/*     .dark #header-wrap:not(.not-dark) #top-account a:hover {*/
/*         color: #EEE;*/
/*         text-shadow: 1px 1px 1px rgba(0,0,0,0.1);*/
/*     }*/
/* */
/*     {% block estilo %}*/
/*     {% endblock estilo %}*/
/* </style>*/
/* */
/* </head>*/
/* */
/* <body class="stretched no-transition">    */
/* */
/*     <!-- Document Wrapper*/
/*     ============================================= -->*/
/*     <div id="wrapper" class="clearfix">*/
/* */
/*         {% block header %}*/
/*             <!-- Header*/
/*     ============================================= -->*/
/*             <header id="header" class="full-header dark">*/
/* */
/*                 <div id="header-wrap">*/
/* */
/*                     <div class="container clearfix">*/
/* */
/*                         <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>*/
/* */
/*                         <!-- Logo*/
/*                                                           ============================================= -->*/
/*                         <div id="logo">*/
/*                             <a href="{{ path('home') }}" class="standard-logo" data-dark-logo="{{asset('bundles/padelschedulemain/images/LogoLetras.png')}}" data-sticky-logo="{{asset('bundles/padelschedulemain/images/Logo.png')}}" data-mobile-logo="{{asset('bundles/padelschedulemain/images/Logo.png')}}"><img src="{{asset('bundles/padelschedulemain/images/Logo.png')}}" alt="Canvas Logo"></a>*/
/*                                 {#                                <a href="{{ path('home') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png" data-sticky-logo="demos/media-agency/images/logo-media@2x.png" data-mobile-logo="demos/media-agency/images/logo-media@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>#}*/
/*                         </div><!-- #logo end --> */
/* */
/* */
/*                         {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}*/
/*                             <div id="top-account" class="dropdown">*/
/*                                 <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i>*/
/*                                     {% set mensajesNoLeidos = app.user.getMensajesNoLeidos() %}*/
/*                                     {% set notificacionesNoVistas = app.user.getNotificacionesNoVistas() %}*/
/*                                     {% if mensajesNoLeidos or notificacionesNoVistas %}*/
/*                                         <span class="label label-success">!{{mensajesNoLeidos + notificacionesNoVistas}}</span>*/
/*                                     {% endif %}*/
/*                                     <i class="icon-angle-down"></i></a>*/
/*                                 <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">*/
/*                                     <li><a href="{{ path('fos_user_profile_show') }}">*/
/*                                             <img class="img-circle img-thumbnail img-responsive" height="25px" width="25px" src="{{ asset(app.user.getWebFotoPerfilRuta()) }}" alt="Foto de perfil">*/
/*                                             <span>Perfil</span>*/
/*                                         </a>*/
/*                                     </li>                                            */
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path('buzon') }}"><i class="icon-mail"></i><span>  Buzón</span>*/
/*                                                 {% if mensajesNoLeidos %}*/
/*                                                 <span class="label label-success">!{{mensajesNoLeidos}}</span>*/
/*                                             {% endif %}                                            */
/*                                         </a></li>*/
/*                                     <li><a href="{{ path('listadoNotificaciones') }}"><i class="icon-exclamation-sign"></i><span>  Notificaciones</span>*/
/*                                             {% if notificacionesNoVistas %}*/
/*                                                 <span class="label label-success">!{{notificacionesNoVistas}}</span>*/
/*                                             {% endif %}*/
/*                                         </a></li>              */
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path('fos_user_security_logout') }}"><i class="icon-signout"></i><span>  Cerrar sesión</span> </a></li>*/
/*                                 </ul>*/
/*                             </div>                          */
/*                         {% else %}*/
/*                             <div id="top-account" class="dropdown">*/
/*                                 <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-line2-login"></i></a>*/
/*                                 <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">*/
/*                                     <li><a href="{{ path('fos_user_security_login') }}"> Ingresar </a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path('fos_user_registration_register') }}">¿Aún no tiene cuenta?</a></li>*/
/*                                 </ul>                                    */
/*                             </div>*/
/*                         {% endif %}*/
/* */
/* */
/* */
/* */
/*                         <!-- Primary Navigation*/
/*                         ============================================= -->*/
/*                         <nav id="primary-menu">*/
/* */
/*                             <ul>*/
/*                                 <li><a href="{{ path('home') }}"><div>Inicio</div></a> </li>*/
/*                                     {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}*/
/*                                     <li><a href="{{ path('crearCompeticion') }}"><div>Crear competición</div></a> </li>*/
/*                                     {% endif %}*/
/*                                 <li><a href="{{ path('listadoCompeticiones') }}"><div>Competiciones</div></a> </li>*/
/*                                 <li><a href="{{ path('listadoUsuarios') }}"><div>Usuarios</div></a></li>                                                                          */
/*                             </ul>*/
/* */
/*                         </nav>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </header><!-- #header end -->*/
/* */
/* */
/* */
/* */
/*         {% endblock header %}                                 */
/* */
/*     {% block content %}{% endblock content %}*/
/* */
/*     <!-- Footer*/
/*     ============================================= -->*/
/*     {% block footer %}*/
/*         <footer id="footer" class="dark notopmargin">*/
/* */
/* */
/*             <!-- Copyrights*/
/*             ============================================= -->*/
/*             <div id="copyrights">*/
/* */
/*                 <div class="container clearfix">*/
/* */
/*                     <div class="col_half">*/
/*                         Proyecto de fin de carrera. Escuela de Ingeniería informática.<br>*/
/*                         Universidad de Las Palmas de Gran Canaria.<br>                        */
/*                         Alumno: Aday López Ramírez*/
/*                     </div>*/
/* */
/*                     <div class="col_half col_last tright">*/
/*                          <img src="{{asset('bundles/padelschedulemain/images/LogoULPGC.png')}}" alt="Canvas Logo" alt="Logo de la universidad" height="70px">*/
/*                         */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div><!-- #copyrights end -->*/
/* */
/*         </footer><!-- #footer end -->*/
/* */
/*     </div><!-- #wrapper end -->*/
/* */
/*     <!-- Go To Top*/
/*     ============================================= -->*/
/*     <div id="gotoTop" class="icon-angle-up"></div>*/
/* */
/*     <!-- Footer Scripts*/
/*     ============================================= -->*/
/*     <script src="{{asset('bundles/padelschedulemain/js/functions.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */

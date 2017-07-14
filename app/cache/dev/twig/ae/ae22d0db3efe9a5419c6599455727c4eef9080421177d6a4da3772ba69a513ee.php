<?php

/* PadelScheduleMainBundle:Main:listadoUsuarios.html.twig */
class __TwigTemplate_408c58fdf5c6bbb82225e9a6cdc0d5afa1d6aa468cc6abf00d0ccf131d08a264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:listadoUsuarios.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19935443fb58077e7f85047eef90227dc8a2226cb0db35d9db2530751f33f1f8 = $this->env->getExtension("native_profiler");
        $__internal_19935443fb58077e7f85047eef90227dc8a2226cb0db35d9db2530751f33f1f8->enter($__internal_19935443fb58077e7f85047eef90227dc8a2226cb0db35d9db2530751f33f1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:listadoUsuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19935443fb58077e7f85047eef90227dc8a2226cb0db35d9db2530751f33f1f8->leave($__internal_19935443fb58077e7f85047eef90227dc8a2226cb0db35d9db2530751f33f1f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_370dfac7fb6285ab7f190346053c6d8d095accc5a0a8c1da2534475b876e20bd = $this->env->getExtension("native_profiler");
        $__internal_370dfac7fb6285ab7f190346053c6d8d095accc5a0a8c1da2534475b876e20bd->enter($__internal_370dfac7fb6285ab7f190346053c6d8d095accc5a0a8c1da2534475b876e20bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usuarios";
        
        $__internal_370dfac7fb6285ab7f190346053c6d8d095accc5a0a8c1da2534475b876e20bd->leave($__internal_370dfac7fb6285ab7f190346053c6d8d095accc5a0a8c1da2534475b876e20bd_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_9b95aa16b3d2b0dbd099cbf26546bfd6517a6038a0b88c9429d066e0986c9535 = $this->env->getExtension("native_profiler");
        $__internal_9b95aa16b3d2b0dbd099cbf26546bfd6517a6038a0b88c9429d066e0986c9535->enter($__internal_9b95aa16b3d2b0dbd099cbf26546bfd6517a6038a0b88c9429d066e0986c9535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"  type=\"text/css\" />


    <style>
        table > tbody > .usuario > td{
            height: 40px;
            vertical-align: middle;
        }

        .usuario:hover {
            cursor: pointer;
            background-color: #CCFF99;             
        }
        .usuario.odd:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .col-eliminar {
            width: 10px;
        }

    </style>
";
        
        $__internal_9b95aa16b3d2b0dbd099cbf26546bfd6517a6038a0b88c9429d066e0986c9535->leave($__internal_9b95aa16b3d2b0dbd099cbf26546bfd6517a6038a0b88c9429d066e0986c9535_prof);

    }

    // line 31
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3316efffe50892c2feb4d3dc27afcfbbb5ed4ece7955d4d41564348a0d0ad801 = $this->env->getExtension("native_profiler");
        $__internal_3316efffe50892c2feb4d3dc27afcfbbb5ed4ece7955d4d41564348a0d0ad801->enter($__internal_3316efffe50892c2feb4d3dc27afcfbbb5ed4ece7955d4d41564348a0d0ad801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-datatable.js"), "html", null, true);
        echo "\"></script>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <!--[if lt IE 9]>
        <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <script>

        \$(document).ready(function () {
            \$('#datatable1').dataTable({
                \"language\": {
                    \"url\": \"//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json\",
                    \"info\": \"Mostrando mensajes del _START_ al _END_ de un total de _TOTAL_\"
                },
                \"order\": [[1, \"asc\"]],
                \"aoColumnDefs\": [
                    {'bSortable': false, 'aTargets': [0]}
                ]
            });

            \$('.usuario').click(function () {
                window.location.href = Routing.generate('verPerfil', {idUsuario: \$(this).data(\"idusuario\")});
            });

        });

    </script>
";
        
        $__internal_3316efffe50892c2feb4d3dc27afcfbbb5ed4ece7955d4d41564348a0d0ad801->leave($__internal_3316efffe50892c2feb4d3dc27afcfbbb5ed4ece7955d4d41564348a0d0ad801_prof);

    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        $__internal_834e1d7e8db12841329ff3c919c27f9e14a56cbec55381891110f184659ea8ae = $this->env->getExtension("native_profiler");
        $__internal_834e1d7e8db12841329ff3c919c27f9e14a56cbec55381891110f184659ea8ae->enter($__internal_834e1d7e8db12841329ff3c919c27f9e14a56cbec55381891110f184659ea8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "
    <section id=\"page-title\">
        <div class=\"container clearfix\">
            <h1>Usuarios</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Principal</a></li>                            
                <li class=\"active\">Usuarios</li>
            </ol>
        </div>
    </section>

    ";
        // line 75
        echo "
    <section id=\"content\">

        <div class=\"content-wrap notoppadding\">

            <div class=\"container clearfix\">
                <div class=\"table-responsive\">

                    <table id=\"datatable1\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Usuario</th>
                                <th>Nombre</th>\t\t\t\t\t\t\t\t\t
                                <th>Apellidos</th>\t
                                    ";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
                                    <th></th>\t
                                    ";
        }
        // line 93
        echo "                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Usuario</th>
                                <th>Nombre</th>\t\t\t\t\t\t\t\t\t
                                <th>Apellidos</th>
                                    ";
        // line 101
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
                                    <th></th>
                                    ";
        }
        // line 104
        echo "                            </tr>
                        </tfoot>
                        <tbody>                            
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 108
            echo "                                ";
            if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
                // line 109
                echo "                                    ";
                $context["userId"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array(), "method");
                // line 110
                echo "                                ";
            } else {
                // line 111
                echo "                                    ";
                $context["userId"] =  -1;
                // line 112
                echo "                                ";
            }
            // line 113
            echo "                                ";
            if (((isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")) != $this->getAttribute($context["usuario"], "id", array()))) {
                // line 114
                echo "                                    <tr class=\"usuario\" data-idusuario=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">                                    
                                        <td class=\"col-imagen text-center\">
                                            <img class=\"img-circle img-thumbnail img-responsive\" height=\"40px\" width=\"40px\" src=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["usuario"], "getWebFotoPerfilRuta", array(), "method")), "html", null, true);
                echo "\" alt=\"Foto de perfil\">
                                        </td>
                                        <td> ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
                echo " </td>
                                        ";
                // line 121
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    echo " 
                                            <td class=\"text-center col-eliminar\"> <a href=\"";
                    // line 122
                    echo "#\"> <span class=\"icon-line-square-cross\"></span></a> </td>
                                                ";
                }
                // line 124
                echo "                                    </tr>   
                                ";
            }
            // line 126
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

";
        
        $__internal_834e1d7e8db12841329ff3c919c27f9e14a56cbec55381891110f184659ea8ae->leave($__internal_834e1d7e8db12841329ff3c919c27f9e14a56cbec55381891110f184659ea8ae_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:listadoUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 128,  254 => 126,  250 => 124,  246 => 122,  242 => 121,  238 => 120,  234 => 119,  230 => 118,  225 => 116,  219 => 114,  216 => 113,  213 => 112,  210 => 111,  207 => 110,  204 => 109,  201 => 108,  197 => 107,  192 => 104,  186 => 101,  176 => 93,  170 => 90,  153 => 75,  140 => 63,  134 => 62,  98 => 32,  90 => 31,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Usuarios{% endblock %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"  type="text/css" />*/
/* */
/* */
/*     <style>*/
/*         table > tbody > .usuario > td{*/
/*             height: 40px;*/
/*             vertical-align: middle;*/
/*         }*/
/* */
/*         .usuario:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;             */
/*         }*/
/*         .usuario.odd:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;*/
/*         }*/
/*         .col-eliminar {*/
/*             width: 10px;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-datatable.js')}}"></script>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*     <!--[if lt IE 9]>*/
/*         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <script>*/
/* */
/*         $(document).ready(function () {*/
/*             $('#datatable1').dataTable({*/
/*                 "language": {*/
/*                     "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",*/
/*                     "info": "Mostrando mensajes del _START_ al _END_ de un total de _TOTAL_"*/
/*                 },*/
/*                 "order": [[1, "asc"]],*/
/*                 "aoColumnDefs": [*/
/*                     {'bSortable': false, 'aTargets': [0]}*/
/*                 ]*/
/*             });*/
/* */
/*             $('.usuario').click(function () {*/
/*                 window.location.href = Routing.generate('verPerfil', {idUsuario: $(this).data("idusuario")});*/
/*             });*/
/* */
/*         });*/
/* */
/*     </script>*/
/* {% endblock scripts %}*/
/* */
/* {% block content %}*/
/* */
/*     <section id="page-title">*/
/*         <div class="container clearfix">*/
/*             <h1>Usuarios</h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="#">Principal</a></li>                            */
/*                 <li class="active">Usuarios</li>*/
/*             </ol>*/
/*         </div>*/
/*     </section>*/
/* */
/*     {#    ////////#}*/
/* */
/*     <section id="content">*/
/* */
/*         <div class="content-wrap notoppadding">*/
/* */
/*             <div class="container clearfix">*/
/*                 <div class="table-responsive">*/
/* */
/*                     <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th></th>*/
/*                                 <th>Usuario</th>*/
/*                                 <th>Nombre</th>									*/
/*                                 <th>Apellidos</th>	*/
/*                                     {% if is_granted('ROLE_ADMIN') %} */
/*                                     <th></th>	*/
/*                                     {% endif %}*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tfoot>*/
/*                             <tr>*/
/*                                 <th></th>*/
/*                                 <th>Usuario</th>*/
/*                                 <th>Nombre</th>									*/
/*                                 <th>Apellidos</th>*/
/*                                     {% if is_granted('ROLE_ADMIN') %} */
/*                                     <th></th>*/
/*                                     {% endif %}*/
/*                             </tr>*/
/*                         </tfoot>*/
/*                         <tbody>                            */
/*                             {% for usuario in usuarios %}*/
/*                                 {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}*/
/*                                     {% set userId = app.user.id() %}*/
/*                                 {% else %}*/
/*                                     {% set userId = -1 %}*/
/*                                 {% endif %}*/
/*                                 {% if userId != usuario.id %}*/
/*                                     <tr class="usuario" data-idusuario="{{usuario.id}}">                                    */
/*                                         <td class="col-imagen text-center">*/
/*                                             <img class="img-circle img-thumbnail img-responsive" height="40px" width="40px" src="{{ asset(usuario.getWebFotoPerfilRuta()) }}" alt="Foto de perfil">*/
/*                                         </td>*/
/*                                         <td> {{usuario.username}} </td>*/
/*                                         <td> {{usuario.nombre}} </td>*/
/*                                         <td> {{usuario.apellidos}} </td>*/
/*                                         {% if is_granted('ROLE_ADMIN') %} */
/*                                             <td class="text-center col-eliminar"> <a href="{#{{ path('eliminarUsuario', { 'idUsuario': usuario.id }) }}#}#"> <span class="icon-line-square-cross"></span></a> </td>*/
/*                                                 {% endif %}*/
/*                                     </tr>   */
/*                                 {% endif %}*/
/* */
/*                             {% endfor %}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section><!-- #content end -->*/
/* */
/* {% endblock content %}*/

<?php

/* PadelScheduleMainBundle:Competitions:listadoCompeticiones.html.twig */
class __TwigTemplate_e3733ca3ba912413e595f0fae994d0235eddcb9bd1a3c1c87b6855e7424437e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:listadoCompeticiones.html.twig", 1);
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
        $__internal_6c7e5a2fdf77fc67a20a164bed68364ecc0a546a003114b3316fb726b79cf076 = $this->env->getExtension("native_profiler");
        $__internal_6c7e5a2fdf77fc67a20a164bed68364ecc0a546a003114b3316fb726b79cf076->enter($__internal_6c7e5a2fdf77fc67a20a164bed68364ecc0a546a003114b3316fb726b79cf076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:listadoCompeticiones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7e5a2fdf77fc67a20a164bed68364ecc0a546a003114b3316fb726b79cf076->leave($__internal_6c7e5a2fdf77fc67a20a164bed68364ecc0a546a003114b3316fb726b79cf076_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1ed7f64b4d63dc120511589916f557a8118bcba187d4707630601bc22ab9bc = $this->env->getExtension("native_profiler");
        $__internal_8b1ed7f64b4d63dc120511589916f557a8118bcba187d4707630601bc22ab9bc->enter($__internal_8b1ed7f64b4d63dc120511589916f557a8118bcba187d4707630601bc22ab9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competiciones";
        
        $__internal_8b1ed7f64b4d63dc120511589916f557a8118bcba187d4707630601bc22ab9bc->leave($__internal_8b1ed7f64b4d63dc120511589916f557a8118bcba187d4707630601bc22ab9bc_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_6e3a3715bddbbbe829aaaa161621c46cadd471b6716ce9c07d8650904a567e20 = $this->env->getExtension("native_profiler");
        $__internal_6e3a3715bddbbbe829aaaa161621c46cadd471b6716ce9c07d8650904a567e20->enter($__internal_6e3a3715bddbbbe829aaaa161621c46cadd471b6716ce9c07d8650904a567e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"  type=\"text/css\" />


    <style>
        table > tbody > .competicion > td{
            height: 40px;
            vertical-align: middle;
        }

        .competicion:hover {
            cursor: pointer;
            background-color: #CCFF99;             
        }
        .competicion.odd:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .col-eliminar {
            width: 10px;
        }

    </style>
";
        
        $__internal_6e3a3715bddbbbe829aaaa161621c46cadd471b6716ce9c07d8650904a567e20->leave($__internal_6e3a3715bddbbbe829aaaa161621c46cadd471b6716ce9c07d8650904a567e20_prof);

    }

    // line 31
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d7cd73b0b44b99c5d99c3eb13b013581283326d8d6cf70d1fdbcb863b50f387e = $this->env->getExtension("native_profiler");
        $__internal_d7cd73b0b44b99c5d99c3eb13b013581283326d8d6cf70d1fdbcb863b50f387e->enter($__internal_d7cd73b0b44b99c5d99c3eb13b013581283326d8d6cf70d1fdbcb863b50f387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
            
            \$('.competicion').click(function () {                
                window.location.href = Routing.generate('competicion', {idCompeticion: \$(this).data(\"idcompeticion\")});
            });

        });

    </script>
";
        
        $__internal_d7cd73b0b44b99c5d99c3eb13b013581283326d8d6cf70d1fdbcb863b50f387e->leave($__internal_d7cd73b0b44b99c5d99c3eb13b013581283326d8d6cf70d1fdbcb863b50f387e_prof);

    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e09f105f20826ead6f351bfb223c76e1b093caea1802130c4a775038ebf5f0c = $this->env->getExtension("native_profiler");
        $__internal_0e09f105f20826ead6f351bfb223c76e1b093caea1802130c4a775038ebf5f0c->enter($__internal_0e09f105f20826ead6f351bfb223c76e1b093caea1802130c4a775038ebf5f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "
    <section id=\"page-title\">
        <div class=\"container clearfix\">
            <h1>Competiciones</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Principal</a></li>                            
                <li class=\"active\">Competiciones</li>
            </ol>
        </div>
    </section>

    <section id=\"content\">

        <div class=\"content-wrap notoppadding\">

            <div class=\"container clearfix\">
                <div class=\"table-responsive\">

                    <table id=\"datatable1\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Competición</th>
                                <th>Creador</th>\t\t\t\t\t\t\t\t\t
                                <th>Estado</th>\t
                                <th>Fecha de inicio</th>
                                <th>Localización</th>
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
                                <th>Competición</th>
                                <th>Creador</th>\t\t\t\t\t\t\t\t\t
                                <th>Estado</th>
                                <th>Fecha de inicio</th>
                                <th>Localización</th>
                                    ";
        // line 103
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
                                    <th></th>
                                    ";
        }
        // line 106
        echo "                            </tr>
                        </tfoot>
                        <tbody>                            
                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 110
            echo "                                ";
            if ((($this->getAttribute($context["competicion"], "estado", array()) == "Abierta") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 111
                echo "                                    <tr class=\"competicion\" data-idcompeticion=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "id", array()), "html", null, true);
                echo "\">                                    
                                        <td class=\"col-imagen text-center\">
                                            <img class=\"img-circle img-thumbnail img-responsive\" height=\"40px\" width=\"40px\" src=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
                echo "\" alt=\"Foto de competicion\">
                                        </td>
                                        <td> ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["competicion"], "creador", array()), "username", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d-m-Y"), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
                echo " </td>
                                        ";
                // line 120
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    echo " 
                                            <td class=\"text-center col-eliminar\"> <a href=\"";
                    // line 121
                    echo "#\"> <span class=\"icon-line-square-cross\"></span></a> </td>
                                        ";
                }
                // line 123
                echo "                                    </tr>   
                                ";
            }
            // line 125
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

";
        
        $__internal_0e09f105f20826ead6f351bfb223c76e1b093caea1802130c4a775038ebf5f0c->leave($__internal_0e09f105f20826ead6f351bfb223c76e1b093caea1802130c4a775038ebf5f0c_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:listadoCompeticiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 126,  251 => 125,  247 => 123,  243 => 121,  239 => 120,  235 => 119,  231 => 118,  227 => 117,  223 => 116,  219 => 115,  214 => 113,  208 => 111,  205 => 110,  201 => 109,  196 => 106,  190 => 103,  178 => 93,  172 => 90,  147 => 68,  140 => 63,  134 => 62,  98 => 32,  90 => 31,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Competiciones{% endblock %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"  type="text/css" />*/
/* */
/* */
/*     <style>*/
/*         table > tbody > .competicion > td{*/
/*             height: 40px;*/
/*             vertical-align: middle;*/
/*         }*/
/* */
/*         .competicion:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;             */
/*         }*/
/*         .competicion.odd:hover {*/
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
/*             */
/*             $('.competicion').click(function () {                */
/*                 window.location.href = Routing.generate('competicion', {idCompeticion: $(this).data("idcompeticion")});*/
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
/*             <h1>Competiciones</h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('home') }}">Principal</a></li>                            */
/*                 <li class="active">Competiciones</li>*/
/*             </ol>*/
/*         </div>*/
/*     </section>*/
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
/*                                 <th>Competición</th>*/
/*                                 <th>Creador</th>									*/
/*                                 <th>Estado</th>	*/
/*                                 <th>Fecha de inicio</th>*/
/*                                 <th>Localización</th>*/
/*                                     {% if is_granted('ROLE_ADMIN') %} */
/*                                     <th></th>	*/
/*                                     {% endif %}*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tfoot>*/
/*                             <tr>*/
/*                                 <th></th>*/
/*                                 <th>Competición</th>*/
/*                                 <th>Creador</th>									*/
/*                                 <th>Estado</th>*/
/*                                 <th>Fecha de inicio</th>*/
/*                                 <th>Localización</th>*/
/*                                     {% if is_granted('ROLE_ADMIN') %} */
/*                                     <th></th>*/
/*                                     {% endif %}*/
/*                             </tr>*/
/*                         </tfoot>*/
/*                         <tbody>                            */
/*                             {% for competicion in competiciones %}*/
/*                                 {% if competicion.estado == "Abierta" or is_granted('ROLE_ADMIN') %}*/
/*                                     <tr class="competicion" data-idcompeticion="{{competicion.id}}">                                    */
/*                                         <td class="col-imagen text-center">*/
/*                                             <img class="img-circle img-thumbnail img-responsive" height="40px" width="40px" src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Foto de competicion">*/
/*                                         </td>*/
/*                                         <td> {{competicion.nombre}} </td>*/
/*                                         <td> {{competicion.creador.username}} </td>*/
/*                                         <td> {{competicion.estado}} </td>*/
/*                                         <td> {{competicion.fechaInicio|date('d-m-Y')}} </td>*/
/*                                         <td> {{competicion.localizacion}} </td>*/
/*                                         {% if is_granted('ROLE_ADMIN') %} */
/*                                             <td class="text-center col-eliminar"> <a href="{#{{ path('eliminarUsuario', { 'idUsuario': usuario.id }) }}#}#"> <span class="icon-line-square-cross"></span></a> </td>*/
/*                                         {% endif %}*/
/*                                     </tr>   */
/*                                 {% endif %}*/
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

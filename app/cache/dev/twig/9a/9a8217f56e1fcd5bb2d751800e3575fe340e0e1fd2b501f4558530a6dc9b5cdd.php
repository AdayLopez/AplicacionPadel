<?php

/* PadelScheduleMainBundle:Main:buzonEntrada.html.twig */
class __TwigTemplate_2e9da2a635390daa485a1b95806b917370110208ea6f287596e5f59cc5cc3a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:buzonEntrada.html.twig", 1);
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
        $__internal_a8b230df6a75a6f38f08dfdc5b61e66a3bdc9d1452d7936cd2d024017de53dcc = $this->env->getExtension("native_profiler");
        $__internal_a8b230df6a75a6f38f08dfdc5b61e66a3bdc9d1452d7936cd2d024017de53dcc->enter($__internal_a8b230df6a75a6f38f08dfdc5b61e66a3bdc9d1452d7936cd2d024017de53dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:buzonEntrada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b230df6a75a6f38f08dfdc5b61e66a3bdc9d1452d7936cd2d024017de53dcc->leave($__internal_a8b230df6a75a6f38f08dfdc5b61e66a3bdc9d1452d7936cd2d024017de53dcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cca93c1c31d97dc89b800db8344a24934ee7c7aec0483e191263c1db78cb98d2 = $this->env->getExtension("native_profiler");
        $__internal_cca93c1c31d97dc89b800db8344a24934ee7c7aec0483e191263c1db78cb98d2->enter($__internal_cca93c1c31d97dc89b800db8344a24934ee7c7aec0483e191263c1db78cb98d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_cca93c1c31d97dc89b800db8344a24934ee7c7aec0483e191263c1db78cb98d2->leave($__internal_cca93c1c31d97dc89b800db8344a24934ee7c7aec0483e191263c1db78cb98d2_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_387b1c7d25d5b9de3e16ae4e942b8841e992500bbd5de6c8f37eeca36c7dde39 = $this->env->getExtension("native_profiler");
        $__internal_387b1c7d25d5b9de3e16ae4e942b8841e992500bbd5de6c8f37eeca36c7dde39->enter($__internal_387b1c7d25d5b9de3e16ae4e942b8841e992500bbd5de6c8f37eeca36c7dde39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/responsive.css"), "html", null, true);
        echo "\"  type=\"text/css\" />

    <style>
        .mensaje:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .mensaje.odd:hover {
            cursor: pointer;
            background-color: #CCFF99;
        }
        .col-leido {
            width: 10px;
        }
        .col-eliminar {
            width: 10px;
        }

    </style>
";
        
        $__internal_387b1c7d25d5b9de3e16ae4e942b8841e992500bbd5de6c8f37eeca36c7dde39->leave($__internal_387b1c7d25d5b9de3e16ae4e942b8841e992500bbd5de6c8f37eeca36c7dde39_prof);

    }

    // line 28
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e6bc4323e893d0b83f8ae40ef73968d506180aa48f70206c56dd679b1003ef3e = $this->env->getExtension("native_profiler");
        $__internal_e6bc4323e893d0b83f8ae40ef73968d506180aa48f70206c56dd679b1003ef3e->enter($__internal_e6bc4323e893d0b83f8ae40ef73968d506180aa48f70206c56dd679b1003ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 29
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
                \"order\": [[0, \"desc\"]],
                \"aoColumnDefs\": [
                    {'bSortable': false, 'aTargets': [3, 4]}
                ]
            });

            \$('.mensaje').click(function () {
                window.location.href = Routing.generate('verMensaje', {idMensaje: \$(this).data(\"idmensaje\")});
            });

        });

    </script>
";
        
        $__internal_e6bc4323e893d0b83f8ae40ef73968d506180aa48f70206c56dd679b1003ef3e->leave($__internal_e6bc4323e893d0b83f8ae40ef73968d506180aa48f70206c56dd679b1003ef3e_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd09d0959011e24c9f98016acb1814dad03587e5700dfc3193895a41e7ebc6dc = $this->env->getExtension("native_profiler");
        $__internal_bd09d0959011e24c9f98016acb1814dad03587e5700dfc3193895a41e7ebc6dc->enter($__internal_bd09d0959011e24c9f98016acb1814dad03587e5700dfc3193895a41e7ebc6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "
    <section id=\"page-title\">
        <div class=\"container clearfix\">
            <h1>Buzón de entrada</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Principal</a></li>                            
                <li class=\"active\">Buzón de entrada</li>
            </ol>
        </div>
    </section>

    ";
        // line 72
        echo "
    <section id=\"content\">

        <div class=\"content-wrap notoppadding\">

            <div class=\"container clearfix\">
                <div class=\"text-center\">
                    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("nuevoMensaje");
        echo "\" class=\"button button-3d button-small button-rounded button-lime button-light\"> <i class=\"icon-line-outbox\"></i>Nuevo mensaje</a>
                </div>
                <div class=\"table-responsive\">

                    <table id=\"datatable1\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Remitente</th>
                                <th>Cabecera</th>\t\t\t\t\t\t\t\t\t
                                <th class=\"text-center\">Leído</th>\t\t\t\t\t\t\t\t
                                <th></th>\t\t\t\t\t\t\t\t\t
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Fecha</th>
                                <th>Remitente</th>
                                <th>Cabecera</th>\t\t\t\t\t\t\t\t\t
                                <th class=\"text-center\">Leído</th>\t\t\t\t\t\t\t\t\t
                                <th></th>\t\t\t\t\t\t\t\t\t
                            </tr>
                        </tfoot>
                        <tbody>
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajes"]) ? $context["mensajes"] : $this->getContext($context, "mensajes")));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 104
            echo "
                                <tr class=\"mensaje\" data-idmensaje=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
            echo "\">
                                    <td> ";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "d/m/Y - H:i:s"), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mensaje"], "creadorMensaje", array()), "username", array()), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "cabecera", array()), "html", null, true);
            echo " </td>
                                    <td class=\"text-center col-leido\"> 
                                        ";
            // line 110
            if (($this->getAttribute($context["mensaje"], "leido", array()) == 0)) {
                // line 111
                echo "                                            <span class=\"icon-envelope\"></span>
                                        ";
            } else {
                // line 113
                echo "                                            <span class=\"icon-email\"></span>
                                        ";
            }
            // line 115
            echo "                                    </td>
                                    <td class=\"text-center col-eliminar\"> <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarMensaje", array("idMensaje" => $this->getAttribute($context["mensaje"], "id", array()))), "html", null, true);
            echo "\"> <span class=\"icon-line-square-cross\"></span></a> </td>
                                </tr>   

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    ";
        // line 133
        echo "

    ";
        // line 142
        echo "




";
        
        $__internal_bd09d0959011e24c9f98016acb1814dad03587e5700dfc3193895a41e7ebc6dc->leave($__internal_bd09d0959011e24c9f98016acb1814dad03587e5700dfc3193895a41e7ebc6dc_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:buzonEntrada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 142,  250 => 133,  236 => 120,  226 => 116,  223 => 115,  219 => 113,  215 => 111,  213 => 110,  208 => 108,  204 => 107,  200 => 106,  196 => 105,  193 => 104,  189 => 103,  162 => 79,  153 => 72,  144 => 65,  137 => 60,  131 => 59,  95 => 29,  87 => 28,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/responsive.css')}}"  type="text/css" />*/
/* */
/*     <style>*/
/*         .mensaje:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;*/
/*         }*/
/*         .mensaje.odd:hover {*/
/*             cursor: pointer;*/
/*             background-color: #CCFF99;*/
/*         }*/
/*         .col-leido {*/
/*             width: 10px;*/
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
/*                 "order": [[0, "desc"]],*/
/*                 "aoColumnDefs": [*/
/*                     {'bSortable': false, 'aTargets': [3, 4]}*/
/*                 ]*/
/*             });*/
/* */
/*             $('.mensaje').click(function () {*/
/*                 window.location.href = Routing.generate('verMensaje', {idMensaje: $(this).data("idmensaje")});*/
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
/*             <h1>Buzón de entrada</h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('home') }}">Principal</a></li>                            */
/*                 <li class="active">Buzón de entrada</li>*/
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
/*                 <div class="text-center">*/
/*                     <a href="{{ path('nuevoMensaje')}}" class="button button-3d button-small button-rounded button-lime button-light"> <i class="icon-line-outbox"></i>Nuevo mensaje</a>*/
/*                 </div>*/
/*                 <div class="table-responsive">*/
/* */
/*                     <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Remitente</th>*/
/*                                 <th>Cabecera</th>									*/
/*                                 <th class="text-center">Leído</th>								*/
/*                                 <th></th>									*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tfoot>*/
/*                             <tr>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Remitente</th>*/
/*                                 <th>Cabecera</th>									*/
/*                                 <th class="text-center">Leído</th>									*/
/*                                 <th></th>									*/
/*                             </tr>*/
/*                         </tfoot>*/
/*                         <tbody>*/
/*                             {% for mensaje in mensajes %}*/
/* */
/*                                 <tr class="mensaje" data-idmensaje="{{mensaje.id}}">*/
/*                                     <td> {{mensaje.fecha|date('d/m/Y - H:i:s')}} </td>*/
/*                                     <td> {{mensaje.creadorMensaje.username}} </td>*/
/*                                     <td> {{mensaje.cabecera}} </td>*/
/*                                     <td class="text-center col-leido"> */
/*                                         {% if mensaje.leido == 0 %}*/
/*                                             <span class="icon-envelope"></span>*/
/*                                         {% else %}*/
/*                                             <span class="icon-email"></span>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td class="text-center col-eliminar"> <a href="{{ path('eliminarMensaje', { 'idMensaje': mensaje.id }) }}"> <span class="icon-line-square-cross"></span></a> </td>*/
/*                                 </tr>   */
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
/*     {#    /////////#}*/
/* */
/* */
/*     {# {% for mensaje in mensajes %}*/
/*      */
/*          <div>*/
/*              {{mensaje.cuerpo}}*/
/*          </div>*/
/*          */
/*      {% endfor %}#}*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock content %}*/

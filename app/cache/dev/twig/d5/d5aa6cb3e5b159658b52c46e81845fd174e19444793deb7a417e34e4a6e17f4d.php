<?php

/* PadelScheduleMainBundle:Competitions:tablaJornada.html.twig */
class __TwigTemplate_ded01b9555bc80f02456eb0a213a42dd9427f126d0c324e88ee1b7a9e4419c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae3a5bd61142d08aca490dac92558c87a803fb0cc48747df33d2374b14dd3685 = $this->env->getExtension("native_profiler");
        $__internal_ae3a5bd61142d08aca490dac92558c87a803fb0cc48747df33d2374b14dd3685->enter($__internal_ae3a5bd61142d08aca490dac92558c87a803fb0cc48747df33d2374b14dd3685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:tablaJornada.html.twig"));

        // line 2
        $this->displayBlock('css', $context, $blocks);
        // line 5
        echo "
   <div class=\"table-responsive\">
        <table id=\"tablaJornada\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Pareja 1</th>
                    <th>Pareja 2</th>\t\t\t\t\t\t\t\t
                    <th>Puntuación</th>\t\t\t\t\t\t\t\t
                    <th>Fecha</th>\t\t\t\t\t\t\t\t
                    <th>Hora</th>\t
                    <th>Lugar</th>
                    ";
        // line 17
        echo "                </tr>
            </thead>
          ";
        // line 25
        echo "            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidos"]) ? $context["partidos"] : $this->getContext($context, "partidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
            echo "</td> 
                    <td class=\"center\">
                        ";
            // line 31
            if ( !twig_test_empty($this->getAttribute($context["partido"], "resultadoFinal", array()))) {
                // line 32
                echo "                            ";
                echo twig_escape_filter($this->env, sprintf("%u - %u, %u - %u", $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 0, array(), "array"), $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 1, array(), "array"), $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 2, array(), "array"), $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 3, array(), "array")), "html", null, true);
                echo "
                            ";
                // line 33
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 4, array(), "array"))) ? ("") : (sprintf(", %u - %u", $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 4, array(), "array"), $this->getAttribute($this->getAttribute($context["partido"], "resultadoFinal", array()), 5, array(), "array")))), "html", null, true);
                echo "
                        ";
            } elseif (( !twig_test_empty($this->getAttribute(            // line 34
$context["partido"], "resultadoPropuesto1", array())) ||  !twig_test_empty($this->getAttribute($context["partido"], "resultadoPropuesto2", array())))) {
                // line 35
                echo "                                ";
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute($context["partido"], "competicion", array()), "creador", array()))) {
                    // line 36
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elegirResultado", array("idPartido" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-xs btn-warning\"> <i class=\"icon-warning-sign\"></i> Confirmar resultado </a>
                                ";
                } else {
                    // line 38
                    echo "                                    <span class=\"label label-warning icon-warning-sign\" data-toggle=\"tooltip\" title=\"Este resultado está a la espera de ser confirmado.\">
                                ";
                }
                // line 40
                echo "                        ";
            }
            // line 41
            echo "                    </td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["partido"], "fechaHora", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "j/n/Y"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($context["partido"], "fechaHora", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "G:i"))), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 45
            if ( !twig_test_empty($this->getAttribute($context["partido"], "recursoAsignado", array()))) {
                echo "                            
                            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "recursos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
                    echo "                                
                                ";
                    // line 47
                    if (($this->getAttribute($context["partido"], "recursoAsignado", array()) == $this->getAttribute($context["recurso"], "id", array()))) {
                        echo "                                    
                                    ";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "club", array()), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "cancha", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 50
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                        ";
            }
            // line 52
            echo "                    </td>
                    ";
            // line 53
            $context["resultadoFijado"] = ((twig_test_empty($this->getAttribute($context["partido"], "resultadoFinal", array())) && twig_test_empty($this->getAttribute($context["partido"], "resultadoPropuesto1", array()))) && twig_test_empty($this->getAttribute($context["partido"], "resultadoPropuesto2", array())));
            // line 54
            echo "                    ";
            if ((((isset($context["resultadoFijado"]) ? $context["resultadoFijado"] : $this->getContext($context, "resultadoFijado")) &&  !twig_test_empty($this->getAttribute($context["partido"], "fechaHora", array()))) && ((($this->getAttribute(            // line 55
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute($context["partido"], "competicion", array()), "creador", array())) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "jugador", array()))) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "jugador", array()))))) {
                // line 56
                echo "                        <td class=\"text-center col-asignarResultado\"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fijarResultado", array("idPartido" => $this->getAttribute($context["partido"], "id", array()))), "html", null, true);
                echo "\"> <span class=\"icon-edit\"> </a> </td>
                    ";
            }
            // line 58
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        </table>
   </div>

<script>
\$(document).ready(function(){
    \$('[data-toggle=\"tooltip\"]').tooltip();
});
</script>";
        
        $__internal_ae3a5bd61142d08aca490dac92558c87a803fb0cc48747df33d2374b14dd3685->leave($__internal_ae3a5bd61142d08aca490dac92558c87a803fb0cc48747df33d2374b14dd3685_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_a0c8e491f4d6ad5c7fca6df59af76320827555fd1881f20159dfbde4f869935c = $this->env->getExtension("native_profiler");
        $__internal_a0c8e491f4d6ad5c7fca6df59af76320827555fd1881f20159dfbde4f869935c->enter($__internal_a0c8e491f4d6ad5c7fca6df59af76320827555fd1881f20159dfbde4f869935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/tables.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_a0c8e491f4d6ad5c7fca6df59af76320827555fd1881f20159dfbde4f869935c->leave($__internal_a0c8e491f4d6ad5c7fca6df59af76320827555fd1881f20159dfbde4f869935c_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:tablaJornada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 3,  173 => 2,  158 => 60,  151 => 58,  145 => 56,  143 => 55,  141 => 54,  139 => 53,  136 => 52,  133 => 51,  127 => 50,  120 => 48,  116 => 47,  110 => 46,  106 => 45,  101 => 43,  97 => 42,  94 => 41,  91 => 40,  87 => 38,  81 => 36,  78 => 35,  76 => 34,  72 => 33,  67 => 32,  65 => 31,  58 => 29,  52 => 28,  49 => 27,  45 => 26,  42 => 25,  38 => 17,  25 => 5,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% block css %}*/
/*             <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/tables.css')}}"/>*/
/* {% endblock css %}*/
/* */
/*    <div class="table-responsive">*/
/*         <table id="tablaJornada" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Pareja 1</th>*/
/*                     <th>Pareja 2</th>								*/
/*                     <th>Puntuación</th>								*/
/*                     <th>Fecha</th>								*/
/*                     <th>Hora</th>	*/
/*                     <th>Lugar</th>*/
/*                     {#<th></th>#}*/
/*                 </tr>*/
/*             </thead>*/
/*           {#  <tfoot>*/
/*                 <tr>*/
/*                     <th>Pareja 1</th>*/
/*                     <th>Pareja 2</th>								*/
/*                 </tr>*/
/*             </tfoot>#}*/
/*             <tbody>*/
/*             {% for partido in partidos %}*/
/*                 <tr>*/
/*                     <td>{{partido.inscripcion1.jugador.username}} y {{partido.inscripcion1.nombrePareja}}</td>*/
/*                     <td>{{partido.inscripcion2.jugador.username}} y {{partido.inscripcion2.nombrePareja}}</td> */
/*                     <td class="center">*/
/*                         {% if partido.resultadoFinal is not empty %}*/
/*                             {{"%u - %u, %u - %u"|format(partido.resultadoFinal[0],partido.resultadoFinal[1],partido.resultadoFinal[2],partido.resultadoFinal[3]) }}*/
/*                             {{partido.resultadoFinal[4] is empty ? "" : ", %u - %u"|format(partido.resultadoFinal[4], partido.resultadoFinal[5])}}*/
/*                         {% elseif partido.resultadoPropuesto1 is not empty or partido.resultadoPropuesto2 is not empty %}*/
/*                                 {% if app.user == partido.competicion.creador %}*/
/*                                     <a href="{{ path('elegirResultado', { 'idPartido': partido.id }) }}" class="btn btn-xs btn-warning"> <i class="icon-warning-sign"></i> Confirmar resultado </a>*/
/*                                 {% else %}*/
/*                                     <span class="label label-warning icon-warning-sign" data-toggle="tooltip" title="Este resultado está a la espera de ser confirmado.">*/
/*                                 {% endif %}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>{{partido.fechaHora is empty ? "" : partido.fechaHora|date("j/n/Y")}}</td>*/
/*                     <td>{{partido.fechaHora is empty ? "" : partido.fechaHora|date("G:i")}}</td>*/
/*                     <td>*/
/*                         {%if partido.recursoAsignado is not empty %}                            */
/*                             {% for recurso in competicion.recursos %}                                */
/*                                 {%if partido.recursoAsignado == recurso.id %}                                    */
/*                                     {{recurso.club}} - {{recurso.cancha}}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     {% set resultadoFijado = (partido.resultadoFinal is empty and partido.resultadoPropuesto1 is empty and partido.resultadoPropuesto2 is empty) %}*/
/*                     {% if resultadoFijado and partido.fechaHora is not empty */
/*                         and (app.user == partido.competicion.creador or app.user == partido.inscripcion1.jugador or app.user == partido.inscripcion2.jugador) %}*/
/*                         <td class="text-center col-asignarResultado"> <a href="{{ path('fijarResultado', { 'idPartido': partido.id }) }}"> <span class="icon-edit"> </a> </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*    </div>*/
/* */
/* <script>*/
/* $(document).ready(function(){*/
/*     $('[data-toggle="tooltip"]').tooltip();*/
/* });*/
/* </script>*/

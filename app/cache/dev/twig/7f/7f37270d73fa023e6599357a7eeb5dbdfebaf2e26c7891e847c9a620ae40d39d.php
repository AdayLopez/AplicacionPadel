<?php

/* PadelScheduleMainBundle:Competitions:competicionesDeUsuario.html.twig */
class __TwigTemplate_24b9203e92754b175b0500af1909216f20407a74c1ef9ad4070f8793354ae0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58978f8ff16cbbd97883004b653b386353a8ab7100d90ade7794a5757fec49ac = $this->env->getExtension("native_profiler");
        $__internal_58978f8ff16cbbd97883004b653b386353a8ab7100d90ade7794a5757fec49ac->enter($__internal_58978f8ff16cbbd97883004b653b386353a8ab7100d90ade7794a5757fec49ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:competicionesDeUsuario.html.twig"));

        // line 2
        echo "<div class=\"tab-content clearfix\" id=\"tab-creadas\">
    <div id=\"posts\" class=\"events small-thumbs\">

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competicionesCreadas"]) ? $context["competicionesCreadas"] : $this->getContext($context, "competicionesCreadas")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 6
            echo "            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
            echo "\" alt=\"Imagen de competición\">
                    <div class=\"entry-date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
            echo "</span></div>                            
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        ";
            // line 16
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Cerrada")) {
                // line 17
                echo "                            <li><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            } else {
                // line 19
                echo "                            <li><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            }
            // line 21
            echo "                        
                        <li><i class=\"icon-map-marker2\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
            echo " </li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "descripcion", array()), "html", null, true);
            echo "</p>
                        ";
            // line 26
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["competicion"], "creador", array()), "id", array())) || ($this->getAttribute($context["competicion"], "estado", array()) == "Abierta"))) {
                // line 27
                echo "                            <a href= \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Acceder</a>
                        ";
            } else {
                // line 29
                echo "                            <a href= \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger disabled\">Acceder</a>
                        ";
            }
            // line 31
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>
</div>
<div class=\"tab-content clearfix\" id=\"tab-inscrito\">
    <div id=\"posts\" class=\"events small-thumbs\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competicionesInscrito"]) ? $context["competicionesInscrito"] : $this->getContext($context, "competicionesInscrito")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 40
            echo "            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
            echo "\" alt=\"Inventore voluptates velit totam ipsa tenetur\">
                        <div class=\"entry-date\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
            echo "</span></div>                            
                    </a>
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        ";
            // line 52
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Cerrada")) {
                // line 53
                echo "                            <li><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            } else {
                // line 55
                echo "                            <li><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            }
            // line 56
            echo "                        
                        <li><i class=\"icon-map-marker2\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
            echo " </li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "descripcion", array()), "html", null, true);
            echo "</p>
                        <a href= \"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Acceder</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
</div>            


";
        
        $__internal_58978f8ff16cbbd97883004b653b386353a8ab7100d90ade7794a5757fec49ac->leave($__internal_58978f8ff16cbbd97883004b653b386353a8ab7100d90ade7794a5757fec49ac_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:competicionesDeUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 66,  171 => 61,  167 => 60,  161 => 57,  158 => 56,  152 => 55,  146 => 53,  144 => 52,  136 => 49,  126 => 44,  122 => 43,  118 => 42,  114 => 40,  110 => 39,  104 => 35,  95 => 31,  89 => 29,  83 => 27,  81 => 26,  77 => 25,  71 => 22,  68 => 21,  62 => 19,  56 => 17,  54 => 16,  48 => 13,  39 => 9,  35 => 8,  31 => 6,  27 => 5,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <div class="tab-content clearfix" id="tab-creadas">*/
/*     <div id="posts" class="events small-thumbs">*/
/* */
/*         {% for competicion in competicionesCreadas %}*/
/*             <div class="entry clearfix">*/
/*                 <div class="entry-image">*/
/*                     <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Imagen de competición">*/
/*                     <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                 </div>*/
/*                 <div class="entry-c">*/
/*                     <div class="entry-title">*/
/*                         <h2>{{ competicion.nombre }}</h2>*/
/*                     </div>*/
/*                     <ul class="entry-meta clearfix">*/
/*                         {%if competicion.estado == "Cerrada" %}*/
/*                             <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                             {% else %}*/
/*                             <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                             {% endif %}*/
/*                         */
/*                         <li><i class="icon-map-marker2"></i> {{ competicion.localizacion }} </li>*/
/*                     </ul>*/
/*                     <div class="entry-content">*/
/*                         <p>{{ competicion.descripcion }}</p>*/
/*                         {% if app.user.id == competicion.creador.id or competicion.estado == "Abierta" %}*/
/*                             <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-success">Acceder</a>*/
/*                         {% else %}*/
/*                             <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger disabled">Acceder</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* <div class="tab-content clearfix" id="tab-inscrito">*/
/*     <div id="posts" class="events small-thumbs">*/
/*         {% for competicion in competicionesInscrito %}*/
/*             <div class="entry clearfix">*/
/*                 <div class="entry-image">*/
/*                     <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">*/
/*                         <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                         <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                     </a>*/
/*                 </div>*/
/*                 <div class="entry-c">*/
/*                     <div class="entry-title">*/
/*                         <h2><a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">{{ competicion.nombre }}</a></h2>*/
/*                     </div>*/
/*                     <ul class="entry-meta clearfix">*/
/*                         {%if competicion.estado == "Cerrada" %}*/
/*                             <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                             {% else %}*/
/*                             <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                             {% endif %}                        */
/*                         <li><i class="icon-map-marker2"></i> {{ competicion.localizacion }} </li>*/
/*                     </ul>*/
/*                     <div class="entry-content">*/
/*                         <p>{{ competicion.descripcion }}</p>*/
/*                         <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-success">Acceder</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>            */
/* */
/* */
/* */

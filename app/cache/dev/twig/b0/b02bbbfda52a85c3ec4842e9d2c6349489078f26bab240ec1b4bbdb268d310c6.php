<?php

/* PadelScheduleMainBundle:Competitions:mostrarCompeticiones.html.twig */
class __TwigTemplate_e18325e3357596b2859f21fe0769361f0b74180fa443163b9c13500ad39023ff extends Twig_Template
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
        $__internal_68583430e96ce2f7e8abc6e999248bca712973f1867f9dc0faf516e219f6b6ee = $this->env->getExtension("native_profiler");
        $__internal_68583430e96ce2f7e8abc6e999248bca712973f1867f9dc0faf516e219f6b6ee->enter($__internal_68583430e96ce2f7e8abc6e999248bca712973f1867f9dc0faf516e219f6b6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:mostrarCompeticiones.html.twig"));

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
                    <a href=\"#\">
                        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/default.png"), "html", null, true);
            echo "\" alt=\"Inventore voluptates velit totam ipsa tenetur\">
                        <div class=\"entry-date\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
            echo "</span></div>                            
                    </a>
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"#\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        ";
            // line 18
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Cerrada")) {
                // line 19
                echo "                            <li><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            } else {
                // line 21
                echo "                            <li><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            }
            // line 23
            echo "                        <li><a href=\"#\"><i class=\"icon-time\"></i> 11:00 - 19:00</a></li>
                        <li><a href=\"#\"><i class=\"icon-map-marker2\"></i> Lorem Ipsum </a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "descripcion", array()), "html", null, true);
            echo "</p>
                        <a href= \"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Acceder</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    <div class=\"postcontent nobottommargin\">
        <!-- Pagination
        ============================================= -->
        <ul class=\"pager nomargin\">
            <li class=\"previous\"><a href=\"#\">← Older</a></li>
            <li class=\"next\"><a href=\"#\">Newer →</a></li>
        </ul><!-- .pager end -->
    </div>
</div>
<div class=\"tab-content clearfix\" id=\"tab-inscrito\">
    <div id=\"posts\" class=\"events small-thumbs\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competicionesInscrito"]) ? $context["competicionesInscrito"] : $this->getContext($context, "competicionesInscrito")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 46
            echo "            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    <a href=\"#\">
                        <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/default.png"), "html", null, true);
            echo "\" alt=\"Inventore voluptates velit totam ipsa tenetur\">
                        <div class=\"entry-date\">";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
            echo "</span></div>                            
                    </a>
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"#\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        ";
            // line 58
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Cerrada")) {
                // line 59
                echo "                            <li><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            } else {
                // line 61
                echo "                            <li><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                            ";
            }
            // line 63
            echo "                        <li><a href=\"#\"><i class=\"icon-time\"></i> 11:00 - 19:00</a></li>
                        <li><a href=\"#\"><i class=\"icon-map-marker2\"></i> Lorem Ipsum </a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "descripcion", array()), "html", null, true);
            echo "</p>
                        <a href= \"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Acceder</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </div>
    <div class=\"postcontent nobottommargin\">
        <!-- Pagination
        ============================================= -->
        <ul class=\"pager nomargin\">
            <li class=\"previous\"><a href=\"#\">← Older</a></li>
            <li class=\"next\"><a href=\"#\">Newer →</a></li>
        </ul><!-- .pager end -->
    </div>
</div>            


";
        
        $__internal_68583430e96ce2f7e8abc6e999248bca712973f1867f9dc0faf516e219f6b6ee->leave($__internal_68583430e96ce2f7e8abc6e999248bca712973f1867f9dc0faf516e219f6b6ee_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:mostrarCompeticiones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 73,  158 => 68,  154 => 67,  148 => 63,  142 => 61,  136 => 59,  134 => 58,  128 => 55,  118 => 50,  114 => 49,  109 => 46,  105 => 45,  91 => 33,  80 => 28,  76 => 27,  70 => 23,  64 => 21,  58 => 19,  56 => 18,  50 => 15,  40 => 10,  36 => 9,  31 => 6,  27 => 5,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <div class="tab-content clearfix" id="tab-creadas">*/
/*     <div id="posts" class="events small-thumbs">*/
/* */
/*         {% for competicion in competicionesCreadas %}*/
/*             <div class="entry clearfix">*/
/*                 <div class="entry-image">*/
/*                     <a href="#">*/
/*                         <img src="{{asset('bundles/padelschedulemain/images/default.png')}}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                         <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                     </a>*/
/*                 </div>*/
/*                 <div class="entry-c">*/
/*                     <div class="entry-title">*/
/*                         <h2><a href="#">{{ competicion.nombre }}</a></h2>*/
/*                     </div>*/
/*                     <ul class="entry-meta clearfix">*/
/*                         {%if competicion.estado == "Cerrada" %}*/
/*                             <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                             {% else %}*/
/*                             <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                             {% endif %}*/
/*                         <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>*/
/*                         <li><a href="#"><i class="icon-map-marker2"></i> Lorem Ipsum </a></li>*/
/*                     </ul>*/
/*                     <div class="entry-content">*/
/*                         <p>{{ competicion.descripcion }}</p>*/
/*                         <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger">Acceder</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="postcontent nobottommargin">*/
/*         <!-- Pagination*/
/*         ============================================= -->*/
/*         <ul class="pager nomargin">*/
/*             <li class="previous"><a href="#">← Older</a></li>*/
/*             <li class="next"><a href="#">Newer →</a></li>*/
/*         </ul><!-- .pager end -->*/
/*     </div>*/
/* </div>*/
/* <div class="tab-content clearfix" id="tab-inscrito">*/
/*     <div id="posts" class="events small-thumbs">*/
/*         {% for competicion in competicionesInscrito %}*/
/*             <div class="entry clearfix">*/
/*                 <div class="entry-image">*/
/*                     <a href="#">*/
/*                         <img src="{{asset('bundles/padelschedulemain/images/default.png')}}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                         <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                     </a>*/
/*                 </div>*/
/*                 <div class="entry-c">*/
/*                     <div class="entry-title">*/
/*                         <h2><a href="#">{{ competicion.nombre }}</a></h2>*/
/*                     </div>*/
/*                     <ul class="entry-meta clearfix">*/
/*                         {%if competicion.estado == "Cerrada" %}*/
/*                             <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                             {% else %}*/
/*                             <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                             {% endif %}*/
/*                         <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>*/
/*                         <li><a href="#"><i class="icon-map-marker2"></i> Lorem Ipsum </a></li>*/
/*                     </ul>*/
/*                     <div class="entry-content">*/
/*                         <p>{{ competicion.descripcion }}</p>*/
/*                         <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger">Acceder</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="postcontent nobottommargin">*/
/*         <!-- Pagination*/
/*         ============================================= -->*/
/*         <ul class="pager nomargin">*/
/*             <li class="previous"><a href="#">← Older</a></li>*/
/*             <li class="next"><a href="#">Newer →</a></li>*/
/*         </ul><!-- .pager end -->*/
/*     </div>*/
/* </div>            */
/* */
/* */
/* */

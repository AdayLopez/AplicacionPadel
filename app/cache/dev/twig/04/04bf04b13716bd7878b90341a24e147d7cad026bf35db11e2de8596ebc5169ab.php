<?php

/* PadelScheduleMainBundle:Competitions:mostrarCompeticion.html.twig */
class __TwigTemplate_7173f7a7e9b9c57121fe8168bbe66d0e7b67805b81ec43fd93560b4f42a09b0f extends Twig_Template
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
        $__internal_e39721ec9038525e5d0d48c4e99973e40115abbb72b3939ce763ea314403091f = $this->env->getExtension("native_profiler");
        $__internal_e39721ec9038525e5d0d48c4e99973e40115abbb72b3939ce763ea314403091f->enter($__internal_e39721ec9038525e5d0d48c4e99973e40115abbb72b3939ce763ea314403091f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:mostrarCompeticion.html.twig"));

        // line 2
        echo "<div id=\"posts\" class=\"events small-thumbs\">
    
";
        // line 7
        echo "    
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competicionesCreadas"]) ? $context["competicionesCreadas"] : $this->getContext($context, "competicionesCreadas")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 9
            echo "        <div class=\"entry clearfix\">
            <div class=\"entry-image\">
                    <a href=\"#\">
                            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/default.png"), "html", null, true);
            echo "\" alt=\"Inventore voluptates velit totam ipsa tenetur\">
                            <div class=\"entry-date\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
            echo "</span></div>                            
                    </a>
            </div>
            <div class=\"entry-c\">
                    <div class=\"entry-title\">
                            <h2><a href=\"#\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        ";
            // line 21
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Cerrada")) {
                // line 22
                echo "                            <li><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                        ";
            } else {
                // line 24
                echo "                            <li><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "estado", array()), "html", null, true);
                echo "</span></li>
                        ";
            }
            // line 26
            echo "                            <li><a href=\"#\"><i class=\"icon-time\"></i> 11:00 - 19:00</a></li>
                            <li><a href=\"#\"><i class=\"icon-map-marker2\"></i> Lorem Ipsum </a></li>
                    </ul>
                    <div class=\"entry-content\">
                            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "descripcion", array()), "html", null, true);
            echo "</p>
                            <a href= \"";
            // line 31
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
        // line 36
        echo "    

<div class=\"postcontent nobottommargin\">
\t\t\t\t\t

\t\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Pagination
\t\t\t\t\t\t============================================= -->
\t\t\t\t\t\t<ul class=\"pager nomargin\">
\t\t\t\t\t\t\t<li class=\"previous\"><a href=\"#\">← Older</a></li>
\t\t\t\t\t\t\t<li class=\"next\"><a href=\"#\">Newer →</a></li>
\t\t\t\t\t\t</ul><!-- .pager end -->

\t\t\t\t\t</div>";
        
        $__internal_e39721ec9038525e5d0d48c4e99973e40115abbb72b3939ce763ea314403091f->leave($__internal_e39721ec9038525e5d0d48c4e99973e40115abbb72b3939ce763ea314403091f_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:mostrarCompeticion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  82 => 31,  78 => 30,  72 => 26,  66 => 24,  60 => 22,  58 => 21,  52 => 18,  42 => 13,  38 => 12,  33 => 9,  29 => 8,  26 => 7,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <div id="posts" class="events small-thumbs">*/
/*     */
/* {#    {% for competicion in competiciones %}*/
/*         hola*/
/*     {% endfor %}#}*/
/*     */
/*     {% for competicion in competicionesCreadas %}*/
/*         <div class="entry clearfix">*/
/*             <div class="entry-image">*/
/*                     <a href="#">*/
/*                             <img src="{{asset('bundles/padelschedulemain/images/default.png')}}" alt="Inventore voluptates velit totam ipsa tenetur">*/
/*                             <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>                            */
/*                     </a>*/
/*             </div>*/
/*             <div class="entry-c">*/
/*                     <div class="entry-title">*/
/*                             <h2><a href="#">{{ competicion.nombre }}</a></h2>*/
/*                     </div>*/
/*                     <ul class="entry-meta clearfix">*/
/*                         {%if competicion.estado == "Cerrada" %}*/
/*                             <li><span class="label label-danger">{{ competicion.estado }}</span></li>*/
/*                         {% else %}*/
/*                             <li><span class="label label-success">{{ competicion.estado }}</span></li>*/
/*                         {% endif %}*/
/*                             <li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>*/
/*                             <li><a href="#"><i class="icon-map-marker2"></i> Lorem Ipsum </a></li>*/
/*                     </ul>*/
/*                     <div class="entry-content">*/
/*                             <p>{{ competicion.descripcion }}</p>*/
/*                             <a href= "{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-danger">Acceder</a>*/
/*                     </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     */
/* */
/* <div class="postcontent nobottommargin">*/
/* 					*/
/* */
/* 							*/
/* */
/* 						*/
/* */
/* 						<!-- Pagination*/
/* 						============================================= -->*/
/* 						<ul class="pager nomargin">*/
/* 							<li class="previous"><a href="#">← Older</a></li>*/
/* 							<li class="next"><a href="#">Newer →</a></li>*/
/* 						</ul><!-- .pager end -->*/
/* */
/* 					</div>*/

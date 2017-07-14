<?php

/* PadelScheduleMainBundle:Main:index.html.twig */
class __TwigTemplate_d9c94219b2ad71bb838ddf56e3e80e83cc8c0c0ce6adb5e7b756156ee4a9b51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c66bbc51368ab9521dee1da8f726dc329582ef3cab248514787fec38d0b1c4c = $this->env->getExtension("native_profiler");
        $__internal_8c66bbc51368ab9521dee1da8f726dc329582ef3cab248514787fec38d0b1c4c->enter($__internal_8c66bbc51368ab9521dee1da8f726dc329582ef3cab248514787fec38d0b1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c66bbc51368ab9521dee1da8f726dc329582ef3cab248514787fec38d0b1c4c->leave($__internal_8c66bbc51368ab9521dee1da8f726dc329582ef3cab248514787fec38d0b1c4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_773a3d4b97bc87c73dba2b3e1fdc55c8e23bfbc6afbd555dd3421f5da8253370 = $this->env->getExtension("native_profiler");
        $__internal_773a3d4b97bc87c73dba2b3e1fdc55c8e23bfbc6afbd555dd3421f5da8253370->enter($__internal_773a3d4b97bc87c73dba2b3e1fdc55c8e23bfbc6afbd555dd3421f5da8253370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_773a3d4b97bc87c73dba2b3e1fdc55c8e23bfbc6afbd555dd3421f5da8253370->leave($__internal_773a3d4b97bc87c73dba2b3e1fdc55c8e23bfbc6afbd555dd3421f5da8253370_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_8016ee359a8a740ab47e1beb5813ff0fe87512c72e639e58f9010d5d843c1967 = $this->env->getExtension("native_profiler");
        $__internal_8016ee359a8a740ab47e1beb5813ff0fe87512c72e639e58f9010d5d843c1967->enter($__internal_8016ee359a8a740ab47e1beb5813ff0fe87512c72e639e58f9010d5d843c1967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/swiper.css"), "html", null, true);
        echo "\"/>    
";
        
        $__internal_8016ee359a8a740ab47e1beb5813ff0fe87512c72e639e58f9010d5d843c1967->leave($__internal_8016ee359a8a740ab47e1beb5813ff0fe87512c72e639e58f9010d5d843c1967_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ef8ecd53aca22bd984f2acd357c3de9119c2341f5dad180b312f3e30e232e4a = $this->env->getExtension("native_profiler");
        $__internal_3ef8ecd53aca22bd984f2acd357c3de9119c2341f5dad180b312f3e30e232e4a->enter($__internal_3ef8ecd53aca22bd984f2acd357c3de9119c2341f5dad180b312f3e30e232e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "       
    
    <section id=\"slider\" class=\"slider-parallax swiper_wrapper full-screen clearfix\">

\t\t\t<div class=\"slider-parallax-inner\">

\t\t\t\t<div class=\"swiper-container swiper-parent\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t<div class=\"swiper-slide\" style=\"background-image: url(  ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/parallaxPadel1.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"slider-caption\">
\t\t\t\t\t\t\t\t\t<h2 data-caption-animate=\"fadeInUp\">Bienvenido a PadelSchedule</h2>
\t\t\t\t\t\t\t\t\t";
        // line 23
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"swiper-slide\" style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/parallaxPadel2.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t\t\t<div class=\"slider-caption\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h3 data-caption-animate=\"fadeInUp\" data-caption-delay=\"200\">Organice de forma efectiva sus competiciones de padel</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"slider-arrow-left\"><i class=\"icon-angle-left\"></i></div>
\t\t\t\t\t<div id=\"slider-arrow-right\"><i class=\"icon-angle-right\"></i></div>
\t\t\t\t\t<div id=\"slide-number\"><div id=\"slide-number-current\"></div><span>/</span><div id=\"slide-number-total\"></div></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>



\t\t

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\" data-class-xxs=\"center\" data-class-xs=\"\">

\t\t\t\t\t<div class=\"clear\"></div>

\t\t\t\t\t<div class=\"fancy-title title-center title-dotted-border topmargin\">
\t\t\t\t\t\t<h3>Próximas competiciones</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"competiciones\" class=\"owl-carousel events-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"false\" data-items-sm=\"1\" data-items-md=\"2\" data-items-lg=\"2\">
                                            
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competiciones"]) ? $context["competiciones"] : $this->getContext($context, "competiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
            // line 64
            echo "                                                ";
            if (($this->getAttribute($context["competicion"], "estado", array()) == "Abierta")) {
                // line 65
                echo "                                                <div class=\"oc-item\">
                                                    <div class=\"ievent clearfix\">
                                                        <div class=\"entry-image\">
                                                            <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">
                                                                <img src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
                echo "\" alt=\"Padel court\">
                                                                <div class=\"entry-date\">";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
                echo "</span></div>
                                                            </a>
                                                        </div>
                                                        <div class=\"entry-c\">
                                                            <div class=\"entry-title\">
                                                                <h2><a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a></h2>
                                                            </div>
                                                            <ul class=\"entry-meta clearfix\">
                                                                <li><i class=\"icon-map-marker2\"></i> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
                echo " </li>
                                                            </ul>
                                                            <div class=\"entry-content\">
                                                                <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Acceder</a> 
                                                            </div>
                                                        </div>
                                                    </div>     
                                                </div>        
                                                ";
            }
            // line 87
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                            
\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
                                        ";
        // line 93
        if ( !(null === (isset($context["competicionesCreadas"]) ? $context["competicionesCreadas"] : $this->getContext($context, "competicionesCreadas")))) {
            // line 94
            echo "\t\t\t\t\t<div class=\"fancy-title title-center title-dotted-border topmargin\">
\t\t\t\t\t\t<h3>Competiciones creadas</h3>
\t\t\t\t\t</div>
                               
\t\t\t\t\t<div id=\"competicionesCreadas\" class=\"owl-carousel events-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"true\" data-items-sm=\"1\" data-items-md=\"2\" data-items-lg=\"2\">
                                            
                                            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competicionesCreadas"]) ? $context["competicionesCreadas"] : $this->getContext($context, "competicionesCreadas")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 101
                echo "                                            <div class=\"oc-item\">
                                                <div class=\"ievent clearfix\">
                                                    <div class=\"entry-image\">
                                                        <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
                echo "\" alt=\"Padel court\">
                                                            <div class=\"entry-date\">";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
                echo "</span></div>
                                                        </a>
                                                    </div>
                                                    <div class=\"entry-c\">
                                                        <div class=\"entry-title\">
                                                            <h2><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a></h2>
                                                        </div>
                                                        <ul class=\"entry-meta clearfix\">
                                                            <li><i class=\"icon-map-marker2\"></i> ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
                echo "</li>
                                                        </ul>
                                                        <div class=\"entry-content\">
                                                            <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Acceder</a> 
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                            
\t\t\t\t\t\t

\t\t\t\t\t</div>
                                        <div class=\"clear\"></div>
                                        ";
        }
        // line 129
        echo "                                        ";
        if ( !(null === (isset($context["competicionesInscrito"]) ? $context["competicionesInscrito"] : $this->getContext($context, "competicionesInscrito")))) {
            // line 130
            echo "\t\t\t\t\t<div class=\"fancy-title title-center title-dotted-border topmargin\">
\t\t\t\t\t\t<h3>Competiciones en las que se encuentra inscrito</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"competicionesCreadas\" class=\"owl-carousel events-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"true\" data-items-sm=\"1\" data-items-md=\"2\" data-items-lg=\"2\">
                                            
                                            ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competicionesInscrito"]) ? $context["competicionesInscrito"] : $this->getContext($context, "competicionesInscrito")));
            foreach ($context['_seq'] as $context["_key"] => $context["competicion"]) {
                // line 137
                echo "                                            <div class=\"oc-item\">    
                                                <div class=\"ievent clearfix\">
                                                    <div class=\"entry-image\">
                                                        <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["competicion"], "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
                echo "\" alt=\"Padel court\">
                                                            <div class=\"entry-date\">";
                // line 142
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "d"), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["competicion"], "fechaInicio", array()), "M"), "html", null, true);
                echo "</span></div>
                                                        </a>
                                                    </div>
                                                    <div class=\"entry-c\">
                                                        <div class=\"entry-title\">
                                                            <h2><a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "nombre", array()), "html", null, true);
                echo "</a></h2>
                                                        </div>
                                                        <ul class=\"entry-meta clearfix\">
                                                            <li><i class=\"icon-map-marker2\"></i> ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["competicion"], "localizacion", array()), "html", null, true);
                echo "</li>
                                                        </ul>
                                                        <div class=\"entry-content\">
                                                            <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competicion", array("idCompeticion" => $this->getAttribute($context["competicion"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Acceder</a> 
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>            
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competicion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                            
\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 164
        echo "
\t\t\t\t\t";
        // line 215
        echo "
\t\t\t\t\t<div class=\"clear\"></div>

            </div>

        </div>

    </section><!-- #content end -->

";
        
        $__internal_3ef8ecd53aca22bd984f2acd357c3de9119c2341f5dad180b312f3e30e232e4a->leave($__internal_3ef8ecd53aca22bd984f2acd357c3de9119c2341f5dad180b312f3e30e232e4a_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 215,  340 => 164,  333 => 159,  321 => 153,  315 => 150,  307 => 147,  297 => 142,  293 => 141,  289 => 140,  284 => 137,  280 => 136,  272 => 130,  269 => 129,  261 => 123,  249 => 117,  243 => 114,  235 => 111,  225 => 106,  221 => 105,  217 => 104,  212 => 101,  208 => 100,  200 => 94,  198 => 93,  191 => 88,  185 => 87,  176 => 81,  170 => 78,  162 => 75,  152 => 70,  148 => 69,  144 => 68,  139 => 65,  136 => 64,  132 => 63,  93 => 27,  87 => 23,  80 => 18,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/swiper.css')}}"/>    */
/* {% endblock %}*/
/*         */
/* {% block content %}*/
/*        */
/*     */
/*     <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">*/
/* */
/* 			<div class="slider-parallax-inner">*/
/* */
/* 				<div class="swiper-container swiper-parent">*/
/* 					<div class="swiper-wrapper">*/
/* 						<div class="swiper-slide" style="background-image: url(  {{ asset('bundles/padelschedulemain/images/parallaxPadel1.jpg') }});">*/
/* 							<div class="container clearfix">*/
/* 								<div class="slider-caption">*/
/* 									<h2 data-caption-animate="fadeInUp">Bienvenido a PadelSchedule</h2>*/
/* 									{#<p data-caption-animate="fadeInUp" data-caption-delay="200">Su organizador de torneos de padel</p>#}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="swiper-slide" style="background-image: url({{ asset('bundles/padelschedulemain/images/parallaxPadel2.jpg') }});">*/
/* 							<div class="container clearfix">*/
/* 								<div class="slider-caption">									*/
/* 									<h3 data-caption-animate="fadeInUp" data-caption-delay="200">Organice de forma efectiva sus competiciones de padel</h3>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>*/
/* 					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>*/
/* 					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</section>*/
/* */
/* */
/* */
/* 		*/
/* */
/*     <!-- Content*/
/*     ============================================= -->*/
/*     <section id="content">*/
/* */
/*         <div class="content-wrap">*/
/* */
/*             <div class="container clearfix" data-class-xxs="center" data-class-xs="">*/
/* */
/* 					<div class="clear"></div>*/
/* */
/* 					<div class="fancy-title title-center title-dotted-border topmargin">*/
/* 						<h3>Próximas competiciones</h3>*/
/* 					</div>*/
/* */
/* 					<div id="competiciones" class="owl-carousel events-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-sm="1" data-items-md="2" data-items-lg="2">*/
/*                                             */
/*                                             {% for competicion in competiciones %}*/
/*                                                 {% if competicion.estado == "Abierta" %}*/
/*                                                 <div class="oc-item">*/
/*                                                     <div class="ievent clearfix">*/
/*                                                         <div class="entry-image">*/
/*                                                             <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">*/
/*                                                                 <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Padel court">*/
/*                                                                 <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>*/
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                         <div class="entry-c">*/
/*                                                             <div class="entry-title">*/
/*                                                                 <h2><a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">{{competicion.nombre}}</a></h2>*/
/*                                                             </div>*/
/*                                                             <ul class="entry-meta clearfix">*/
/*                                                                 <li><i class="icon-map-marker2"></i> {{competicion.localizacion}} </li>*/
/*                                                             </ul>*/
/*                                                             <div class="entry-content">*/
/*                                                                 <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-success">Acceder</a> */
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>     */
/*                                                 </div>        */
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                             */
/* 						*/
/* */
/* 					</div>*/
/* 					<div class="clear"></div>*/
/*                                         {% if competicionesCreadas is not null %}*/
/* 					<div class="fancy-title title-center title-dotted-border topmargin">*/
/* 						<h3>Competiciones creadas</h3>*/
/* 					</div>*/
/*                                */
/* 					<div id="competicionesCreadas" class="owl-carousel events-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-sm="1" data-items-md="2" data-items-lg="2">*/
/*                                             */
/*                                             {% for competicion in competicionesCreadas %}*/
/*                                             <div class="oc-item">*/
/*                                                 <div class="ievent clearfix">*/
/*                                                     <div class="entry-image">*/
/*                                                         <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">*/
/*                                                             <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Padel court">*/
/*                                                             <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="entry-c">*/
/*                                                         <div class="entry-title">*/
/*                                                             <h2><a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">{{competicion.nombre}}</a></h2>*/
/*                                                         </div>*/
/*                                                         <ul class="entry-meta clearfix">*/
/*                                                             <li><i class="icon-map-marker2"></i> {{competicion.localizacion}}</li>*/
/*                                                         </ul>*/
/*                                                         <div class="entry-content">*/
/*                                                             <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-success">Acceder</a> */
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>   */
/*                                             </div>*/
/*                                             {% endfor %}*/
/*                                             */
/* 						*/
/* */
/* 					</div>*/
/*                                         <div class="clear"></div>*/
/*                                         {% endif %}*/
/*                                         {% if competicionesInscrito is not null %}*/
/* 					<div class="fancy-title title-center title-dotted-border topmargin">*/
/* 						<h3>Competiciones en las que se encuentra inscrito</h3>*/
/* 					</div>*/
/* */
/* 					<div id="competicionesCreadas" class="owl-carousel events-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-sm="1" data-items-md="2" data-items-lg="2">*/
/*                                             */
/*                                             {% for competicion in competicionesInscrito %}*/
/*                                             <div class="oc-item">    */
/*                                                 <div class="ievent clearfix">*/
/*                                                     <div class="entry-image">*/
/*                                                         <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">*/
/*                                                             <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Padel court">*/
/*                                                             <div class="entry-date">{{competicion.fechaInicio|date("d")}}<span>{{competicion.fechaInicio|date("M")}}</span></div>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="entry-c">*/
/*                                                         <div class="entry-title">*/
/*                                                             <h2><a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}">{{competicion.nombre}}</a></h2>*/
/*                                                         </div>*/
/*                                                         <ul class="entry-meta clearfix">*/
/*                                                             <li><i class="icon-map-marker2"></i> {{competicion.localizacion}}</li>*/
/*                                                         </ul>*/
/*                                                         <div class="entry-content">*/
/*                                                             <a href="{{ path('competicion', {'idCompeticion': competicion.id }) }}" class="btn btn-success">Acceder</a> */
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>                                                */
/*                                             </div>            */
/*                                             {% endfor %}*/
/*                                             */
/* 						*/
/* */
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{#<script type="text/javascript">*/
/* */
/* 						jQuery(document).ready(function($) {*/
/* */
/* 							var competiciones = $("#competiciones");*/
/* */
/* 							competiciones.owlCarousel({*/
/* 								margin: 20,*/
/* 								nav: true,*/
/* 								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],*/
/* 								autoplay: false,*/
/* 								autoplayHoverPause: true,*/
/* 								dots: false,*/
/* 								responsive:{*/
/* 									0:{ items:1 },*/
/* 									1000:{ items:2 }*/
/* 								}*/
/* 							});*/
/* 							var competicionesCreadas = $("#competicionesCreadas");*/
/* */
/* 							competicionesCreadas.owlCarousel({*/
/* 								margin: 20,*/
/* 								nav: true,*/
/* 								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],*/
/* 								autoplay: false,*/
/* 								autoplayHoverPause: true,*/
/* 								dots: false,*/
/* 								responsive:{*/
/* 									0:{ items:1 },*/
/* 									1000:{ items:2 }*/
/* 								}*/
/* 							});*/
/* 							var competicionesInscrito = $("#competicionesInscrito");*/
/* */
/* 							competicionesInscrito.owlCarousel({*/
/* 								margin: 20,*/
/* 								nav: true,*/
/* 								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],*/
/* 								autoplay: false,*/
/* 								autoplayHoverPause: true,*/
/* 								dots: false,*/
/* 								responsive:{*/
/* 									0:{ items:1 },*/
/* 									1000:{ items:2 }*/
/* 								}*/
/* 							});*/
/* */
/* 						});*/
/* */
/* 					</script>#}*/
/* */
/* 					<div class="clear"></div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section><!-- #content end -->*/
/* */
/* {% endblock %}*/

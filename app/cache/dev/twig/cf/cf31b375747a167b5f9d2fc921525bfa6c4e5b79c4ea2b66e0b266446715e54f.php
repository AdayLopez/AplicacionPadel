<?php

/* PadelScheduleMainBundle:Competitions:seleccionarPreferencia.html.twig */
class __TwigTemplate_d7d653c5ad8c8dad26c1dcdbe50f9791715bede677f08e647744cfb87b3cb679 extends Twig_Template
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
        $__internal_1cdeb7322884e830f1d3c276db4ab67781cd6eaa23dde752c71c3b0935a9c781 = $this->env->getExtension("native_profiler");
        $__internal_1cdeb7322884e830f1d3c276db4ab67781cd6eaa23dde752c71c3b0935a9c781->enter($__internal_1cdeb7322884e830f1d3c276db4ab67781cd6eaa23dde752c71c3b0935a9c781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:seleccionarPreferencia.html.twig"));

        // line 1
        echo "<div class=\"block divcenter\" style=\"background-color: #FFF; max-width: 500px;\">
    ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("seleccionarPreferencias", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "attr" => array("id" => "horarioFormPreferencia")));
        echo "
    
    <div class=\"modal-header center nobottommargin fancy-title title-bottom-border darkgrey\">      
        <h3><span>Por favor, rellene la siguiente información</span></h3>             
    </div>
    <div class=\"modal-body center\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePareja", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePareja", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePareja", array()), 'errors');
        echo "
        </div>  
      
        <span style=\"font-size:20px;\"><br></span><br>
        Click the grid to select time slots, then click 'View Selected Timeslots' to display the selected schedule.<br>
    
        <div class=\"block-tools\">
            <div class=\"shade-btn block-shade active\">Seleccionar</div>
            <div class=\"shade-btn block-unshade\">Deseleccionar</div>
        </div> 
        <table class=\"tablaRangePicker sel-table table-responsive\">
            <tbody>
                <tr>
                    <th>Hora</th>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
                ";
        // line 34
        $context["time"] = "8:30";
        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "                    
                <tr>
                    <td align = \"center\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "H:i"), "html", null, true);
            echo " </td>
                    ";
            // line 39
            $context["time"] = twig_date_modify_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "+30 minutes");
            // line 40
            echo "                    <td class=\"seleccionable\" id=\"tdPL";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPL";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPM";
            // line 41
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPM";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPX";
            // line 42
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPX";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPJ";
            // line 43
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPJ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPV";
            // line 44
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPV";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPS";
            // line 45
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPS";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdPD";
            // line 46
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdPD";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>      
    
        <div class=\"modal-footer section center nomargin\" style=\"padding: 30px;\">        
            <div class=\"pull-left\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "       
            </div>
            <div class=\"pull-right\">
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
            </div>
        </div>  
           
    ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>



";
        
        $__internal_1cdeb7322884e830f1d3c276db4ab67781cd6eaa23dde752c71c3b0935a9c781->leave($__internal_1cdeb7322884e830f1d3c276db4ab67781cd6eaa23dde752c71c3b0935a9c781_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:seleccionarPreferencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  145 => 55,  137 => 49,  126 => 46,  120 => 45,  114 => 44,  108 => 43,  102 => 42,  96 => 41,  89 => 40,  87 => 39,  83 => 38,  79 => 36,  74 => 35,  72 => 34,  47 => 12,  43 => 11,  39 => 10,  34 => 8,  25 => 2,  22 => 1,);
    }
}
/* <div class="block divcenter" style="background-color: #FFF; max-width: 500px;">*/
/*     {{ form_start(form, {'action': path('seleccionarPreferencias', {'idCompeticion':competicion.id }), 'attr': {'id': 'horarioFormPreferencia'}}) }}*/
/*     */
/*     <div class="modal-header center nobottommargin fancy-title title-bottom-border darkgrey">      */
/*         <h3><span>Por favor, rellene la siguiente información</span></h3>             */
/*     </div>*/
/*     <div class="modal-body center">*/
/*         {{ form_errors(form) }}*/
/*         <div class="form-group">*/
/*             {{ form_label(form.nombrePareja) }}*/
/*             {{ form_widget(form.nombrePareja, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.nombrePareja) }}*/
/*         </div>  */
/*       */
/*         <span style="font-size:20px;"><br></span><br>*/
/*         Click the grid to select time slots, then click 'View Selected Timeslots' to display the selected schedule.<br>*/
/*     */
/*         <div class="block-tools">*/
/*             <div class="shade-btn block-shade active">Seleccionar</div>*/
/*             <div class="shade-btn block-unshade">Deseleccionar</div>*/
/*         </div> */
/*         <table class="tablaRangePicker sel-table table-responsive">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Hora</th>*/
/*                     <th>L</th>*/
/*                     <th>M</th>*/
/*                     <th>X</th>*/
/*                     <th>J</th>*/
/*                     <th>V</th>*/
/*                     <th>S</th>*/
/*                     <th>D</th>*/
/*                 </tr>*/
/*                 {% set time = '8:30' %}*/
/*                 {% for i in 1..31 %}*/
/*                     */
/*                 <tr>*/
/*                     <td align = "center">{{ time|date('H:i') }} </td>*/
/*                     {% set time = time|date_modify('+30 minutes')  %}*/
/*                     <td class="seleccionable" id="tdPL{{i}}" name="tdPL{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPM{{i}}" name="tdPM{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPX{{i}}" name="tdPX{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPJ{{i}}" name="tdPJ{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPV{{i}}" name="tdPV{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPS{{i}}" name="tdPS{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdPD{{i}}" name="tdPD{{i}}" align="center"></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>      */
/*     */
/*         <div class="modal-footer section center nomargin" style="padding: 30px;">        */
/*             <div class="pull-left">*/
/*                 {{ form_widget(form.submit,  {'attr': {'class': 'btn btn-success'}}) }}       */
/*             </div>*/
/*             <div class="pull-right">*/
/*               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>*/
/*             </div>*/
/*         </div>  */
/*            */
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
/* */
/* */
/* */

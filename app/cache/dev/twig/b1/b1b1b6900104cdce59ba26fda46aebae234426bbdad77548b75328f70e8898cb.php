<?php

/* PadelScheduleMainBundle:Competitions:crearRecurso.html.twig */
class __TwigTemplate_1bb30dbbb79fa7101e35ab4bd1d7f7d2a858773c8211d025ecc3a8cf2a0fefc3 extends Twig_Template
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
        $__internal_92b38a48bed975969870f960b9bb7c3bdd4470bafd6d0a18d5f3eea6a16911a5 = $this->env->getExtension("native_profiler");
        $__internal_92b38a48bed975969870f960b9bb7c3bdd4470bafd6d0a18d5f3eea6a16911a5->enter($__internal_92b38a48bed975969870f960b9bb7c3bdd4470bafd6d0a18d5f3eea6a16911a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:crearRecurso.html.twig"));

        // line 1
        echo "
<div class=\"block divcenter\" style=\"background-color: #FFF; max-width: 1000px;\">
    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("crearRecurso", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "attr" => array("id" => "horarioFormRecurso")));
        echo "
    
    
    <div class=\"modal-header center nobottommargin fancy-title title-bottom-border darkgrey\">      
        <h3><span>Por favor, rellene la siguiente información</span></h3>             
    </div>
    <div class=\"modal-body center\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "club", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "club", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "club", array()), 'errors');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancha", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancha", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
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
        // line 41
        $context["time"] = "8:30";
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                    
                <tr>
                    <td align = \"center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "H:i"), "html", null, true);
            echo " </td>
                    ";
            // line 46
            $context["time"] = twig_date_modify_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "+30 minutes");
            // line 47
            echo "                    <td class=\"seleccionable\" id=\"tdRL";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRL";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRM";
            // line 48
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRM";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRX";
            // line 49
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRX";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRJ";
            // line 50
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRJ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRV";
            // line 51
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRV";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRS";
            // line 52
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRS";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                    <td class=\"seleccionable\" id=\"tdRD";
            // line 53
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"tdRD";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" align=\"center\"></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>
    </div>
            
    <div class=\"modal-footer section center nomargin\" style=\"padding: 30px;\">        
        <div class=\"pull-left\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "       
        </div>
        <div class=\"pull-right\">
          <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
        </div>
    </div>         
            
    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_92b38a48bed975969870f960b9bb7c3bdd4470bafd6d0a18d5f3eea6a16911a5->leave($__internal_92b38a48bed975969870f960b9bb7c3bdd4470bafd6d0a18d5f3eea6a16911a5_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:crearRecurso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  170 => 62,  162 => 56,  151 => 53,  145 => 52,  139 => 51,  133 => 50,  127 => 49,  121 => 48,  114 => 47,  112 => 46,  108 => 45,  104 => 43,  99 => 42,  97 => 41,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  36 => 10,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div class="block divcenter" style="background-color: #FFF; max-width: 1000px;">*/
/*     {{ form_start(form, {'action': path('crearRecurso', {'idCompeticion':competicion.id }), 'attr': {'id': 'horarioFormRecurso'}}) }}*/
/*     */
/*     */
/*     <div class="modal-header center nobottommargin fancy-title title-bottom-border darkgrey">      */
/*         <h3><span>Por favor, rellene la siguiente información</span></h3>             */
/*     </div>*/
/*     <div class="modal-body center">*/
/*         {{ form_errors(form) }}*/
/*         <div class="form-group">*/
/*             {{ form_label(form.club) }}*/
/*             {{ form_widget(form.club, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.club) }}*/
/*             {{ form_label(form.cancha) }}*/
/*             {{ form_widget(form.cancha, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.cancha) }}*/
/*             {{ form_label(form.direccion) }}*/
/*             {{ form_widget(form.direccion, {'attr': {'class': 'form-control'}}) }}*/
/*             {{ form_errors(form.direccion) }}*/
/*         </div>*/
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
/*                     <td class="seleccionable" id="tdRL{{i}}" name="tdRL{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRM{{i}}" name="tdRM{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRX{{i}}" name="tdRX{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRJ{{i}}" name="tdRJ{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRV{{i}}" name="tdRV{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRS{{i}}" name="tdRS{{i}}" align="center"></td>*/
/*                     <td class="seleccionable" id="tdRD{{i}}" name="tdRD{{i}}" align="center"></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*             */
/*     <div class="modal-footer section center nomargin" style="padding: 30px;">        */
/*         <div class="pull-left">*/
/*             {{ form_widget(form.submit,  {'attr': {'class': 'btn btn-success'}}) }}       */
/*         </div>*/
/*         <div class="pull-right">*/
/*           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>*/
/*         </div>*/
/*     </div>         */
/*             */
/*     {{ form_end(form) }}*/
/* </div>*/

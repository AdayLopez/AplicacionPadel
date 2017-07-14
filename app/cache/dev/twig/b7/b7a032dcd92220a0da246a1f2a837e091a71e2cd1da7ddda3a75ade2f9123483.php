<?php

/* PadelScheduleMainBundle:Competitions:verCompeticion.html.twig */
class __TwigTemplate_4df81dfed15ea07eb2626aa0bf19045b6ff4f51ffdf06b000b6477369c40896e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'scripts' => array($this, 'block_scripts'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678cb1a7659b8c598ab5dba20c86c426ededfcd3b11bef2514487e6aa0b12657 = $this->env->getExtension("native_profiler");
        $__internal_678cb1a7659b8c598ab5dba20c86c426ededfcd3b11bef2514487e6aa0b12657->enter($__internal_678cb1a7659b8c598ab5dba20c86c426ededfcd3b11bef2514487e6aa0b12657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678cb1a7659b8c598ab5dba20c86c426ededfcd3b11bef2514487e6aa0b12657->leave($__internal_678cb1a7659b8c598ab5dba20c86c426ededfcd3b11bef2514487e6aa0b12657_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_f01fadeced8f915846e6f85f934d19c05e8333bf589011b6d42f588d53c97931 = $this->env->getExtension("native_profiler");
        $__internal_f01fadeced8f915846e6f85f934d19c05e8333bf589011b6d42f588d53c97931->enter($__internal_f01fadeced8f915846e6f85f934d19c05e8333bf589011b6d42f588d53c97931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/daterangepicker.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/timepicker.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/css/components/bs-datatable.css"), "html", null, true);
        echo "\"  type=\"text/css\" /> 
";
        
        $__internal_f01fadeced8f915846e6f85f934d19c05e8333bf589011b6d42f588d53c97931->leave($__internal_f01fadeced8f915846e6f85f934d19c05e8333bf589011b6d42f588d53c97931_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_cbfe1eb3f11533af60327b10f05700debb91e38ba3b72a7104f1d7dc080c5294 = $this->env->getExtension("native_profiler");
        $__internal_cbfe1eb3f11533af60327b10f05700debb91e38ba3b72a7104f1d7dc080c5294->enter($__internal_cbfe1eb3f11533af60327b10f05700debb91e38ba3b72a7104f1d7dc080c5294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/bs-datatable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/rangeSelector.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Date Range Picker -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/js/components/daterangepicker.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cbfe1eb3f11533af60327b10f05700debb91e38ba3b72a7104f1d7dc080c5294->leave($__internal_cbfe1eb3f11533af60327b10f05700debb91e38ba3b72a7104f1d7dc080c5294_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_a648ba0e0ca7c5ccd9fde71c27c798bb1594f9d82c8f40ac986be13a72de4fd6 = $this->env->getExtension("native_profiler");
        $__internal_a648ba0e0ca7c5ccd9fde71c27c798bb1594f9d82c8f40ac986be13a72de4fd6->enter($__internal_a648ba0e0ca7c5ccd9fde71c27c798bb1594f9d82c8f40ac986be13a72de4fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Competicion";
        
        $__internal_a648ba0e0ca7c5ccd9fde71c27c798bb1594f9d82c8f40ac986be13a72de4fd6->leave($__internal_a648ba0e0ca7c5ccd9fde71c27c798bb1594f9d82c8f40ac986be13a72de4fd6_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c975fbc3fd5c6fadf8ad8d12251a37947ed8c9718239feaccf2b8b0263de3667 = $this->env->getExtension("native_profiler");
        $__internal_c975fbc3fd5c6fadf8ad8d12251a37947ed8c9718239feaccf2b8b0263de3667->enter($__internal_c975fbc3fd5c6fadf8ad8d12251a37947ed8c9718239feaccf2b8b0263de3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    ";
        // line 21
        $context["creador"] = 0;
        // line 22
        echo "    ";
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 23
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "creador", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 24
                echo "            ";
                $context["creador"] = 1;
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <!-- Content
    ============================================= -->
    <section id=\"content\">
        <div class=\"single-event\">
            <div class=\"content-wrap nopadding\">
                <div class=\"container clearfix\" style=\"width: 90%\">\t\t

                    <div class=\"tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all\" id=\"tabs\">

                        <ul class=\"tab-nav clearfix\">
                            <li><a href=\"#tab-1\">Información general</a></li>
                            <li><a href=\"#tab-2\">Calendario</a></li>
                            <li><a href=\"#tab-3\">Clasificación</a></li>
                            <li><a href=\"#tab-4\">Normas, ajustes y recursos</a></li>
                        </ul>

                        <div class=\"tab-container\">
                            <div class=\"tab-content clearfix\" id=\"tab-1\">
                                
                                
                                <div class=\"fancy-title title-double-border\">
                                    <h1>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "nombre", array()), "html", null, true);
        echo "</h1>
                                </div>
                                <div class=\"col_three_fourth\">
                                    <div class=\"entry-image \">
                                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "getWebFotoCompeticionRuta", array(), "method")), "html", null, true);
        echo "\" alt=\"Foto de la competición\">
                                    </div>
                                    <h3>Descripción de la competición</h3>
                                    <p> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "descripcion", array()), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"col_one_fourth col_last\">
                                    <div class=\"panel panel-default events-meta\">
                                        <div class=\"panel-heading\">
                                            <h3 class=\"panel-title\">Información general:</h3>
                                        </div>
                                        <div class=\"panel-body\">
                                            <ul class=\"iconlist nobottommargin\">
                                                <li><i class=\"icon-calendar3\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "fechaInicio", array()), "medium", "none"), "html", null, true);
        echo "  </li>
                                                <li><i class=\"icon-map-marker2\"></i> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "localizacion", array()), "html", null, true);
        echo " </li>                                                
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"toggle\">
                                        <div class=\"togglet\"><i class=\"toggle-closed icon-circle-arrow-right\"></i><i class=\"toggle-open icon-circle-arrow-down\"></i>Listado de participantes</div>
                                        <div class=\"togglec\">
                                            <div class=\"table-responsive\">
                                                <table id=\"tablaPadel\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                        <tr>
                                                            <th>Usuario</th>
                                                            <th>Pareja</th>   \t\t\t\t\t\t\t\t\t
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion"]) {
            // line 84
            echo "                                                            <tr>                                                    
                                                                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscripcion"], "jugador", array()), "username", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "nombrePareja", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t                                                    
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscripcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>                   
                                    ";
        // line 95
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            echo "                    
                                        ";
            // line 96
            if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estado", array()) == "Cerrada")) {
                echo "                                        
                                            <button type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Debe publicar la competición antes de que se permita la inscripción\">Inscribirse</button>
                                            ";
                // line 98
                if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                    // line 99
                    echo "                                                ";
                    if (twig_test_empty($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "recursos", array()))) {
                        // line 100
                        echo "                                                    ";
                        // line 101
                        echo "                                                    <button type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Para publicar esta competición debe añadir recursos en la pestaña 'Normas, ajustes y recursos'\">Publicar competición</button>
                                                ";
                    } else {
                        // line 103
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicar", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-success btn-block btn-lg\" >Publicar competición</a>
                                                ";
                    }
                    // line 104
                    echo "                                                
                                            ";
                }
                // line 106
                echo "                                        ";
            } else {
                echo "                                              
                                            ";
                // line 107
                if ((isset($context["inscripcion"]) ? $context["inscripcion"] : $this->getContext($context, "inscripcion"))) {
                    // line 108
                    echo "                                                ";
                    if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()) == 0)) {
                        // line 109
                        echo "                                                    <button  type=\"button\" class=\"btn btn-danger btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#abandonarCompeticion\">Abandonar Competición</button>
                                                    <div class=\"modal fade\" id=\"abandonarCompeticion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Abandonar Competición\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog modal-sm\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"center nobottommargin fancy-title title-bottom-border darkgrey\">      
                                                                    <h4><span>¿Está seguro que desea abandonar esta competición?</span></h4>             
                                                                </div>
                                                                <div class=\"center\">
                                                                    <a href=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abandonarCompeticion", array("idInscripcion" => $this->getAttribute((isset($context["inscripcion"]) ? $context["inscripcion"] : $this->getContext($context, "inscripcion")), "id", array()))), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-success\" style=\"margin: 10px;\">Confirmar</a>
                                                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancelar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                    }
                    // line 124
                    echo "                                            ";
                } else {
                    echo "            
                                                <button  type=\"button\" class=\"btn btn-success btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#seleccionarPreferencia\">Inscribirse</button>
                                                <div class=\"modal fade\" id=\"seleccionarPreferencia\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Preferencia horaria\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">    
                                                            ";
                    // line 129
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:seleccionarPreferencias", array("idCompeticion" => $this->getAttribute(                    // line 130
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))));
                    // line 131
                    echo "
                                                        </div>
                                                    </div>
                                                </div> 
                                            ";
                }
                // line 135
                echo "             
                                        ";
            }
            // line 136
            echo "             
                                    ";
        }
        // line 137
        echo "             

                                </div>

                                <div class=\"clear\"></div>\t\t\t\t


                            </div>
                            <div class=\"tab-content clearfix\" id=\"tab-2\">
                                <div class=\"content-wrap\">

                                    <div class=\"parallax header-stick bottommargin-lg\" style=\"padding: 60px 0; background-image:  url(";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/padelschedulemain/images/parallaxPaddsdel1.jpg"), "html", null, true);
        echo "); height: auto;\" data-stellar-background-ratio=\"0.5\">

                                        <div class=\"container clearfix\">

                                            <div class=\"events-calendar\">
                                                <div class=\"events-calendar-header clearfix\">
                                                    <h2>Events Overview</h2>
                                                    <h3 class=\"calendar-month-year\">
                                                        <span id=\"calendar-month\" class=\"calendar-month\"></span>
                                                        <span id=\"calendar-year\" class=\"calendar-year\"></span>
                                                        <nav>
                                                            <span id=\"calendar-prev\" class=\"calendar-prev\"><i class=\"icon-chevron-left\"></i></span>
                                                            <span id=\"calendar-next\" class=\"calendar-next\"><i class=\"icon-chevron-right\"></i></span>
                                                            <span id=\"calendar-current\" class=\"calendar-current\" title=\"Got to current date\"><i class=\"icon-reload\"></i></span>
                                                        </nav>
                                                    </h3>
                                                </div>
                                                <div id=\"calendar\" class=\"fc-calendar-container\"></div>
                                            </div>

                                            <script type=\"text/javascript\">
                                                var canvasEvents = {
                                                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "partidos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["partido"]) {
            // line 171
            echo "                                                        '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "m-d-Y"), "html", null, true);
            echo "' : '";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["partido"], "fechaHora", array()), "G:i"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion1", array()), "nombrePareja", array()), "html", null, true);
            echo " vs ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "jugador", array()), "username", array()), "html", null, true);
            echo " y ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partido"], "inscripcion2", array()), "nombrePareja", array()), "html", null, true);
            echo "',                                                         
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                                                            
                                                };
                                                var cal = \$('#calendar').calendario({
                                                onDayClick: function (\$el, \$contentEl, dateProperties) {

                                                for (var key in dateProperties) {
                                                console.log(key + ' = ' + dateProperties[ key ]);
                                                }

                                                },
                                                        caldata: canvasEvents
                                                }),
                                                        \$month = \$('#calendar-month').html(cal.getMonthName()),
                                                        \$year = \$('#calendar-year').html(cal.getYear());
                                                        \$('#calendar-next').on('click', function () {
                                                cal.gotoNextMonth(updateMonthYear);
                                                });
                                                        \$('#calendar-prev').on('click', function () {
                                                cal.gotoPreviousMonth(updateMonthYear);
                                                });
                                                        \$('#calendar-current').on('click', function () {
                                                cal.gotoNow(updateMonthYear);
                                                });
                                                        function updateMonthYear() {
                                                        \$month.html(cal.getMonthName());
                                                                \$year.html(cal.getYear());
                                                        }

                                            </script>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class=\"tab-content clearfix\" id=\"tab-3\">
                                ";
        // line 211
        echo "                                <div class=\"col_half\">

                                    <div class=\"table-responsive\">
                                        <table id=\"tablaPadel\" class=\"tablaClasificacion table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th>Posición</th>
                                                    <th>Jugador 1</th>
                                                    <th>Jugador 2</th>\t\t\t\t\t\t\t\t\t
                                                    <th>PG</th>\t\t\t\t\t\t\t\t\t                                                    \t\t\t\t\t\t\t\t
                                                    <th>PP</th>\t\t\t\t\t\t\t\t\t
                                                    <th>Puntos</th>\t\t\t\t\t\t\t\t\t
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Posición</th>
                                                    <th>Jugador 1</th>
                                                    <th>Jugador 2</th>\t\t\t\t\t\t\t\t\t
                                                    <th>PG</th>\t\t\t\t\t\t\t\t\t                                                    
                                                    <th>PP</th>\t\t\t\t\t\t\t\t\t
                                                    <th>Puntos</th>\t\t\t\t\t\t\t\t\t\t
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion"]) {
            // line 237
            echo "                                                    <tr>
                                                        <td></td>
                                                        <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscripcion"], "jugador", array()), "username", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "nombrePareja", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                        <td>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "partidosGanados", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t                                                        \t\t\t\t\t
                                                        <td>";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscripcion"], "partidosPerdidos", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                        <td>";
            // line 243
            echo twig_escape_filter($this->env, (($this->getAttribute($context["inscripcion"], "partidosGanados", array()) * $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorGanar", array())) + ($this->getAttribute($context["inscripcion"], "partidosPerdidos", array()) * $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorPerder", array()))), "html", null, true);
            echo "</td>
                                                    </tr>                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscripcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <script>
                                    \$(document).ready(function() {
                                    \$('.tablaClasificacion').DataTable({
                                    \"bFilter\":  false,
                                            \"paging\":   false,
                                            \"columns\": [
                                            {\"orderable\":false},
                                            {\"orderable\":false},
                                            {\"orderable\":false},                                            
                                            {\"orderable\":false},
                                            {\"orderable\":false},
                                            {\"orderable\":false}
                                            ],
                                            \"info\":     false,
                                            \"order\": [[ 5, \"desc\" ]]
                                    });                                    ";
        // line 267
        echo "                                                \$('.tablaClasificacion tbody tr').each(function(index){
                                        \$('td:first-child', this).html(index + 1);
                                        });
                                        });                                </script>

                                ";
        // line 273
        echo "                                <div class=\"col_half col_last\">
                                    ";
        // line 274
        if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()) == 0)) {
            // line 275
            echo "                                        ";
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 276
                echo "                                            ";
                // line 277
                echo "                                            ";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "inscripciones", array())) < 2)) {
                    // line 278
                    echo "                                                <button  type=\"button\" class=\"btn disabled btn-block btn-lg\" data-toggle=\"tooltip\" title=\"Para generar los cruces entre parejas se debe haber publicado previamente la competición\">Generar cuadrante</button>
                                            ";
                } else {
                    // line 280
                    echo "                                                <button  onclick=\"window.location.href = '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generarCuadrante", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                    echo "'\" type=\"button\" class=\"button button-lime button-rounded button-3d btn-block btn-lg\">Generar cuadrante</button>
                                            ";
                }
                // line 282
                echo "                                        ";
            }
            // line 283
            echo "                                    ";
        } else {
            // line 284
            echo "                                        ";
            // line 285
            echo "                                        <div>

                                            <form class=\"inline\">
                                                <label class=\"inline-block\"> Seleccione la jornada a visualizar </label>
                                                <select id=\"selectJornada\">
                                                    ";
            // line 290
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 291
                echo "                                                        ";
                if (($context["i"] == $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()))) {
                    // line 292
                    echo "                                                            <option selected=\"selected\" value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                                        ";
                } else {
                    // line 294
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                                        ";
                }
                // line 296
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                                                </select>
                                            </form>
                                        </div>
                                        <div id=\"jornada\">                                      
                                            ";
            // line 301
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:buscarJornada", array("idCompeticion" => $this->getAttribute(            // line 302
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "numJornada" => ((($this->getAttribute(            // line 303
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) == 0)) ? (1) : ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()))))));
            // line 304
            echo "
                                        </div>


                                        <script>
                                            ";
            // line 310
            echo "                                                        \$(document).ready(function () {
                                                \$(\"#selectJornada\").on('change', function () {
                                                \$('#jornada').load(Routing.generate('buscarJornada', { idCompeticion:";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "html", null, true);
            echo ", numJornada: this.value }));
                                                });
                                                });</script>
                                            ";
            // line 315
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 316
                echo "                                                ";
                // line 317
                echo "                                                ";
                // line 318
                echo "                                                ";
                if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) < $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "numJornadas", array()))) {
                    // line 319
                    echo "                                                <label> Próxima jornada: ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) + 1), "html", null, true);
                    echo " </label>    
                                                <button type=\"button\" class=\"button button-lime button-rounded button-3d btn-block btn-lg\" data-toggle=\"modal\" data-target=\"#modalGenerarHorario\">Generar fechas</button>

                                                <div class=\"modal fade\" id=\"modalGenerarHorario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\">
                                                        <div class=\"modal-body\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Autogeneración de fechas</h4>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <label>Seleccione el rango de fechas en que se colocarán los partidos:</label>
                                                                    <input type=\"text\" class=\"sm-form-control daterange1\" value=\"\" />
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>                                                                                                                                        
                                                                    <button type=\"button\" class=\"btn btn-primary generarFechas\">Generar fechas</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <script>
                                                            \$(function () {                                                            
                                                            inicio = new moment();
                                                            inicio = inicio.add(1, 'days')
                                                                    \$(\".daterange1\").daterangepicker({
                                                            locale: {
                                                            \"format\": 'DD-MM-YYYY',
                                                                    \"applyLabel\": \"Aceptar\",
                                                                    \"cancelLabel\": \"Cancelar\",
                                                                    \"fromLabel\": \"Desde\",
                                                                    \"toLabel\": \"A\",
                                                                    \"customRangeLabel\": \"Custom\",
                                                                    \"daysOfWeek\": [
                                                                            \"D\",
                                                                            \"L\",
                                                                            \"M\",
                                                                            \"X\",
                                                                            \"J\",
                                                                            \"V\",
                                                                            \"S\"
                                                                    ],
                                                                    \"monthNames\": [
                                                                            \"Enero\",
                                                                            \"Febrero\",
                                                                            \"Marzo\",
                                                                            \"Abril\",
                                                                            \"Mayo\",
                                                                            \"Junio\",
                                                                            \"Julio\",
                                                                            \"Agosto\",
                                                                            \"Septiembre\",
                                                                            \"Octubre\",
                                                                            \"Noviembre\",
                                                                            \"Diciembre\"
                                                                    ],
                                                                    \"firstDay\": 1
                                                            },
                                                                    buttonClasses: \"button button-rounded button-mini nomargin\",
                                                                    applyClass: \"button-color\",
                                                                    cancelClass: \"button-light\",
                                                                    startDate: inicio.format(\"D-M-YYYY\"),
                                                                    endDate: inicio.add(7, 'days').format(\"D-M-YYYY\")
                                                            });
                                                            \$(\".generarFechas\").click(function () {
                                                                rango = \$(\".daterange1\").val().split(\" - \");
                                                                window.location.href = Routing.generate('generarHorario', { idCompeticion:";
                    // line 387
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "html", null, true);
                    echo ", jornada:";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "jornadaActual", array()) + 1), "html", null, true);
                    echo ", fechaInicio: rango[0], fechaFin: rango[1]});
                                                            });
                                                            });
                                                </script>
                                            ";
                }
                // line 392
                echo "                                        ";
            }
            // line 393
            echo "                                    ";
        }
        // line 394
        echo "                                </div>



                            </div>

                            <div class=\"tab-content clearfix\" id=\"tab-4\">
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-exclamation-sign\"></i>    Normas</h4></div>
                                <p> ";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "normas", array()), "html", null, true);
        echo " </p>
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-params\"></i>    Método de puntuación</h4></div>
                                <div class=\"col_half center nobottommargin\">
                                    <p><label><i class=\"icon-arrow-up2\"></i> Puntos por ganar partido:</label> ";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorGanar", array()), "html", null, true);
        echo " </p>
                                </div>
                                
                                <div class=\"col_half col_last center nobottommargin\">
                                    <p><label><i class=\"icon-arrow-down2\"></i> Puntos por perder partido:</label> ";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "puntosPorPerder", array()), "html", null, true);
        echo " </p>
                                </div>
                                <div class=\"clear\"> </div>
                                <div class=\"fancy-title title-bottom-border title-center\"><h4><i class=\"icon-th-list\"></i>    Listado de recursos</h4></div>
                                <div class=\"table-responsive\">
                                    <table id=\"tablaPadel\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                                        <thead>
                                            <tr>
                                                <th>Club</th>
                                                <th>Cancha</th>
                                                <th>Horario en lunes</th>\t\t\t\t\t\t\t\t\t
                                                <th>Direccion</th>
                                                    ";
        // line 421
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 422
            echo "                                                    <th></th>
                                                    ";
        }
        // line 424
        echo "                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Club</th>
                                                <th>Cancha</th>
                                                <th>Horario en lunes</th>\t\t\t\t\t\t\t\t\t
                                                <th>Direccion</th>\t
                                                    ";
        // line 432
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 433
            echo "                                                    <th></th>
                                                    ";
        }
        // line 435
        echo "                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "recursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["recurso"]) {
            // line 439
            echo "                                                <tr>
                                                    <td>";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "club", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "cancha", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "horarioLunes", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t
                                                    <td>";
            // line 443
            echo twig_escape_filter($this->env, $this->getAttribute($context["recurso"], "direccion", array()), "html", null, true);
            echo "</td>
                                                    ";
            // line 444
            if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
                // line 445
                echo "                                                        <td class=\"text-center col-eliminar\"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarRecurso", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()), "idRecurso" => $this->getAttribute($context["recurso"], "id", array()))), "html", null, true);
                echo "\" <i class=\"icon-line-delete\"></i></td>                                                    
                                                        ";
            }
            // line 447
            echo "                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                                        </tbody>
                                    </table>
                                </div>

                                ";
        // line 453
        if ((isset($context["creador"]) ? $context["creador"] : $this->getContext($context, "creador"))) {
            // line 454
            echo "                                    
                                    <button type=\"button\" class=\"button button-rounded button-lime btn-block\" data-toggle=\"modal\" data-target=\"#crearRecurso\">Añadir recurso a la competición</button>
                                    <div class=\"modal fade\" id=\"crearRecurso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Preferencia horaria\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" style=\"width: 95%\">
                                            <div class=\"modal-content\">    
                                                ";
            // line 459
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PadelScheduleMainBundle:Main:crearRecurso", array("idCompeticion" => $this->getAttribute(            // line 460
(isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))));
            // line 461
            echo "
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    ";
            // line 466
            if (($this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "estado", array()) == "Cerrada")) {
                // line 467
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarCompeticion", array("idCompeticion" => $this->getAttribute((isset($context["competicion"]) ? $context["competicion"] : $this->getContext($context, "competicion")), "id", array()))), "html", null, true);
                echo "\" type=\"button\" class=\"button button-rounded button-lime btn-block center\">Modificar información de competición</a>
                                    
                                    ";
            }
            // line 470
            echo "                                ";
        }
        // line 471
        echo "
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>                                            

    </section>

";
        
        $__internal_c975fbc3fd5c6fadf8ad8d12251a37947ed8c9718239feaccf2b8b0263de3667->leave($__internal_c975fbc3fd5c6fadf8ad8d12251a37947ed8c9718239feaccf2b8b0263de3667_prof);

    }

    public function getTemplateName()
    {
        return "PadelScheduleMainBundle:Competitions:verCompeticion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 471,  834 => 470,  827 => 467,  825 => 466,  818 => 461,  816 => 460,  815 => 459,  808 => 454,  806 => 453,  800 => 449,  793 => 447,  787 => 445,  785 => 444,  781 => 443,  777 => 442,  773 => 441,  769 => 440,  766 => 439,  762 => 438,  757 => 435,  753 => 433,  751 => 432,  741 => 424,  737 => 422,  735 => 421,  720 => 409,  713 => 405,  707 => 402,  697 => 394,  694 => 393,  691 => 392,  681 => 387,  609 => 319,  606 => 318,  604 => 317,  602 => 316,  600 => 315,  594 => 312,  590 => 310,  583 => 304,  581 => 303,  580 => 302,  579 => 301,  573 => 297,  567 => 296,  559 => 294,  551 => 292,  548 => 291,  544 => 290,  537 => 285,  535 => 284,  532 => 283,  529 => 282,  523 => 280,  519 => 278,  516 => 277,  514 => 276,  511 => 275,  509 => 274,  506 => 273,  499 => 267,  477 => 246,  468 => 243,  464 => 242,  460 => 241,  456 => 240,  452 => 239,  448 => 237,  444 => 236,  417 => 211,  377 => 172,  358 => 171,  354 => 170,  329 => 148,  316 => 137,  312 => 136,  308 => 135,  301 => 131,  299 => 130,  298 => 129,  289 => 124,  279 => 117,  269 => 109,  266 => 108,  264 => 107,  259 => 106,  255 => 104,  249 => 103,  245 => 101,  243 => 100,  240 => 99,  238 => 98,  233 => 96,  229 => 95,  221 => 89,  212 => 86,  208 => 85,  205 => 84,  201 => 83,  180 => 65,  176 => 64,  164 => 55,  158 => 52,  151 => 48,  128 => 27,  125 => 26,  122 => 25,  119 => 24,  116 => 23,  113 => 22,  111 => 21,  103 => 20,  91 => 18,  82 => 14,  78 => 13,  73 => 11,  69 => 10,  61 => 9,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/daterangepicker.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/timepicker.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/padelschedulemain/css/components/bs-datatable.css')}}"  type="text/css" /> */
/* {% endblock css %}*/
/* */
/* {% block scripts %} */
/*     <script src="{{asset('bundles/padelschedulemain/js/components/bs-datatable.js')}}"></script>*/
/*     <script src="{{asset('bundles/padelschedulemain/js/rangeSelector.js')}}"></script>*/
/*     <!-- Include Date Range Picker -->*/
/*     <script src="{{asset('bundles/padelschedulemain/js/components/moment.js')}}"></script>*/
/*     <script src="{{asset('bundles/padelschedulemain/js/components/daterangepicker.js')}}"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block title %}Competicion{% endblock %}*/
/* */
/* {% block content %}    */
/*     {% set creador = 0 %}*/
/*     {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}*/
/*         {% if competicion.creador.id == app.user.id  %}*/
/*             {% set creador = 1 %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     <!-- Content*/
/*     ============================================= -->*/
/*     <section id="content">*/
/*         <div class="single-event">*/
/*             <div class="content-wrap nopadding">*/
/*                 <div class="container clearfix" style="width: 90%">		*/
/* */
/*                     <div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">*/
/* */
/*                         <ul class="tab-nav clearfix">*/
/*                             <li><a href="#tab-1">Información general</a></li>*/
/*                             <li><a href="#tab-2">Calendario</a></li>*/
/*                             <li><a href="#tab-3">Clasificación</a></li>*/
/*                             <li><a href="#tab-4">Normas, ajustes y recursos</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-container">*/
/*                             <div class="tab-content clearfix" id="tab-1">*/
/*                                 */
/*                                 */
/*                                 <div class="fancy-title title-double-border">*/
/*                                     <h1>{{ competicion.nombre }}</h1>*/
/*                                 </div>*/
/*                                 <div class="col_three_fourth">*/
/*                                     <div class="entry-image ">*/
/*                                         <img src="{{   asset(competicion.getWebFotoCompeticionRuta()) }}" alt="Foto de la competición">*/
/*                                     </div>*/
/*                                     <h3>Descripción de la competición</h3>*/
/*                                     <p> {{ competicion.descripcion }}</p>*/
/*                                 </div>*/
/*                                 <div class="col_one_fourth col_last">*/
/*                                     <div class="panel panel-default events-meta">*/
/*                                         <div class="panel-heading">*/
/*                                             <h3 class="panel-title">Información general:</h3>*/
/*                                         </div>*/
/*                                         <div class="panel-body">*/
/*                                             <ul class="iconlist nobottommargin">*/
/*                                                 <li><i class="icon-calendar3"></i> {{ competicion.fechaInicio|localizeddate("medium","none") }}  </li>*/
/*                                                 <li><i class="icon-map-marker2"></i> {{ competicion.localizacion }} </li>                                                */
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="toggle">*/
/*                                         <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Listado de participantes</div>*/
/*                                         <div class="togglec">*/
/*                                             <div class="table-responsive">*/
/*                                                 <table id="tablaPadel" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                                     <thead>*/
/*                                                         <tr>*/
/*                                                             <th>Usuario</th>*/
/*                                                             <th>Pareja</th>   									*/
/*                                                         </tr>*/
/*                                                     </thead>*/
/* */
/*                                                     <tbody>*/
/*                                                         {% for inscripcion in competicion.inscripciones %}*/
/*                                                             <tr>                                                    */
/*                                                                 <td>{{inscripcion.jugador.username}}</td>*/
/*                                                                 <td>{{inscripcion.nombrePareja}}</td>									                                                    */
/*                                                             </tr>*/
/*                                                         {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/*                                     </div>                   */
/*                                     {% if (is_granted('IS_AUTHENTICATED_FULLY') or is_granted('IS_AUTHENTICATED_REMEMBERED') ) %}                    */
/*                                         {% if competicion.estado == "Cerrada" %}                                        */
/*                                             <button type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Debe publicar la competición antes de que se permita la inscripción">Inscribirse</button>*/
/*                                             {% if creador %}*/
/*                                                 {% if competicion.recursos is empty %}*/
/*                                                     {# Publicación de la competición una vez toda la información sea rellenada, comprobar que no haya información relevante vacía                                            #}*/
/*                                                     <button type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Para publicar esta competición debe añadir recursos en la pestaña 'Normas, ajustes y recursos'">Publicar competición</button>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{ path('publicar', { 'idCompeticion': competicion.id }) }}" type="button" class="btn btn-success btn-block btn-lg" >Publicar competición</a>*/
/*                                                 {% endif %}                                                */
/*                                             {% endif %}*/
/*                                         {% else %}                                              */
/*                                             {% if inscripcion %}*/
/*                                                 {% if competicion.numJornadas == 0 %}*/
/*                                                     <button  type="button" class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#abandonarCompeticion">Abandonar Competición</button>*/
/*                                                     <div class="modal fade" id="abandonarCompeticion" tabindex="-1" role="dialog" aria-labelledby="Abandonar Competición" aria-hidden="true">*/
/*                                                         <div class="modal-dialog modal-sm">*/
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="center nobottommargin fancy-title title-bottom-border darkgrey">      */
/*                                                                     <h4><span>¿Está seguro que desea abandonar esta competición?</span></h4>             */
/*                                                                 </div>*/
/*                                                                 <div class="center">*/
/*                                                                     <a href="{{ path('abandonarCompeticion', { 'idInscripcion': inscripcion.id }) }}" type="button" class="btn btn-success" style="margin: 10px;">Confirmar</a>*/
/*                                                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% else %}            */
/*                                                 <button  type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#seleccionarPreferencia">Inscribirse</button>*/
/*                                                 <div class="modal fade" id="seleccionarPreferencia" tabindex="-1" role="dialog" aria-labelledby="Preferencia horaria" aria-hidden="true">*/
/*                                                     <div class="modal-dialog">*/
/*                                                         <div class="modal-content">    */
/*                                                             {{ render(controller("PadelScheduleMainBundle:Main:seleccionarPreferencias",*/
/*                                                             { 'idCompeticion': competicion.id }*/
/*                                                         )) }}*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div> */
/*                                             {% endif %}             */
/*                                         {% endif %}             */
/*                                     {% endif %}             */
/* */
/*                                 </div>*/
/* */
/*                                 <div class="clear"></div>				*/
/* */
/* */
/*                             </div>*/
/*                             <div class="tab-content clearfix" id="tab-2">*/
/*                                 <div class="content-wrap">*/
/* */
/*                                     <div class="parallax header-stick bottommargin-lg" style="padding: 60px 0; background-image:  url({{asset('bundles/padelschedulemain/images/parallaxPaddsdel1.jpg')}}); height: auto;" data-stellar-background-ratio="0.5">*/
/* */
/*                                         <div class="container clearfix">*/
/* */
/*                                             <div class="events-calendar">*/
/*                                                 <div class="events-calendar-header clearfix">*/
/*                                                     <h2>Events Overview</h2>*/
/*                                                     <h3 class="calendar-month-year">*/
/*                                                         <span id="calendar-month" class="calendar-month"></span>*/
/*                                                         <span id="calendar-year" class="calendar-year"></span>*/
/*                                                         <nav>*/
/*                                                             <span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>*/
/*                                                             <span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>*/
/*                                                             <span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>*/
/*                                                         </nav>*/
/*                                                     </h3>*/
/*                                                 </div>*/
/*                                                 <div id="calendar" class="fc-calendar-container"></div>*/
/*                                             </div>*/
/* */
/*                                             <script type="text/javascript">*/
/*                                                 var canvasEvents = {*/
/*                                                     {% for partido in competicion.partidos %}*/
/*                                                         '{{partido.fechaHora|date('m-d-Y')}}' : '{{partido.fechaHora|date('G:i')}} - {{partido.inscripcion1.jugador.username}} y {{partido.inscripcion1.nombrePareja}} vs {{partido.inscripcion2.jugador.username}} y {{partido.inscripcion2.nombrePareja}}',                                                         */
/*                                                     {% endfor %}                                                            */
/*                                                 };*/
/*                                                 var cal = $('#calendar').calendario({*/
/*                                                 onDayClick: function ($el, $contentEl, dateProperties) {*/
/* */
/*                                                 for (var key in dateProperties) {*/
/*                                                 console.log(key + ' = ' + dateProperties[ key ]);*/
/*                                                 }*/
/* */
/*                                                 },*/
/*                                                         caldata: canvasEvents*/
/*                                                 }),*/
/*                                                         $month = $('#calendar-month').html(cal.getMonthName()),*/
/*                                                         $year = $('#calendar-year').html(cal.getYear());*/
/*                                                         $('#calendar-next').on('click', function () {*/
/*                                                 cal.gotoNextMonth(updateMonthYear);*/
/*                                                 });*/
/*                                                         $('#calendar-prev').on('click', function () {*/
/*                                                 cal.gotoPreviousMonth(updateMonthYear);*/
/*                                                 });*/
/*                                                         $('#calendar-current').on('click', function () {*/
/*                                                 cal.gotoNow(updateMonthYear);*/
/*                                                 });*/
/*                                                         function updateMonthYear() {*/
/*                                                         $month.html(cal.getMonthName());*/
/*                                                                 $year.html(cal.getYear());*/
/*                                                         }*/
/* */
/*                                             </script>*/
/* */
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="tab-content clearfix" id="tab-3">*/
/*                                 {#                                <div class="col_three_fifth">#}*/
/*                                 <div class="col_half">*/
/* */
/*                                     <div class="table-responsive">*/
/*                                         <table id="tablaPadel" class="tablaClasificacion table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>Posición</th>*/
/*                                                     <th>Jugador 1</th>*/
/*                                                     <th>Jugador 2</th>									*/
/*                                                     <th>PG</th>									                                                    								*/
/*                                                     <th>PP</th>									*/
/*                                                     <th>Puntos</th>									*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tfoot>*/
/*                                                 <tr>*/
/*                                                     <th>Posición</th>*/
/*                                                     <th>Jugador 1</th>*/
/*                                                     <th>Jugador 2</th>									*/
/*                                                     <th>PG</th>									                                                    */
/*                                                     <th>PP</th>									*/
/*                                                     <th>Puntos</th>										*/
/*                                                 </tr>*/
/*                                             </tfoot>*/
/*                                             <tbody>*/
/*                                                 {% for inscripcion in competicion.inscripciones %}*/
/*                                                     <tr>*/
/*                                                         <td></td>*/
/*                                                         <td>{{inscripcion.jugador.username}}</td>*/
/*                                                         <td>{{inscripcion.nombrePareja}}</td>									*/
/*                                                         <td>{{inscripcion.partidosGanados}}</td>									                                                        					*/
/*                                                         <td>{{inscripcion.partidosPerdidos}}</td>									*/
/*                                                         <td>{{inscripcion.partidosGanados * competicion.puntosPorGanar + inscripcion.partidosPerdidos * competicion.puntosPorPerder}}</td>*/
/*                                                     </tr>                                                    */
/*                                                 {% endfor %}*/
/* */
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <script>*/
/*                                     $(document).ready(function() {*/
/*                                     $('.tablaClasificacion').DataTable({*/
/*                                     "bFilter":  false,*/
/*                                             "paging":   false,*/
/*                                             "columns": [*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},                                            */
/*                                             {"orderable":false},*/
/*                                             {"orderable":false},*/
/*                                             {"orderable":false}*/
/*                                             ],*/
/*                                             "info":     false,*/
/*                                             "order": [[ 5, "desc" ]]*/
/*                                     });                                    {#                                        Añadimos la posición por orden de puntos #}*/
/*                                                 $('.tablaClasificacion tbody tr').each(function(index){*/
/*                                         $('td:first-child', this).html(index + 1);*/
/*                                         });*/
/*                                         });                                </script>*/
/* */
/*                                 {#                                <div class="col_two_fifth col_last">#}*/
/*                                 <div class="col_half col_last">*/
/*                                     {% if competicion.numJornadas == 0 %}*/
/*                                         {% if creador %}*/
/*                                             {# Comprobamos hay suficientes inscripciones para generar el cuadrante y cerrar las inscripciones #}*/
/*                                             {% if competicion.inscripciones|length < 2 %}*/
/*                                                 <button  type="button" class="btn disabled btn-block btn-lg" data-toggle="tooltip" title="Para generar los cruces entre parejas se debe haber publicado previamente la competición">Generar cuadrante</button>*/
/*                                             {% else %}*/
/*                                                 <button  onclick="window.location.href = '{{ path('generarCuadrante', { 'idCompeticion':competicion.id }) }}'" type="button" class="button button-lime button-rounded button-3d btn-block btn-lg">Generar cuadrante</button>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/*                                         {#Generamos tabla con cuadrante#}*/
/*                                         <div>*/
/* */
/*                                             <form class="inline">*/
/*                                                 <label class="inline-block"> Seleccione la jornada a visualizar </label>*/
/*                                                 <select id="selectJornada">*/
/*                                                     {% for i in 1..competicion.numJornadas %}*/
/*                                                         {% if i == competicion.jornadaActual %}*/
/*                                                             <option selected="selected" value="{{i}}">{{i}}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{i}}">{{i}}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </form>*/
/*                                         </div>*/
/*                                         <div id="jornada">                                      */
/*                                             {{ render(controller("PadelScheduleMainBundle:Main:buscarJornada",*/
/*                                                             { 'idCompeticion': competicion.id,*/
/*                                                               'numJornada': (competicion.jornadaActual == 0) ? 1 : competicion.jornadaActual   }*/
/*                                                         )) }}*/
/*                                         </div>*/
/* */
/* */
/*                                         <script>*/
/*                                             {#  Script para mostrar las jornadas de forma dinámica  #}*/
/*                                                         $(document).ready(function () {*/
/*                                                 $("#selectJornada").on('change', function () {*/
/*                                                 $('#jornada').load(Routing.generate('buscarJornada', { idCompeticion:{{competicion.id}}, numJornada: this.value }));*/
/*                                                 });*/
/*                                                 });</script>*/
/*                                             {% if creador %}*/
/*                                                 {#<a href="{{ path('generarHorario', { 'idCompeticion': competicion.id }) }}" type="button" class="btn btn-success btn-block btn-lg" >Generar fechas</a>#}*/
/*                                                 {#                                        Comprobamos que no se ha generado ya el horario de la última jornada#}*/
/*                                                 {% if competicion.jornadaActual < competicion.numJornadas %}*/
/*                                                 <label> Próxima jornada: {{ competicion.jornadaActual + 1 }} </label>    */
/*                                                 <button type="button" class="button button-lime button-rounded button-3d btn-block btn-lg" data-toggle="modal" data-target="#modalGenerarHorario">Generar fechas</button>*/
/* */
/*                                                 <div class="modal fade" id="modalGenerarHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                                                     <div class="modal-dialog">*/
/*                                                         <div class="modal-body">*/
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                                     <h4 class="modal-title" id="myModalLabel">Autogeneración de fechas</h4>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <label>Seleccione el rango de fechas en que se colocarán los partidos:</label>*/
/*                                                                     <input type="text" class="sm-form-control daterange1" value="" />*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-footer">*/
/*                                                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                                                                                                                        */
/*                                                                     <button type="button" class="btn btn-primary generarFechas">Generar fechas</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div> */
/*                                                 <script>*/
/*                                                             $(function () {                                                            */
/*                                                             inicio = new moment();*/
/*                                                             inicio = inicio.add(1, 'days')*/
/*                                                                     $(".daterange1").daterangepicker({*/
/*                                                             locale: {*/
/*                                                             "format": 'DD-MM-YYYY',*/
/*                                                                     "applyLabel": "Aceptar",*/
/*                                                                     "cancelLabel": "Cancelar",*/
/*                                                                     "fromLabel": "Desde",*/
/*                                                                     "toLabel": "A",*/
/*                                                                     "customRangeLabel": "Custom",*/
/*                                                                     "daysOfWeek": [*/
/*                                                                             "D",*/
/*                                                                             "L",*/
/*                                                                             "M",*/
/*                                                                             "X",*/
/*                                                                             "J",*/
/*                                                                             "V",*/
/*                                                                             "S"*/
/*                                                                     ],*/
/*                                                                     "monthNames": [*/
/*                                                                             "Enero",*/
/*                                                                             "Febrero",*/
/*                                                                             "Marzo",*/
/*                                                                             "Abril",*/
/*                                                                             "Mayo",*/
/*                                                                             "Junio",*/
/*                                                                             "Julio",*/
/*                                                                             "Agosto",*/
/*                                                                             "Septiembre",*/
/*                                                                             "Octubre",*/
/*                                                                             "Noviembre",*/
/*                                                                             "Diciembre"*/
/*                                                                     ],*/
/*                                                                     "firstDay": 1*/
/*                                                             },*/
/*                                                                     buttonClasses: "button button-rounded button-mini nomargin",*/
/*                                                                     applyClass: "button-color",*/
/*                                                                     cancelClass: "button-light",*/
/*                                                                     startDate: inicio.format("D-M-YYYY"),*/
/*                                                                     endDate: inicio.add(7, 'days').format("D-M-YYYY")*/
/*                                                             });*/
/*                                                             $(".generarFechas").click(function () {*/
/*                                                                 rango = $(".daterange1").val().split(" - ");*/
/*                                                                 window.location.href = Routing.generate('generarHorario', { idCompeticion:{{competicion.id}}, jornada:{{competicion.jornadaActual+1}}, fechaInicio: rango[0], fechaFin: rango[1]});*/
/*                                                             });*/
/*                                                             });*/
/*                                                 </script>*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/* */
/* */
/*                             </div>*/
/* */
/*                             <div class="tab-content clearfix" id="tab-4">*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-exclamation-sign"></i>    Normas</h4></div>*/
/*                                 <p> {{ competicion.normas }} </p>*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-params"></i>    Método de puntuación</h4></div>*/
/*                                 <div class="col_half center nobottommargin">*/
/*                                     <p><label><i class="icon-arrow-up2"></i> Puntos por ganar partido:</label> {{competicion.puntosPorGanar}} </p>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_half col_last center nobottommargin">*/
/*                                     <p><label><i class="icon-arrow-down2"></i> Puntos por perder partido:</label> {{competicion.puntosPorPerder}} </p>*/
/*                                 </div>*/
/*                                 <div class="clear"> </div>*/
/*                                 <div class="fancy-title title-bottom-border title-center"><h4><i class="icon-th-list"></i>    Listado de recursos</h4></div>*/
/*                                 <div class="table-responsive">*/
/*                                     <table id="tablaPadel" class="table table-striped table-bordered" cellspacing="0" width="100%">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Club</th>*/
/*                                                 <th>Cancha</th>*/
/*                                                 <th>Horario en lunes</th>									*/
/*                                                 <th>Direccion</th>*/
/*                                                     {% if creador %}*/
/*                                                     <th></th>*/
/*                                                     {% endif %}*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tfoot>*/
/*                                             <tr>*/
/*                                                 <th>Club</th>*/
/*                                                 <th>Cancha</th>*/
/*                                                 <th>Horario en lunes</th>									*/
/*                                                 <th>Direccion</th>	*/
/*                                                     {% if creador %}*/
/*                                                     <th></th>*/
/*                                                     {% endif %}*/
/*                                             </tr>*/
/*                                         </tfoot>*/
/*                                         <tbody>*/
/*                                             {% for recurso in competicion.recursos %}*/
/*                                                 <tr>*/
/*                                                     <td>{{recurso.club}}</td>*/
/*                                                     <td>{{recurso.cancha}}</td>*/
/*                                                     <td>{{recurso.horarioLunes}}</td>									*/
/*                                                     <td>{{recurso.direccion}}</td>*/
/*                                                     {% if creador %}*/
/*                                                         <td class="text-center col-eliminar"> <a href="{{ path('eliminarRecurso', { 'idCompeticion': competicion.id,  'idRecurso': recurso.id }) }}" <i class="icon-line-delete"></i></td>                                                    */
/*                                                         {% endif %}*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/* */
/*                                 {% if creador %}*/
/*                                     */
/*                                     <button type="button" class="button button-rounded button-lime btn-block" data-toggle="modal" data-target="#crearRecurso">Añadir recurso a la competición</button>*/
/*                                     <div class="modal fade" id="crearRecurso" tabindex="-1" role="dialog" aria-labelledby="Preferencia horaria" aria-hidden="true">*/
/*                                         <div class="modal-dialog" style="width: 95%">*/
/*                                             <div class="modal-content">    */
/*                                                 {{ render(controller("PadelScheduleMainBundle:Main:crearRecurso",*/
/*                                                     { 'idCompeticion': competicion.id }*/
/*                                                 )) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div> */
/*                                     */
/*                                     {% if competicion.estado == "Cerrada" %}*/
/*                                         <a href="{{ path('modificarCompeticion', { 'idCompeticion': competicion.id }) }}" type="button" class="button button-rounded button-lime btn-block center">Modificar información de competición</a>*/
/*                                     */
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>                                            */
/* */
/*     </section>*/
/* */
/* {% endblock content %}*/

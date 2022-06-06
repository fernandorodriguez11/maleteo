<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_d3111c02c1c082d8a8390c0d294b42710c2d9dd437253a3392b2612cc6a36961 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Inicio ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Catamaran&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/styles/style.css\">
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- Para introduccion-->
    <div class=\"row\">
        <div class=\"introduccion\">
            <div class=\"col-md-6 col-xs-12 transparente\">
                <div class=\"introduccion__texto\">
                    <h1>Gana dinero guardando equipaje a viajeros como tú</h1>
                </div>
                <div class=\"introduccion__imagenes\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <img class=\"introduccion__app\" src=\"imagenes/app-store.svg\" alt=\"botón para acceder a app store\">
                        </div>
                        <div class=\"col-xs-6\">
                            <img class=\"introduccion__play\" src=\"imagenes/google-play.svg\" alt=\"botón para acceder a google play\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Numeritos-->

    <div class=\"how-works\">

        <h2 class=\"how-works__title\">¿Cómo funciona?</h2>

        <ul class=\"row how-works__lista\">
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <p class=\"circulo how-works__numerito\">1</p>
                    </div>
                    <div class=\"col-xs-10 col-md-12\"\">
                        <p class=\"heading-3 how-works__subtitle\">Date de alta</p>
                        <p>
                            Una olla de algo más vaca que carnero, salpicón las más noches,
                            duelos y quebrantos los sábados.
                        </p>
                    </div>
                </div>
            </li>
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <div class=\"circulo how-works__numerito\">2</div>
                    </div>
                    <div class=\"col-xs-10 col-md-12\"\">
                        <p class=\"heading-3 how-works__subtitle \">Publica tus espacios, horarios y tarifas</p>
                        <p>
                            En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha
                            mucho tiempo.
                        </p>
                    </div>
                </div>
            </li>
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <p class=\"circulo how-works__numerito\">3</p>
                    </div>
                    <div class=\"col-xs-10 col-md-12\">
                        <p class=\"heading-3 how-works__subtitle \">Recibe viajeros y gana dinero </p>
                        <p>
                            No ha mucho tiempo que vivía un hidalgo  de los de lanza en el astillero
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!--Formularios-->
    <div class=\"formulario\">
        <div class=\"row\">
            <div class=\"formulario__imagen col-md-6\">
                <img src=\"imagenes/iPhoneX.png\">
            </div>
            <div class=\"col-md-5 col-xs-12\">
                <div id=\"visible\" class=\"formulario__formulario\">
                    <p class=\"formulario__titulo\">Solicita una demo</p>
                    <!-- 'action': path('insertar'),-->
                    ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 91, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insertar"), "attr" => ["id" => "formulario"]]);
        echo "
                    
                    <div class=\"formulario__grupo\">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 94, $this->source); })()), "nombre", [], "any", false, false, false, 94), 'row', ["label" => "Nombre", "attr" => ["class" => "formulario__input", "placeholder" => "Vicent Chase"]]);
        echo "
                    </div>

                    <div class=\"formulario__grupo\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'row', ["label" => "Email", "attr" => ["class" => "formulario__input", "placeholder" => "VicentChase@gmail.com"]]);
        echo "
                    </div>

                    <div class=\"formulario__grupo\">
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 102, $this->source); })()), "horario", [], "any", false, false, false, 102), 'row', ["label" => "Horario Preferido", "attr" => ["class" => "formulario__input", "placeholder" => ".EJ: mañana"]]);
        echo "
                    </div>

                    <div class=\"formulario__grupo\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 106, $this->source); })()), "ciudad", [], "any", false, false, false, 106), 'row', ["label" => "Ciudad", "attr" => ["class" => "formulario__input"]]);
        echo "
                    </div>

                    <div class=\"formulario__grupo\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 110, $this->source); })()), "politica_privacidad", [], "any", false, false, false, 110), 'row', ["label" => "He leído y acepto la política de privacidad", "attr" => ["class" => "formulario__labelCheck"]]);
        echo "
                    </div>

                    <div class=\"formulario__grupo\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 114, $this->source); })()), "enviar", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => "formulario__boton"]]);
        echo "
                    </div>

                    ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
                </div>
                <div id=\"oculto\" class=\"formulario__formulario\">
                    <p>¡Gracias!</p>
                    <p> Tu formulario ha sido enviado correctamente, pronto serás un guardian de maleteo</p>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Secciones-->

    <div class=\"criticas\">
        <div class=\"criticas__titulo\">
            <p>Opiniones de otros guardianes</p>
        </div>

        <div class=\"row\">
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) || array_key_exists("comentarios", $context) ? $context["comentarios"] : (function () { throw new RuntimeError('Variable "comentarios" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["criticas"]) {
            // line 136
            echo "            <div class=\"col-md-4 col-xs-12\">
                <section class=\"criticas__guardianes\">
                    ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["criticas"], "comentario", [], "any", false, false, false, 138), "html", null, true);
            echo "
                </section>
                <div class=\"criticas__usuario\">
                    <p class=\"criticas__autor\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["criticas"], "autor", [], "any", false, false, false, 141), "html", null, true);
            echo "</p>
                    <p class=\"criticas__lugar\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["criticas"], "lugar", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['criticas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "        </div>
    </div>

    <!--Fin críticas-->

    <!--Mapa para encontrar guardianes-->
    <div class=\"mapa\">
        <div class=\"mapa__titulo\">
            <p>Guardianes cerca tuyo</p>
        </div>
        <div class=\"mapa__mapa\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.74804981012!2d-3.6968836846027986!3d40.45871307936029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229036539b84b%3A0xe9147f67419c2744!2sCalle%20de%20Orense%2C%2069%2C%2028020%20Madrid!5e0!3m2!1ses!2ses!4v1575301727392!5m2!1ses!2ses\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "        <script src=\"/js/formulario.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/squirrelly@7.5.0/dist/squirrelly.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 164,  294 => 163,  272 => 146,  262 => 142,  258 => 141,  252 => 138,  248 => 136,  244 => 135,  223 => 117,  217 => 114,  210 => 110,  203 => 106,  196 => 102,  189 => 98,  182 => 94,  176 => 91,  92 => 9,  85 => 8,  75 => 4,  68 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Inicio {% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/styles/style.css\">
        
{% endblock %}
{% block body %}
    <!-- Para introduccion-->
    <div class=\"row\">
        <div class=\"introduccion\">
            <div class=\"col-md-6 col-xs-12 transparente\">
                <div class=\"introduccion__texto\">
                    <h1>Gana dinero guardando equipaje a viajeros como tú</h1>
                </div>
                <div class=\"introduccion__imagenes\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <img class=\"introduccion__app\" src=\"imagenes/app-store.svg\" alt=\"botón para acceder a app store\">
                        </div>
                        <div class=\"col-xs-6\">
                            <img class=\"introduccion__play\" src=\"imagenes/google-play.svg\" alt=\"botón para acceder a google play\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Numeritos-->

    <div class=\"how-works\">

        <h2 class=\"how-works__title\">¿Cómo funciona?</h2>

        <ul class=\"row how-works__lista\">
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <p class=\"circulo how-works__numerito\">1</p>
                    </div>
                    <div class=\"col-xs-10 col-md-12\"\">
                        <p class=\"heading-3 how-works__subtitle\">Date de alta</p>
                        <p>
                            Una olla de algo más vaca que carnero, salpicón las más noches,
                            duelos y quebrantos los sábados.
                        </p>
                    </div>
                </div>
            </li>
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <div class=\"circulo how-works__numerito\">2</div>
                    </div>
                    <div class=\"col-xs-10 col-md-12\"\">
                        <p class=\"heading-3 how-works__subtitle \">Publica tus espacios, horarios y tarifas</p>
                        <p>
                            En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha
                            mucho tiempo.
                        </p>
                    </div>
                </div>
            </li>
            <li class=\"how-works__item col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-2 col-md-12\">
                        <p class=\"circulo how-works__numerito\">3</p>
                    </div>
                    <div class=\"col-xs-10 col-md-12\">
                        <p class=\"heading-3 how-works__subtitle \">Recibe viajeros y gana dinero </p>
                        <p>
                            No ha mucho tiempo que vivía un hidalgo  de los de lanza en el astillero
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!--Formularios-->
    <div class=\"formulario\">
        <div class=\"row\">
            <div class=\"formulario__imagen col-md-6\">
                <img src=\"imagenes/iPhoneX.png\">
            </div>
            <div class=\"col-md-5 col-xs-12\">
                <div id=\"visible\" class=\"formulario__formulario\">
                    <p class=\"formulario__titulo\">Solicita una demo</p>
                    <!-- 'action': path('insertar'),-->
                    {{ form_start(formulario, {'action': path('insertar'),attr:{id:\"formulario\"}}) }}
                    
                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.nombre, {label:\"Nombre\",attr:{'class':\"formulario__input\",placeholder:'Vicent Chase'}})}}
                    </div>

                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.email, {label:\"Email\",attr:{'class':\"formulario__input\",placeholder:'VicentChase@gmail.com'}})}}
                    </div>

                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.horario, {label:\"Horario Preferido\",attr:{'class':\"formulario__input\",placeholder:'.EJ: mañana'}})}}
                    </div>

                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.ciudad, {label:\"Ciudad\",attr:{'class':\"formulario__input\"}})}}
                    </div>

                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.politica_privacidad, {label:\"He leído y acepto la política de privacidad\",attr:{'class':\"formulario__labelCheck\"}})}}
                    </div>

                    <div class=\"formulario__grupo\">
                        {{form_row(formulario.enviar, {attr:{'class':\"formulario__boton\"}})}}
                    </div>

                    {{ form_end(formulario) }}
                </div>
                <div id=\"oculto\" class=\"formulario__formulario\">
                    <p>¡Gracias!</p>
                    <p> Tu formulario ha sido enviado correctamente, pronto serás un guardian de maleteo</p>
                </div>
            </div>
        </div>
    </div>

    <!--Inicio Secciones-->

    <div class=\"criticas\">
        <div class=\"criticas__titulo\">
            <p>Opiniones de otros guardianes</p>
        </div>

        <div class=\"row\">
        {% for criticas in comentarios %}
            <div class=\"col-md-4 col-xs-12\">
                <section class=\"criticas__guardianes\">
                    {{criticas.comentario}}
                </section>
                <div class=\"criticas__usuario\">
                    <p class=\"criticas__autor\">{{criticas.autor}}</p>
                    <p class=\"criticas__lugar\">{{criticas.lugar}}</p>
                </div>
            </div>
        {% endfor %}
        </div>
    </div>

    <!--Fin críticas-->

    <!--Mapa para encontrar guardianes-->
    <div class=\"mapa\">
        <div class=\"mapa__titulo\">
            <p>Guardianes cerca tuyo</p>
        </div>
        <div class=\"mapa__mapa\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.74804981012!2d-3.6968836846027986!3d40.45871307936029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229036539b84b%3A0xe9147f67419c2744!2sCalle%20de%20Orense%2C%2069%2C%2028020%20Madrid!5e0!3m2!1ses!2ses!4v1575301727392!5m2!1ses!2ses\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
        <script src=\"/js/formulario.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/squirrelly@7.5.0/dist/squirrelly.min.js\"></script>
{% endblock %}

", "index.html.twig", "/application/templates/index.html.twig");
    }
}

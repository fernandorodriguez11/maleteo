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

/* contenidoIndex/formulario.html.twig */
class __TwigTemplate_eb42c1b1f8a2a69a21e05c06d85aa402a2918f1e75a767ed1edbac89113263b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formularios' => [$this, 'block_formularios'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contenidoIndex/formulario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contenidoIndex/formulario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_formularios($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formularios"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 5, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insertar")]);
        echo "
                        
                        <div class=\"formulario__grupo\">
                            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8), 'row', ["label" => "Nombre", "attr" => ["class" => "formulario__input", "placeholder" => "Vicent Chase"]]);
        echo "
                        </div>

                        <div class=\"formulario__grupo\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["label" => "Email", "attr" => ["class" => "formulario__input", "placeholder" => "VicentChase@gmail.com"]]);
        echo "
                        </div>

                        <div class=\"formulario__grupo\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "horario", [], "any", false, false, false, 16), 'row', ["label" => "Horario Preferido", "attr" => ["class" => "formulario__input", "placeholder" => ".EJ: mañana"]]);
        echo "
                        </div>

                        <div class=\"formulario__grupo\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "ciudad", [], "any", false, false, false, 20), 'row', ["label" => "Ciudad", "attr" => ["class" => "formulario__input"]]);
        echo "
                        </div>

                        <div class=\"formulario__grupo\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "politica_privacidad", [], "any", false, false, false, 24), 'row', ["label" => "He leído y acepto la política de privacidad", "attr" => ["class" => "formulario__labelCheck"]]);
        echo "
                        </div>

                        <div class=\"formulario__grupo\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "enviar", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "formulario__boton"]]);
        echo "
                        </div>

                        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contenidoIndex/formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  103 => 28,  96 => 24,  89 => 20,  82 => 16,  75 => 12,  68 => 8,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block formularios %}

{{ form_start(formulario, {'action': path('insertar')}) }}
                        
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

{% endblock %}", "contenidoIndex/formulario.html.twig", "/application/templates/contenidoIndex/formulario.html.twig");
    }
}

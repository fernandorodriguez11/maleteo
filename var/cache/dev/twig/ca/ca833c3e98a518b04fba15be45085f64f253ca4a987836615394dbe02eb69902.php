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

/* /index.html */
class __TwigTemplate_cf7728da60463902287d77883a418b7609f0cf96922e23aca40f28ea8ec53a8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Practica Parcial</title>
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"styles/style.css\">
</head>
<body>

    <div class=\"wrapper\">

        <div class=\"container-fluid\">
            <!-- De momento cabecera-->
            <header class=\"cabecera\">
                <img class=\"cabecera__logo\" src=\"imagenes/logo.svg\" alt=\"logo maleteo\">
            </header>

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
                    <div class=\"formulario__formulario col-md-5 col-xs-12\">
                        <p class=\"formulario__titulo\">Solicita una demo</p>
                        <form  class=\"formulario__form\" method=\"POST\" action=\"/prueba\">

                            <div class=\"formulario__grupo\">
                                <label for=\"nombre\">Nombre</label>
                                <input id=\"nombre\" name=\"nombre\" type=\"text\" placeholder=\"Vicent Chase\" class=\"formulario__input\">
                            </div>

                            <div class=\"formulario__grupo\">
                                <label for=\"email\">Email</label>
                                <input id=\"email\" name=\"email\" type=\"email\" placeholder=\"vicent@mga.com\"  class=\"formulario__input\">
                            </div>
                            <div class=\"formulario__grupo\">
                                <label for=\"horario\">Horario Preferido</label>
                                <input id=\"horario\" name=\"horario\" type=\"text\" placeholder=\"vicent@mga.com\"  class=\"formulario__input\">
                            </div>

                            <div class=\"formulario__grupo\">
                                <label for=\"selector\">Ciudad</label>
                                <select id=\"selector\"  name=\"selector\" class=\"formulario__input\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                </select>
                            </div>

                            <div class=\"formulario__grupo\">
                                <input type=\"checkbox\" id=\"check\">
                                <label for=\"check\" name=\"check\" class=\"formulario__labelCheck\" value=\"1\">He leído y acepto la política de privacidad</label>
                            </div>

                            <div class=\"formulario__grupo\">
                                <input type=\"submit\" value=\"Enviar\" class=\"formulario__boton\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!--Inicio Secciones-->
            <div class=\"criticas\">
                <div class=\"criticas__titulo\">
                    <p>Opiniones de otros guardianes</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>

                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>
                        
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>
                    </div>
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
            
        </div>
    </div>

    <!--pie de pagina-->
    <footer class=\"pie\">
        <div class=\"pie__contenido\">
            <img class=\"pie__imagen\" src=\"imagenes/logo2.svg\" alt=\"logo de maleteo\">
            <p>Hecho con &#128147; en Madrid</p>  
        </div>
    </footer>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/index.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Practica Parcial</title>
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"styles/style.css\">
</head>
<body>

    <div class=\"wrapper\">

        <div class=\"container-fluid\">
            <!-- De momento cabecera-->
            <header class=\"cabecera\">
                <img class=\"cabecera__logo\" src=\"imagenes/logo.svg\" alt=\"logo maleteo\">
            </header>

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
                    <div class=\"formulario__formulario col-md-5 col-xs-12\">
                        <p class=\"formulario__titulo\">Solicita una demo</p>
                        <form  class=\"formulario__form\" method=\"POST\" action=\"/prueba\">

                            <div class=\"formulario__grupo\">
                                <label for=\"nombre\">Nombre</label>
                                <input id=\"nombre\" name=\"nombre\" type=\"text\" placeholder=\"Vicent Chase\" class=\"formulario__input\">
                            </div>

                            <div class=\"formulario__grupo\">
                                <label for=\"email\">Email</label>
                                <input id=\"email\" name=\"email\" type=\"email\" placeholder=\"vicent@mga.com\"  class=\"formulario__input\">
                            </div>
                            <div class=\"formulario__grupo\">
                                <label for=\"horario\">Horario Preferido</label>
                                <input id=\"horario\" name=\"horario\" type=\"text\" placeholder=\"vicent@mga.com\"  class=\"formulario__input\">
                            </div>

                            <div class=\"formulario__grupo\">
                                <label for=\"selector\">Ciudad</label>
                                <select id=\"selector\"  name=\"selector\" class=\"formulario__input\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                </select>
                            </div>

                            <div class=\"formulario__grupo\">
                                <input type=\"checkbox\" id=\"check\">
                                <label for=\"check\" name=\"check\" class=\"formulario__labelCheck\" value=\"1\">He leído y acepto la política de privacidad</label>
                            </div>

                            <div class=\"formulario__grupo\">
                                <input type=\"submit\" value=\"Enviar\" class=\"formulario__boton\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!--Inicio Secciones-->
            <div class=\"criticas\">
                <div class=\"criticas__titulo\">
                    <p>Opiniones de otros guardianes</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>

                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>
                        
                    </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <section class=\"criticas__guardianes\">
                            Tras el enorme éxito internacional de su primera colaboración, 
                            \"Bailar\", que ganó un galardon en los Premios
                        </section>
                        <div class=\"criticas__usuario\">
                            <p class=\"criticas__autor\">Sergio Garnacho</p>
                            <p class=\"criticas__lugar\"> Tetuán, Madrid</p>
                        </div>
                    </div>
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
            
        </div>
    </div>

    <!--pie de pagina-->
    <footer class=\"pie\">
        <div class=\"pie__contenido\">
            <img class=\"pie__imagen\" src=\"imagenes/logo2.svg\" alt=\"logo de maleteo\">
            <p>Hecho con &#128147; en Madrid</p>  
        </div>
    </footer>

</body>
</html>", "/index.html", "/application/templates/index.html");
    }
}

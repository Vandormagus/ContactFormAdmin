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

/* user/index.html.twig */
class __TwigTemplate_0830b79a54f4db5040a62e7ee35886dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Felhasználó lista</h1>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width:10%;\">ID</th>
                        <th style=\"width:70%;\">Név</th>

                        <th style=\"width:20%;\">Művelet</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                        <tr>
                            <td style=\"width:10%;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td  style=\"width:70%;\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>

                            <td  style=\"width:20%;\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">Megnéz</a>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Szerkeszt</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                        <tr>
                            <td colspan=\"3\">Nincs találat!</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max_page"]) || array_key_exists("max_page", $context) ? $context["max_page"] : (function () { throw new RuntimeError('Variable "max_page" does not exist.', 41, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "                ";
            if (($context["i"] != (isset($context["act_page"]) || array_key_exists("act_page", $context) ? $context["act_page"] : (function () { throw new RuntimeError('Variable "act_page" does not exist.', 42, $this->source); })()))) {
                // line 43
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo "?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">[";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "]</a>
                ";
            } else {
                // line 44
                echo "    
                    [";
                // line 45
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "]
                ";
            }
            // line 47
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>

            <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Új felhasználó</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 52,  169 => 49,  162 => 47,  157 => 45,  154 => 44,  144 => 43,  141 => 42,  137 => 41,  129 => 35,  120 => 31,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  94 => 21,  89 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Felhasználó lista</h1>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th style=\"width:10%;\">ID</th>
                        <th style=\"width:70%;\">Név</th>

                        <th style=\"width:20%;\">Művelet</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                        <tr>
                            <td style=\"width:10%;\">{{ user.id }}</td>
                            <td  style=\"width:70%;\">{{ user.name }}</td>

                            <td  style=\"width:20%;\">
                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">Megnéz</a>
                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Szerkeszt</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">Nincs találat!</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% for i in 1..max_page %}
                {% if( i != act_page )%}
                    <a href=\"{{ path('app_user_index') }}?page={{ i }}\">[{{ i }}]</a>
                {%  else %}    
                    [{{ i }}]
                {% endif %}

            {% endfor %}
        </div>
    </div>

            <a class=\"btn btn-primary\" href=\"{{ path('app_user_new') }}\">Új felhasználó</a>
{% endblock %}
", "user/index.html.twig", "C:\\xampp2\\htdocs\\ContactFormAdmin_6_3\\templates\\user\\index.html.twig");
    }
}

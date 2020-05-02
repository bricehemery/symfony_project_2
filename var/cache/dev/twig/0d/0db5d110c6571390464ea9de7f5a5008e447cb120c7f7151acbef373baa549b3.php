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

/* blog/index.html.twig */
class __TwigTemplate_1e18caaa8e302c424c2bdeb9d3b1bfd53a653b36be1c610e3c0c71808a18dcb6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Articles
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"article\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "\t\t\t<article>
\t\t\t\t<h2>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
\t\t\t\t<div class=\"metadata\">Ecrit le
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createAt", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\tà
\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createAt", [], "any", false, false, false, 14), "H:i"), "html", null, true);
            echo "
\t\t\t\t\tdans la catégorie
\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 19);
            echo "
\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire la suite</a>
\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)], "method", false, false, false, 22))) {
                // line 23
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t<span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "likes", [], "any", false, false, false, 27)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"js-label\">J'aime</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</article>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t<script>

\t\tfunction onClickBtnLike(event) {
event.preventDefault();

// Le this correspond à l'elt html qui déclenche l'evt ie les liens a
const url = this.href;
const spanCount = this.querySelector('span.js-likes');
const icone = this.querySelector('i');


axios.get(url).then(function (response) {
console.log(response);
spanCount.textContent = response.data.like;

if (icone.classList.contains('fas')) {
icone.classList.replace('fas', 'far');
} else {
icone.classList.replace('far', 'fas');
}
}).catch(function (error) {
if (error.response.status == 403) 
window.alert(\"Vous ne pouvez pas liké un article si vous n'êtes pas connecté !\")

})
}

document.querySelectorAll('a.js-like').forEach(function (link) {
link.addEventListener('click', onClickBtnLike);
})
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 37,  170 => 36,  159 => 33,  146 => 27,  142 => 25,  138 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  120 => 18,  115 => 16,  110 => 14,  105 => 12,  100 => 10,  97 => 9,  93 => 8,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles
{% endblock %}

{% block body %}
\t<section class=\"article\">
\t\t{% for article in articles %}
\t\t\t<article>
\t\t\t\t<h2>{{article.title}}</h2>
\t\t\t\t<div class=\"metadata\">Ecrit le
\t\t\t\t\t{{article.createAt | date('d/m/Y')}}
\t\t\t\t\tà
\t\t\t\t\t{{article.createAt | date('H:i')}}
\t\t\t\t\tdans la catégorie
\t\t\t\t\t{{article.category.title}}</div>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<img src=\"{{article.image}}\" alt=\"\">
\t\t\t\t\t{{article.content | raw}}
\t\t\t\t\t<a href=\"{{ path('blog_show', {'id':article.id}) }}\" class=\"btn btn-primary\">Lire la suite</a>
\t\t\t\t\t<a href=\"{{ path('post_like',{'id':article.id}) }}\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t{% if app.user and article.isLikedByUser(app.user) %}
\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<span class=\"js-likes\">{{article.likes | length}}</span>
\t\t\t\t\t\t<span class=\"js-label\">J'aime</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</article>
\t\t{% endfor %}
\t</section>
{% endblock %}

{% block javascripts %}
\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t<script>

\t\tfunction onClickBtnLike(event) {
event.preventDefault();

// Le this correspond à l'elt html qui déclenche l'evt ie les liens a
const url = this.href;
const spanCount = this.querySelector('span.js-likes');
const icone = this.querySelector('i');


axios.get(url).then(function (response) {
console.log(response);
spanCount.textContent = response.data.like;

if (icone.classList.contains('fas')) {
icone.classList.replace('fas', 'far');
} else {
icone.classList.replace('far', 'fas');
}
}).catch(function (error) {
if (error.response.status == 403) 
window.alert(\"Vous ne pouvez pas liké un article si vous n'êtes pas connecté !\")

})
}

document.querySelectorAll('a.js-like').forEach(function (link) {
link.addEventListener('click', onClickBtnLike);
})
\t</script>

{% endblock %}
", "blog/index.html.twig", "C:\\UwAmp\\RapTruths\\templates\\blog\\index.html.twig");
    }
}

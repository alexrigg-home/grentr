<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/email.html.twig */
class __TwigTemplate_2fa6778853aad94494197dcd67f96187860c7a48ff7f74a299a69d9e7343c583 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
    </head>
    <body>
      <div class=\"email_wrapper\">
            <div class=\"keep_right\">Rentr image</div>
            <div class=\"email_content border\">
<div class=\"header\">
<h2>GetRentr Holding Text</h2>
<h3>Praeset esibulum molestie lacus.Aenean onummy hen drerit maurishasellus porta.</h3>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras convallis fermentum ligula, at gravida mauris ullamcorper ut. Ut a ante maximus, tincidunt orci vel, consequat justo. Integer condimentum sit amet odio commodo mollis. Donec nulla mauris, consequat at fermentum eu, ultricies vitae neque. Sed efficitur at arcu sit amet dapibus. Donec volutpat, velit et congue viverra, mauris quam rutrum tortor, ut imperdiet nisl mauris sed purus. Vivamus sagittis nunc risus, quis sollicitudin odio suscipit sit amet. Donec ullamcorper volutpat varius. Donec eu mi ut massa convallis maximus ac vitae metus. Etiam viverra malesuada tellus sit amet facilisis. Praesent egestas, purus mattis eleifend fringilla, metus ante bibendum quam, iaculis molestie odio libero ac velit.</p>

<p>e tempus ipsum at pulvinar tempor. Curabitur varius, dui porta volutpat tincidunt, enim eros convallis tortor, fringilla auctor turpis risus non sapien. Proin at leo ac elit cursus feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque dignissim accumsan turpis, sit amet sodales orci blandit quis. Fusce orci elit, maximus placerat pretium vel, placerat a lectus. Ut tincidunt molestie ipsum, et convallis purus imperdiet nec. Pellentesque iaculis lorem sit amet lorem sodales, vitae imperdiet elit pulvinar. Duis interdum ligula quis eros convallis, et molestie quam cursus. Nulla at finibus lacus, eget aliquam mi. Etiam ac justo eu magna tincidunt vehicula id sit amet urna. Aliquam vel nisl a felis semper posuere. We are hiring at the moment to find out more <a href=\"#\">click here</a></p>

<p>bitur vel molestie lectus, in vulputate orci. Praesent metus eros, iaculis eu suscipit vel, finibus ut urna. Phasellus dignissim dictum finibus. Nunc bibendum interdum imperdiet. Donec ut ipsum sit amet risus cursus placerat. Donec a nulla egestas, vehicula mauris imperdiet, aliquet orci. Morbi at nibh vehicula, dapibus dui non, rhoncus quam. Nullam quis finibus lacus. Fusce nec scelerisque orci, at lacinia nunc. Proin id ornare tellus. Pellentesque consectetur et ex id condimentum. Maecenas egestas consectetur diam nec commodo.</p>

<p>a bibendum nibh, eu mollis velit. Integer ac fringilla risus. Mauris sapien mi, aliquet non nisl nec, viverra ornare risus. Sed id orci sit amet magna maximus aliquet quis non velit. Morbi rutrum commodo justo sit amet sollicitudin. Integer mollis velit augue, sit amet accumsan mauris pharetra in. Aenean posuere mi sem. Proin lectus mi, sodales vel dui in, cursus consectetur nunc. Quisque eu odio quis ex lobortis euismod id sed lorem.</p>
<p style=\"text-align: right;\">READ MORE ABOUT HOW WE WORK</p>
            </div>
            <div class=\"centered\"><span class=\"light\">&copy GetRentr 2018</span> | <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms and Conditions</a> | <a href=\"#\">Contact</a></div>
      </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/css/simple.css\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
        
        ";
    }

    public function getTemplateName()
    {
        return "default/email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 7,  77 => 6,  71 => 5,  44 => 10,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/email.html.twig", "/var/www/grentr/app/Resources/views/default/email.html.twig");
    }
}

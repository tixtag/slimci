<?php

/* _lhome.twig */
class __TwigTemplate_0c437f7d7d28f3726c05b893ad86776b3ccc68bcbcd902f7676911a6305a7989 extends Twig_Template
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
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script language=\"javascript\" type=\"text/javascript\" src=\"../assets/js/bootstrap.min.js\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  </head>

  <body>

    <div class=\"container\">

      <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
<script>
  \$(document).ready(function(){
  \$.ajax({
      url: 'http://localhost/slimci/public/barbers/getBarbers',
      dataType: 'json',
      type: 'GET',
      success: function(data){
        \$.each(data, function(i, data){
          \$.each(data, function(i, data){
            \$('.container').prepend('<p>'+barbers.barberaddress+'</p>');
            console.log(data);
          });
        });
      }
  });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "_lhome.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_lhome.twig", "C:\\xampp\\htdocs\\slimci\\application\\View\\_lhome.twig");
    }
}

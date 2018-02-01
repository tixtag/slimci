<?php

/* _pphome.twig */
class __TwigTemplate_36905ff29fbecd2b7fb2b6337d4f4bacc16da4e2bc7303f067c57ec41675da45 extends Twig_Template
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

          for (i = 0; i < data.barbers.length; i++) {
              \$('.container').prepend(\"<p>\"+key + \": \" + data.barbers[i]+\"</p>\");
          }

            // console.log(data);
        });
      }
  });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "_pphome.twig";
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
        return new Twig_Source("", "_pphome.twig", "C:\\xampp\\htdocs\\slimci\\application\\View\\_pphome.twig");
    }
}

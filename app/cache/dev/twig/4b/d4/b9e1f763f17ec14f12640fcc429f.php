<?php

/* MyFirmowaBundle:Rachunek:wystawAction.pdf.twig */
class __TwigTemplate_4bd4b9e1f763f17ec14f12640fcc429f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<pdf>
    <dynamic-page>

        <h1>Header</h1>
        <p>paragraph</p>
        <div color=\"red\">Layer</div>
        <table>
            <tr>
                <td>Column</td>
                <td>Column</td>
            </tr>
        </table>
    </dynamic-page>
</pdf>
";
    }

    public function getTemplateName()
    {
        return "MyFirmowaBundle:Rachunek:wystawAction.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

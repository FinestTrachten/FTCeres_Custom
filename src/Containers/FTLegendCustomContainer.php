<?php
 
namespace FTLegendCustom\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class FTLegendCustomContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('FTLegendCustom::content.FTLegendCustom');
    }
}


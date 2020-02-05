<?php

namespace FTLegendCustom\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use IO\Helper\ComponentContainer;
use IO\Extensions\Functions\Partial;

class FTLegendCustomServiceProvider extends ServiceProvider
{

  const PRIORITY = 0;

	/**
	 * Register the service provider.
	 */
	public function register()
	{

	}


/**
	 * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
	 */
	public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        $dispatcher->listen('IO.init.templates', function(Partial $partial)
        {
                $partial->set('footer', 'FTLegendCustom::PageDesign.Partials.Footer');


        }, self::PRIORITY);
        return false;
    }
    
    
}
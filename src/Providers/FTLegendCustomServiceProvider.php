<?php

namespace FTLegendCustom\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


 

class FTLegendCustomServiceProvider extends ServiceProvider
{

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
        /*
        $dispatcher->listen('IO.init.templates', function(Partial $partial)
        {
                $partial->set('footer', 'FTLegendCustom::PageDesign.Partials.Footer');


        }, 0);
        */
        $dispatcher->listen('IO.tpl.category.item', function (TemplateContainer $container)
        {
            $container->setTemplate('FTLegendCustom::Category.Item.CategoryItem');
        }, 0);
        
        /*
        $dispatcher->listen('IO.tpl.OrderConfirmation', function (TemplateContainer $container)
        {
            $container->setTemplate('FTLegendCustom::CheckOut.OrderConfirmation');
        }, 0);
       
         */
        /*
        $dispatcher->listen('IO.tpl.order-confirmation', function (TemplateContainer $container)
        {
            $container->setTemplate('FTLegendCustom::CheckOut.OrderDetails');
        }, 0);   
       */
        
            return false;
    }
    
    
}

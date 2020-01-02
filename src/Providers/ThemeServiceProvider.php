<?php

namespace Theme\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class ThemeServiceProvider extends ServiceProvider
{

  const PRIORITY = 98;

	/**
	 * Register the service provider.
	 */
	public function register()
	{

	}

  public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
           $partial->set('page-design', 'Theme::PageDesign.PageDesign');
           $partial->set('footer', 'Theme::content.ThemeFooter');
        }, self::PRIORITY);
        return false;
    }
}

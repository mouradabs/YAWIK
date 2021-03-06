<?php
/**
 * YAWIK
 *
 * @filesource
 * @license MIT
 * @copyright  2013 - 2016 Cross Solution <http://cross-solution.de>
 */
  
/** */
namespace Core\Factory\Controller\Plugin;

use Core\Options\ModuleOptions;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use \Core\Controller\Plugin\SearchForm;

/**
 * Factory for \Core\Controller\Plugin\SearchForm
 * 
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 * @since 0.25
 */
class SearchFormFactory implements FactoryInterface
{
    /**
     * Create a SearchForm form
     *
     * @param  ContainerInterface $container
     * @param  string             $requestedName
     * @param  null|array         $options
     *
     * @return SearchForm
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $forms = $container->get('forms');
        $plugin = new SearchForm($forms);

        return $plugin;
    }

    /**
     * Creates a SearchForm plugin.
     *
     * @param ServiceLocatorInterface|\Zend\Mvc\Controller\ControllerManager $serviceLocator
     *
     * @return SearchForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator->getServiceLocator(), ModuleOptions::class);
    }
}
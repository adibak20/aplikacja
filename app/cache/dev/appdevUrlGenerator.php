<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'my_firmowa_default_index' => true,
       'klient' => true,
       'klient_show' => true,
       'klient_new' => true,
       'klient_create' => true,
       'klient_edit' => true,
       'klient_update' => true,
       'klient_delete' => true,
       'rachunek' => true,
       'rachunek_show' => true,
       'rachunek_new' => true,
       'rachunek_create' => true,
       'rachunek_edit' => true,
       'rachunek_update' => true,
       'rachunek_delete' => true,
       'rachunek_wystaw' => true,
       'zamowienie' => true,
       'zamowienie_show' => true,
       'zamowienie_new' => true,
       'zamowienie_create' => true,
       'zamowienie_edit' => true,
       'zamowienie_update' => true,
       'zamowienie_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getmy_firmowa_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getklientRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/klient/',  ),));
    }

    private function getklient_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/klient',  ),));
    }

    private function getklient_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/klient/new',  ),));
    }

    private function getklient_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/klient/create',  ),));
    }

    private function getklient_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/klient',  ),));
    }

    private function getklient_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/klient',  ),));
    }

    private function getklient_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/klient',  ),));
    }

    private function getrachunekRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rachunek/',  ),));
    }

    private function getrachunek_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rachunek',  ),));
    }

    private function getrachunek_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/rachunek/new',  ),));
    }

    private function getrachunek_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/rachunek/create',  ),));
    }

    private function getrachunek_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rachunek',  ),));
    }

    private function getrachunek_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rachunek',  ),));
    }

    private function getrachunek_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rachunek',  ),));
    }

    private function getrachunek_wystawRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::wystawAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wystaw',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/rachunek',  ),));
    }

    private function getzamowienieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/zamowienie/',  ),));
    }

    private function getzamowienie_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/zamowienie',  ),));
    }

    private function getzamowienie_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/zamowienie/new',  ),));
    }

    private function getzamowienie_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/zamowienie/create',  ),));
    }

    private function getzamowienie_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/zamowienie',  ),));
    }

    private function getzamowienie_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/zamowienie',  ),));
    }

    private function getzamowienie_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/zamowienie',  ),));
    }
}

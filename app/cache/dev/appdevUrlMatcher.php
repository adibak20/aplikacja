<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // my_firmowa_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'my_firmowa_default_index'));
        }

        // klient
        if (rtrim($pathinfo, '/') === '/klient') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'klient');
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::indexAction',  '_route' => 'klient',);
        }

        // klient_show
        if (0 === strpos($pathinfo, '/klient') && preg_match('#^/klient/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::showAction',)), array('_route' => 'klient_show'));
        }

        // klient_new
        if ($pathinfo === '/klient/new') {
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::newAction',  '_route' => 'klient_new',);
        }

        // klient_create
        if ($pathinfo === '/klient/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_klient_create;
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::createAction',  '_route' => 'klient_create',);
        }
        not_klient_create:

        // klient_edit
        if (0 === strpos($pathinfo, '/klient') && preg_match('#^/klient/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::editAction',)), array('_route' => 'klient_edit'));
        }

        // klient_update
        if (0 === strpos($pathinfo, '/klient') && preg_match('#^/klient/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_klient_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::updateAction',)), array('_route' => 'klient_update'));
        }
        not_klient_update:

        // klient_delete
        if (0 === strpos($pathinfo, '/klient') && preg_match('#^/klient/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_klient_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\KlientController::deleteAction',)), array('_route' => 'klient_delete'));
        }
        not_klient_delete:

        // rachunek
        if (rtrim($pathinfo, '/') === '/rachunek') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rachunek');
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::indexAction',  '_route' => 'rachunek',);
        }

        // rachunek_show
        if (0 === strpos($pathinfo, '/rachunek') && preg_match('#^/rachunek/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::showAction',)), array('_route' => 'rachunek_show'));
        }

        // rachunek_new
        if ($pathinfo === '/rachunek/new') {
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::newAction',  '_route' => 'rachunek_new',);
        }

        // rachunek_create
        if ($pathinfo === '/rachunek/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_rachunek_create;
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::createAction',  '_route' => 'rachunek_create',);
        }
        not_rachunek_create:

        // rachunek_edit
        if (0 === strpos($pathinfo, '/rachunek') && preg_match('#^/rachunek/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::editAction',)), array('_route' => 'rachunek_edit'));
        }

        // rachunek_update
        if (0 === strpos($pathinfo, '/rachunek') && preg_match('#^/rachunek/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_rachunek_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::updateAction',)), array('_route' => 'rachunek_update'));
        }
        not_rachunek_update:

        // rachunek_delete
        if (0 === strpos($pathinfo, '/rachunek') && preg_match('#^/rachunek/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_rachunek_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::deleteAction',)), array('_route' => 'rachunek_delete'));
        }
        not_rachunek_delete:

        // rachunek_wystaw
        if (0 === strpos($pathinfo, '/rachunek') && preg_match('#^/rachunek/(?P<id>[^/]+?)/wystaw$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\RachunekController::wystawAction',)), array('_route' => 'rachunek_wystaw'));
        }

        // zamowienie
        if (rtrim($pathinfo, '/') === '/zamowienie') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'zamowienie');
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::indexAction',  '_route' => 'zamowienie',);
        }

        // zamowienie_show
        if (0 === strpos($pathinfo, '/zamowienie') && preg_match('#^/zamowienie/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::showAction',)), array('_route' => 'zamowienie_show'));
        }

        // zamowienie_new
        if ($pathinfo === '/zamowienie/new') {
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::newAction',  '_route' => 'zamowienie_new',);
        }

        // zamowienie_create
        if ($pathinfo === '/zamowienie/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_zamowienie_create;
            }
            return array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::createAction',  '_route' => 'zamowienie_create',);
        }
        not_zamowienie_create:

        // zamowienie_edit
        if (0 === strpos($pathinfo, '/zamowienie') && preg_match('#^/zamowienie/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::editAction',)), array('_route' => 'zamowienie_edit'));
        }

        // zamowienie_update
        if (0 === strpos($pathinfo, '/zamowienie') && preg_match('#^/zamowienie/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_zamowienie_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::updateAction',)), array('_route' => 'zamowienie_update'));
        }
        not_zamowienie_update:

        // zamowienie_delete
        if (0 === strpos($pathinfo, '/zamowienie') && preg_match('#^/zamowienie/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_zamowienie_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'My\\FirmowaBundle\\Controller\\ZamowienieController::deleteAction',)), array('_route' => 'zamowienie_delete'));
        }
        not_zamowienie_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

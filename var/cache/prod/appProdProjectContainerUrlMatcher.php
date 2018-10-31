<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // remove_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeUserAction',  '_format' => NULL,));
            }
            not_remove_user:

            // update_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_update_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateUserAction',  '_format' => NULL,));
            }
            not_update_user:

            // get_users
            if ($pathinfo === '/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::getUsersAction',  '_format' => NULL,  '_route' => 'get_users',);
            }
            not_get_users:

            // get_user
            if (preg_match('#^/users/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getUserAction',  '_format' => NULL,));
            }
            not_get_user:

            // get_user_by_email
            if (0 === strpos($pathinfo, '/users/email') && preg_match('#^/users/email/(?P<user_email>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user_by_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_by_email')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getUserByEmailAction',  '_format' => NULL,));
            }
            not_get_user_by_email:

            // post_users
            if ($pathinfo === '/users') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::postUsersAction',  '_format' => NULL,  '_route' => 'post_users',);
            }
            not_post_users:

            // patch_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_patch_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::patchUserAction',  '_format' => NULL,));
            }
            not_patch_user:

        }

        if (0 === strpos($pathinfo, '/articles')) {
            // remove_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::removeArticleAction',  '_format' => NULL,));
            }
            not_remove_article:

            // update_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_update_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::updateArticleAction',  '_format' => NULL,));
            }
            not_update_article:

            // get_articles
            if ($pathinfo === '/articles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_articles;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ArticleController::getArticlesAction',  '_format' => NULL,  '_route' => 'get_articles',);
            }
            not_get_articles:

            // get_article
            if (preg_match('#^/articles/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::getArticleAction',  '_format' => NULL,));
            }
            not_get_article:

            // post_articles
            if (0 === strpos($pathinfo, '/articles/category') && preg_match('#^/articles/category/(?P<id_category>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_articles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_articles')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::postArticlesAction',  '_format' => NULL,));
            }
            not_post_articles:

            // patch_article
            if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_patch_article;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::patchArticleAction',  '_format' => NULL,));
            }
            not_patch_article:

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // remove_category
            if (preg_match('#^/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_category;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::removeCategoryAction',  '_format' => NULL,));
            }
            not_remove_category:

            // get_categories
            if ($pathinfo === '/categories') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_categories;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getCategoriesAction',  '_format' => NULL,  '_route' => 'get_categories',);
            }
            not_get_categories:

            // get_category
            if (preg_match('#^/categories/(?P<category_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_category;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::getCategoryAction',  '_format' => NULL,));
            }
            not_get_category:

            // post_categories
            if ($pathinfo === '/categories') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_categories;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::postCategoriesAction',  '_format' => NULL,  '_route' => 'post_categories',);
            }
            not_post_categories:

        }

        if (0 === strpos($pathinfo, '/paniers')) {
            // remove_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_panier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::removePanierAction',  '_format' => NULL,));
            }
            not_remove_panier:

            // update_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_update_panier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::updatePanierAction',  '_format' => NULL,));
            }
            not_update_panier:

            // get_paniers
            if ($pathinfo === '/paniers') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_paniers;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PanierController::getPaniersAction',  '_format' => NULL,  '_route' => 'get_paniers',);
            }
            not_get_paniers:

            // get_panier
            if (preg_match('#^/paniers/(?P<panier_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_panier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::getPanierAction',  '_format' => NULL,));
            }
            not_get_panier:

            // post_paniers
            if (0 === strpos($pathinfo, '/paniers/user') && preg_match('#^/paniers/user/(?P<id_user>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_paniers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_paniers')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::postPaniersAction',  '_format' => NULL,));
            }
            not_post_paniers:

            // patch_panier
            if (preg_match('#^/paniers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_patch_panier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_panier')), array (  '_controller' => 'AppBundle\\Controller\\PanierController::patchPanierAction',  '_format' => NULL,));
            }
            not_patch_panier:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

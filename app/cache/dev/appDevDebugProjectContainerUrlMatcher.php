<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::homeAction',  '_route' => 'home',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle:Security:login',  '_route' => 'login',);
        }

        // user_homepage
        if ($pathinfo === '/user/dashboard') {
            return array (  '_controller' => 'AppBundle:Security:userDashboard',  '_route' => 'user_homepage',);
        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // reset_password
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_reset_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_password')), array (  '_controller' => 'AppBundle:Resetting:reset',));
            }
            not_reset_password:

            // reset_password_check_token
            if (0 === strpos($pathinfo, '/resetting/check_token') && preg_match('#^/resetting/check_token/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_reset_password_check_token;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_password_check_token')), array (  '_controller' => 'AppBundle:Resetting:checkToken',));
            }
            not_reset_password_check_token:

            // resetting_password_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_resetting_password_send_email;
                }

                return array (  '_controller' => 'AppBundle:Resetting:sendEmail',  '_route' => 'resetting_password_send_email',);
            }
            not_resetting_password_send_email:

        }

        if (0 === strpos($pathinfo, '/check_if_')) {
            // check_if_username_exist
            if ($pathinfo === '/check_if_username_exist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_check_if_username_exist;
                }

                return array (  '_controller' => 'AppBundle:Registration:checkIfUsernameExist',  '_route' => 'check_if_username_exist',);
            }
            not_check_if_username_exist:

            // check_if_email_exist
            if ($pathinfo === '/check_if_email_exist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_check_if_email_exist;
                }

                return array (  '_controller' => 'AppBundle:Registration:checkIfEmailExist',  '_route' => 'check_if_email_exist',);
            }
            not_check_if_email_exist:

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle:Registration:register',  '_route' => 'user_registration',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // fos_user_registration_check_email
            if ($pathinfo === '/check-email') {
                return array (  '_controller' => 'AppBundle:Registration:checkEmail',  '_route' => 'fos_user_registration_check_email',);
            }

            if (0 === strpos($pathinfo, '/confirm')) {
                // user_registration_confirm
                if (preg_match('#^/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_registration_confirm')), array (  '_controller' => 'AppBundle:Registration:confirm',));
                }
                not_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/confirmed') {
                    return array (  '_controller' => 'AppBundle:Registration:confirmed',  '_route' => 'fos_user_registration_confirmed',);
                }

                // confirmation_token_expired
                if ($pathinfo === '/confirmation_token_expired') {
                    return array (  '_controller' => 'AppBundle:Registration:confirmationTokenExpired',  '_route' => 'confirmation_token_expired',);
                }

            }

        }

        // social_user_registration
        if ($pathinfo === '/social_register') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_social_user_registration;
            }

            return array (  '_controller' => 'AppBundle:SocialRegistration:socialRegister',  '_route' => 'social_user_registration',);
        }
        not_social_user_registration:

        if (0 === strpos($pathinfo, '/auth')) {
            // auth_google
            if ($pathinfo === '/auth/google') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_auth_google;
                }

                return array (  '_controller' => 'AppBundle:SocialRegistration:authGoogle',  '_route' => 'auth_google',);
            }
            not_auth_google:

            // auth_facebook
            if ($pathinfo === '/auth/facebook') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_auth_facebook;
                }

                return array (  '_controller' => 'AppBundle:SocialRegistration:authFacebook',  '_route' => 'auth_facebook',);
            }
            not_auth_facebook:

        }

        // update_social_user
        if ($pathinfo === '/update_social_user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_update_social_user;
            }

            return array (  '_controller' => 'AppBundle:SocialRegistration:updateSocialUser',  '_route' => 'update_social_user',);
        }
        not_update_social_user:

        // change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_change_password;
            }

            return array (  '_controller' => 'AppBundle:ChangePassword:changePassword',  '_route' => 'change_password',);
        }
        not_change_password:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/current_user_')) {
                // current_user_short_details
                if ($pathinfo === '/api/current_user_short_details') {
                    return array (  '_controller' => 'AppBundle:Api/UserApi:currentUserShortDetails',  '_route' => 'current_user_short_details',);
                }

                // current_user_full_details
                if ($pathinfo === '/api/current_user_full_details') {
                    return array (  '_controller' => 'AppBundle:Api/UserApi:currentUserFullDetails',  '_route' => 'current_user_full_details',);
                }

            }

            // admin_all_users
            if ($pathinfo === '/api/admin/all_users') {
                return array (  '_controller' => 'AppBundle:Api/UserApi:adminAllUsers',  '_route' => 'admin_all_users',);
            }

            if (0 === strpos($pathinfo, '/api/update_user_')) {
                // update_user_profile
                if ($pathinfo === '/api/update_user_profile') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_user_profile;
                    }

                    return array (  '_controller' => 'AppBundle:Api/UserApi:updateUserProfile',  '_route' => 'update_user_profile',);
                }
                not_update_user_profile:

                // update_user_email_notification_status
                if ($pathinfo === '/api/update_user_email_notification_status') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_user_email_notification_status;
                    }

                    return array (  '_controller' => 'AppBundle:Api/UserApi:updateUserEmailNotification',  '_route' => 'update_user_email_notification_status',);
                }
                not_update_user_email_notification_status:

            }

        }

        // books_search_by_keyword_amazon
        if ($pathinfo === '/book/search_by_keyword_amazon') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_books_search_by_keyword_amazon;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:searchByKeywordAmazonApi',  '_route' => 'books_search_by_keyword_amazon',);
        }
        not_books_search_by_keyword_amazon:

        // books_search_by_keyword_amazon_api
        if ($pathinfo === '/api/book/search_by_keyword_amazon_api') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_books_search_by_keyword_amazon_api;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:searchByKeywordAmazonApiWithApiCall',  '_route' => 'books_search_by_keyword_amazon_api',);
        }
        not_books_search_by_keyword_amazon_api:

        // books_search_by_asin_amazon
        if ($pathinfo === '/book/search_by_asin_amazon') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_books_search_by_asin_amazon;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:searchByAsinAmazonApi',  '_route' => 'books_search_by_asin_amazon',);
        }
        not_books_search_by_asin_amazon:

        // books_search_by_isbn_amazon
        if ($pathinfo === '/api/book/search_by_isbn_amazon') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_books_search_by_isbn_amazon;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:searchByIsbnAmazonApi',  '_route' => 'books_search_by_isbn_amazon',);
        }
        not_books_search_by_isbn_amazon:

        if (0 === strpos($pathinfo, '/book')) {
            // books_search_by_isbn_campus_books
            if ($pathinfo === '/book/search_by_isbn_campus_books') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_books_search_by_isbn_campus_books;
                }

                return array (  '_controller' => 'AppBundle:Api/BookManagementApi:searchByIsbnCampusBooksApi',  '_route' => 'books_search_by_isbn_campus_books',);
            }
            not_books_search_by_isbn_campus_books:

            if (0 === strpos($pathinfo, '/book/get_')) {
                // get_lowest_online_price_campus_books_by_isbn
                if ($pathinfo === '/book/get_lowest_price_by_isbn_campus_books') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_lowest_online_price_campus_books_by_isbn;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookManagementApi:getLowestPriceByIsbnCampusBooksApi',  '_route' => 'get_lowest_online_price_campus_books_by_isbn',);
                }
                not_get_lowest_online_price_campus_books_by_isbn:

                // get_amazon_cart_create_url
                if ($pathinfo === '/book/get_amazon_cart_create_url') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_get_amazon_cart_create_url;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookManagementApi:getAmazonCartCreateUrl',  '_route' => 'get_amazon_cart_create_url',);
                }
                not_get_amazon_cart_create_url:

            }

        }

        // get_campus_deals_by_isbn_api
        if ($pathinfo === '/api/book/get_campus_deals_by_isbn_api') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_get_campus_deals_by_isbn_api;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:getCampusDealsByIsbnApi',  '_route' => 'get_campus_deals_by_isbn_api',);
        }
        not_get_campus_deals_by_isbn_api:

        // get_campus_deals_by_isbn
        if ($pathinfo === '/book/get_campus_deals_by_isbn') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_get_campus_deals_by_isbn;
            }

            return array (  '_controller' => 'AppBundle:Api/BookManagementApi:getCampusDealsByIsbn',  '_route' => 'get_campus_deals_by_isbn',);
        }
        not_get_campus_deals_by_isbn:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/book/add_new_')) {
                // add_new_sell_book
                if ($pathinfo === '/api/book/add_new_sell_book') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_new_sell_book;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookManagementApi:addNewSellBook',  '_route' => 'add_new_sell_book',);
                }
                not_add_new_sell_book:

                // add_new_custom_sell_book
                if ($pathinfo === '/api/book/add_new_custom_sell_book') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_new_custom_sell_book;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookManagementApi:addNewCustomSellBook',  '_route' => 'add_new_custom_sell_book',);
                }
                not_add_new_custom_sell_book:

            }

            // campus_list_by_university
            if ($pathinfo === '/api/campus/list') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_campus_list_by_university;
                }

                return array (  '_controller' => 'AppBundle:Api/CampusManagementApi:campusListByUniversity',  '_route' => 'campus_list_by_university',);
            }
            not_campus_list_by_university:

        }

        // campus_details_with_university_and_state
        if ($pathinfo === '/campus/details_with_university_and_state') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_campus_details_with_university_and_state;
            }

            return array (  '_controller' => 'AppBundle:Api/CampusManagementApi:campusDetailsWithUniversityAndState',  '_route' => 'campus_details_with_university_and_state',);
        }
        not_campus_details_with_university_and_state:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/campus')) {
                // update_campus
                if ($pathinfo === '/api/campus/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_campus;
                    }

                    return array (  '_controller' => 'AppBundle:Api/CampusManagementApi:updateCampus',  '_route' => 'update_campus',);
                }
                not_update_campus:

                // save_new_campus
                if ($pathinfo === '/api/campus/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_save_new_campus;
                    }

                    return array (  '_controller' => 'AppBundle:Api/CampusManagementApi:saveNewCampus',  '_route' => 'save_new_campus',);
                }
                not_save_new_campus:

            }

            // delete_university
            if ($pathinfo === '/api/university/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_delete_university;
                }

                return array (  '_controller' => 'AppBundle:Api/CampusManagementApi:deleteUniversity',  '_route' => 'delete_university',);
            }
            not_delete_university:

        }

        // all_countries
        if ($pathinfo === '/country/list') {
            return array (  '_controller' => 'AppBundle:Api/CountryManagementApi:countryList',  '_route' => 'all_countries',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // all_countries_api
            if ($pathinfo === '/api/country/list') {
                return array (  '_controller' => 'AppBundle:Api/CountryManagementApi:countryListAdmin',  '_route' => 'all_countries_api',);
            }

            // all_referrals_api
            if ($pathinfo === '/api/referral/list') {
                return array (  '_controller' => 'AppBundle:Api/ReferralManagementApi:referralListAdmin',  '_route' => 'all_referrals_api',);
            }

        }

        // all_referrals
        if ($pathinfo === '/referral/list') {
            return array (  '_controller' => 'AppBundle:Api/ReferralManagementApi:referralList',  '_route' => 'all_referrals',);
        }

        // all_states_by_country
        if ($pathinfo === '/state/list_by_country') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_all_states_by_country;
            }

            return array (  '_controller' => 'AppBundle:Api/StateManagementApi:statesByCountry',  '_route' => 'all_states_by_country',);
        }
        not_all_states_by_country:

        // all_states_by_country_api
        if ($pathinfo === '/api/state/list_by_country') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_all_states_by_country_api;
            }

            return array (  '_controller' => 'AppBundle:Api/StateManagementApi:statesByCountryAdmin',  '_route' => 'all_states_by_country_api',);
        }
        not_all_states_by_country_api:

        // university_list
        if ($pathinfo === '/university/autocomplete_activated_search_list') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_university_list;
            }

            return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:universityAutocompleteActivatedSearchList',  '_route' => 'university_list',);
        }
        not_university_list:

        if (0 === strpos($pathinfo, '/api/university')) {
            // university_name_list
            if ($pathinfo === '/api/university/autocomplete_university_name_search_list') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_university_name_list;
                }

                return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:universityAutocompleteNameSearchList',  '_route' => 'university_name_list',);
            }
            not_university_name_list:

            // university_search
            if ($pathinfo === '/api/university/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_university_search;
                }

                return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:universitySearchAdmin',  '_route' => 'university_search',);
            }
            not_university_search:

            // update_university
            if ($pathinfo === '/api/university/update_university') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_update_university;
                }

                return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:updateUniversity',  '_route' => 'update_university',);
            }
            not_update_university:

        }

        // save_new_university
        if ($pathinfo === '/university/save_new_university') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_save_new_university;
            }

            return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:saveNewUniversity',  '_route' => 'save_new_university',);
        }
        not_save_new_university:

        if (0 === strpos($pathinfo, '/api')) {
            // save_new_university_logged_in_user
            if ($pathinfo === '/api/university/save_new_university_logged_in_user') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_save_new_university_logged_in_user;
                }

                return array (  '_controller' => 'AppBundle:Api/UniversityManagementApi:saveNewUniversityLoggedInUser',  '_route' => 'save_new_university_logged_in_user',);
            }
            not_save_new_university_logged_in_user:

            if (0 === strpos($pathinfo, '/api/admin')) {
                if (0 === strpos($pathinfo, '/api/admin/get_all_')) {
                    // get_all_non_approved_universities
                    if ($pathinfo === '/api/admin/get_all_non_approved_universities') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_non_approved_universities;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:getAllNonApprovedUniversities',  '_route' => 'get_all_non_approved_universities',);
                    }
                    not_get_all_non_approved_universities:

                    // get_all_activated_universities
                    if ($pathinfo === '/api/admin/get_all_activated_universities') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_activated_universities;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:getAllActivatedUniversities',  '_route' => 'get_all_activated_universities',);
                    }
                    not_get_all_activated_universities:

                    // get_all_deactivated_universities
                    if ($pathinfo === '/api/admin/get_all_deactivated_universities') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_deactivated_universities;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:getAllDeactivatedUniversities',  '_route' => 'get_all_deactivated_universities',);
                    }
                    not_get_all_deactivated_universities:

                }

                // save_edited_university_data_only
                if ($pathinfo === '/api/admin/save_edited_university_data_only') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_save_edited_university_data_only;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:saveEditedUniversityDataOnly',  '_route' => 'save_edited_university_data_only',);
                }
                not_save_edited_university_data_only:

                // approve_multiple_universities
                if ($pathinfo === '/api/admin/approve_multiple_universities') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_approve_multiple_universities;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:approveMultipleUniversities',  '_route' => 'approve_multiple_universities',);
                }
                not_approve_multiple_universities:

                // update_university_details
                if ($pathinfo === '/api/admin/update_university_details') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_university_details;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:updateUniversityDetails',  '_route' => 'update_university_details',);
                }
                not_update_university_details:

                // get_all_similar_universities
                if ($pathinfo === '/api/admin/get_all_similar_universities') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_get_all_similar_universities;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:getAllSimilarUniversities',  '_route' => 'get_all_similar_universities',);
                }
                not_get_all_similar_universities:

                // merge_universities
                if ($pathinfo === '/api/admin/merge_universities') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_merge_universities;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUniversityManagementApi:mergeUniversities',  '_route' => 'merge_universities',);
                }
                not_merge_universities:

            }

            // add_contact_api
            if ($pathinfo === '/api/contact/add_contact_api') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_contact_api;
                }

                return array (  '_controller' => 'AppBundle:Api/ContactManagementApi:addNewContactApi',  '_route' => 'add_contact_api',);
            }
            not_add_contact_api:

        }

        // add_contact
        if ($pathinfo === '/contact/add_contact') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_add_contact;
            }

            return array (  '_controller' => 'AppBundle:Api/ContactManagementApi:addNewContact',  '_route' => 'add_contact',);
        }
        not_add_contact:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/contact')) {
                // get_messages
                if ($pathinfo === '/api/contact/get_messages') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_get_messages;
                    }

                    return array (  '_controller' => 'AppBundle:Api/ContactManagementApi:getMessages',  '_route' => 'get_messages',);
                }
                not_get_messages:

                if (0 === strpos($pathinfo, '/api/contact/send_messages')) {
                    // send_messages
                    if ($pathinfo === '/api/contact/send_messages') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_send_messages;
                        }

                        return array (  '_controller' => 'AppBundle:Api/ContactManagementApi:sendMessages',  '_route' => 'send_messages',);
                    }
                    not_send_messages:

                    // send_messages_without_mailing
                    if ($pathinfo === '/api/contact/send_messages_without_mailing') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_send_messages_without_mailing;
                        }

                        return array (  '_controller' => 'AppBundle:Api/ContactManagementApi:sendMessagesWithoutMailing',  '_route' => 'send_messages_without_mailing',);
                    }
                    not_send_messages_without_mailing:

                }

            }

            if (0 === strpos($pathinfo, '/api/book_deal')) {
                if (0 === strpos($pathinfo, '/api/book_deal/get_book_deals_i_have_c')) {
                    // get_book_deals_i_have_contacted_for
                    if ($pathinfo === '/api/book_deal/get_book_deals_i_have_contacted_for') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_book_deals_i_have_contacted_for;
                        }

                        return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getBooksIHaveContactedFor',  '_route' => 'get_book_deals_i_have_contacted_for',);
                    }
                    not_get_book_deals_i_have_contacted_for:

                    // get_book_deals_i_have_created
                    if ($pathinfo === '/api/book_deal/get_book_deals_i_have_created') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_book_deals_i_have_created;
                        }

                        return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getBooksIHaveCreated',  '_route' => 'get_book_deals_i_have_created',);
                    }
                    not_get_book_deals_i_have_created:

                }

                // sell_book_to_user
                if ($pathinfo === '/api/book_deal/sell_book_to_user') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sell_book_to_user;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:sellBookToUser',  '_route' => 'sell_book_to_user',);
                }
                not_sell_book_to_user:

                if (0 === strpos($pathinfo, '/api/book_deal/get_book_deals_i_have_')) {
                    // get_book_deals_i_have_created_and_sold
                    if ($pathinfo === '/api/book_deal/get_book_deals_i_have_created_and_sold') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_book_deals_i_have_created_and_sold;
                        }

                        return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getBooksIHaveCreatedAndSold',  '_route' => 'get_book_deals_i_have_created_and_sold',);
                    }
                    not_get_book_deals_i_have_created_and_sold:

                    // get_book_deals_i_have_bought
                    if ($pathinfo === '/api/book_deal/get_book_deals_i_have_bought') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_book_deals_i_have_bought;
                        }

                        return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getBooksIHaveBought',  '_route' => 'get_book_deals_i_have_bought',);
                    }
                    not_get_book_deals_i_have_bought:

                }

                // change_book_deal_status
                if ($pathinfo === '/api/book_deal/change_book_deal_status') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_change_book_deal_status;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:changeBookDealStatus',  '_route' => 'change_book_deal_status',);
                }
                not_change_book_deal_status:

                // get_lowest_campus_deal_price
                if ($pathinfo === '/api/book_deal/get_lowest_campus_deal_price') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_get_lowest_campus_deal_price;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getLowestCampusDealPrice',  '_route' => 'get_lowest_campus_deal_price',);
                }
                not_get_lowest_campus_deal_price:

                // update_book_deal
                if ($pathinfo === '/api/book_deal/update_book_deal') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_book_deal;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:updateBookDeal',  '_route' => 'update_book_deal',);
                }
                not_update_book_deal:

                // delete_book_deal
                if ($pathinfo === '/api/book_deal/delete_book_deal') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_delete_book_deal;
                    }

                    return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:deleteBookDeal',  '_route' => 'delete_book_deal',);
                }
                not_delete_book_deal:

            }

        }

        // get_activated_book_deal_of_user
        if ($pathinfo === '/book_deal/get_activated_book_deal_of_user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_get_activated_book_deal_of_user;
            }

            return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getActivatedBookDealOfUser',  '_route' => 'get_activated_book_deal_of_user',);
        }
        not_get_activated_book_deal_of_user:

        if (0 === strpos($pathinfo, '/api')) {
            // get_all_activated_deals_for_message_board
            if ($pathinfo === '/api/book_del/get_all_activated_deals_for_message_board') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_all_activated_deals_for_message_board;
                }

                return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getAllActivatedDealsForMessageBoard',  '_route' => 'get_all_activated_deals_for_message_board',);
            }
            not_get_all_activated_deals_for_message_board:

            // get_all_data_for_new_contact_in_message_board
            if ($pathinfo === '/api/star/get_all_data_for_new_contact_in_message_board') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_all_data_for_new_contact_in_message_board;
                }

                return array (  '_controller' => 'AppBundle:Api/BookDealManagementApi:getAllDataForNewContactInMessageBoard',  '_route' => 'get_all_data_for_new_contact_in_message_board',);
            }
            not_get_all_data_for_new_contact_in_message_board:

            if (0 === strpos($pathinfo, '/api/wishlist')) {
                // add_book_to_wish_list
                if ($pathinfo === '/api/wishlist/add_book_to_wish_list') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_book_to_wish_list;
                    }

                    return array (  '_controller' => 'AppBundle:Api/WishListManagementApi:addBookToWishList',  '_route' => 'add_book_to_wish_list',);
                }
                not_add_book_to_wish_list:

                // get_my_wishlist
                if ($pathinfo === '/api/wishlist/get_my_wishlist') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_my_wishlist;
                    }

                    return array (  '_controller' => 'AppBundle:Api/WishListManagementApi:getMyWishList',  '_route' => 'get_my_wishlist',);
                }
                not_get_my_wishlist:

                // remove_wishlist_item
                if ($pathinfo === '/api/wishlist/remove_wishlist_item') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_remove_wishlist_item;
                    }

                    return array (  '_controller' => 'AppBundle:Api/WishListManagementApi:removeWishListItem',  '_route' => 'remove_wishlist_item',);
                }
                not_remove_wishlist_item:

                // check_if_added_into_wishlist
                if ($pathinfo === '/api/wishlist/check_if_added_into_wishlist') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_check_if_added_into_wishlist;
                    }

                    return array (  '_controller' => 'AppBundle:Api/WishListManagementApi:checkIfAddedIntoWishlist',  '_route' => 'check_if_added_into_wishlist',);
                }
                not_check_if_added_into_wishlist:

            }

            if (0 === strpos($pathinfo, '/api/admin')) {
                if (0 === strpos($pathinfo, '/api/admin/get_all_')) {
                    // get_all_non_approved_user
                    if ($pathinfo === '/api/admin/get_all_non_approved_user') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_non_approved_user;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUserApi:getAllNonApprovedUser',  '_route' => 'get_all_non_approved_user',);
                    }
                    not_get_all_non_approved_user:

                    if (0 === strpos($pathinfo, '/api/admin/get_all_a')) {
                        // get_all_approved_user
                        if ($pathinfo === '/api/admin/get_all_approved_user') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_get_all_approved_user;
                            }

                            return array (  '_controller' => 'AppBundle:Api/AdminUserApi:getAllApprovedUser',  '_route' => 'get_all_approved_user',);
                        }
                        not_get_all_approved_user:

                        // get_all_admin_user
                        if ($pathinfo === '/api/admin/get_all_admin_user') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_get_all_admin_user;
                            }

                            return array (  '_controller' => 'AppBundle:Api/AdminUserApi:getAllAdminUser',  '_route' => 'get_all_admin_user',);
                        }
                        not_get_all_admin_user:

                    }

                }

                // admin_update_users
                if ($pathinfo === '/api/admin/update_user_data') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_update_users;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminUserApi:adminUpdateUserData',  '_route' => 'admin_update_users',);
                }
                not_admin_update_users:

                if (0 === strpos($pathinfo, '/api/admin/a')) {
                    // approve_users
                    if ($pathinfo === '/api/admin/approve_users') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_approve_users;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUserApi:approveUsers',  '_route' => 'approve_users',);
                    }
                    not_approve_users:

                    // add_admin_user
                    if ($pathinfo === '/api/admin/add_admin_user') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_add_admin_user;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminUserApi:addAdminUser',  '_route' => 'add_admin_user',);
                    }
                    not_add_admin_user:

                }

                if (0 === strpos($pathinfo, '/api/admin/get_')) {
                    // get_all_book_deals
                    if ($pathinfo === '/api/admin/get_all_book_deals') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_book_deals;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminBookDealApi:getAllBookDeals',  '_route' => 'get_all_book_deals',);
                    }
                    not_get_all_book_deals:

                    // get_student_quotes
                    if ($pathinfo === '/api/admin/get_student_quotes') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_student_quotes;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminQuoteApi:getStudentQuotes',  '_route' => 'get_student_quotes',);
                    }
                    not_get_student_quotes:

                    // get_university_quotes
                    if ($pathinfo === '/api/admin/get_university_quotes') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_university_quotes;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminQuoteApi:getUniversityQuotes',  '_route' => 'get_university_quotes',);
                    }
                    not_get_university_quotes:

                }

                // update_quote
                if ($pathinfo === '/api/admin/update_quote') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_update_quote;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminQuoteApi:updateQuote',  '_route' => 'update_quote',);
                }
                not_update_quote:

                // add_quote
                if ($pathinfo === '/api/admin/add_quote') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_add_quote;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminQuoteApi:addQuote',  '_route' => 'add_quote',);
                }
                not_add_quote:

                // delete_quote
                if ($pathinfo === '/api/admin/delete_quote') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_delete_quote;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminQuoteApi:deleteQuote',  '_route' => 'delete_quote',);
                }
                not_delete_quote:

            }

        }

        if (0 === strpos($pathinfo, '/quote/get_activated_')) {
            // get_activated_student_quote
            if ($pathinfo === '/quote/get_activated_student_quote') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_activated_student_quote;
                }

                return array (  '_controller' => 'AppBundle:Api/QuoteApi:getActivatedStudentQuotes',  '_route' => 'get_activated_student_quote',);
            }
            not_get_activated_student_quote:

            // get_activated_university_quote
            if ($pathinfo === '/quote/get_activated_university_quote') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_activated_university_quote;
                }

                return array (  '_controller' => 'AppBundle:Api/QuoteApi:getActivatedUniversityQuotes',  '_route' => 'get_activated_university_quote',);
            }
            not_get_activated_university_quote:

        }

        if (0 === strpos($pathinfo, '/api/admin')) {
            // get_news
            if ($pathinfo === '/api/admin/get_news') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_news;
                }

                return array (  '_controller' => 'AppBundle:Api/AdminNewsApi:getNews',  '_route' => 'get_news',);
            }
            not_get_news:

            // add_news
            if ($pathinfo === '/api/admin/add_news') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_news;
                }

                return array (  '_controller' => 'AppBundle:Api/AdminNewsApi:addNews',  '_route' => 'add_news',);
            }
            not_add_news:

            // update_news
            if ($pathinfo === '/api/admin/update_news') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_update_news;
                }

                return array (  '_controller' => 'AppBundle:Api/AdminNewsApi:updateNews',  '_route' => 'update_news',);
            }
            not_update_news:

        }

        if (0 === strpos($pathinfo, '/news/get_')) {
            // get_active_news
            if ($pathinfo === '/news/get_activated_news') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_active_news;
                }

                return array (  '_controller' => 'AppBundle:Api/NewsApi:getActiveNews',  '_route' => 'get_active_news',);
            }
            not_get_active_news:

            // get_single_news
            if ($pathinfo === '/news/get_single_news') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_get_single_news;
                }

                return array (  '_controller' => 'AppBundle:Api/NewsApi:getSingleNews',  '_route' => 'get_single_news',);
            }
            not_get_single_news:

        }

        if (0 === strpos($pathinfo, '/contactus/send_m')) {
            // send_message
            if ($pathinfo === '/contactus/send_message') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_send_message;
                }

                return array (  '_controller' => 'AppBundle:Api/ContactUsApi:sendMessage',  '_route' => 'send_message',);
            }
            not_send_message:

            // send_mails_to_friends
            if ($pathinfo === '/contactus/send_mails_to_friends') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_send_mails_to_friends;
                }

                return array (  '_controller' => 'AppBundle:Api/ContactUsApi:sendMailsToFriends',  '_route' => 'send_mails_to_friends',);
            }
            not_send_mails_to_friends:

        }

        // send_mails_to_user_friends
        if ($pathinfo === '/api/contactus/send_mails_to_user_friends') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_send_mails_to_user_friends;
            }

            return array (  '_controller' => 'AppBundle:Api/ContactUsApi:sendMailsToUserFriends',  '_route' => 'send_mails_to_user_friends',);
        }
        not_send_mails_to_user_friends:

        // add_newsletter_email
        if ($pathinfo === '/newsletter/add_newsletter_email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_add_newsletter_email;
            }

            return array (  '_controller' => 'AppBundle:Api/NewsletterApi:addNewsletterEmail',  '_route' => 'add_newsletter_email',);
        }
        not_add_newsletter_email:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/admin')) {
                // get_all_newsletter_emails
                if ($pathinfo === '/api/admin/get_all_newsletter_emails') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_get_all_newsletter_emails;
                    }

                    return array (  '_controller' => 'AppBundle:Api/NewsletterApi:getAllNewsletterEmails',  '_route' => 'get_all_newsletter_emails',);
                }
                not_get_all_newsletter_emails:

                // export_all_newsletter_data_into_csv
                if ($pathinfo === '/api/admin/export_all_newsletter_data_into_csv') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_export_all_newsletter_data_into_csv;
                    }

                    return array (  '_controller' => 'AppBundle:Api/NewsletterApi:exportAllNewsletterEmails',  '_route' => 'export_all_newsletter_data_into_csv',);
                }
                not_export_all_newsletter_data_into_csv:

            }

            // add_book_deal_to_star_list
            if ($pathinfo === '/api/star/add_book_deal_to_star_list') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_book_deal_to_star_list;
                }

                return array (  '_controller' => 'AppBundle:Api/StarManagementApi:addBookDealToStarList',  '_route' => 'add_book_deal_to_star_list',);
            }
            not_add_book_deal_to_star_list:

            if (0 === strpos($pathinfo, '/api/admin')) {
                if (0 === strpos($pathinfo, '/api/admin/get_')) {
                    // get_log
                    if ($pathinfo === '/api/admin/get_log') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_log;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminLogApi:getLog',  '_route' => 'get_log',);
                    }
                    not_get_log:

                    // get_all_databases
                    if ($pathinfo === '/api/admin/get_all_databases') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_get_all_databases;
                        }

                        return array (  '_controller' => 'AppBundle:Api/AdminDatabaseApi:getAllDatabases',  '_route' => 'get_all_databases',);
                    }
                    not_get_all_databases:

                }

                // download_database
                if ($pathinfo === '/api/admin/download_database') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_download_database;
                    }

                    return array (  '_controller' => 'AppBundle:Api/AdminDatabaseApi:downloadDatabases',  '_route' => 'download_database',);
                }
                not_download_database:

            }

        }

        // clear_public_database_directory
        if ($pathinfo === '/clear_public_database_directory') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_clear_public_database_directory;
            }

            return array (  '_controller' => 'AppBundle:Api/AdminDatabaseApi:clearPublicDatabaseDirectory',  '_route' => 'clear_public_database_directory',);
        }
        not_clear_public_database_directory:

        // get_amazon_prices
        if ($pathinfo === '/get_amazon_prices') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_amazon_prices;
            }

            return array (  '_controller' => 'AppBundle:DBManagement:getAmazonPrices',  '_route' => 'get_amazon_prices',);
        }
        not_get_amazon_prices:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<?php
namespace TenWebOptimizer;

class OptimizerSettings
{
    protected static $instance = null;
    private $two_settings = array();
    public $settings_names = array(
        'two_lazyload'                       => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_add_noscript'                   => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_lazyload_slider_images'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_bg_lazyload'                    => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_img_in_viewport_lazyload'        => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_iframe_lazyload'                => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_delay_iframe_lazyload'                => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_elemrntor_video_iframe'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_youtube_vimeo_iframe_lazyload'  => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_video_lazyload'                 => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_gzip'                           => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_page_cache'                       => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_serve_gzip'        => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_empty_encoding_serve_gzip'        => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_minify_html'                       => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_page_cache_life_time'             => array(
            'type'    => 'string',
            'default' => '',
        ),
        'two_disable_jetpack_optimization'   => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_include_inline_css'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_include_inline_js'              => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_use_extended_exception_list_js' => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_dequeue_jquery_migrate'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_delayed_js_execution_list'      => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_disabled_delay_all_js_pages'      => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_exclude_delay_js'      => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_delay_custom_js'      => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_delay_js_execution'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_delay_all_js_execution'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_timeout_js_load'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_load_excluded_js_via_worker'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_load_excluded_js_normally'    => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_exclude_rev'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_owl'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_slick'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_slider_by_10web'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_elementor_scripts'             => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_photo_gallery_by_10web'      => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_amp_plugin_cdn'      => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_exclude_google_ads'      => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_delayed_js_load_libs_first'     => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_js'                     => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_exclude_css'                    => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_async_css'                      => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_async_all'                      => array(
            'type'    => 'checkbox',
            'default' => 'off'
        ),
        'two_disable_wp_dashicons'           => array(
            'type'    => 'checkbox',
            'default' => 'off'
        ),
        'two_disable_css'                    => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_fonts_to_preload'               => array(
            'type'    => 'textarea',
            'default' => ""
        ),
        'two_fonts_to_preconnect'            => array(
            'type'    => 'textarea',
            'default' => false
        ),
        'two_disabled_speed_optimizer_pages' => array(
            'type'    => 'textarea',
            'default' => ""
        ),
        'two_exclude_lazyload'               => array(
            'type'    => 'textarea',
            'default' => ""
        ),
        'two_do_not_optimize_images'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_enable_use_srcset'         => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_enable_nginx_webp_delivery'         => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_enable_htaccess_webp_delivery'         => array(
            'type'    => 'checkbox',
            'default' => 'on'
        ),
        'two_enable_picture_webp_delivery'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_exclude_images_for_optimize'    => array(
            'type'    => 'textarea',
            'default' => ""
        ),
        'two_async_font'                     => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_merge_google_font_faces'          => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_load_fonts_via_webfont'         => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_serve_optimized_bg_image'       => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_test_mode'                    => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_files_cache'                    => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_enable_htaccess_caching_headers'  => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_enable_plugin_autoupdate'       => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_all_pages_are_optimizable'      => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_minify_js'                      => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_minify_css'                     => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_split_css'                      => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'lazy_load_type'                     => array(
            'type'    => 'select',
            'default' => 'vanilla'
        ),
        'two_async_page'                     => array(
            'type'    => 'string',
            'default' => null
        ),
        'two_disable_page'                   => array(
            'type'    => 'string',
            'default' => null
        ),
        'two_change_minify'                  => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_aggregate_js'                   => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_aggregate_css'                  => array(
            'type'    => 'checkbox',
            'default' => ''
        ),
        'two_defer_plugin_js'                => array(
            'type'    => 'string',
            'default' => ''
        ),
        'two_critical_pages'                 => array(
            'type'    => 'array',
            'default' => ''
        ),
        'two_critical_sizes'                 => array(
            'type'    => 'array',
            'default' => ''
        ),
        'two_critical_url_args'              => array(
            'type'    => 'txt',
            'default' => 'PageSpeed=off&two_nooptimize=1&two_action=generating_critical_css'
        ),
        'two_critical_status'                => array(
            'type'    => 'txt',
            'default' => 'true'
        ),
        'two_critical_font_status'                => array(
            'type'    => 'txt',
            'default' => 'true'
        ),
        'two_font_actions'                => array(
            'type'    => 'select',
            'default' => 'not_load'
        ),
        'two_connected'                => array(
            'type'    => 'txt',
            'default' => '0'
        ),
        'cloudflare_cache_status'                => array(
            'type'    => 'txt',
            'default' => 'off'
        ),
        'two_non_optimizable_speed_optimizer_pages' => array(
            'type'    => 'textarea',
            'default' => ""
        ),
    );
    public $default_settings = array(
        'two_test_mode'              => '',
        'cloudflare_cache_status'              => 'off',
        'two_files_cache'              => 'on',
        'two_enable_htaccess_caching_headers' => '',
        'two_enable_plugin_autoupdate' => '',
        'two_include_inline_js'        => 'on',
        'two_include_inline_css'       => 'on',
        'two_exclude_js'               => 'wp-content/cache/, wp-includes/js/dist/, wp-includes/js/tinymce/, jquery.js, jquery.min.js, ' .
            'jquery-migrate.min.js, jquery-migrate.js, jquery.mobile, jquery-mobile',
        'two_delay_js_execution'             => 'on',
        'two_delay_all_js_execution'         => 'on',
        'two_timeout_js_load'                => '',
        'two_load_excluded_js_via_worker'    => '',
        'two_load_excluded_js_normally'      => '',
        'two_exclude_rev'                    => '',
        'two_exclude_owl'                    => '',
        'two_exclude_slick'                  => '',
        'two_exclude_slider_by_10web'        => '',
        'two_exclude_elementor_scripts'      => '',
        'two_exclude_photo_gallery_by_10web' => '',
        'two_exclude_amp_plugin_cdn'             => 'on',
        'two_exclude_google_ads' => 'on',
        'two_exclude_css'                    => 'wp-content/cache/, admin-bar.min.css',
        'two_lazyload'                       => 'on',
        'two_add_noscript'                   => 'on',
        'two_iframe_lazyload'                => 'on',
        'two_delay_iframe_lazyload'          => '',
        'two_video_lazyload'                 => 'on',
        'two_serve_gzip'                     => 'on',
        'two_img_in_viewport_lazyload'        => '',
        'two_page_cache_life_time'           => 7 * 24 * 60 * 60,
        'lazy_load_type'                     => 'vanilla',
        'two_async_css'                      => "elementor-icons-css, elementor-animations-css, elementor-icons-shared-0-css, " .
            "elementor-icons-fa-brands-css, elementor-icons-fa-solid-css ,elementor-icons-fa-regular-css, " .
            "tenweb-website-builder-theme-style-css, open-sans-css, font-awesome-css, bwg_googlefonts-css, " .
            "bwg_fonts-css, elementor-global-css, google-fonts-1-css, elementor-common-css, " .
            "wc-block-style-css, wp-block-library-css",
        'two_async_font'                     => 'on',
        'two_merge_google_font_faces'        => '',
        'two_aggregate_js'                   => 'on',
        'two_enable_use_srcset'              => 'on',
        'two_aggregate_css'                  => 'on',
        'two_minify_css'                     => 'on',
        'two_minify_js'                      => 'on',
        'two_serve_optimized_bg_image'       => 'on',
        'two_enable_nginx_webp_delivery'     => 'on',
        'two_enable_htaccess_webp_delivery'  => 'on',
        'two_disabled_speed_optimizer_pages' => 'robots.txt,.well-known',
        'two_critical_status'                => 'true',
        'two_critical_font_status'           => 'true',
        'two_font_actions'                   => 'not_load',
        'two_critical_url_args'              => 'PageSpeed=off&two_nooptimize=1&two_action=generating_critical_css',
        'two_critical_sizes'                 => array(
            'two_1617650538215' => array(
                'width' =>  '1920',
                'height' =>  '800',
                'media' => '@media screen and (min-width: 1920px)',
                'uid' => 'two_1617650538215'
            ),
            'two_1617650549855' => array(
                'width' =>  '1500',
                'height' =>  '800',
                'media' => '@media screen and (min-width: 1500px) and (max-width: 1920px)',
                'uid' => 'two_1617650549855'
            ),
            'two_1617650561871' => array(
                'width' =>  '1280',
                'height' =>  '700',
                'media' => '@media screen and (min-width: 1280px) and (max-width: 1500px)',
                'uid' => 'two_1617650561871'
            ),
            'two_1617650582190' => array(
                'width' =>  '1024',
                'height' =>  '600',
                'media' => '@media screen and (min-width: 1024px) and (max-width: 1280px)',
                'uid' => 'two_1617650582190'
            ),
            'two_1617650596079' => array(
                'width' =>  '768',
                'height' =>  '500',
                'media' => '@media screen and (min-width: 767px) and (max-width: 1024px)',
                'uid' => 'two_1617650596079'
            ),
            'two_1617650611968' => array(
                'width' =>  '320',
                'height' =>  '400',
                'media' => '@media screen and (max-width: 767px)',
                'uid' => 'two_1617650611968'
            ),
        ),
        'two_non_optimizable_speed_optimizer_pages' => '/wp-admin/, /xmlrpc.php, wp-.*.php, feed, index.php, sitemap(_index)?.xml, /store.*, 
        /cart.*, /my-account.*, /checkout.*, /addons.*, well-known, acme-challenge',
    );


    public $critical_default_options = array(
        "use_uncritical"=> "false",
        "load_type" => "async",
        "wait_until" => "domcontentloaded",
        "default_sizes" => array(),
    );
    public $critical_options = array(
        'uncritical_load_types' => array(
            "async"=>"Async",
            "on_interaction"=>"On interaction",
            "not_load"=>"Do not load",
        ),
        'critical_wait_until' => array(
            "load"=>"load",
            "domcontentloaded"=>"domcontentloaded",
            "networkidle0"=>"networkidle0",
            "networkidle2"=>"networkidle2",
        )
    );



    function __construct()
    {
        $this->init_settings();
        $this ->init_critical_defaults();
    }

    public function get_settings($name = null, $default = false)
    {
        // OptimizerUtils::stripslashes_deep used instead of stripslashes_deep() because in advanced-cache mode
        // stripslashes_deep() function does not exists
        if (isset($name)) {

            if (isset($this->two_settings[$name])) {
                return OptimizerUtils::stripslashes_deep($this->two_settings[$name]);
            }
            else {
                if ( 'two_clear_cache_date' == $name && function_exists( 'get_option' ) ) {
                    return get_option("two_clear_cache_date");
                }
                if ( 'two_webp_delivery_working' == $name && function_exists( 'get_option' ) ) {
                    return get_option("two_webp_delivery_working");
                }
                if ( 'tenweb_so_version' == $name && function_exists( 'get_option' ) ) {
                    return TENWEB_SO_VERSION;
                }
            }

            return $default;
        }

        return OptimizerUtils::stripslashes_deep($this->two_settings);
    }

    public function set_settings($data)
    {
        foreach ($this->settings_names as $key => $val) {
            if (isset($data[$key])) {
                if ( is_array($data[$key]) ) {
                    $this->two_settings[$key] = map_deep( $data[$key], 'sanitize_text_field' );
                }
                else {
                    $checked = sanitize_text_field( $data[ $key ] );
                    $this->two_settings[$key] = $this->maybe_change_server_configuration( $key, isset( $this->two_settings[$key] ) ? $this->two_settings[$key] : '', $checked );
                }
            } else {
                $this->two_settings[$key] = $this->maybe_change_server_configuration( $key, isset( $this->two_settings[$key] ) ? $this->two_settings[$key] : '', '' );
            }
        }
        // Change critical pages to post meta and remove from settings.
        if ( isset( $this->two_settings[ 'two_critical_pages' ] ) && is_array( $this->two_settings[ 'two_critical_pages' ] ) ) {
            $page_on_front = $this->update_setting( 'two_critical_pages', $this->two_settings[ 'two_critical_pages' ] );
            // Homepage needs to be saved separately as it depends on "Your homepage displays" option.
            if ( !$page_on_front ) {
                unset( $this->two_settings[ 'two_critical_pages' ] );
            }
            else {
                $this->two_settings[ 'two_critical_pages' ] = $page_on_front;
            }
        }
        $this->two_settings["two_connected"] = "0";
        if(\Tenweb_Authorization\Login::get_instance()->check_logged_in()){
            $this->two_settings["two_connected"] = "1";

            $home_url_db = get_option("two_home_url", false);
            $home_url = get_home_url();
            if ( $home_url_db !== $home_url ) {
                update_option("two_home_url", $home_url);
                if( $home_url_db !== false ) {
                    OptimizerUtils::update_site_state();
                }
            }
        }
        update_option("two_settings", json_encode($this->two_settings)); // phpcs:ignore
        $this->init_settings();
    }

    public function update_setting($name, $value, $excludeCriticalRegeneration = false)
    {
        // Save all critical data as meta for other pages than front_page.
        if ( 'two_critical_pages' == $name ) {
            if ( is_array( $value ) ) {
                foreach ( $value as $page_id => $critical ) {
                    if ( OptimizerUrl::isCriticalSavedInSettings( $page_id ) ) {
                        continue;
                    }
                    update_post_meta( $page_id, 'two_critical_pages', $critical );
                    unset( $value[ $page_id ] );
                }
            }
        }
        $two_settings = $this->get_settings();
        if ( is_array( $value ) ) {
            $value = map_deep( $value, 'sanitize_text_field' );
        }
        else {
            $value = sanitize_text_field( $value );
        }
        $this->maybe_clear_cache( $name, isset ( $two_settings[ $name ] ) ? $two_settings[ $name ] : '', $value, $excludeCriticalRegeneration );
        $two_settings[ $name ] = $this->maybe_change_server_configuration( $name, isset ( $two_settings[ $name ] ) ? $two_settings[ $name ] : '', $value );
        $two_settings["two_connected"] = "0";
        if(\Tenweb_Authorization\Login::get_instance()->check_logged_in()){
            $two_settings["two_connected"] = "1";
        }
        update_option( "two_settings", json_encode( $two_settings ) ); // phpcs:ignore
        $this->two_settings[$name] = $two_settings[ $name ];
        return $value;
    }

    public function maybe_clear_cache( $name, $old_value, $new_value, $excludeCriticalRegeneration = false ) {
        if ( 'two_test_mode' == $name && $old_value != $new_value ) {
            OptimizerAdmin::clear_cache(false, true ); //do not regenerate critical on test mode change
        }
    }

    public function maybe_change_server_configuration ( $name, $old_value, $new_value ) {
        if ( $old_value != $new_value ) {
            $response = false;
            if ( 'two_enable_nginx_webp_delivery' == $name || 'two_enable_htaccess_webp_delivery' == $name ) {
                if ( 'two_enable_nginx_webp_delivery' == $name ) {
                    $response = $this->change_nginx_webp_delivery( array( 'nginx_webp_delivery' => ( 'on' == $new_value ? 'enabled' : 'disabled' ) ) );
                }
                if ( 'two_enable_htaccess_webp_delivery' == $name && !TENWEB_SO_HOSTED_ON_NGINX ) {
                    add_filter( 'get_two_enable_htaccess_webp_delivery', function() use ( $new_value ) {
                        return $new_value;
                    } );
                    $response = $this->write_htaccess_configs();
                }
                if ( false !== $response && ( !isset( $response[ 'status' ] ) || 'success' != $response[ 'status' ] ) ) {
                    add_filter( 'two_save_settings_message', function( $message ) {
                        return $message . ' ' . __('WebP delivery could not be changed. Old value restored.', 'tenweb-speed-optimizer');
                    } );
                    add_filter( 'two_save_settings_code', function( $code ) {
                        return 'nginx_webp_delivery';
                    } );
                    return $old_value;
                }
            }
            if ( 'two_enable_htaccess_caching_headers' == $name ) {
                if ( 'two_enable_htaccess_caching_headers' == $name && !TENWEB_SO_HOSTED_ON_NGINX ) {
                    add_filter( 'get_two_enable_htaccess_caching_headers', function() use ( $new_value ) {
                        return $new_value;
                    } );
                    $response = $this->write_htaccess_configs();
                }
                if ( false !== $response && ( !isset( $response[ 'status' ] ) || 'success' != $response[ 'status' ] ) ) {
                    add_filter( 'two_save_settings_message', function( $message ) {
                        return $message . ' ' . __('.htaccess could not be changed. Old value restored.', 'tenweb-speed-optimizer');
                    } );
                    add_filter( 'two_save_settings_code', function( $code ) {
                        return $code;
                    } );
                    return $old_value;
                }
            }
        }
        return $new_value;
    }

    public function change_nginx_webp_delivery( $request_data ) {
        try {
            $tenweb_domain_id = get_option('tenweb_domain_id');
            $response_data = null;
            if (class_exists('Tenweb_Manager\Manager') && true === \TenwebServices::manager_ready()  && isset($tenweb_domain_id) ) {
                $response = \TenwebServices::do_request(TENWEB_API_URL . '/domains/' . $tenweb_domain_id . '/set-nginx-webp-delivery', array(
                    "body"   => $request_data,
                    "method" => "POST",
                    "blocking" => true
                ));
                if ( !is_wp_error( $response ) && 200 === wp_remote_retrieve_response_code( $response ) ) {
                    $response_data = array (
                        "status" => "success",
                    );
                }
            } else {
                $response_data = array(
                    "status" => "error",
                    "error"  => "Tenweb Manager not ready"
                );
            }

        } catch (\Exception $e) {
            $response_data = array(
                "status" => "error",
                "error"  => $e->getMessage()
            );
        }

        return $response_data;
    }

    public function write_htaccess_configs() {
        try {
            $response_data = null;
            if ( TENWEB_SO_HTACCESS_WRITABLE ) {
                /* Add rules to .htaccess  */
                if (!function_exists('insert_with_markers')) {
                    require_once ABSPATH . 'wp-admin/includes/misc.php';
                }
                $success = insert_with_markers(  get_home_path() . '.htaccess', 'Speed Optimizer by 10Web', '' );
                $insertion = $this->get_htaccess_webp_delivery();
                $insertion .= $this->get_htaccess_caching_headers();
                $success = insert_with_markers(  get_home_path() . '.htaccess', 'Speed Optimizer by 10Web', $insertion );
                if ( $success ) {
                    $response_data = array (
                        "status" => "success",
                    );
                }
            } else {
                $response_data = array(
                    "status" => "error",
                    "error"  => "htaccess is not writable"
                );
            }

        } catch (\Exception $e) {
            $response_data = array(
                "status" => "error",
                "error"  => $e->getMessage()
            );
        }

        return $response_data;
    }

    public function get_htaccess_webp_delivery() {
        $insertion = '';
        $enable_webp_delivery = apply_filters( 'get_two_enable_htaccess_webp_delivery', $this->get_settings( 'two_enable_htaccess_webp_delivery' ) );
        if ( 'on' == $enable_webp_delivery ) {
            $insertion = '
        <IfModule mod_rewrite.c>
          RewriteEngine On

          # Does browser explicitly support webp?
          RewriteCond %{HTTP_USER_AGENT} Chrome [OR]
          # OR Is request from Page Speed
          RewriteCond %{HTTP_USER_AGENT} "Google Page Speed Insights" [OR]
          # OR does this browser explicitly support webp
          RewriteCond %{HTTP_ACCEPT} image/webp
          # AND NOT MS EDGE 42/17 - doesnt work.
          RewriteCond %{HTTP_USER_AGENT} !Edge/17
          # AND is the request a jpg, png or gif?
          RewriteCond %{REQUEST_URI} ^(.+)\.(?:jpe?g|png|gif)$
          # AND does a .ext.webp image exist?
          RewriteCond %{DOCUMENT_ROOT}%{REQUEST_URI}.webp -f
          # THEN send the webp image and set the env var webp
          RewriteRule ^(.+)$ $1.webp [NC,T=image/webp,E=webp,L]
        </IfModule>
        
        <IfModule mod_headers.c>
          # If REDIRECT_webp env var exists, append Accept to the Vary header
          Header append Vary Accept env=REDIRECT_webp
        </IfModule>

        <IfModule mod_mime.c>
          AddType image/webp .webp
        </IfModule>
        ';
        }
        return $insertion;
    }

    public function get_htaccess_caching_headers() {
        $insertion = PHP_EOL;
        $enable_htaccess_caching_headers = apply_filters( 'get_two_enable_htaccess_caching_headers', $this->get_settings( 'two_enable_htaccess_caching_headers' ) );
        if ( 'on' == $enable_htaccess_caching_headers ) {
            $insertion .= $this->get_htaccess_charset();
            $insertion .= $this->get_htaccess_etag();
            $insertion .= $this->get_htaccess_web_fonts_access();
            $insertion .= $this->get_htaccess_files_match();
            $insertion .= $this->get_htaccess_mod_expires();
            $insertion .= $this->get_htaccess_mod_deflate();
        }
        return $insertion;
    }

    public function get_htaccess_charset() {
        // Get charset of the blog.
        $charset = preg_replace( '/[^a-zA-Z0-9_\-\.:]+/', '', get_bloginfo( 'charset', 'display' ) );

        if ( empty( $charset ) ) {
            return '';
        }

        $rules = "# Use $charset encoding for anything served text/plain or text/html" . PHP_EOL;
        $rules .= "AddDefaultCharset $charset" . PHP_EOL;
        $rules .= "# Force $charset for a number of file formats" . PHP_EOL;
        $rules .= '<IfModule mod_mime.c>' . PHP_EOL;
        $rules .= "AddCharset $charset .atom .css .js .json .rss .vtt .xml" . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;

        return $rules;
    }

    public function get_htaccess_etag() {
        $rules  = '# FileETag None is not enough for every server.' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'Header unset ETag' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;
        $rules .= '# Since we’re sending far-future expires, we don’t need ETags for static content.' . PHP_EOL;
        $rules .= '# developer.yahoo.com/performance/rules.html#etags' . PHP_EOL;
        $rules .= 'FileETag None' . PHP_EOL . PHP_EOL;

        return $rules;
    }

    public function get_htaccess_web_fonts_access() {
        $rules  = '# Send CORS headers if browsers request them; enabled by default for images.' . PHP_EOL;
        $rules .= '<IfModule mod_setenvif.c>' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= '# mod_headers, y u no match by Content-Type?!' . PHP_EOL;
        $rules .= '<FilesMatch "\.(avifs?|cur|gif|png|jpe?g|svgz?|ico|webp)$">' . PHP_EOL;
        $rules .= 'SetEnvIf Origin ":" IS_CORS' . PHP_EOL;
        $rules .= 'Header set Access-Control-Allow-Origin "*" env=IS_CORS' . PHP_EOL;
        $rules .= '</FilesMatch>' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;

        $rules .= '# Allow access to web fonts from all domains.' . PHP_EOL;
        $rules .= '<FilesMatch "\.(eot|otf|tt[cf]|woff2?)$">' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'Header set Access-Control-Allow-Origin "*"' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</FilesMatch>' . PHP_EOL . PHP_EOL;

        return $rules;
    }

    public function get_htaccess_files_match() {
        $rules = '<IfModule mod_alias.c>' . PHP_EOL;
        $rules .= '<FilesMatch "\.(html|htm|rtf|rtx|txt|xsd|xsl|xml)$">' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'Header set X-Powered-By "TenWeb Speed Optimizer"' . PHP_EOL;
        $rules .= 'Header unset Pragma' . PHP_EOL;
        $rules .= 'Header append Cache-Control "public"' . PHP_EOL;
        $rules .= 'Header unset Last-Modified' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</FilesMatch>' . PHP_EOL . PHP_EOL;
        $rules .= '<FilesMatch "\.(css|htc|js|asf|asx|wax|wmv|wmx|avi|bmp|class|divx|doc|docx|eot|exe|gif|gz|gzip|ico|jpg|jpeg|jpe|json|mdb|mid|midi|mov|qt|mp3|m4a|mp4|m4v|mpeg|mpg|mpe|mpp|otf|odb|odc|odf|odg|odp|ods|odt|ogg|pdf|png|pot|pps|ppt|pptx|ra|ram|svg|svgz|swf|tar|tif|tiff|ttf|ttc|wav|wma|wri|xla|xls|xlsx|xlt|xlw|zip)$">' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'Header unset Pragma' . PHP_EOL;
        $rules .= 'Header append Cache-Control "public"' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</FilesMatch>' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;

        return $rules;
    }

    public function get_htaccess_mod_expires() {
        $rules = <<<HTACCESS
<IfModule mod_mime.c>
	AddType image/avif                                  avif
    AddType image/avif-sequence                         avifs
</IfModule>
# Expires headers (for better cache control)
<IfModule mod_expires.c>
	ExpiresActive on
	ExpiresDefault                              "access plus 1 month"
	# cache.appcache needs re-requests in FF 3.6 (thanks Remy ~Introducing HTML5)
	ExpiresByType text/cache-manifest           "access plus 0 seconds"
	# Your document html
	ExpiresByType text/html                     "access plus 0 seconds"
	# Data
	ExpiresByType text/xml                      "access plus 0 seconds"
	ExpiresByType application/xml               "access plus 0 seconds"
	ExpiresByType application/json              "access plus 0 seconds"
	# Feed
	ExpiresByType application/rss+xml           "access plus 1 hour"
	ExpiresByType application/atom+xml          "access plus 1 hour"
	# Favicon (cannot be renamed)
	ExpiresByType image/x-icon                  "access plus 1 week"
	# Media: images, video, audio
	ExpiresByType image/gif                     "access plus 4 months"
	ExpiresByType image/png                     "access plus 4 months"
	ExpiresByType image/jpeg                    "access plus 4 months"
	ExpiresByType image/webp                    "access plus 4 months"
	ExpiresByType video/ogg                     "access plus 4 months"
	ExpiresByType audio/ogg                     "access plus 4 months"
	ExpiresByType video/mp4                     "access plus 4 months"
	ExpiresByType video/webm                    "access plus 4 months"
	ExpiresByType image/avif                    "access plus 4 months"
	ExpiresByType image/avif-sequence           "access plus 4 months"
	# HTC files  (css3pie)
	ExpiresByType text/x-component              "access plus 1 month"
	# Webfonts
	ExpiresByType font/ttf                      "access plus 4 months"
	ExpiresByType font/otf                      "access plus 4 months"
	ExpiresByType font/woff                     "access plus 4 months"
	ExpiresByType font/woff2                    "access plus 4 months"
	ExpiresByType image/svg+xml                 "access plus 4 months"
	ExpiresByType application/vnd.ms-fontobject "access plus 1 month"
	# CSS and JavaScript
	ExpiresByType text/css                      "access plus 1 year"
	ExpiresByType application/javascript        "access plus 1 year"
</IfModule>

HTACCESS;

        return $rules;
    }

    public function get_htaccess_mod_deflate() {
        $rules = '# Gzip compression' . PHP_EOL;
        $rules .= '<IfModule mod_deflate.c>' . PHP_EOL;
        $rules .= '# Active compression' . PHP_EOL;
        $rules .= 'SetOutputFilter DEFLATE' . PHP_EOL;
        $rules .= '# Force deflate for mangled headers' . PHP_EOL;
        $rules .= '<IfModule mod_setenvif.c>' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'SetEnvIfNoCase ^(Accept-EncodXng|X-cept-Encoding|X{15}|~{15}|-{15})$ ^((gzip|deflate)\s*,?\s*)+|[X~-]{4,13}$ HAVE_Accept-Encoding' . PHP_EOL;
        $rules .= 'RequestHeader append Accept-Encoding "gzip,deflate" env=HAVE_Accept-Encoding' . PHP_EOL;
        $rules .= '# Don’t compress images and other uncompressible content' . PHP_EOL;
        $rules .= 'SetEnvIfNoCase Request_URI \\' . PHP_EOL;
        $rules .= '\\.(?:gif|jpe?g|png|rar|zip|exe|flv|mov|wma|mp3|avi|swf|mp?g|mp4|webm|webp|pdf)$ no-gzip dont-vary' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;
        $rules .= '# Compress all output labeled with one of the following MIME-types' . PHP_EOL;
        $rules .= '<IfModule mod_filter.c>' . PHP_EOL;
        $rules .= 'AddOutputFilterByType DEFLATE application/atom+xml \
		                          application/javascript \
		                          application/json \
		                          application/rss+xml \
		                          application/vnd.ms-fontobject \
		                          application/x-font-ttf \
		                          application/xhtml+xml \
		                          application/xml \
		                          font/opentype \
		                          image/svg+xml \
		                          image/x-icon \
		                          text/css \
		                          text/html \
		                          text/plain \
		                          text/x-component \
		                          text/xml' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '<IfModule mod_headers.c>' . PHP_EOL;
        $rules .= 'Header append Vary: Accept-Encoding' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL;
        $rules .= '</IfModule>' . PHP_EOL . PHP_EOL;

        return $rules;
    }

    public function set_default_settings()
    {
        if ( !TENWEB_SO_HOSTED_ON_10WEB ) {
            $this->default_settings["two_page_cache"] = "on";
        }
        if ( class_exists('RevSliderFront') || is_plugin_active( 'revslider/revslider.php' ) ) {
            $this->default_settings['two_exclude_rev'] = 'on';
        }
        if ( class_exists('WDS') || is_plugin_active( 'slider-wd/slider-wd.php' ) ) {
            $this->default_settings['two_exclude_slider_by_10web'] = 'on';
        }
        if ( class_exists('BWG') || is_plugin_active( 'photo-gallery/photo-gallery.php' ) ) {
            $this->default_settings['two_exclude_photo_gallery_by_10web'] = 'on';
        }
        if ( defined('JETPACK__VERSION') || is_plugin_active( 'jetpack/jetpack.php' ) ) {
            $this->default_settings['two_disable_jetpack_optimization'] = 'on';
        }
        $this->set_settings( $this->default_settings );
        $this->init_settings();
    }


    public function init_critical_defaults(){
        if(function_exists("get_option")){
            $two_critical_default_settings = get_option("two_critical_default_settings");
            if(empty($two_critical_default_settings)){
                $two_critical_sizes = $this->get_settings("two_critical_sizes");
                if ($two_critical_sizes === false || !is_array($two_critical_sizes)) {
                    $two_critical_sizes = $this->default_settings["two_critical_sizes"];
                }

                $this->critical_default_options["default_sizes"] = array_keys($two_critical_sizes);
                update_option("two_critical_default_settings", $this->critical_default_options);
            }
        }
    }

    public function set_critical_defaults($page_defaults = false) {
        $this->update_setting("two_critical_url_args", $this->default_settings["two_critical_url_args"]);
        $this->update_setting("two_critical_sizes", $this->default_settings["two_critical_sizes"]);
    }

    /**
     * @return false|string
     * @throws \JsonException
     */
    public function export_settings()
    {
        $two_settings = get_option("two_settings");
        if (OptimizerUtils::isJson($two_settings)) {
            $two_settings = json_decode($two_settings, true);
        }
        $current_date = date("Y-m-d"); // phpcs:ignore
        $file_data = array(
            "version"  => TENWEB_SO_VERSION,
            "date"     => $current_date,
            "settings" => $two_settings
        );

        return json_encode($file_data); // phpcs:ignore
    }

    public function import_settings($filepath)
    {
        if (file_exists($filepath) && is_readable($filepath)) {
            $json_data = file_get_contents($filepath); // phpcs:ignore
            $data_arr = json_decode($json_data, true);
            if (!empty($data_arr["settings"])) {
                if ( isset( $data_arr['settings']['two_enable_nginx_webp_delivery'] ) ) {
                    $data_arr[ 'settings' ][ 'two_enable_nginx_webp_delivery' ] = $this->maybe_change_server_configuration( 'two_enable_nginx_webp_delivery', $this->two_settings[ 'two_enable_nginx_webp_delivery' ], $data_arr[ 'settings' ][ 'two_enable_nginx_webp_delivery' ] );
                }
                if ( isset( $data_arr['settings']['two_enable_htaccess_webp_delivery'] ) ) {
                    $data_arr[ 'settings' ][ 'two_enable_htaccess_webp_delivery' ] = $this->maybe_change_server_configuration( 'two_enable_htaccess_webp_delivery', $this->two_settings[ 'two_enable_htaccess_webp_delivery' ], $data_arr[ 'settings' ][ 'two_enable_htaccess_webp_delivery' ] );
                }
                update_option("two_settings", json_encode($data_arr["settings"])); // phpcs:ignore

                return true;
            }
        }

        return false;
    }

    private function init_settings()
    {

        if(!function_exists("get_option") && defined("TENWEB_SO_ADVANCED_CACHE") && TENWEB_SO_ADVANCED_CACHE){
            $two_settings = WebPageCache\OptimizerWebPageCache::get_config("two_settings");
        }else{
            $two_settings = get_option("two_settings");
            $two_settings = json_decode($two_settings, true);
            $no_optimize_pages_list = get_option("no_optimize_pages");
            $two_settings["no_optimize_pages"] = $no_optimize_pages_list;
            $two_settings = json_encode($two_settings); // phpcs:ignore
        }

        if (isset($two_settings) && $two_settings !== false) {
            $this->two_settings = json_decode($two_settings, true);
        } else {
            foreach ($this->settings_names as $key => $val) {
                $this->two_settings[$key] = get_option($key);
            }
            $no_optimize_pages_list = get_option("no_optimize_pages");
            $this->two_settings["no_optimize_pages"] = $no_optimize_pages_list;
        }

        if(isset($this->two_settings['lazy_load_type']) && $this->two_settings['lazy_load_type'] !== 'vanilla'){
            $this->two_settings['two_bg_lazyload'] = '';
        }
    }

    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    public function setTestMode($html)
    {
        update_option("two_test_mode", $html, 'no');

        return true;
    }

    public function getTestMode()
    {
        return get_option("two_test_mode", false);
    }

    public function removeTestMode()
    {
        delete_option("two_test_mode");

        return true;
    }

    public function sync_configs_with_plugin_state( $plugin_state = 'active' ) {
        if ( 'active' === $plugin_state ) {
            if ( TENWEB_SO_HOSTED_ON_10WEB ) {
                $enable_webp_delivery = $this->get_settings( 'two_enable_nginx_webp_delivery' );
                $this->change_nginx_webp_delivery( $enable_webp_delivery );
            }
            else if ( !TENWEB_SO_HOSTED_ON_NGINX ) {
                add_filter( 'get_two_enable_htaccess_webp_delivery', function() {
                    return $this->get_settings( 'two_enable_htaccess_webp_delivery' );
                } );
                $this->write_htaccess_configs();
            }
            if ( 'on' === $this->get_settings( 'two_page_cache' ) ) {
                \TenWebOptimizer\WebPageCache\OptimizerWebPageCacheWP::get_instance()->store_page_cache_configs();
                \TenWebOptimizer\WebPageCache\OptimizerWebPageCacheWP::get_instance()->enable_page_cache();
            }
        }
        else {
            if ( TENWEB_SO_HOSTED_ON_10WEB ) {
                $this->change_nginx_webp_delivery( 'disabled' );
            }
            else if ( !TENWEB_SO_HOSTED_ON_NGINX ) {
                add_filter( 'get_two_enable_htaccess_webp_delivery', function() {
                    return '';
                } );
                $this->write_htaccess_configs();
            }
            \TenWebOptimizer\WebPageCache\OptimizerWebPageCacheWP::get_instance()->disable_page_cache();
        }
    }

    public function get_default_setting($name){
        return $this->default_settings[$name];
    }
}
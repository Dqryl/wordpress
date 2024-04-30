<?php
/**
* WooCommerce support
*
* @package ListMode WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if (!class_exists('ListMode_WooCommerce')) :

    class ListMode_WooCommerce {

        public function __construct()
        {
            if (defined('LISTMODE_WOOCOMMERCE_ACTIVE') && LISTMODE_WOOCOMMERCE_ACTIVE) {
                $this->removeDefaultContentWrapperActions();
                $this->addCustomContentWrapperActions();
            }
        }

        private function removeDefaultContentWrapperActions()
        {
            remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
            remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
        }

        private function addCustomContentWrapperActions()
        {
            add_action('woocommerce_before_main_content', array($this, 'listmodeWooWrapperStart'), 10);
            add_action('woocommerce_after_main_content', array($this, 'listmodeWooWrapperEnd'), 10);
        }

        public function listmodeWooWrapperStart()
        {
            ?>
            <div class="listmode-main-wrapper listmode-clearfix" id="listmode-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
                <div class="theiaStickySidebar">
                    <div class="listmode-main-wrapper-inside listmode-clearfix">

                        <?php $listmode_hooks_instance = ListMode_Hooks::get_instance(); $listmode_hooks_instance->before_main_content(); ?>

                        <div class="listmode-posts-wrapper" id="listmode-posts-wrapper">

                            <div class="listmode-posts listmode-singular-box">
                                <div class="listmode-singular-box-inside">
                                    <div class="listmode-posts-content">
            <?php
        }

        public function listmodeWooWrapperEnd()
        {
            ?>
                                    </div>
                                </div>
                            </div>

                        </div><!--/#listmode-posts-wrapper -->

                        <?php $listmode_hooks_instance = ListMode_Hooks::get_instance(); $listmode_hooks_instance->after_main_content(); ?>

                    </div>
                </div>
            </div><!-- /#listmode-main-wrapper -->

            <?php //get_sidebar(); ?>
            <?php
        }

    }

    $listModeWooCommerceSupport = new ListMode_WooCommerce();

endif;
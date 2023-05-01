<?php
/*
Plugin Name: Category Bottom Content Editor
Plugin URI: https://themes.vantheweb.com/danh-muc-san-pham/plugin-chinh-hang/
Description: Plugin hỗ trợ viết nội dung SEO cho danh mục sản phẩm
Version: 2.0
Text Domain: categorybottomtinymce
Author: Edit By vantheweb.com
Author URI: https://vantheweb.com
License: GPL
*/
/*  Copyright 2022  bởi vantheweb.com  (Zalo : 0386019486)
*/

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly
}
 
add_action( 'product_cat_add_form_fields', 'vantheweb_wp_editor_add', 10, 2 );
 
/**
 * Tạo một trình soạn thảo văn bản TinyMCE cho trang thêm danh mục sản phẩm
 */
function vantheweb_wp_editor_add() {
    ?>
    <div class="form-field">
        <label for="seconddesc"><?php echo __( 'Bottom Content Editor', 'woocommerce' ); ?></label>
       
      <?php
      $settings = array(
         'textarea_name' => 'seconddesc', // Tên của trình soạn thảo
         'quicktags' => array( 'buttons' => 'em,strong,link' ), // Nút nhanh sẵn có
         'tinymce' => array(
            'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
            'theme_advanced_buttons2' => '',
         ),
         'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
      );
 
      // Hiển thị trình soạn thảo văn bản TinyMCE
      wp_editor( '', 'seconddesc', $settings );
      ?>
       
        <p class="description"><?php echo __( 'This is the description that goes BELOW products on the category page', 'woocommerce' ); ?></p>
    </div>
    <?php
}
 
add_action( 'product_cat_edit_form_fields', 'vantheweb_wp_editor_edit', 10, 2 );
 
/**
 * Hiển thị trường nhập văn bản trình soạn thảo dành cho mô tả của danh mục sản phẩm.
 *
 * @param object $term Đối tượng danh mục sản phẩm đang được chỉnh sửa.
 */
function vantheweb_wp_editor_edit( $term ) {
    // Lấy giá trị của trường seconddesc từ term_id của $term
    $second_desc = htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) );
    ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <!-- Hiển thị nhãn cho trường seconddesc -->
            <label for="second-desc"><?php echo __( 'Bottom Content Editor', 'woocommerce' ); ?></label>
        </th>
        <td>
            <?php
            // Thiết lập cài đặt cho trình soạn thảo văn bản
            $settings = array(
                'textarea_name' => 'seconddesc',
                'quicktags' => array( 'buttons' => 'em,strong,link' ),
                'tinymce' => array(
                    'theme_advanced_buttons1' => 'bold,italic,strikethrough,separator,bullist,numlist,separator,blockquote,separator,justifyleft,justifycenter,justifyright,separator,link,unlink,separator,undo,redo,separator',
                    'theme_advanced_buttons2' => '',
                ),
                'editor_css' => '<style>#wp-excerpt-editor-container .wp-editor-area{height:175px; width:100%;}</style>',
            );
 
            // Hiển thị trình soạn thảo văn bản
            wp_editor( $second_desc, 'seconddesc', $settings );
            ?>
       
            <!-- Hiển thị mô tả cho trường seconddesc -->
            <p class="description"><?php echo __( 'This is the description that goes BELOW products on the category page', 'woocommerce' ); ?></p>
        </td>
    </tr>
    <?php
}
 
// Lưu dữ liệu từ trình soạn thảo văn bản vào trường seconddesc khi sửa hoặc tạo mới term
add_action( 'edit_term', 'vantheweb_save_wp_editor', 10, 3 );
add_action( 'created_term', 'vantheweb_save_wp_editor', 10, 3 );
 
/**
 * Hàm lưu nội dung của trình soạn thảo vào trường seconddesc của danh mục sản phẩm
 * 
 * @param int $term_id ID của danh mục sản phẩm
 * @param int $tt_id ID của term_taxonomy
 * @param string $taxonomy Tên taxonomy
 */
function vantheweb_save_wp_editor( $term_id, $tt_id = '', $taxonomy = '' ) {
   if ( isset( $_POST['seconddesc'] ) && 'product_cat' === $taxonomy ) {
      update_woocommerce_term_meta( $term_id, 'seconddesc', esc_attr( $_POST['seconddesc'] ) );
   }
}
add_action( 'created_term', 'vantheweb_save_wp_editor', 10, 3 );

/**
 * Hàm hiển thị nội dung của trình soạn thảo trên trang danh mục sản phẩm
 */
function vantheweb_display_wp_editor_content() {
   if ( is_product_taxonomy() ) {
      $term = get_queried_object();
      if ( $term && ! empty( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) {
         echo '<p class="term-description">' . wc_format_content( htmlspecialchars_decode( get_woocommerce_term_meta( $term->term_id, 'seconddesc', true ) ) ) . '</p>';
      }
   }
}
add_action( 'woocommerce_after_main_content', 'vantheweb_display_wp_editor_content', 5 );

?>
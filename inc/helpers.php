<?php
defined( 'ABSPATH' ) || exit;

function oboi_page_links() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type'      => 'list',
        'end_size'  => 3,
        'mid_size'  => 3,
	);

	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );

	echo paginate_links($pagination);
}

/**
 * Always redirect user to "Edit Account" page after login.
 *
 * @return string Target URL
 */
add_filter( 'woocommerce_login_redirect', function() {
    return wc_customer_edit_account_url();
} );

add_action('wp_logout','auto_redirect_after_logout');

function auto_redirect_after_logout(){

    wp_redirect( home_url() );
    exit();

}

if ( ! function_exists( 'get_pr' ) ) {
    /**
     * Debug function print_r
     *
     * @param mixed $var
     * @param boolean $die
     */
    function get_pr( $var, $die = true ) {
        echo '<pre>';
        print_r( $var );
        echo '</pre>';
        if ( $die ) {
            die();
        }
    }
}
if ( ! function_exists( 'get_vd' ) ) {
    /**
     * Debug function var_dump
     *
     * @param mixed $var
     * @param boolean $die
     */
    function get_vd( $var, $die = true ) {
        echo '<pre>';
        var_dump( $var );
        echo '</pre>';
        if ( $die ) {
            die();
        }
    }
}
if ( ! function_exists( 'get_num_ending' ) ) {
    /**
     * Склонения числительных
     *
     * @param $number
     * @param $ending_array
     *
     * @return mixed
     */
    function get_num_ending( $number, $ending_array ) {
        $number = $number % 100;
        if ( $number >= 11 && $number <= 19 ) {
            $ending = $ending_array[2];
        } else {
            $i = $number % 10;
            switch ( $i ) {
                case ( 1 ):
                    $ending = $ending_array[0];
                    break;
                case ( 2 ):
                case ( 3 ):
                case ( 4 ):
                    $ending = $ending_array[1];
                    break;
                default:
                    $ending = $ending_array[2];
            }
        }

        return $ending;
    }
}
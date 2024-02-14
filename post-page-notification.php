<?php
/**
 * Plugin Name: Post Page Notification
 * Plugin URI: https://shiksha-kendra.in/
 * Description: Sends notification to admin when a new post or page is published.
 * Version: 6.0
 * Author: Nayak
 * Author URI: https://shiksha-kendra.in/
 * License: GPL2
 */

// Plugin code will go here

// Send notification to admin when new post or page is published
function send_notification_on_publish($ID, $post) {
    $admin_email = get_option('admin_email');
    $subject = 'New Post/Page Published';
    $message = 'A new post or page has been published: ' . $post->post_title;
    wp_mail($admin_email, $subject, $message);
}
add_action('publish_post', 'send_notification_on_publish', 10, 2);
add_action('publish_page', 'send_notification_on_publish', 10, 2);


?>

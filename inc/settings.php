<?php

// Admin settings page for Gmail API credentials
function dc1_register_settings_page() {
    add_options_page('DC1 Settings', 'DC1 Plugin', 'manage_options', 'dc1-settings', 'dc1_settings_page');
}
add_action('admin_menu', 'dc1_register_settings_page');

function dc1_settings_page() {
    ?>
    <div class="wrap">
        <h1>DC1 Plugin Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('dc1-settings-group');
            do_settings_sections('dc1-settings-group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Google Client ID</th>
                    <td><input type="text" name="dc1_google_client_id" value="<?php echo esc_attr(get_option('dc1_google_client_id')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Google Client Secret</th>
                    <td><input type="text" name="dc1_google_client_secret" value="<?php echo esc_attr(get_option('dc1_google_client_secret')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function dc1_register_settings() {
    register_setting('dc1-settings-group', 'dc1_google_client_id');
    register_setting('dc1-settings-group', 'dc1_google_client_secret');
}
add_action('admin_init', 'dc1_register_settings');

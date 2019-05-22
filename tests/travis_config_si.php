<?php
$sugar_config_si  = array(
    'dbUSRData' => 'create',
    'default_date_format' => 'Y-m-d',
    'default_decimal_seperator' => '.',
    'default_export_charset' => 'ISO-8859-1',
    'default_language' => 'en_us',
    'default_locale_name_format' => 's f l',
    'default_number_grouping_seperator' => ',',
    'default_time_format' => 'H:i',
    'export_delimiter' => ',',
    'setup_db_admin_password' => 'automated_tests',
    'setup_db_admin_user_name' => 'automated_tests',
    'setup_db_create_database' => 1,
    'setup_db_database_name' => 'automated_tests',
    'setup_db_drop_tables' => 0,
    # The DB host is called `mysql`` in GitLab CI but I'm not sure if this
    # will actually work. Maybe change back to localhost?
    'setup_db_host_name' => 'mysql',
    'setup_db_pop_demo_data' => true,
    'setup_db_type' => 'mysql',
    'setup_db_username_is_privileged' => true,
    'setup_site_admin_password' => 'admin',
    'setup_site_admin_user_name' => 'admin',
    'setup_site_sugarbeet_automatic_checks' => true,
    'setup_site_url' => 'http://localhost',
    'setup_system_name' => 'SuiteCRM Travis Build',
    'show_log_trace' => false,
);

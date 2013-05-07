<?php

// model.php

define('DB_HOST', 'localhost');
define('DB_USER', 'estate');
define('DB_PASS', 'real');
define('DB_NAME', 'db');


function open_database_connection()
{
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $link);
    mysql_query('SET NAMES "UTF8"', $link   );

    return $link;
}

function close_database_connection($link)
{
    mysql_close($link);
}


function get_all_companies()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM company', $link);
    $companies = array();
    while ($row = mysql_fetch_assoc($result)) {
        $companies[$row['id']] = $row;
    }
    close_database_connection($link);

    return $companies;
}

function get_company_by_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM company where id = ' . mysql_real_escape_string($id, $link), $link);
    $company = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $company;
}
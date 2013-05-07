<?php

function company_list_action()
{
    $companies = get_all_companies();
    require TEMPLATES_DIR. '/company/list.php';
}

function company_show_action($id)
{
    $company = get_company_by_id($id);
    require TEMPLATES_DIR. '/company/show.php';
}
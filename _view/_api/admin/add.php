<?php

    $bodyData = getJsonFromBody();

    get_requiredFields($bodyData, [
        "name",
        "email"
    ], 0);
    get_optionalFields($bodyData, [
        "login_id",
        "login_password",
    ], 0);

    if(!isset($localData['login_id'])) $localData['login_id'] = $localData['email'];
    if(!isset($localData['login_password'])) $localData['login_password'] = randomPassword();

    $email_name = $localData['name'];
    $email_login_id = $localData['login_id'];
    $email_login_password = $localData['login_password'];

    $localData['login_password'] = password_hash($localData['login_password'], PASSWORD_BCRYPT);

    require_once(BASE_PHYSICAL_PATH.'/_email/admin_added.php');

    if(MINI::insertForm('admin', $localData)){
        mailToUser("Admin Account Generated", $localData['email'], $localData['name'], $EMAIL_ADMIN_ADDED);
        retResponse(200, "Success");
    }
    else{
        retResponse(500, "Failed");
    }

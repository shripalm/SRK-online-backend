<?php

    // rules: left side slash [/] compulsory, right must have side NO slash in route and path both
    registerRoute('', '/_api/index.php');

    registerRoute('/admin/add', '/_api/admin/add.php', 'POST');
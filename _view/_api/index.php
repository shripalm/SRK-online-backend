<?php

    retResponse(200, "WELCOME TO THE BACKEST SIDE OF SRK-ONLINE STORE!", [
        "STORES AVAILABLE" => MINI::getSValue("count(*)", "shop", "is_active = 1"),
        "USERS WORLDWIDE" => MINI::getSValue("count(*)", "user", "is_active = 1"),
        "ITEMS LISTED" => MINI::getSValue("count(*)", "item", "is_active = 1"),
        "PURCHASED TIMES" => MINI::getSValue("count(*)", "sales"),
    ]);
<?php

    require_once(BASE_PHYSICAL_PATH.'/_configs/constants.php');
    require_once(BASE_PHYSICAL_PATH.'/_configs/functions.php');
    require_once(BASE_PHYSICAL_PATH.'/_configs/routes.php');

    require_once(BASE_PHYSICAL_PATH.'/_library/mini-db-client/mini.php');

    $requestedRoute = routeExtractor();    
    $method = $_SERVER['REQUEST_METHOD'];
    $matchedRouteData = routeMatcher($method);
    $fileName = BASE_PHYSICAL_PATH . '/_view' . $matchedRouteData["path"];
    if (! file_exists($fileName)) retResponse(404, "Route Defined, File Not Found - $fileName");
    essentialCall($matchedRouteData["auth"]);
    if($matchedRouteData["auth"]) $jwtdata = fetchJWTData($bearer_token['encoded']);
    $data = getJsonFromBody();
    include_once($fileName);
<?php
try
{
    require_once 'tester.php';
    if (filter_input(INPUT_SERVER, 'QUERY_STRING')) {
        $prm = explode('?', filter_input(INPUT_SERVER, 'REQUEST_URI'));
        tester::TEST($prm . "____");
        $prm = trim($prm[0], '/');
        if (strlen($prm)) {
            $prm = $prm . '/';
        }
        tester::TEST($prm);
        foreach(filter_input_array(INPUT_GET) as $k=>$v) {
            $prm = $prm . $k . '/' . $v . '/';
        }
        tester::TEST($prm);
        header("Location: /" . $prm, TRUE, 301);
    }

//    print_r($GLOBALS);
//    print_r($_REQUEST);
//    print_r($_SERVER);
 //   echo "<hr>";
//    var_dump($_SERVER);
//    print_r($qs);
//    echo $_SERVER['REQUEST_URI'];
    
    define('__ROOT__', dirname(__FILE__) . '/');
    
    session_start();
    
    require_once 'conf.php';
    require_once 'user.php';
    require_once 'router.php';

    
    
//    $test = $_SERVER['HTTP_USER_AGENT'];
//    $browser = get_browser($test, true);
//    print_r($browser);
    
    $req_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
//    echo $req_uri;
    //$post_get = (filter_input_array(INPUT_POST) ?: array()) + (filter_input_array(INPUT_GET) ?: array());
    $post = filter_input_array(INPUT_POST);
    //print_r($post);
    $router = new Router($req_uri, $post);
    $ctrl = $router->Controller() ?: DEFAULT_CTRL;
    if (strtolower($ctrl) == 'index.php') {
        $ctrl = DEFAULT_CTRL;
    }
    
    $ctrl_php = 'controller_' . strtolower($ctrl) . '.php';
    $ctrl_class = 'Controller' . $ctrl;
    $action = $router->Action() ?: DEFAULT_ACTION;
    $params = $router->Params();

    require_once DIR_CTRL . $ctrl_php;
    $controller = new $ctrl_class();

 //   echo "&nbsp&nbsp&nbsp&nbsp";
//    echo $controller;
//    echo "&nbsp&nbsp&nbsp&nbsp";
//    echo $action;
//    echo "<hr>";
    
    $controller->$action($params);
    
//    echo "&nbsp&nbsp&nbsp&nbsp";
//    echo $controller;
//    echo "&nbsp&nbsp&nbsp&nbsp";
//    echo $action;
//    echo $ctrl_class;
//    require_once 'latte.php';
    
}
catch(Exception $ex) {
    echo 'Error!!!' . $ex;
}
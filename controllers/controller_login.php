<?php
require_once 'controller.php';
require_once DIR_BASE . 'user.php';
require_once DIR_DB_SCR . 'randNumsChars.php';

class ControllerLogin extends Controller {
    public function Index($params) {
        if (isset($params['login']) &&
                ($user = User::Login($params['login'], $params['password']))) {
            //echo get_class($user);
            //$_SESSION["user"] = $user->login;
//            foreach ($user as $k => $v)
//            {
////                echo " _______ " . $k . "   " . $v;
//                $_SESSION[$k] = $v;
//            }
            
            $_SESSION['user'] = $user;
//            foreach($_SESSION['user'] as $i)
//                echo "____ " . $i;
//            $_SESSION['test'] = $user->login;
//            $_SESSION['login'] = $user->logín;
//            tester::TEST($_SESSION['user']->login);
//            $HTTP_SESSION_VARS['user']->login;
        }
        else {
            unset($_SESSION['user']);
        }
//                    tester::TEST($_SESSION['user']->login);
 //       echo $params['login'] . "  " . $params['password'];
//        echo $params['uri'];
//                    tester::TEST($_SESSION['user']->login);
//        tester::TEST("controllerLogin " . $params['uri'] . "  ");
//        echo $_SESSION["uri"];
        if (isset($params['uri']))
        {
            header('Location: ' . $params['uri'], TRUE, 307);
        }
        else
            if (isset($_SESSION['uri']))
            {
                header('Location: ' . $_SESSION['uri'], TRUE, 307);
                unset($_SESSION['uri']);
            }
            else
            {
                header('Location: /');
            }
    }
    
    public function RegisterForm($params) {
	    
//	    foreach ($params as $k=>$v)
//                echo $k . ' __ ' . $v;
	tester::test($params['login']);
        $prepareNum = new randNumsDec();
//        echo $prepareNum->Next();
        
        if (isset($params['login'])) {
            $user = User::Load($params['login']);
        }
        else {
            $user = NULL;
        }
        //echo $this;
        $this->view->Show('user_register.latte', array('user' => $user, 'test' => $this->zzz() ));
    }
    
    public function zzz()       
    {
            $q = "SELECT * FROM temp_users_table";
            
            $res = $this->conn->query($q);
            $ret = array();
            $i = 0;
            
            while ($obj = $res->fetch_object())
            {
                $ret['test'.$i ++] = $obj->hash;
                //echo gettype($obj);
//                echo count($ret);
            }
//            echo $ret['test1'];
            
            return $ret;
    }
    
    public function Register($params) {
	
        $user = User::Load($params['login']);
        var_dump($params);
        $saved = false;
        if ($user) {
            $user->Set($params);
            tester::TEST("________z___________" . $params);
            $saved = $user->Save();
        }
        else {
            $user = User::Add($params);
            if ($user) {
                $saved = true;
            }
        }
        if ($saved) {
            header('Location: /Login/UserView/login/' . $user->login, TRUE, 307);
        }
        else {
//            header('Location: /Login/Register/', TRUE, 307);
        }
    }
    
}

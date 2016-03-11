<?php
require_once 'controller.php';
require_once DIR_BASE . 'user.php';
require_once DIR_DB_SCR . 'randNumsChars.php';

class ControllerLogin extends Controller {
    public function Index($params) {
        if (isset($params['login']) &&
                ($user = User::Login($params['login'], $params['password']))) {
            $_SESSION['user'] = $user;
        }
        else {
            unset($_SESSION['user']);
        }
//        echo $params['uri'];
        header('Location: ' . (isset($params['uri']) ? $params['uri'] : '/'), TRUE, 307);
    }
    
    public function RegisterForm($params) {
	    
	    foreach ($params as $k=>$v)
                echo $k . ' __ ' . $v;
	tester::test($params['login']);
        $prepareNum = new randNumsDec();
        echo $prepareNum->Next();
        
        if (isset($params['login'])) {
            $user = User::Load($params['login']);
        }
        else {
            $user = NULL;
        }
        //echo $this;
        $this->view->Show('user_register.tpl', array('user' => $user, 'test' => $this->zzz() ));
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
        $saved = false;
        if ($user) {
            $user->Set($params);
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
            header('Location: /Login/Register/', TRUE, 307);
        }
    }
    
}

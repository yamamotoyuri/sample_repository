<?php
function route($path, $httpMethod){
    // try {
        list($controller, $method) = explode('/', $path);
        $case = [$method, $httpMethod];
        switch ($controller) {
            case 'home':
                $controllerName = 'HomeController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'index';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;
            case 'user':
                $controllerName = 'UserController';
                switch ($case) {
                    case ['log-in', 'get']:
                        $methodName = 'logIn';
                        break;
                    case ['sign-up', 'get']:
                        $methodName ='signUp';
                        break;       
                    case ['create', 'post']:
                         $methodName = 'create';
                        break;
                    case ['log-out', 'get']:
                        $methodName = 'logOut';
                        break;
                    case ['certification', 'post']:
                        $methodName = 'certification';
                        break;
                    case ['my-page', 'get']:
                        $methodName ='myPage';
                        break;
                    case ['edit', 'get']:
                        $methodName = 'edit';
                        break;
                    case ['update', 'post']:
                        $methodName = 'update';
                        break; 
                    case ['delete', 'get']:
                        $methodName = 'delete';
                        break;           
                }
                break; 
              case 'contact':
                $controllerName = 'ContactController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'index';
                        break;
                    case ['conform', 'post']:
                        $methodName = 'conform';
                        break;
                    case ['create', 'post']:
                        $methodName = 'create';
                        break;
                    case ['certification', 'post']:
                        $methodName = 'certification';
                        break;
                    case ['send', 'post']:
                        $methodName = 'send';
                        break;
                    case ['edit', 'get']:
                        $methodName = 'edit';
                        break;  
                    case ['update', 'post']:
                        $methodName = 'update';
                        break;
                    case ['delete', 'get']:
                        $methodName = 'delete';
                        break;
                        
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;
                
            default:
            $controllerName = '';
            $methodName = '';

}

        if (!empty($controllerName)) {
            require_once (ROOT_PATH."Controllers/{$controllerName}.php");
            $obj = new $controllerName();
            if (!empty($methodName)) {
                $obj->$methodName();
            }
        }
     
 
        
}
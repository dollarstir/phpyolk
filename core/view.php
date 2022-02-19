<?php

class View {
    static public function error($code = 404) {
        http_response_code($code);
        require Path::root("error/$code.html");
        return;
    }

    static public function view($path = "", $context) {
        try {
            require Path::root($path);
        } catch (Exception $e) {
            require self::error(404);
        }

        return;
    }

    static public function response($message = "") {
        if(is_array($message)) {
            echo json_encode($message);
        } else {
            echo $message;
        }

        return;
    }
}
<?
function view($path,array $data=[]){
        func_get_args();
        try{

            require $path;
        }catch(Exception $e){
            require __DIR__.'/../page_error404.html';
        }
    
    }
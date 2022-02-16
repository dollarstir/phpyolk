<?
function view($path,array $data=[]){
        func_get_args();
        try{

            require __DIR__.'/../'.$path;
        }catch(Exception $e){
            require __DIR__.'/../page_error404.html';
        }
    
    }
<?php

class Yolk
{
    public static function goto($loaction)
    {
        echo  '<script>window.location="'.$loaction.'"</script>';
    }

    public static function say($something)
    {
        echo $something;
    }

    public static function uicore($type)
    {
        switch ($type) {
            case 'cssb':
                echo '<link rel="stylesheet" href="ui/css/bootstrap.min.css">';
                break;

            case 'cssa':
                echo '<link rel="stylesheet" href="ui/css/sweetalert2.min.css">';
                break;
            case 'cssfa':
                echo '<link rel="stylesheet" href="ui/css/all.min.css">';
                break;
            case 'jsa':
                echo '<script src="ui/js/sweetalert2.all.min.js"></script>';
                break;
            case 'jsj':
                echo '<script src="ui/js/jquery.min.js"></script>';
                break;
            case 'jsb':
                echo '<script src="ui/js/bootstrap.min.js"></script>';
                break;
            case 'jsfa':
                echo '<script src="ui/js/all.min.js"></script>';
                break;
            case 'allc':
                echo '<link rel="stylesheet" href="ui/css/bootstrap.min.css">';
                echo '<link rel="stylesheet" href="ui/css/all.min.css">';
                echo '<link rel="stylesheet" href="ui/css/sweetalert2.min.css">';
               
                
                break;
            case 'allj':
                echo '<script src="ui/js/jquery.min.js"></script>';
                echo '<script src="ui/js/bootstrap.min.js"></script>';
                echo '<script src="ui/js/all.min.js"></script>';
                echo '<script src="ui/js/sweetalert2.all.min.js"></script>';
                break; }
    }

    public static function button($type, $text = 'Button', $class = 'primary add', $id = '' , $onclick = '', $other = '')
    {
        switch ($type) {
            case 'btn':
                echo '
                <div style="margin-top:10px;margin-bottom:10px;">
                <button  class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.' >'.$text.'</button>
                </div>';
                break;
            case 'btn-group':
                echo '<div class="btn-group" role="group" aria-label="Basic example">';
                echo '<button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.' >'.$text.'</button>';
                echo '</div>';
                break;
            case 'btn-group-vertical':
                echo '<div class="btn-group-vertical" role="group" aria-label="Basic example">';
                echo '<button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>';
                echo '</div>';
                break;
            case 'btn-group-toggle':
                echo '<div class="btn-group-toggle" data-toggle="buttons">';
                echo '<label class="btn btn-'.$class.'">';
                echo '<input type="checkbox" id="'.$id.'" onclick="'.$onclick.'">'.$text;
                echo '</label>';
                echo '</div>';
                break;
            case 'btn-group-justified':
                echo '<div class="btn-group-justified" role="group" aria-label="Basic example">';
                echo '<button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>';
                echo '</div>';
                break;
            case 'btn-group-vertical-justified':
                echo '<div class="btn-group-vertical-justified" role="group" aria-label="Basic example">';
                echo '<button class="btn btn-'.$class.'" id;="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>';
        }
    }

    public static function input($type, $name='',$class = '', $id = '',$label='', $value = '', $other = '',$onclick = '')
    {
        switch ($type) {
            case 'text':
                echo '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="text" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                break;
            case 'password':
                echo '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="password" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                break;
            case 'email':
                echo '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="email" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                break;
            case 'number':
                echo '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="number" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                break;
            case 'textarea':
                echo '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <textarea name="'.$name.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>'.$value.'</textarea>';
                break;
            case 'reset':
                    echo '
                    <div style="margin-top:10px;margin-bottom:10px;">
                    <button type="reset" class=" btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>'.$label.'</button>
                    
                    </div>';
                    
                break;
            case 'submit':
                    echo '
                    <div style="margin-top:10px;margin-bottom:10px;">
                    <input name="'.$name.'" type="submit" class=" btn btn-'.$class.'" id="'.$id.'" value="'.$label.'" '.$other.'>
                    
                    </div>';
                break;
            case 'color':
                echo '
                <div class="mb-3">
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="color" name="'.$name.'" value="'.$value.'" class="form-control form-control-color '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                </div>';
                break;

            case 'range':
                echo '
                <div class="mb-3">
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="range" name="'.$name.'" value="'.$value.'" class="form-range '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                </div>';
                break;
            case 'checkbox':
                echo '
                <div class="mb-3">
                
                <input type="checkbox" name="'.$name.'" value="'.$value.'" class="form-check-input'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                <label for="'.$id.'" class="form-check-label '.$class.'">'.$label.'</label>
                </div>';
                break;
            case 'radio':
                echo '
                <div class="mb-3">
                
                <input type="radio" name="'.$name.'" value="'.$value.'" class="form-check-input  '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                <label for="'.$id.'" class="form-check-label '.$class.'">'.$label.'</label>
                </div>';
                break;
        }
    }

    public static function floatingInput($type,$label,$name='',$class='',$placeholder='',$id='',$other=''){

            if(strtolower($type) == 'textarea'){
                echo'<div class="form-floating">
                <textarea class="form-control '.$class.'" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'"></textarea>
                <label for="'.$id.'">'.$label.'</label>
              </div> ';

            }else{
                echo '
            <div class="form-floating mb-3">
                <input type="'.$type.'" class="form-control '.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" '.$other.'>
                <label for="floatingInput">'.$label.'</label>
            </div>
            ';
            }
               

        
    }
}

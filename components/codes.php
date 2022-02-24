<?php

function CodeBox($type, $code){
    return (
        el::divi('id="codeBox"',
        el::pre('', [el::code('class="language-'.$type.'"', [".$code."])])
        )
    );
}

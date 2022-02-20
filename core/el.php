<?php

class el
{
    public static function p($attributes = '', $content = [])
    {
        echo ' <p '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</p>
        ';
    }

    public static function a($attributes = '', $content = ['link here'])
    {
        echo ' <a '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</a>
        ';
    }

    public static function nav($attributes = '', $content = [])
    {
        echo 'nav '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</nav>
        ';
    }

    public static function html($attributes = '', $content = [])
    {
        echo ' <html '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</html>
        ';
    }

    public static function head($attributes = '', $content = [])
    {
        echo ' <head '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</head>
        ';
    }

    public static function title($attributes = '', $content = [])
    {
        echo ' <title '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</title>
        ';
    }

    public static function body($attributes = '', $content = [])
    {
        echo ' <body '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</body>
        ';
    }

    public static function abbr($attributes = '', $content = [])
    {
        echo ' <abbr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</abbr>
        ';
    }

    public static function acronym($attributes = '', $content = [])
    {
        echo ' <acronym '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</acronym>
        ';
    }

    public static function address($attributes = '', $content = [])
    {
        echo ' <address '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</address>
        ';
    }

    public static function applet($attributes = '', $content = [])
    {
        echo ' <applet '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</applet>
        ';
    }

    public static function area($attributes = '', $content = [])
    {
        echo ' <area '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</area>
        ';
    }

    public static function article($attributes = '', $content = [])
    {
        echo ' <article '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</article>
        ';
    }

    public static function aside($attributes = '', $content = [])
    {
        echo ' <aside '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</aside>
        ';
    }

    public static function audio($source = '', $attributes = '', $type = '')
    {
        echo ' <audio '.$attributes.' controls>';
        echo'<source src="'.$source.'" type="'.$type.'">';
        echo'</audio>
        ';
    }

    public static function b($attributes = '', $content = [])
    {
        echo ' <b '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</b>
        ';
    }

    public static function base($hre = '', $attributes = '')
    {
        echo ' <base '.$attributes.' href="'.$hre.'">';
    }

    public static function bdi($attributes = '', $content = [])
    {
        echo ' <bdi '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</bdi>
        ';
    }

    public static function bdo($attributes = '', $content = [])
    {
        echo ' <bdo '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</bdo>
        ';
    }

    public static function big($attributes = '', $content = [])
    {
        echo ' <big '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</big>
        ';
    }

    public static function blockquote($attributes = '', $content = [])
    {
        echo ' <blockquote '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</blockquote>
        ';
    }

    public static function br($attributes = '')
    {
        echo ' <br '.$attributes.'>';
    }
    

    public static function button($attributes = '', $content = [])
    {
        echo ' <button '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</button>
        ';
    }

    public static function canvas($attributes = '', $content = [])
    {
        echo ' <canvas '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</canvas>
        ';
    }

    public static function caption($attributes = '', $content = [])
    {
        echo ' <caption '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</caption>
        ';
    }

    public static function center($attributes = '', $content = [])
    {
        echo ' <center '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</center>
        ';
    }

    public static function cite($attributes = '', $content = [])
    {
        echo ' <cite '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</cite>
        ';
    }

    public static function code($attributes = '', $content = [])
    {
        echo ' <code '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</code>
        ';
    }

    public static function col($attributes = '', $content = [])
    {
        echo ' <col '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</col>
        ';
    }

    public static function colgroup($attributes = '', $content = [])
    {
        echo ' <colgroup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</colgroup>
        ';
    }

    public static function data($attributes = '', $content = [])
    {
        echo ' <data '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</data>
        ';
    }

    public static function datalist($attributes = '', $content = [])
    {
        echo ' <datalist '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</datalist>
        ';
    }

    public static function dd($attributes = '', $content = [])
    {
        echo ' <dd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dd>
        ';
    }

    public static function del($attributes = '', $content = [])
    {
        echo ' <del '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</del>
        ';
    }

    public static function details($attributes = '', $content = [])
    {
        echo ' <details '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</details>
        ';
    }

    public static function dfn($attributes = '', $content = [])
    {
        echo ' <dfn '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dfn>
        ';
    }

    public static function dialog($attributes = '', $content = [])
    {
        echo ' <dialog '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dialog>
        ';
    }

    public static function dir($attributes = '', $content = [])
    {
        echo ' <dir '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dir>
        ';
    }

    public static function div($attributes = '', $content = [])
    {
        echo ' <div '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</div>
        ';
    }

    public static function dl($attributes = '', $content = [])
    {
        echo ' <dl '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dl>
        ';
    }

    public static function dt($attributes = '', $content = [])
    {
        echo ' <dt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</dt>
        ';
    }

    public static function em($attributes = '', $content = [])
    {
        echo ' <em '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</em>
        ';
    }

    public static function embed($source,$attributes = '')
    {
        echo ' <embed src="'.$source.'" '.$attributes.'>';
    }
   

    public static function fieldset($attributes = '', $content = [])
    {
        echo ' <fieldset '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</fieldset>
        ';
    }

    public static function figure($attributes = '', $content = [])
    {
        echo ' <figure '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</figure>
        ';
    }

    public static function figcaption($attributes = '', $content = [])
    {
        echo ' <figcaption '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</figcaption>
        ';
    }

    public static function font($attributes = '', $content = [])
    {
        echo ' <font '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</font>
        ';
    }

    public static function footer($attributes = '', $content = [])
    {
        echo ' <footer '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</footer>
        ';
    }

    public static function form($action='',$method='',$attributes = '', $content = [])
    {
        echo ' <form '.$action.' '.$method.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</form>
        ';
    }

    public static function frame($attributes = '', $content = [])
    {
        echo ' <frame '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</frame>
        ';
    }

    public static function frameset($attributes = '', $content = [])
    {
        echo ' <frameset '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</frameset>
        ';
    }

    public static function h1($attributes = '', $content = [])
    {
        echo ' <h1 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h1>
        ';
    }

    public static function h2($attributes = '', $content = [])
    {
        echo ' <h2 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h2>
        ';
    }

    public static function h3($attributes = '', $content = [])
    {
        echo ' <h3 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h3>
        ';
    }

    public static function h4($attributes = '', $content = [])
    {
        echo ' <h4 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h4>
        ';
    }

    public static function h5($attributes = '', $content = [])
    {
        echo ' <h5 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h5>
        ';
    }

    public static function h6($attributes = '', $content = [])
    {
        echo ' <h6 '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</h6>
        ';
    }

    public static function header($attributes = '', $content = [])
    {
        echo ' <header '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</header>
        ';
    }

    public static function hr($attributes = '')
    {
        echo ' <hr '.$attributes.'>';
    }
    

    public static function i($attributes = '', $content = [])
    {
        echo ' <i '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</i>
        ';
    }

    public static function iframe($source='',$attributes = '', $content = [])
    {
        echo ' <iframe src="'.$source.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</iframe>
        ';
    }

    public static function img($source='',$attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function image($source='',$attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function pic($source='',$attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    public static function photo($source='',$attributes = '')
    {
        echo ' <img src="'.$source.'" '.$attributes.'>';
    }

    
   

    public static function input($type='text',$name='',$class='',$id='',$attributes = '')
    {
        echo ' <input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'" '.$attributes.'>';
    }

    public static function ins($attributes = '', $content = [])
    {
        echo ' <ins '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ins>
        ';
    }

    public static function kbd($attributes = '', $content = [])
    {
        echo ' <kbd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</kbd>
        ';
    }

    public static function keyboard($attributes = '', $content = [])
    {
        echo ' <kbd '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</kbd>
        ';
    }

    public static function label($attributes = '', $content = [])
    {
        echo ' <label '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</label>
        ';
    }

    public static function legend($attributes = '', $content = [])
    {
        echo '<legend '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</legend>
        ';
    }

    public static function li($attributes = '', $content = [])
    {
        echo ' <li '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</li>
        ';
    }

    public static function linkatom($href='',$attributes = '')
    {
        
        echo '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
    }


    public static function linkcss($href='',$attributes = '')
    {
        echo '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
    }


    public static function favicon($href='',$attributes = '',$type='')
    {
        echo '<link rel="shortcut icon" href="'.$href.'" type="'.$type.'">';
    }


    public static function linkimport($href='',$attributes = '')
    {
        echo '<link rel="import" href="'.$href.'">';
    }

    public static function linkmanifest($href='',$attributes = '')
    {
        echo '<link rel="manifest" href="'.$href.'">';
    }

    public static function linkrss($href='',$attributes = '')
    {
        echo '<link rel="alternate" href="'.$href.'" type="application/rss+xml" title="RSS">';
    }

    public static function linktouchicon($href='',$attributes = '')
    {
        echo '<link rel="apple-touch-icon" href="'.$href.'">';
    }
    

    public static function main($attributes = '', $content = [])
    {
        echo ' <main '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</main>
        ';
    }

    public static function map($name='',$attributes = '', $content = [])
    {
        echo ' <map '.$name.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</map>
        ';
    }

    public static function maparea($href='',$shape='',$cordinate='',$attributes = '')
    {
        echo '<area shape="'.$shape.'" coords="'.$cordinate.'" '.$href.' '.$attributes.'>';
    }

    public static function mark($attributes = '', $content = [])
    {
        echo ' <mark '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</mark>
        ';
    }

    public static function meter($attributes = '', $content = [])
    {
        echo ' <meter '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</meter>
        ';
    }

    public static function noframes($attributes = '', $content = [])
    {
        echo ' <noframes '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</noframes>
        ';
    }

    public static function noscript($attributes = '', $content = [])
    {
        echo '<noscript '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</noscript>
        ';
    }

    public static function object($attributes = '', $content = [])
    {
        echo ' <object '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</object>
        ';
    }

    public static function ol($attributes = '', $content = [])
    {
        echo ' <ol '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ol>
        ';
    }

    public static function optgroup($attributes = '', $content = [])
    {
        echo ' <optgroup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</optgroup>
        ';
    }


    public static function option($attributes = '', $content = [])
    {
        echo ' <option '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</option>
        ';
    }

    public static function output($attributes = '', $content = [])
    {
        echo ' <output '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</output>
        ';
    }

    public static function param($attributes = '', $content = [])
    {
        echo ' <param '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</param>
        ';
    }

   

    public static function picture($attributes = '', $content = [])
    {
        echo ' <picture '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</picture>
        ';
    }

    public static function pre($attributes = '', $content = [])
    {
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }

    public static function prev($attributes = '', $content = [])
    {
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }
    public static function preview($attributes = '', $content = [])
    {
        echo ' <pre '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</pre>
        ';
    }

    public static function progress($value='',$max='100',$attributes = '', $content = [])
    {
        echo ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</progress>
        ';
    }

    public static function progressbar($value='',$max='100',$attributes = '', $content = [])
    {
        echo ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</progress>
        ';
    }

    public static function q($attributes = '', $content = [])
    {
        echo ' <q '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</q>
        ';
    }

    public static function rp($attributes = '', $content = [])
    {
        echo ' <rp '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</rp>
        ';
    }

    public static function rt($attributes = '', $content = [])
    {
        echo ' <rt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</rt>
        ';
    }

    public static function ruby($attributes = '', $content = [])
    {
        echo ' <ruby '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ruby>
        ';
    }

    public static function s($attributes = '', $content = [])
    {
        echo ' <s '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</s>
        ';
    }

    public static function samp($attributes = '', $content = [])
    {
        echo ' <samp '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</samp>
        ';
    }

    public static function script($attributes = '', $content = [])
    {
        echo ' <script '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</script>
        ';
    }

    public static function section($attributes = '', $content = [])
    {
        echo ' <section '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</section>
        ';
    }

    public static function select($name='' ,$attributes = '', $content = [])
    {
        echo ' <select '.$name.'  '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</select>
        ';
    }

    public static function small($attributes = '', $content = [])
    {
        echo ' <small '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</small>
        ';
    }

    public static function source($source='',$type='',$attributes = '')
    {
        echo ' <source src="'.$source.'" type="'.$type.'" '.$attributes.'>';

       
    }
    

    public static function span($attributes = '', $content = [])
    {
        echo ' <span '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</span>
        ';
    }

    

    public static function strike($attributes = '', $content = [])
    {
        echo ' <strike '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</strike>
        ';
    }

    public static function strong($attributes = '', $content = [])
    {
        echo ' <strong '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</strong>
        ';
    }

    public static function style($attributes = '', $content = [])
    {
        echo ' <style '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</style>
        ';
    }

    public static function sub($attributes = '', $content = [])
    {
        echo ' <sub '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sub>
        ';
    }

    public static function summary($attributes = '', $content = [])
    {
        echo ' <summary '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</summary>
        ';
    }

    public static function sup($attributes = '', $content = [])
    {
        echo ' <sup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sup>
        ';
    }

    public static function superscript($attributes = '', $content = [])
    {
        echo ' <sup '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</sup>
        ';
    }

    public static function svg($width='',$height='',$attributes = '', $content = [])
    {
        echo ' <svg '.$width.' '.$height.' '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</svg>
        ';
    }

    public static function table($attributes = '', $content = [])
    {
        echo ' <table '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</table>
        ';
    }

    public static function tbody($attributes = '', $content = [])
    {
        echo ' <tbody '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tbody>
        ';
    }

    public static function td($attributes = '', $content = [])
    {
        echo ' <td '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</td>
        ';
    }

    public static function template($attributes = '', $content = [])
    {
        echo ' <template '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</template>
        ';
    }

    public static function textarea ($name='',$rows='',$cols='',$attributes = '', $content = [])
    {
        echo ' <textarea '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</textarea>
        ';
    }

    public static function tfoot($attributes = '', $content = [])
    {
        echo ' <tfoot '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tfoot>
        ';
    }

    public static function th($attributes = '', $content = [])
    {
        echo ' <th '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</th>
        ';
    }

    public static function thead($attributes = '', $content = [])
    {
        echo ' <thead '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</thead>
        ';
    }

    public static function time($attributes = '', $content = [])
    {
        echo ' <time '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</time>
        ';
    }

    public static function tr($attributes = '', $content = [])
    {
        echo ' <tr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tr>
        ';
    }

    public static function track($attributes = '')
    {
        echo ' <track '.$attributes.'>';

        
    }

   

    public static function tt($attributes = '', $content = [])
    {
        echo ' <tt '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</tt>
        ';
    }


   

    public static function u($attributes = '', $content = [])
    {
        echo ' <u '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</u>
        ';
    }

    public static function ul($attributes = '', $content = [])
    {
        echo ' <ul '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</ul>
        ';
    }

    public static function var($attributes = '', $content = [])
    {
        echo ' <var '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</var>
        ';
    }

    public static function video($source='',$width='',$height='',$type='',$attributes = '')
    {
        echo ' <video width="'.$width.'" height="$'.$height.'" '.$attributes.' controls>';

        
            echo '<source src="'.$source.'" type="'.$type.'">
              Your browser does not support the video tag.
            ';

        echo'</video>
        ';
    }

    public static function wbr($attributes = '', $content = [])
    {
        echo ' <wbr '.$attributes.'>';

        foreach ($content as $result) {
            echo $result;
        }
        echo'</wbr>
        ';
    }
}

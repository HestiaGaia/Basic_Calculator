<html>
    <head>
        <title>Hi</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $result=0;
            $a=null;
            $b=null;
            $error=" ";
            if(isset($_GET['cmd'])){
            if(isset($_GET['a']) && is_numeric($_GET['a'])) $a=$_GET['a'];
            if(isset($_GET['b']) && is_numeric($_GET['b'])) $b=$_GET['b'];  
            switch ($_GET['cmd']) {
                case 0: $result=$a+$b; break;
                case 1: $result=$a-$b; break;
                case 2: $result=$a*$b; break;
                case 3: {
                    if($b==0)$result ="Can't div by zero *.*";
                    else$result=$a/$b;
                    break; 
                    } 
                }
            }
        ?>
        <!------------------->
        <fieldset style="width: 600px;"> <legend>Calculator</legend>
        <form method="GET">
            <table><tr>
                <td style="width: 200px;"><span>A=</span>
                    <input name= "a" type="text" placeholder="0" value="<?php if($a!=null) echo $a;else echo '';?>"/><br/><br/>
                    <span>B=</span>
                    <input name= "b" type="text" placeholder="0" value="<?php if($b!=null) echo $b;else echo '';?>"/>
                </td>

                <td class="bcell"><div>
                    <button name="cmd" value="0">+</button>
                    <button name="cmd" value="1">-</button>
                    <button name="cmd" value="2">*</button> 
                    <button name="cmd" value="3">/</button>
                </div><br/>
                Result = <?= $result;?>
                </td>
                <td style="vertical-align: top;">
                    info: The default values of A and B are 0 (zero)
                </td>
        </tr></table>
        </form></fieldset>
        <script src="script.js"> </script>
    </body>
</html>
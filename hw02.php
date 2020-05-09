<?php
$color="";
$dropdown="";
$userColor="";
if(isset($_GET['submitColor'])){
        $dropdown=$_GET['colorDD'];
        $userColor= trim($_GET['typeColor']);
        if($dropdown!='null' && $userColor!=""){
    echo "Choose 1 Option";
        }
    else
        if($userColor!=""){
        $GLOBALS['color']=$userColor;
        } else if($dropdown!="null"){
            $GLOBALS['color']=$dropdown;
        }
}
?>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h2>Color Picker </h2>
        <form method="GET">
            <label for="colors">Pick a Color</label>
            <select id="colors" name="colorDD">
                <option value="null"> N/A</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="yellow">Yellow</option>
                <option value="white">White</option>
                <option value="black">Black</option>
            </select>
            <input type="text" name="typeColor" placeholder="Red, Green,Blue">
            <input type="Submit" name="submitColor" value="Submit">
        </form>
        <hr>
        <table style="background-color: <?php echo $color ?> ">
            <tr>
            <td>Wow! </td>
            </tr>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form method="POST">
        <label for="size">Select Photo Size:</label>
        <input type="range" name="size" id="size" min="10" max="100" step="10" value="60">
        <br>
        
        <label for="cBorder">Select Border Color:</label>
        <input type="color" name="cBorder" id="cBorder" value="#000000"> 
        <br>

        <button type="submit" name="bProcess">Process</button>
        <br><br>

        <?php 
            if (isset($_REQUEST['bProcess'])) {
                $borderColor = $_REQUEST['cBorder'];
                $size = $_REQUEST['size'];
                
                echo '<img src="images/images.png" width="' . (empty($size) ? '60' : $size) . '%" height="' . (empty($size) ? '60' : $size) . '%" style="border:5px solid ' . (empty($borderColor) ? '#000000' : $borderColor) . ';">';
            }
        ?>
    </form>
</body>
</html>

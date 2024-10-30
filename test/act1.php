<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
 
</head>
<body>

    <h1>Vendo Machine</h1>

    <fieldset>
        <legend>Products</legend>
        
        <label>
            <input type="checkbox" name="product" value="Coke"> Coke - P15
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Sprite"> Sprite - P20
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Royal"> Royal - P20
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Pepsi"> Pepsi - P15
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Mountain Dew"> Mountain Dew - P20
        </label>
        
    </fieldset>

    <fieldset>
        <legend>Options</legend>
        
        <div id="options">

            <label for="size">Size:</label>
            <select id="size" name="size">
                <option value="Regular">Regular</option>
                <option value="Up-Size">Up-Size (add P5)</option>
                <option value="Jumbo">Jumbo (add P10)</option>
            </select>

            <label for="quantity">Qty:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" style="width: 60px;">

            <button type="button">Checkout</button>
        </div>

    </fieldset>

</body>
</html>
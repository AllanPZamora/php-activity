<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
 
</head>
<body>

    <h1>Vendo Machine</h1>

    <fieldset style="width: 500px;">
        <legend>Products</legend>
        
        <label>
            <input type="checkbox" name="product" value="Coke"> Coke - ₱15
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Sprite"> Sprite - ₱20
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Royal"> Royal - ₱20
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Pepsi"> Pepsi - ₱15
        </label><br>
        
        <label>
            <input type="checkbox" name="product" value="Mountain Dew"> Mountain Dew - ₱20
        </label>
        
    </fieldset>

    <fieldset style="width: 500px;">
        <legend>Options</legend>
        
            <label for="size">Size:</label>
            <select id="size" name="size">
                <option value="Regular">Regular</option>
                <option value="Up-Size">Up-Size (add ₱5)</option>
                <option value="Jumbo">Jumbo (add ₱10)</option>
            </select>

            <label for="quantity">Qty:</label>
            <input type="number" id="quantity" name="quantity" min="0" value="1" style="width: 140px;">
            &nbsp;
            <button type="button">Checkout</button>
        
    </fieldset>

</body>
</html>
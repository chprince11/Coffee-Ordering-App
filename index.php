<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment#3-Prince-Chauhan</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="parent">

        <br><br><br><br><br><br> <br><br><br>
        <br<br><br><br><br> <br>
        <br<br><br><br>

        <h1>Welcome to Tim Horton's!</h1>
        
        <footer>
            
            <form action="./order.php" method="post"> 
                <h2>Give us some numbers...</h2>
                <label> Numbers of coffees:<input type="number" name="coffeeNum" min="0"><br><br></label>
                
                <label> Size:<select name="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="extra-large">Extra-Large</option>
                </select></label><br><br>
                
                <label> How many creams?<input type="number" name="creamNum" min="0"><br><br></label>
                <label> How many sugars?<input type="number" name="sugarNum" min="0"><br><br></label>

                <input type="submit" value="Order Coffee">
                
            </form>
            
        </footer>
        
    </div>
        
    </body>
    
</html>

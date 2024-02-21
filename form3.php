<!DOCTYPE html>
<html>
 <head>
        <title> PHP Form </title>
 </head>
   <body>
       <h1> Create a HTML Form like following</h1>
     <form action="hello.php" method="POST">
       <fieldset>

        <legend>Order Information</legend>

       <label>Product: <label>
        <select id = "Products" name = "product">
            <option value="Product1"> Product1</option>
            <option value="Product2"> Product2</option>
            <option value="Product3"> Product3</option>
            <option value="Product3"> Product3</option>
        </select><br><br>

        <label>Quantity: </label>
        <input type="text" name="quantity"><br><br>

        <label>Full Name: </label>
        <input type="text" name="fname"><br><br>

        <label>Email Address: </label>
        <input type="text" name="address"><br><br>

        <label>Phone Number: </label>
        <input type="text" name="number"><br><br>

        <label>Address:</label>
        <textarea rows="5" cols="30" name="home"></textarea><br><br>

        <label>Shipping Option:</label>
                <input type="radio" name="standard" checked>
                <label>Standard Shipping</label>
                <input type="radio" name="express">
                <label>Express Shipping</label><br><br>

        <input type="submit">
        <input type="button" value="Reset">

       </fieldset>

     </form>

    </body>

</html>
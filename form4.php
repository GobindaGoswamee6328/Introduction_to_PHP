<!DOCTYPE html>
<html>
    <head>
        <title> Practice </title>
    </head>
      <body>
        <h1> Information </h1>
        <form action="<?php echo (htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="GET">
            <fieldset>
                <legend> Some Information </legend>
                <table>
                    <tr>
                    <td><label> Name: </label></td>
                    <td><input type="text" name="name"></td>
                    </tr>

                   <tr>
                   <td><label> Id: </label></td>
                   <td><input type="text" name="id"></td>
                   </tr>

                   <tr>
                   <td><label> E-mail: </label></td>
                   <td><input type="text" name="email"></td>
                   </tr>

                   <tr>
                   <td><label> Address: </label></td>
                   <td><textarea rows="5" cols="30" name="address"></textarea></td>
                   </tr>

                  <tr>
                   <td><label> Gender: </label></td>
                     <td><input type="radio" name="male">
                     <label> Male </label>
                     <input type="radio" name="female">
                     <label> Female </label></td>
                 </tr>

                 <tr>
                 <td><label> Product: </label></td>
                   <td><select id="Product" name="product">
                   <option value="Product1"> Product1</option>
                   <option value="Product2"> Product2</option>
                   <option value="Product3"> Product3</option>
                   <option value="Product3"> Product3</option>
                  </td></select>
                 </tr>

                 <tr>
                 <td><input type="submit"></td>
                 </tr>

                 </table>

            </fieldset>

        </form>

      </body>
</html>
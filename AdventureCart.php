<?php
session_start();
setlocale(LC_MONETARY, 'en_US');
$product_id = $_POST['Select_Product'];
$action = $_POST['action'];
switch ($action)
{
    case "Add":
        $_SESSION['cart'][$product_id] ++;
        break;
    case "Remove":
        $_SESSION['cart'][$product_id] --;
        if ($_SESSION['cart'][$product_id] <= 0)
        {
            unset($_SESSION['cart'][$product_id]);
        }
        break;
    case "Empty":
        unset($_SESSION['cart']);
        break;
    case "Info":
        $infoNum = $product_id;
        break;
}
//print_r($_SESSION)
require_once 'DataBaseConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAA19fXAMCAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIBAQECAgICAgICAQEBAgICAQABAgICAgICAgEAAQICAgEAAQECAgECAgEBAAEBAgIBAAAAAQEAAQEAAQAAAAEBAQABAQABAAEBAAEAAQEAAQEAAQEAAQABAQABAAEBAAEBAAEBAAEAAQEAAQABAQABAQAAAAEBAAAAAQEAAAABAQIBAQECAQABAQICAQEBAgICAgICAgEAAQICAgICAgICAgICAgIBAQECAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
        <title>Adventure Cart</title>
        <link href="css/view.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="form" id="form_container">
            <form action="AdventureCart.php" method="Post">
                <div>
                    <p><span class="text">Please Select a product:</span>
                        <select id="Select_Product" name="Select_Product" onchange="productInfo(this.value)" class="select">
                            <option value=""></option>
                            <?php
                            //setting the select statement and running it
                            $search = "SELECT * FROM Library.AdventureGear order by Item";
                            $return = $con->query($search);
                            if (!$return)
                            {
                                $message = "Whole query " . $search;
                                echo $message;
                                die('Invalid query: ' . mysqli_error());
                            }
                            while ($row = mysqli_fetch_array($return))
                            {
                                if ($row['idAdventureGear'] == $product_id)
                                {
                                    echo "<option value='" . $row['idAdventureGear'] . "' selected = 'selected'>" . $row['Item'] . "</option>";
                                }
                                else
                                {
                                    echo "<option value='" . $row['idAdventureGear'] . "'>" . $row['Item'] . "</option>\n";
                                }
                            }
                            ?>
                        </select>
                    </p>
                    <table>
                        <tbody><tr>
                                <td>
                                    <input id="button_Add" type="submit" value="Add" name="action" class="button"/>
                                </td>
                                <td>
                                    <input name="action" type="submit" class="button" id="button_Remove" value="Remove"/>
                                </td>
                                <td>
                                    <input name="action" type="submit" class="button" id="button_empty" value="Empty"/>
                                </td>
                                <td>
                                    <input name="action" type="submit" class="button" id="button_Info" value="Info"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <?php
                        if ($infoNum > 0)
                        {
                            $sql = "SELECT Item, Cost, Weight, ItemImage FROM Library.AdventureGear WHERE idAdventureGear = " . $infoNum;
                            echo "<table align ='left' width='100%'><tr><th>Name</th><th>Price</th><th>Weight</th></tr>";
                            $result = $con->query($sql);
                            if (mysqli_num_rows($result) > 0)
                            {
                                list($infoname, $infoprice, $inforweight, $infoimage) = mysqli_fetch_row($result);
                                echo "<tr>";
                                echo "<td align=\"left\" width=\"450px\">$infoname</td>";
                                echo "<td align=\"left\" width=\"325px\">" . money_format('%(#8n', $infoprice) . " <td>";
                                echo "<td align=\"center\">$inforweight</td>";
                                echo "<td align=\"left\" width=\"450px\"><img src='images\\$infoimage' height=\"160\" width=\"160\"></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        ?>
                    </div>
                    <div>
                        <?php
                        if ($_SESSION['cart'])
                        {
                            echo "<table border =\"1\" padding=\"3\" width=\"640px\"><tr><th>Name</th><th>Weight</th><th>Price</th>" . "<th width=\"80px\">Line</th></tr>";
                            foreach ($_SESSION['cart'] as $product_id => $quantity)
                            {
                                $sql = "SELECT Item, Cost, Weight FROM Library.AdventureGear WHERE idAdventureGear = " . $product_id;
                                //echo $sql
                                $result = $con->query($sql);
                                //Only display the row if there is a product (though there should always be, as we have already checked)
                                if (mysqli_num_rows($result) > 0)
                                {
                                    list($name, $price, $weight) = mysqli_fetch_row($result);
                                    $weight = $weight * $quantity;
                                    echo "Price: " . $price . ", ";
                                    echo "Quantity: " . $quantity . ".";
                                    $line_cost = $price * $quanity; //work out the line cost
                                    $totWeight = $totWeight + $weight;
                                    $total = $total + $line_cost; //add to the total cost
                                    echo "<tr>";
                                    // show this information in table cells
                                    echo "<td align=\"Left\" width=\"450px\">$name</td>";
                                    echo "<td align=\"center\" width=\"75px\">$weight</td>";
                                    echo "<td align=\"center\" width=\"75px\">" . money_format('%(#8n', $price) . "</td>";
                                    echo "<td align=\"center\">" . money_format('%(#8n', $line_cost) . "</td>";
                                    echo "</tr>";
                                }
                            }
                            echo "<tr>";
                            echo "<td align=\"right\">Total Weight</td><td align=\"right\">$totWeight</td><td align=\"right\">Total</td>";
                            echo "<td align=\"right\">" . money_format('%(#8n', $total) . "</td>";
                            echo "</tr>";
                            echo "</table>";
                        }
                        else
                        {
                            echo "You have no items in your shopping cart.";
                        }
                        mysqli_close($con)
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
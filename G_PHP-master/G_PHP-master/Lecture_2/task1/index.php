<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" class="form">
        <table>
            <tr>
                <td>სახელი - </td><td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>გვარი - </td><td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td>თანამდებობა - </td><td><input type="text" name="position"></td>
            </tr>
            <tr>
                <td>ხელფასი - </td><td><input id="salary" onkeyup="calculateTax()" type="text" name="salary"></td>
            </tr>
            <tr>
                <td>საშემოსავლო - </td><td><input id="tax" disabled type="text" name="tax"></td>
            </tr>
            <tr>
                <td>ხელზე ასაღები - </td><td><input id="cash" disabled type="text" name="cash"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="Submit" name="send" value="გაგზავნა"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php 
        if(isset($_GET["send"]))
        {
           include "tab.php"; 
        }
    ?>
    <script src="script.js"></script>
</body>
</html>
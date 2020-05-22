<table>
    <tr>
        <td>სახელი - </td><td><?=$_GET["name"]?></td>
    </tr>
    <tr>
        <td>გვარი - </td><td><?=$_GET["lastname"]?></td>
    </tr>
    <tr>
        <td>თანამდებობა - </td><td><?=$_GET["position"]?></td>
    </tr>
    <tr>
        <td>ხელფასი - </td><td><?=$_GET["salary"]?></td>
    </tr>
    <tr>
        <td>საშემოსავლო - </td><td><?=$_GET["salary"]*0.2?></td>
    </tr>
    <tr>
        <td>ხელზე ასაღები - </td><td><?=$_GET["salary"]-$_GET["salary"]*0.2?></td>
    </tr>
</table>
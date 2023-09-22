<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php';?>
<?php include_once '../model/con.php';

$queryLocation = $db->query("select * from locations");
$locations = $queryLocation->fetchAll(PDO::FETCH_OBJ);
?>

<div><a href="index.php" class="links">GO TO MAIN</a></div>
<div>
    <table>
        <tr>
            <th colspan="4">LOCATIONS</th>
        </tr>
        <tr>
            <th>Street Address</th>
            <th>Postal Code</th>
            <th>City</th>
            <th>State</th>
        </tr>
        <tbody>
            <?php foreach ($locations as $data){?>
            <tr>
                <td><?php echo $data->street_address;?></td>
                <td><?php echo $data->postal_code;?></td>
                <td><?php echo $data->city;?></td>
                <td><?php echo $data->state_province;?></td>
            </tr>
        </tbody>
        <?php }?>
    </table>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php';?>
<?php 
    include_once '../model/con.php';

    $querySpots = $db->query("select * from spots");
    $spots = $querySpots->fetchAll(PDO::FETCH_OBJ);
?>

<div><a href="index.php" class="links">GO TO MAIN</a></div>
<div>
    <table>
        <thead>
            <tr>
                <th colspan = "6">We are around the world! Where you can find us?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CONTINENT</td>
                <td>COUNTRY</td>
                <td>STATE/PROVINCE</td>
                <td>CITY</td>
                <td>ADDRESS</td>
                
            </tr>
            <?php foreach ($spots as $data){?>
            <tr>
                <td><?php echo $data->region_name?></td>
                <td><?php echo $data->country_name?></td>
                <td><?php echo $data->state_province?></td>
                <td><?php echo $data->city?></td>
                <td><?php echo $data->street_address?></td>
                <td>
                    <a href="" class="links">UPDATE</a>
                    <a href="" class="links">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

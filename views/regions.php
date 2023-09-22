<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php';?>
<?php 
    include_once '../model/con.php';

    $queryRegion = $db->query("select * from regions");
    $regions = $queryRegion->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <tr><th>REGIONS</th></tr>
        <tr><th>Region Name</th></tr>
        <tbody>
            <?php foreach ($regions as $data){?>
            <tr><td><?php echo $data->region_name?></td></tr>
        <?php }?>
            <tr>
                <td><a href="../manage/createRegion.php">CREATE NEW REGION</a></td>
            </tr>
        </tbody>
    </table>
</div>
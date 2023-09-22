<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'; ?>
<?php 
    include_once '../model/con.php';

    $queryCountry = $db->query("select * from countries");
    $countries = $queryCountry->fetchAll(PDO::FETCH_OBJ);
?>

<div><a href="index.php" class="links">GO TO MAIN</a></div>
<div>
    <table>
        <tr>
            <th colspan="2">COUNTRIES</th>
        </tr>
        <tr>
            <th colspan="2">Available Countries</th>
        </tr>
        <tbody>
            <?php foreach ($countries as $data){?>
            <tr>
                <td><?php echo $data->country_name?></td>
            <td>
                <a href="updateCountry.php">UPDATE</a>
                <a href="deleteCountry.php">DELETE</a>
            </td>
                    
            <?php }?>
        </tbody>   
    
    </table>
</div>
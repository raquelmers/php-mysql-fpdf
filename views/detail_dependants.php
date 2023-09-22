<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>
<?php 
    include_once '../model/con.php';

    $queryDetailDependant = $db->query("select * from detail_dependants");
    $detailDependants = $queryDetailDependant->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th colspan="5">DEPENDANTS INFORMATION</th>
            </tr>
            <tr>
                <th>Dependant's Full Name</th>
                <th>Relationship</th>
                <th>Financial Supporter</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($detailDependants as $data){?>
            <tr>
                <td><?php echo $data->fullnameDependant;?></td>
                <td><?php echo $data->relationship;?></td>
                <td><?php echo $data->fullnameEmployee;?></td>
                <td>
                    <a href="" class="links">UPDATE</a>
                    <a href="" class="links">DELETE</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
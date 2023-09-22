<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>
<?php 
    include_once '../model/con.php';

    $queryDependant = $db->query("select * from dependants");
    $dependants = $queryDependant->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <tr><th colspan="4">DEPENDANTS</th></tr>
        <tr>
            <th>Full Name</th>
            <th>Relationship</th>
        </tr>
        <tbody>
            <?php foreach ($dependants as $data){?>
            <tr>
                <td>
                    <?php echo $data->first_name." ".$data->last_name;?>
                </td>
                <td><?php echo $data->relationship;?></td>
                <td>
                    <a href="" class="links">UPDATE</a>
                    <a href="" class="links">DELETE</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
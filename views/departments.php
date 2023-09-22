<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>
<?php include_once '../model/con.php';

$queryDepart = $db->query("select * from departments");
$departments = $queryDepart->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <tr>
            <th>DEPARTMENTS</th>
        </tr>
        <tr>
            <th>Department Name</th>
        </tr>
        <tbody>
            <?php foreach ($departments as $data){?>
                <tr>
                    <td><?php echo $data->department_name?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
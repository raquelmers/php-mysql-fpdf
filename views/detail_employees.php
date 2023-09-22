<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php' ?>

<?php 
    include_once '../model/con.php';

    $queryDetailEmployees = $db->query("select * from detail_employees");
    $detailEmployees = $queryDetailEmployees->fetchAll(PDO::FETCH_OBJ);
?>

<div><a href="index.php" class="links">GO TO MAIN</a></div>

<div>
    <table>
        <tr>
            <th colspan="5">EMPLOYEE INFORMATION</th>
        </tr>
        <tr>
            <th>Full Name</th>
            <th>Position</th>
            <th>Department</th>
        </tr>
        <tbody>
            <?php foreach ($detailEmployees as $data){?>
            <tr>
                <td><?php echo $data->fullname;?></td>
                <td><?php echo $data->job_title;?></td>
                <td><?php echo $data->department_name;?></td>
                <td>
                    <a href="" class="links">UPDATE</a>
                    <a href="" class="links">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
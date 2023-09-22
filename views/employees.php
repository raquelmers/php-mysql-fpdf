<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>
<?php 
include_once '../model/con.php';

$queryEmployee = $db->query("select * from employees");
$employees = $queryEmployee->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <tr><th colspan="6">EMPLOYEES</th></tr>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone Number</th>
            <th>Hire Date</th>
            <th>Salary</th>
        </tr>
        <tbody>
            <?php foreach ($employees as $data){?>
            <tr>
                <td>
                    <?php echo $data->first_name." ".$data->last_name;?>
                </td>
                <td><?php echo $data->email;?></td>
                <td><?php echo $data->phone_number;?></td>
                <td><?php echo $data->hire_date;?></td>
                <td><?php echo $data->salary?></td>
                <td>
                    <a href="" class="links">UPDATE</a>
                    <a href="" class="links">DELETE</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
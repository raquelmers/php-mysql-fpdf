<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>

<?php 
    include_once '../model/con.php';

    $queryJobs = $db->query("select * from jobs");
    $jobs = $queryJobs->fetchAll(PDO::FETCH_OBJ);
    ?>
<div><a href="index.php" class="links">GO TO MAIN</a></div>
<div>
    <table>
        <tr>
            <th colspan="4">JOBS</th>
        </tr>
        <tr>
            <th>Job Title</th>
            <th>Min. Salary</th>
            <th>Max. Salary</th>
        </tr>
        <tbody>
            <?php 
                foreach($jobs as $data){
            ?>
            <tr>
                <td><?php echo $data->job_title?></td>
                <td><?php echo $data->min_salary?></td>
                <td><?php echo $data->max_salary?></td>
                <td>
                    <a href="updateJobs.php" class="links">UPDATE</a>
                    <a href="deleteJobs.php" class="links">DELETE</a>
                </td>
            </tr>
            <?php }?>
            <tr>  
            </tr>
        </tbody>
    </table>
</div>
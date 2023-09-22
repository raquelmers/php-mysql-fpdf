<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'; ?>

<?php 
    include_once '../model/con.php';

    $queryResources = $db->query("show full tables where table_type = 'base table'");
    $resources = $queryResources->fetchAll(PDO::FETCH_OBJ);
    //print_r($resources);
?>

<div>
    <a href="index.php" class="links">GO TO MAIN</a>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th colspan="7">Resource Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="countries.php">COUNTRIES</a></td>
                <td><a href="departments.php">DEPARTMENTS</a></td>
                <td><a href="dependants.php">DEPENDANTS</a></td>
                <td><a href="employees.php">EMPLOYEES</a></td>
                <td><a href="jobs.php">JOBS</a></td>
                <td><a href="locations.php">LOCATIONS</a></td>
                <td><a href="regions.php">REGIONS</a></td>
            </tr>
            <tr>
                <td colspan="7"><a href="../manage/createRegion.php">GENERATE PDF</a></td>
            </tr>
        </tbody>
    </table>
</div>
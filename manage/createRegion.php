<?php include $_SERVER['DOCUMENT_ROOT'].'/php_sql/templates/header.php'?>

<?php 
    include_once '../model/con.php';
?>

<div>
    <a href="../views/index.php">GO TO MAIN</a>
</div>
<div>
    <table>
        <form action="../views/pdf_printer.php" method="post">
            <tr>
                <td>
                    <label>Region</label>
                </td>
                <td>
                    <input type="text" name="inputRegion" placeholder="Enter new region">
                </td>
                
            </tr>
        </form>
    </table>
</div>
<div>
    <a href="../views/regions.php">BACK</a>
</div>
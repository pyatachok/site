<?php 
include '../inc/main.php';
include ("../inc/db.php");
$db = connect_to_database();

$sql = 'SELECT * FROM `company`';
$result = mysql_query($sql, $db);

$companies = array();

while ($row = mysql_fetch_array($result))
{
    $companies[$row['id']] = $row;
}


?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Поиск фирм</title>
</head>

<body>
    <h1>Поиск фирм</h1>
     var_export($company);
}
    
    ?>
    
    
    <table>
            <tr><th>Company name</th>
               <th>Telephone</th>
               <th>Contact person</th>
               <th>Adress</th>
               <th>Business type</th>
               <th>login</th>
	    <!--zabyl zakryvaushiy tag-->
	    </tr>
    <?php  foreach ($companies as $id => $company) { ?>
	<tr>
	    <td><?php echo $company['company_name'];?></td>
	    <td><?php echo $company['telephone'];?></td>
	    <td><?php echo $company['contact_person'];?></td>
	    <td><?php echo $company['adress'];?></td>
	    <td><?php echo $company['business_type'];?></td>
	    <td><?php echo $company['login'];?></td>
	</tr>
    <?php } ?>

</table>
</body>
</html>
<?php $title = 'List of Companies' ?>

<?php ob_start() ?>
    <h1>List of Companies</h1>
<table border="1">
    <tr>
       <th>id</th>
       <th>Company name</th>
       <th>Telephone</th>
       <th>Contact person</th>
       <th>Adress</th>
       <th>Business type</th>
       <th>login</th>
    </tr>
<?php  foreach ($companies as $id => $company) { ?>
       <tr>
       <td> <?php echo $company['id'];            ?> </td>
   <td> <?php echo $company['company_name'];  ?> </td>
   <td> <?php echo $company['telephone'];     ?> </td>
   <td> <?php echo $company['contact_person'];?> </td>
   <td> <?php echo $company['adress'];        ?> </td>
   <td> <?php echo $company['business_type']; ?> </td>
   <td> <?php echo $company['login'];         ?> </td>
   </tr>
   <?php } ?>
</table>
   
<?php $content = ob_get_clean() ?>

<?php require(TEMPLATES_DIR . '/layout.php'); ?>

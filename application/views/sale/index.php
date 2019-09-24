<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
  		<a href="<?php echo base_url(); ?>Sales/create">Add new</a>
  		<table id="example" >
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
  			<?php foreach ($sales as $sale): ?>
                <tr>
                  <td><?php echo $sale->Code; ?></td>
                  <td><?php echo $sale->Name; ?></td>
                  <td><?php echo $sale->Username; ?></td>
                  <td><?php echo $sale->Password; ?></td>
                  <td><a href="<?php echo base_url(); ?>sales/edit/<?php echo $sale->Code ?>">Edit</a>|
                      <a href="<?php echo base_url(); ?>sales/delete/<?php echo $sale->Code ?>">Delete</a>
                  </td>
                </tr>
          <?php endforeach ?>  
        </tbody>		
  		</table>

      <script type="text/javascript">
         $(document).ready(function() {
          $('#example').DataTable();
            } );
      </script>      
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
  		<a href="<?php echo base_url(); ?>categories/create">Add new</a>
  		<table id="example" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
  			<?php foreach ($categories as $category): ?>
                <tr>
                  <td><?php echo $category->id; ?></td>
                  <td><?php echo $category->name; ?></td>
                  <td><?php echo $category->description; ?></td>
                  <td><a href="<?php echo base_url(); ?>categories/edit/<?php echo $category->id ?>">Edit</a>|
                      <a href="<?php echo base_url(); ?>categories/delete/<?php echo $category->id ?>">Delete</a>
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
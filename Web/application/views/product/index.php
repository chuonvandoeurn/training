<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <!-- <style>
          table{
           border: 2px solid black;
          }
          table tr td{
            border: 2px solid black;
          }
        </style> -->
      <a href="<?php echo base_url(); ?>products/create">Add new</a>
  		<table >
  			<tr>
  				<td>Id</td>
  				<td>Name</td>
          <td>Category</td>
  				<td>Description</td>
  				<td>Action</td>
  			</tr>
  			<?php foreach ($products as $product): ?>
                <tr>
                  <td><?php echo $product->id; ?></td>
                  <td><?php echo $product->name; ?></td>
                   <td><?php echo $product->categories_name; ?></td>
                  <td><?php echo $product->description; ?></td>
                  <td><a href="<?php echo base_url(); ?>products/edit/<?php echo $product->id ?>">Edit</a>|
                      <a href="<?php echo base_url(); ?>products/delete/<?php echo $product->id ?>">Delete</a>
                  </td>
                </tr>
        <?php endforeach ?>  		
  			
  		</table>
        
    </body>
</html>
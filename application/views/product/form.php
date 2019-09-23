<label for="name" >Name</label>
<input type="text" name="name" id="name" value="<?php echo (isset($product))? $product->name: ' ' ?>" />
<label for="category" >Category Name</label>
	<select name="category" id="category"> 
		<option value="-1">Select Item</option>
		<?php foreach ($categories as $category) :?>
			<option value="<?php echo $category->id ?>"<?php echo(isset($product))? ($category->id=$product->id)? 'selected' : '': ''; ?>><?php echo $category->name; ?></option>
		<?php endforeach ?> 
	</select>
<label for="description">Description</label>
<input type="text" name="description" id="description" value="<?php echo (isset($product))? $product->description: ' ' ?>"/>

<input type="submit" value="<?php echo (isset($product))? 'update': 'save' ?>" name="submit" ;>
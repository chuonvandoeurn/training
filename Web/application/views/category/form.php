<label for="name" >Name</label>
<input type="text" name="name" id="name" value="<?php echo (isset($category))? $category->name: ' ' ?>" />
<label for="description">Description</label>
<input type="text" name="description" id="description" value="<?php echo (isset($category))? $category->description: ' ' ?>"/>
<input type="submit" value="<?php echo (isset($category))? 'update': 'save' ?>" name="submit" ;>
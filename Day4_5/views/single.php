<?php
$id = (isset ($_GET["id"]))? intval ($_GET["id"]) : 0;
$current_item = $db->getRecordById($id) [0];
?>
<html>


<div style="display:flex; flex-direction:column ; justify-content:center;align-items:center">
<h2 style="text-align:center; font-weight:700"> <?php echo "Name:" . $current_item["product_name"];?></h2>
<h3 style="font-weight:400;font-style:italic"> <strong>Type:</strong> <?php echo  $current_item["category"];?></h3>
<h3 style="font-weight:400;font-style:italic"> <strong>price:</strong> <?php echo $current_item["list_price"];?> </h3>
<h3 style="font-weight:400;font-style:italic"> <strong>code:</strong> <?php echo $current_item["product_code"]; ?> </h3>
<h3 style="font-weight:400;font-style:italic"> <strong>item_id:</strong>   <?php echo $current_item ["id"] ;?></h3>
<h3 style="font-weight:400;font-style:italic"> <strong>rating:</strong> <?php  echo $current_item["rating"]; ?> </h3>
      <br>
    <img src="<?php echo "images/" .$current_item["photo"]; ?>">

    </div>

</html>
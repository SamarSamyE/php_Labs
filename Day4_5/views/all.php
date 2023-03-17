<?php
$current_index = isset($_GET["next"]) && is_numeric($_GET["next"])? (int) $_GET["next"] : 0 ;
$next_index = ($current_index + __RECORDS_PER_PAGE__< 16) ? $current_index + __RECORDS_PER_PAGE__ :0; ;
$previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0) ? $current_index - __RECORDS_PER_PAGE__ :0; 
$items = $db->getData(array () , $current_index);
?>
<div style="display:flex; flex-direction:column ; justify-content:center;align-items:center">
<?php foreach ($items as $item){?>
    <h3>    <?php echo "ID:" . $item["id"]; ?> </h3>
    <h1 style="font-style:italic"> <?php echo "Name: ". $item["product_name"]; ?> </h1>
    <img src="<?php echo "images/" .$item["photo"]; ?>" style="height:25% ;width: 40%">
    <!-- <a href= "<?php echo $_SERVER["PHP_SELF"] ?>?id= <?php echo $item["id"]?> </a> -->
   <h3 style="cursor:pointer;font-size:x-large "><?php  echo "
   <a  href ='".$_SERVER["PHP_SELF"]."?id=".$item["id"] ."' > View More Details </a> 
    "; ?>
    </h3> 

<?php } ?>

</div>
<div style="margin-left:43%;font-size:large;margin-bottom:20px">
<a style="color:inherit;background-color:blueviolet;border-radius: 5px;padding: 8px;text-decoration:none" href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$next_index; ?>">Next >> </a>;
<a style="color:inherit;background-color:blueviolet;border-radius: 5px;padding: 8px;text-decoration:none" href ="<?php echo $_SERVER["PHP_SELF"] . "?next=" .$previous_index; ?>" > << Previous </a>;
</div>



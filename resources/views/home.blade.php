<div style="text-align: center; font-weight: bold; font-size: 18px; padding:10px">Display the Products Info</div>
<?php 

  foreach( $data['products']  as $products) 
  {
    echo "<div style='padding:10px; margin:10px; border:1px solid #000000'>" . $products->product_name . " Price:" . $products->product_price . "</div>";
  }

?>
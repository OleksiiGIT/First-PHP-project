<?php
require 'header.php';
require 'db.php';

function get_car($id)
{
    require 'db.php';

    $query = sprintf("SELECT * FROM cars WHERE id = '$id';");

    $result = mysql_query($query);

    $row=mysql_fetch_assoc($result);

    return $row;
}

$id = $_GET['id'];
$car = get_car($id);

?>

<p></p>
  <ul class="col-md-4 thumbnails">
      <img src="public/images/<?=$car['image'] ?>" alt="">
      <a style="color: black;" href="">
          <h3><?=$car['marka']?></h3>
</a>
<p><?=$car['price_in_hour']?> грн в сутки</p>
</ul>
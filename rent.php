<?php 
require 'header.php'; 

require 'db.php';

function db_result_to_array($result)
{
    $res_array = array();
    $count = 0;

    while($row = mysql_fetch_array($result))
    {
        $res_array[$count] = $row;
        $count++;
    }
    return $res_array;
}


function get_cars()
{
    require 'db.php';

    $query = sprintf("SELECT * FROM cars;");

    $result = mysql_query($query);

    $result = db_result_to_array($result);

    return $result;
}

$all_cars = get_cars();
foreach ($all_cars as $item) :?>

<p></p>
  <ul class="col-md-4 thumbnails">
      <img src="public/images/<?=$item['image'] ?>" alt="">
      <a style="color: black;" href="open_car.php?view=open_car&id=<?=$item['id']?>">
          <h3><?=$item['marka']?></h3>
      </a>
      <p><?=$item['price_in_hour']?> грн в сутки</p>
  </ul>

<?php endforeach; ?>

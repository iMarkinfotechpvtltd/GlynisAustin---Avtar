<?php
include('../../../../wp-config.php');
?>

<?php
$pcategory = $_POST['pcategory'];
$area = $_POST['area'];
$p_type = $_POST['p_type'];
$bedrooms = $_POST['bedrooms'];
$bathrooms = $_POST['bathrooms'];
$parking = $_POST['parking'];
$minprice = $_POST['minprice'];
$maxprice = $_POST['maxprice'];

$query = "select post_id from properties where id != '' ";

if($pcategory != 0)
{
	$query = $query." AND status = $pcategory";
}

if($area != '')
{
	$query = $query." AND area LIKE $area%";
}

if($p_type != 0)
{
	$query = $query." AND type = $p_type";
}

if($bedrooms != 0)
{
	$query = $query." AND bedrooms = $bedrooms";
}

if($bathrooms != 0)
{
	$query = $query." AND bathrooms = $bathrooms";
}

if($parking != 0)
{
	$query = $query." AND parking = $parking";
}

if($minprice != 0)
{
	$query = $query." AND price >= $minprice";
}

if($maxprice != 0)
{
	$query = $query." AND price <= $maxprice";
}


					//echo $query;
					global $wpdb; 
                    $postsID = $wpdb->get_results($query);
					foreach($postsID as $getPostId){
						 $data = $data .','. $getPostId->post_id;
					}
					echo $str = ltrim($data, ',');
					
					
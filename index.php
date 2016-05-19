<?php


require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$api_key="WjhhaEdOrZJ7hDY8wNWvyCvR5";
$api_secret="UcZGErmA1DJhACTmq3pECNP2VjkEsJpNkYExfyt7uuJP9Yx2fT";
$access_token ="122065607-Z9qpsdGSlCeFcGHSDaUqFOUhzvfhrQKWPmd056YW";
$access_token_key="a6Xt05n8BBkFTnq1KjlN8ZWOZ8dRQfWJS0TxIyUfo3wix";

$connection = new TwitterOAuth($api_key, $api_secret, $access_token, $access_token_key);

//https://dev.twitter.com/rest/reference/get/account/verify_credentials
//122065607 id pixelartecl
/*$content = $connection->get("account/verify_credentials");
echo '<p><img src="'.$content->profile_image_url.'"></p>';
echo '<p>id '.$content->id.'</p>';
echo '<p>id_str '.$content->id_str.'</p>';
echo '<p>name '.$content->name.'</p>';
echo '<p>screen_name '.$content->screen_name.'</p>';
echo '<p>location '.$content->location.'</p>';
echo '<p>description '.$content->description.'</p>';
echo '<p>url '.$content->url.'</p>';
echo '<p>followers_count '.$content->followers_count.'</p>';
echo '<p>friends_count '.$content->friends_count.'</p>';
echo '<p>created_at '.$content->created_at.'</p>';
echo '<p>statuses_count '.$content->statuses_count.'</p>';*/



//https://dev.twitter.com/rest/reference/get/statuses/home_timeline

/*$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]); //20-200
foreach ($statuses as $tweet) {
 echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';
}*/



//https://api.twitter.com/1.1/statuses/mentions_timeline.json
//https://dev.twitter.com/rest/reference/get/statuses/mentions_timeline
//, "exclude_replies" => true
/*$screenNameRespuesta;
$idTweetRespuesta;
$statuses = $connection->get("statuses/mentions_timeline", ["count" => 1]);
foreach ($statuses as $object) {
 echo '<p> id_str tweet '.$object->id_str.'</p><p> tweet '.$object->text.'</p><p> id_str user '.$object->user->id_str.'</p><p> screen_name '.$object->user->screen_name.'</p>';
 echo '<p> --------------------------------------------------- </p>';
 $screenNameRespuesta=$object->user->screen_name;
 $idTweetRespuesta=$object->id_str;
}




//https://dev.twitter.com/rest/reference/post/statuses/update
$query = array(
  "status" => "Esta es una prueba de un bot muy bakan @".$screenNameRespuesta.' !!!',
  "in_reply_to_status_id" =>  $idTweetRespuesta
);
$statuses = $connection->post("statuses/update", $query);

if($statuses->errors[0]->code==187) //or $statuses->errors[0]->message=="Status is a duplicate."
{

}

print_r($statuses);*/

















//https://dev.twitter.com/rest/public/search
//http://techiella.x0.com/twitter-search-using-the-twitter-api-php/
/*$query = array(
  "q" => "happy birthday",
  "count" => 20,
  "result_type" => "recent",//recent o popular
  "lang" => "cl"
);
$tweets = $connection->get('search/tweets', $query);
foreach ($tweets->statuses as $tweet) {
 echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';
}
*/


/*$media1 = $connection->upload('media/upload', ['media' => 'moto.gif']);
$parameters = [
    'status' => 'Meow Meow Meow',
    'media_ids' => implode(',', [$media1->media_id_string])
];
$result = $connection->post('statuses/update', $parameters);

print_r($result);*/





/*$query = array(
 "query" => "santiago, chile"
);
$tweets = $connection->get('geo/search', $query);

//print_r($tweets);

foreach ($tweets->result->places as $tweet) {
 echo '<p>'.$tweet->country.'<br>Posted on: <a href="https://twitter.com/'.$tweet->name.'/status/'.$tweet->id.'">'.date('Y-m-d H:i', strtotime($tweet->created_at)).'</a></p>';
}
*/



?>
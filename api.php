<?php
$servername = "localhost";
$username = "root";
$password = "bigawesome";
$dbname = "SuperHero";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);        
}

$route = $_GET['route'];

switch ($route) {
  case "getAllHeroes":
    $myData = getAllHeroes($conn);
    break;
  case "getHeroById":
    $heroId = $_GET['hero_id'];
    $myData = getHeroById($conn, $heroId);
    break;
  case "addHeroToTable":
    $name = $_GET['name'];
    $about_me = $_GET['about_me'];
    $biography = $_GET['biography'];
    $myData = addHeroToTable($conn, $name, $about_me, $biography, '');
    break;
  case "deleteHeroFromTable":
    $id = $_GET['id'];
    $name = $_GET['name'];
    $about_me = $_GET['about_me'];
    $biography = $_GET['biography'];
    $myData = deleteHeroFromTable($conn, $id, $name, $about_me, $biography, '');
    break;
  case "updateHeroAbility":
    $id = $_GET['id'];
    $ability = $_GET['ability'];
    $myData = updateHeroAbility($conn, $id, $ability);
    break;
  default:
    $myData = json_encode([]);   
}

echo $myData;

$conn->close();


//gets all the heros and returns them
function getAllHeroes($conn){
  $data=array();
  // Selects all from the Heros table and displays all.
  $sql = "SELECT * 
          FROM heroes";
  $result = $conn->query($sql);
  
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      array_push($data,$row);
    }
  }
  return json_encode($data);
}



//ability to pull the Heros id in and view by themselves
function getHeroById($conn, $heroId){
   $data=array();
// Pulls the heros table in and then you can display each hero by their speicific id
    $sql = "SELECT * 
            FROM heroes 
            WHERE id = " . $heroId;
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        array_push($data,$row);
      }
    }
      return json_encode($data);
 }



//adds Hero to the heros table and updates the according information
function addHeroToTable($conn, $name, $about_me, $biography, $img){
  //inserts custom created hero into the heros table, and includes all the info for about me, bio, and img.
  $sql = "INSERT INTO heroes (name, about_me, biography, image_url)
          VALUES ('$name', '$about_me', '$biography', '$img')";
  
  if ($conn->query($sql) === TRUE){
    $newHero = "('Geeeee Golly!':'you've created a new hero')";
  } else {
    echo "{'error': '" . $sql . " - " . $conn->error . "'}";
  }
  
  return json_encode([$name]);
}


//deletes the last created hero and information that goes with it
function deleteHeroFromTable($conn, $id, $name, $about_me, $biography, $img){
  //pulls the Heros table, and you can then delete the supplied Hero by ID.
  $sql = "DELETE FROM heroes 
          WHERE id=$id";
    
    if ($conn->query($sql) === TRUE){
    echo "Poor Guy! The name that shall not be spoken of has been Deleted!";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  return json_encode([$name]);
}


//updates the Abilities table 
function updateHeroAbility($conn, $id, $ability){
  //pulls the abilities table in, and modifies 1 of the givem abilities.
  $sql = "UPDATE abilities 
          SET ability=$ability 
          WHERE id=$id";

  if($conn->query($sql) === TRUE){
    echo "Your Abilities List Has Been Updated!";
  } else {
    echo "Error updating record: " . $conn->error;
  }

    return json_encode([$ability]);
}






?>
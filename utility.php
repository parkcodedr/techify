function connect()
{
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "hiit_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
return null;
}
return $conn;
}


function clean_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
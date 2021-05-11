<?php
function openConn() {
  $host = "127.0.0.1";
  $username = "root";
  $password =  "4008458";
  $dbname = "online_shop";
  $port = 3306;

  $conn = mysqli_connect($host, $username, $password, $dbname, $port);

  if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

  return $conn;
}

function closeConn($conn) {
  $conn->close();
}
   

function sql_query($sql)
  {
    $conn = openConn();
    $result = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    closeConn($conn);
    return $items;
  }

function sql_query_update($sql)
  {
    $conn = openConn();
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    closeConn($conn);
  }
?>

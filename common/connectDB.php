<?php  

    $servername = "gustavomonteiro.pt";
    $username = "gustavom_count";
    $password = "counter817wWqsa_:";
    $dbname="gustavom_countapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM teste";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Teste3</th><th>Teste4</th><th>Teste5</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["teste3"]."</td><td>" .$row["teste4"] . "</td><td>".$row["teste5"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
    
?> 
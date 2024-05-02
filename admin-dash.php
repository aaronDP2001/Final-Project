

<?php
ob_start();
session_start();
$con = mysqli_connect("localhost", "root", "", "learnsync");
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $sql = "SELECT * FROM `streams` ;";
    $result = $con->query($sql);
}
$con->close();
?>

<!DOCTYPE html>
<html>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Room Name</th>
        <th scope="col">Time Created</th>
        <th scope="col">Room Link</th> <!-- New column for Room Link -->
        <th scope="col">Actions</th> <!-- Column for Delete Action -->
      </tr>
    </thead>
    <tbody>
      <?php
      while ($rows = $result->fetch_assoc()) {
          // Construct the room link
          $roomCode = $rows['Room_name'];
          echo "
          <tr>
            <td>".$rows['Name']."</td>
            <td>".$rows['Room_name']."</td>
            <td>".$rows['Time_created']."</td>
            <td>
            <form id='lobby__form' data-name='".$rows['Name']."' data-room='".$rows['Room_name']."'>
              <input type='hidden' name='name' value='".$rows['Name']."'>
              <input type='hidden' name='room' value='".$rows['Room_name']."'>
              <button type='submit'>Enter Room</button>
            </form>
          </td>
            <td><a href='delete.php?Room_name=".$rows['Room_name']."'>Delete</a></td>
          </tr>";
      }
      ?>
    </tbody>
  </table>
  <script type="text/javascript" src="js/lobby.js"></script>
  <form action="stream_insert.php" method="POST">
    <div>
      <label>Create Room ID</label>
      <input type="text" name="roomName"> <!-- Corrected input type -->
    </div>
    <button type="submit">Create</button>
  </form>
</body>
</html>
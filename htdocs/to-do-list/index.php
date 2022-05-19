<?php
include 'dbconnect.php';
//check for submit
if(isset($_POST['submit'])){
  $input = mysqli_real_escape_string($conn,$_POST['list_input']);
  //query
  $query = "insert into lists(title) values('$input')";
  if(mysqli_query($conn,$query)){
    header('Location: index.php');
  }else{
    echo "failed";
  }
}
//check for delete
if(isset($_POST['delete'])){
  $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
  //query
  $query = "DELETE FROM lists where id={$delete_id}";
  if(mysqli_query($conn,$query)){
    header('Location: index.php');
  }else{
    echo "failed to delete";
  }
}

//get all list
$query = "select *from lists ORDER BY list_date ASC";
//get result
$result = mysqli_query($conn,$query);
//get all list in array
$lists = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($lists);
//free result
mysqli_free_result($result);
//close conn
mysqli_close($conn);

?>
<?php include 'header.php'?>
    <hr>
    <div class="container">
    <div class="container my-first-container">
      <p class="text-center" style="font-size:25px;">To Do List Web App</p>
      <p class="text-center">Made from PHP and MYSQL</p>
      <?php foreach ($lists as $list) :  ?>
      <ul>
        <li>
          <span class="span-class"><?php echo $list['title'] ?></span><br>
        <small><?php echo "Added on: ".$list['list_date'] ?></small>
        <form class="" action="" method="post">
            <!-- <a href="#">Remove As Done</a> -->
            <input type="hidden" name="delete_id" value="<?php echo $list['id']; ?>">
            <input type="submit" name="delete" value="Remove as Done" class="delete-btn">
        </form>
        </li>
      </ul>
      <?php endforeach; ?>
      <div class="container myContainer">
        <form method="POST" action="">
          <input type="text" name="list_input" placeholder="Enter a new to do list..." class="text-center myInput" required>
          <input type="submit" class="btn btn-info add-btn" value="Add" name="submit">
        </form>
      </div>
  </div>
</div>
<?php include 'footer.php'?>

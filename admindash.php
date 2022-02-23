<?php
session_start();
require("includes/connection.php");
if(isset($_POST['did'])){
  $did = $_POST['did'];
  $sql = "delete from job where id=$did";
  if($con->query($sql)){
    echo "<script>alert('Ad deleted!');</script>";
  }
  else{
    echo "<script>alert('Connot delete the Ad');</script>";
  }
}
if(isset($_POST['rid'])){
    $did = $_POST['rid'];
    $sql = "delete from recruiter where id=$did";
    if($con->query($sql)){
      echo "<script>alert('Recruiter deleted!');</script>";
    }
    else{
      echo "<script>alert('Connot delete the Recruiter');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Online</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php include("includes/lhead.php");?>
    <div class="tab">
    <button class="tablinks" onclick="clickHandle(event, 'Cat')">Ads</button>
    <button class="tablinks" onclick="clickHandle(event, 'Bear')">Recruiters</button>
  </div>

  <div id="Cat" class="tabcontent">
  <h2 style="text-align:center">Ads</h2>
  <div class="adList">
        <table class="rtable">
          <tr>
          <th style="width:50%">Title</th>
          <th style="width:20%">Posted On</th>
          <th style="width:10%">Openings</th>
          <th style="width:20%">Last Date</th>
          <th style="width:20%">Action</th>
          </tr>
            <?php
              $sql = "select * from job";
              if($result=$con->query($sql)){
                while($row=mysqli_fetch_assoc($result)){
                  $title=$row['title'];
                  $lastdate=$row['last_date'];
                  $openings=$row['openings'];
                  $cdate = $row['date'];
                  $id = $row['id'];
                  $dt = new DateTime($lastdate);
                  $lastdate =$dt->format('Y-m-d');
                  echo "<tr>
                    <td>$title</td>
                    <td>$cdate</td>
                    <td>$openings</td>
                    <td>$lastdate</td>
                    <form method='post'>
                    <input type='hidden'value='$id' name='did'>
                    <td><button type='submit'>Delete</button></td>
                    </form>
                  </tr>";
                }
              }
              else{
                echo "Failed : $con->error";
              }







          ?>
        </table>
    </div>
  </div>

  <div id="Bear" class="tabcontent">
    <h2 style="text-align:center">Recruiters</h2>
  <div class="adList">
        <table class="rtable">
          <tr>
          <th style="width:30%">Name</th>
          <th style="width:20%">Email</th>
          <th style="width:30%">Address</th>
          <th style="width:20%">Type</th>
          <th style="width:20%">Action</th>
          </tr>
            <?php
              $sql = "select * from recruiter";
              if($result=$con->query($sql)){
                while($row=mysqli_fetch_assoc($result)){
                  $title=$row['name'];
                  $lastdate=$row['type'];
                  $openings=$row['address'];
                  $cdate = $row['email'];
                  $id = $row['id'];
                  echo "<tr>
                    <td>$title</td>
                    <td>$cdate</td>
                    <td>$openings</td>
                    <td>$lastdate</td>
                    <form method='post'>
                    <input type='hidden'value='$id' name='rid'>
                    <td><button type='submit'>Delete</button></td>
                    </form>
                  </tr>";
                }
              }
              else{
                echo "Failed : $con->error";
              }







          ?>
        </table>
    </div>
  </div>


<script>
function clickHandle(evt, animalName) {
  let i, tabcontent, tablinks;

  // This is to clear the previous clicked content.
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Set the tab to be "active".
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Display the clicked tab and set it to active.
  document.getElementById(animalName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html>
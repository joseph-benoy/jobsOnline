<?php
session_start();
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
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post" action="postadd.php" enctype="multipart/form-data">
        <h2>Post Ad</h2>
        <label>Title</label><br>
        <input type="text" name="title" placeholder="Title" required><br>
        <label>Image</label><br>
        <input type="file" name="image" placeholder="Image" required><br>
        <label>Description</label><br>
        <textarea name='description' cols="80" required>
        </textarea><br>
        <label>Last date</label><br>
        <input type="date" name="date" placeholder="Last date" required><br>
        <label>Openings</label><br>
        <input type="number" name="openings" placeholder="Openings" required> <br>
        <label>URL</label><br>
        <input type="text" name="url" placeholder="Link" required><br>
        <input type="hidden" name="rid" value="<?php echo $_SESSION['uid'];?>">
        <button type="submit">Submit</button>
    </form>

    </div>

    </div>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
        </script>
</body>
</html>
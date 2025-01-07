<!DOCTYPE html> 

<html>

<head>

<style>
 /* Modal Header */
 .modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Modal Body */
.modal-body {padding: 2px 16px;}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@keyframes animatetop {
  from {top: -300px; opacity: 0}
  to {top: 0; opacity: 1}
}

</style>


</head>


<?php
/* ... */
if (file_exists("announcement.on"))

   $announcement = file_get_contents("announcement.contents");

else

   $announcement = "Announcement is OFF";

?>

<body style="mystyle: <?php $announcement ?>;">


<?php 
   echo("$announcement");
?>

<script>alert("<?php echo $announcement ?>"); </script>
<!-- ... -->

<?php
/* ... */
if (file_exists("announcement.on"))
   echo '<td>This is an announcement</td>';
else
   echo '<td>There is no annoucement</td>';
?>

<!-- ... -->

 <!-- Trigger/Open The Modal -->
 <button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div> 


</body>
</html>
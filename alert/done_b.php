<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<script>
swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
}).then(function() {
    window.location = "index.php";
});
</script>
</body>
</html>


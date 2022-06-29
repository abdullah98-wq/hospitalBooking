<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>doctor</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: #056674;">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Shefaa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{url('/')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About us</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">our promis</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="sign2.html">Sign in </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/662.jpeg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <div class="card">
                 <img src="img/avatar5.png" alt="John" style="width:100%">
                    <h1>John Doe</h1>
                      <p class="title">Doctor of Dentist</p>
                        <p>doctor</p>
                       <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>

                       <div id="myDIV" class="header">
                        <h2 style="margin:5px">My To Do List</h2>
                        <input type="text" id="myInput" placeholder="Title...">
                        <span onclick="newElement()" class="addBtn">Add</span>
                       </div>

                       <ul id="myUL" class="checked" >

                       </ul>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5"   style="background: #056674">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>





  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>


</body>

</html>

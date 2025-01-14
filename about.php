<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<nav class ='container  mx-5 m-3' aria-label="breadcrumb ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
  <hr>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
        <div class='m-5' >
        <h3>#ShineKenya</h3>
        <p>Our mission is to provide quality education and empower young people to become leaders in their communities. We strive to create a brighter future for our children through education, health, and well-being.</p>

        <button class="btn btn rounded" style='background-color:rgb(44,179,74);'>Learn More</button>
        </div>

    </div>
    <div class="col m-0">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XC3JNw44Ljo?si=C1hX654wUgdxtSnH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </div>

  <div class="container">

  </div>


<style>
.item1 { grid-area: sidebar; }
.item2 { grid-area: topside; }
.item3 { grid-area: bottomside; }


.grid-container {
  display: grid;
  grid-template-areas:
    'sidebar topside '
    'sidebar  bottomside'
    'sidebar bottomside ';
  /* gap: 5px; */
  /* background-color:rgb(187, 198, 207); */
  /* padding: 10px; */
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  /* padding: 20px 0;
  font-size: 30px; */
}
</style>



<div class="grid-container">
  <div class="item1">
  <div class="card" style="width:400px">
  <img class="card-img-top" src="https://i.pinimg.com/736x/32/13/45/321345b660aa40c5b0b63e9a5b14f7c2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
  <div class="item2">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://i.pinimg.com/736x/32/13/45/321345b660aa40c5b0b63e9a5b14f7c2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="item3">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://i.pinimg.com/736x/32/13/45/321345b660aa40c5b0b63e9a5b14f7c2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
  </div>  

</div>























<?php include 'footer.php' ?>
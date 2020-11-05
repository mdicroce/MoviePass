<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top" >
     <button class="btn btn-dark " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <span class="lead">Search </span> <i class="fas fa-angle-down"></i>
     </button>

     <ul class="nav justify-content-center">
          <span class="navbar-text">
               <h4>Welcome <strong> <?php 
               if (isset($_SESSION['name'])) { echo $_SESSION['name'];} ?> </strong> </h4>
          </span>
     </ul>

     <ul class="navbar-nav ml-auto"> 
          <li class="nav-item">
               <a class="nav-link" href=" <?php echo FRONT_ROOT ?>Cinema/showCinemasList">Cinemas</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href=" <?php echo FRONT_ROOT ?>Projection/showProjectionsList">Projections list</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href=" <?php echo FRONT_ROOT ?>User/logIn">LogIn</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href=" <?php echo FRONT_ROOT ?>User/signIn">SignIn</a>
          </li>
     </ul>
</nav>
<ul class="collapse nav nav-pills flex-column bg-dark w-25 fixed-top " id="collapseExample" style="margin-top:5%;">
     <li class="nav-item">
          <a href="" class="nav-link btn-dark">example 1</a>
     </li>
     <li class="nav-item">
          <a href="" class="nav-link btn-dark">example 1</a>
     </li>
     <li class="nav-item">
          <a href="" class="nav-link btn-dark">example 1</a>
     </li>
     <li class="nav-item">
          <a href="" class="nav-link btn-dark">example 1</a>
     </li>
     <li class="nav-item">
          <div class="input-group-append d-flex ">
               <input type="text" class="form-control w-75 form-control-white d-inline bg-dark ml-1 text-light" style="borderline" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-dark w25 d-inline" type="button" id="button-addon2">Button</button>
          </div>
     </li>
</ul>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,800;1,300;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- jquery -->
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="./assets/libraries/DataTables/datatables.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="header-container">
      <header class="container blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="link-secondary logo-link" href="#">
              <img src="./assets/images/logo.png" alt="">
            </a>
          </div>
          <div class="col-8 d-flex justify-content-end align-items-center">
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Administrator</span>
                <img src="./assets/images/profil_placeholder.jpeg" alt="mdo" width="32" height="32" class="rounded-circle"> 
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="menu-container">
      <div class="container nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-end">
          <a class="p-2 link-secondary active" href="#">World</a>
          <a class="p-2 link-secondary" href="#">U.S.</a>
          <a class="p-2 link-secondary" href="#">Technology</a>
          <a class="p-2 link-secondary" href="#">Design</a>
          <a class="p-2 link-secondary" href="#">Culture</a>
          <a class="p-2 link-secondary" href="#">Business</a>
          <a class="p-2 link-secondary" href="#">Politics</a>
          <a class="p-2 link-secondary" href="#">Opinion</a>
          <a class="p-2 link-secondary" href="#">Science</a>
          <a class="p-2 link-secondary" href="#">Health</a>
          <a class="p-2 link-secondary" href="#">Style</a>
          <a class="p-2 link-secondary" href="#">Travel</a>
        </nav>
      </div>
    </div>
    <main class="container main-container">
      <div class="row">
        <div id="sidebars-container" class="col-2 mx-0 pt-3">
          <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-5 fw-semibold">&nbsp;</span>
          </a>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="align-items-center btn btn-toggle collapsed px-0 rounded text-lg-start w-100" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Home
              </button>
              <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li class="py-2 px-3"><a href="#" class="rounded">Overview</a></li>
                  <li class="py-2 px-3"><a href="#" class="rounded">Updates</a></li>
                  <li class="py-2 px-3"><a href="#" class="rounded">Reports</a></li>
                </ul>
              </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
              <a href="#">No collapsable link</a>
            </li>
            <li class="border-top my-3"></li>
          </ul>
        </div>
        <div class="container body-container col-9 mx-0 px-4">
          <h1>The page's title</h1>
          <div class="container">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
          </div>
          <div class="m-3"></div>
          <div class="container">
            <div class="alert alert-primary" role="alert">
              A simple primary alert???check it out!
            </div>
            <div class="alert alert-secondary" role="alert">
              A simple secondary alert???check it out!
            </div>
            <div class="alert alert-success" role="alert">
              A simple success alert???check it out!
            </div>
            <div class="alert alert-danger" role="alert">
              A simple danger alert???check it out!
            </div>
            <div class="alert alert-warning" role="alert">
              A simple warning alert???check it out!
            </div>
            <div class="alert alert-info" role="alert">
              A simple info alert???check it out!
            </div>
            <div class="alert alert-light" role="alert">
              A simple light alert???check it out!
            </div>
            <div class="alert alert-dark" role="alert">
              A simple dark alert???check it out!
            </div>
          </div>
          <div class="mt-3">
            <table id="table_id" class="display table table-striped">
                <thead>
                    <tr> <th>Column 1</th> <th>Column 2</th> </tr>
                </thead>
                <tbody>
                    <tr> <td>Row 1 Data 1</td> <td>Row 1 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                    <tr> <td>Row 2 Data 1</td> <td>Row 2 Data 2</td> </tr>
                </tbody>
            </table>
          </div>
          <div class="container mt-3"><hr></div>
          <div class="container mt-3">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleName" class="form-label">Name</label>
                <input type="nam" class="form-control" id="exampleName">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">?? 2021 webamadou.co</p>
      </footer>
    </div>  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="./assets/libraries/DataTables/datatables.js"></script>
    <script src="./assets/js/scripts.js"></script>
  </body>
</html>
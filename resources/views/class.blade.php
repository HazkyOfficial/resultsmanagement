<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/propper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <title>Class Page</title>
</head>
<body>
    <!-- Navigation Part -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Resulsect</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/results">Results</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/student">Student</a></li>
                  <li><a class="dropdown-item active" aria-current="page" href="/class">Class</a></li>
                  <li><a class="dropdown-item" href="/teacher">Teacher</a></li>
                  <li><a class="dropdown-item" href="/subject">Subject</a></li>
                  <li><a class="dropdown-item" href="/result">Result</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/admin">Admin</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <span class="navbar-text">
                Welcome to Resulsect.
            </span>
          </div>
        </div>
      </nav>

    <!-- Model part -->
    <!-- Add Modal -->
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Class</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <form action="/addclass" method="post">
                @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Class Name:</label>
                      <input type="text" class="form-control" id="" name="CName" placeholder="Enter class name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Type:</label>
                        <select class="form-select form-select mb-3" name="CType">
                            <option selected>(select one option)</option>
                            <option value="GCE-A/L">GCE Advanced Level</option>
                            <option value="GCE-O/L">GCE Ordinary Level</option>
                            <option value="SecondaryLevel">Secondary Level</option>
                            <option value="PrimaryLevel">Primary Level</option>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Year:</label>
                        <input type="text" class="form-control" id="" name="CYear" placeholder="Enter class year">
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Teacher Name:</label>
                        <input type="text" class="form-control" id="" name="CTName" placeholder="Enter class teacher name">
                    </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div> 
                </form>    
        </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Class Name:</label>
                      <input type="text" class="form-control" id="" value="CName" placeholder="Enter class name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Type:</label>
                        <select class="form-select form-select mb-3">
                            <option selected>(select one option)</option>
                            <option value="GCE-A/L">GCE Advanced Level</option>
                            <option value="GCE-O/L">GCE Ordinary Level</option>
                            <option value="SecondaryLevel">Secondary Level</option>
                            <option value="PrimaryLevel">Primary Level</option>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Year:</label>
                        <input type="text" class="form-control" id="" value="CYear" placeholder="Enter class name">
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Class Teacher Name:</label>
                        <input type="text" class="form-control" id="" type="CTName" placeholder="Enter class teacher name">
                    </div>  
                </form>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Table Part -->
    <div class="card">
        <p class="card-header"><b> Menu / Class</b></p>
    </div>
    <br>
      <div class="container">
          <div class="jumbotrom">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">All class details..</h5>
                  
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">Add</button>
                        </div>
                    </div>
                    <br>
                  <!-- table -->
                  <table class="table table-dark table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Class ID</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Class Type</th>
                        <th scope="col">Class Year</th>
                        <th scope="col">Class Teacher</th>
                        <th style="width:  12%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                            
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
      </div>

</body>
</html>

<!DOCTYPE html>
    <head>
        <title>Event registration</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

       <style>
           .navbar{
               margin-top: -30px;
           }
           .jumbotron{
               height: 100px;
               padding-top: 20px;
            }
            .c1{
                border: 1px solid rgba(0, 0, 0, 0.219);
                padding: 20px;
                margin-top: 50px;
                border-radius: 5px;
            }
            .c1:hover{
                box-shadow: 0px 0px 10px 0.5px lightblue;
            }

            #demo1{
                margin-top: 50px;
            }
            .carousel-inner img {
                width: 100%;
                height: 100%;
            }
            #home{
                width: 100%;
                margin: 0px auto;
                margin-top: 10px;
            }
            .i1{
                position: relative;
                bottom: -20px;
                left: 0px;
                width: 100%;
                background-color: rgba(128, 128, 128, 0.205);
                color: black;
                text-align: center;
                }
                .footer1{
                position: relative;
                left: 0;
                bottom: 0px;
                width: 100%;
                background-color: rgba(128, 128, 128, 0.205);
                color: black;
                text-align: center;
                }
                
                
       </style>
    </head>


    <body>
        <div class="jumbotron text-center" style="background-color: red; color: white;"><h1 style="margin-bottom: 20px;">Doodle</h1></div>
       
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="nav navbar-nav nav-pills" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#" onclick="initial()">Home</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#" onclick="initial1()">Register Form</a></li>
                <li class="nav-item"><a class="nav-link" id="ii2" data-toggle="pill" href="#" onclick="initial2()">Registrant list</a></li>
              </ul>
            </div>  
          </nav>
       
        
        <div id="home">
             <div class="well well-lg">
            <p>
                <h4>Doodle is an online website for all the students to learn coding from basics. It has been seen that always students with good marks are appreciated irrespective of their practical knowledge. So, not letting this thing happen to everyone, Doodle is here with all the required concepts from standard 5th to 12th. We include every subject in our syllabus and its gonna be totally free for low previlaged students.</h4>
            </p>
            <p>
                
            </p>
        </div>

        <div class="well well-lg">
 
        <h4>
            <p>Doodle has come up with an amzing opportunity for all the learners out there to test their knowledge. Doodle will be conducting a online competiton. The exam will be of a duration of 3 hours.</p>
            <p>15 questions will be given. 
                <br> There is no barrier on scheduled timing. You can attempt the quiz at our preffered time.
            </p>
            <p>3 winners will be selected and will be given prizes as follows :<br>
                <ul>
                    <li>1st Position : 100% off on courses </li>
                    <li>2nd Position : 70% off on courses </li>
                    <li>3rd Position : 50% off on courses </li>
                </ul>
            </p>
        </h4>            

        </div>
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="1.jpg" alt="Los Angeles" width="50%" height="50%">
                  </div>
                  <div class="carousel-item">
                    <img src="2.jpg" alt="Chicago" width="50%" height="50%">
                  </div>
                  <div class="carousel-item">
                    <img src="3.jpg" alt="New York" width="50%" height="50%">
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            
            </div>
        <div id="register_form">
            
            <div class="container" style="margin-left: 30%;">
                
                <div class="col-lg-6 m-auto d-block" style="background-color: lightblue;">
                    <div class="c1">
                        <div class="text-success" id="temp"></div>
                        <div class="text-danger" id="temp1"></div>
                        <form id="form_register">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="Enter first name" id="i1" required>                      
                                <span id="alt1" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Enter last name" id="i2" required>                   
                                <span id="alt2" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter email" id="i3" required>
                                <span id="alt3" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <!-- <div class="form-check-inline"> -->
                                     <input type="radio" name="gender" id="i4" value="M">Male
                                <!-- </div>
                                <div class="form-check-inline"> -->
                                    <input type="radio" name="gender" id="i4" value="F">Female
                                <!-- </div> -->
                                <span id="alt4" class="text-danger font-weight-bold"> </span>  
                            </div>
                            <div class="form-group">
                                <label for="demo_overview">Select City</label>
                                <select class="form-control" data-role="select-dropdown" id="i5" data-profile="minimal" required>
                                    <option value="Pune">Pune</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Delhi">Delhi</option>
                                 </select>
                                 <span id="alt5" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Enter Mobile Number" id="i6" required>
                                <span id="alt6" class="text-danger font-weight-bold"> </span>
                            </div>             
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" id="i7" required>All the above information is true.
                                    </label>
                                  </div>
                                  <span id="alt7" class="text-danger font-weight-bold"> </span>
                            </div>
                            <input type="button" onclick="return initial3()" class="btn btn-primary" value="Submit">
                            
                            
                        </form>
                        
                    </div>
                    
                </div>
                
                
                   
            </div>
            <div>
                <div class="i1">
                    <p>Contact Us : 8975919061</p>
                        Email:
                        <a href="mailto:jnrawlani@mitaoe.ac.in">jnrawlani@mitaoe.ac.in</a></p>
                    </div>
              </div>
            </div>
                
                    
        </div>
        
        <div id="registrant_list">
            
            <div class="container-fluid">
                <div class="table-responsive">
                    <div id="demo1"></div>
                </div>
            
            </div>
        </div>
    </div>
        
        <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
    
    </body>
</html>

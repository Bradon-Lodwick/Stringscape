<!DOCTYPE html>
<!-- saved from url=(0034)http://localhost/lab1/sign-up.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Tech Blog</title>

  <!-- Bootstrap Stylesheets-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/formValidation.min.css" rel="stylesheet">
  <link href="css/morris.css" rel="stylesheet">

  <!-- custom stylesheet -->
  <link href="css/custom-stylesheet.css" rel="stylesheet">
</head>

<body>
  <!-- main navigation for the site -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">StringScape</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li>
            <a href="articles.html" class="dropdown-toggle" data-toggle="dropdown">Articles<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="hardware.html?submit=Display+Articles#">Hardware</a></li>
              <li><a href="programming.html?submit=Display+Articles#">Programming</a></li>
              <li><a href="gaming.html?submit=Display+Articles#">Gaming</a></li>
              <li><a href="hot-topics.html?submit=Display+Articles#">Hot Topics</a></li>
            </ul>
          </li>
          <li><a href="submit-article.html">Submit An Article</a></li>
          <li><a href="sign-up.php">Register</a></li>
          <li><a href="Graphs.html">Scapetistics</a></li>
          <li><a href="load.php">Load UserData</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div id="main-container" class="container">
    <div class="row" style="margin-top:50px;">
      <div class="col-md-12">

        <!-- start of sign-up form -->
        <form class="form-horizontal" id="sign-in" method="post" action="save.php">
          <!-- username -->
          <div class="form-group">
            <label for="username" class="col-sm-2">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
            </div>
          </div>
          <!-- name -->
          <div class="form-group">
            <label for="name" class="col-sm-2">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
          </div>
          <!-- email -->
          <div class="form-group">
            <label for="email" class="col-sm-2">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <!-- password -->
          <div class="form-group">
            <label for="password" class="col-sm-2">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>
          <!-- profession -->
          <div class="form-group">
            <label for="profession" class="col-sm-2">Profession</label>
            <div class="col-sm-10">
              <select class="form-control" id="profession" name="profession">
                <option>Student</option>
                <option>Teacher</option>
                <option>Programmer</option>
                <option>Engineer</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <!-- sex -->
          <div class="form-group">
            <label for="sex" class="col-sm-2">Sex</label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <input type="radio" name="sex" id="inlineRadio1" value="Male"> Male
              </label>
              <label class="radio-inline">
                <input type="radio" name="sex" id="inlineRadio2" value="Female"> Female
              </label>
              <label class="radio-inline">
                <input type="radio" name="sex" id="inlineRadio3" value="Other"> Rather not say
              </label>
            </div>
          </div>
          <!-- how you heard about us -->
          <div class="form-group">
            <label for="howYouHeard" class="col-sm-2">How You Heard About Us</label>
            <div class="col-sm-10">
              <div class="checkbox-inline">
                <label>
                  <input type="checkbox" name="howYouHeard" value="0">
                  Online
                </label>
              </div>
              <div class="checkbox-inline">
                <label>
                  <input type="checkbox" name="howYouHeard" value="1">
                  Word of Mouth
                </label>
              </div>
            </div>
          </div>
          <!-- bio -->
          <div class="form-group">
            <label for="bio" class="col-sm-2">Bio</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
            </div>
          </div>
          <!-- remember me -->
          <div class="form-group">
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
          <!-- submit button -->
          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-default">Sign Up</button>
            </div>
          </div>
        </form>
        <!-- end of sign-up form -->

      </div>
    </div>
  </div>
  <!--end of main container-->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>

<script>
$(document).ready(function() {
    $('#sign-in').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Your name is required'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'Your username is required'
                    },
                    stringLength: {
                      min: 6,
                      max: 20,
                      message: 'Your username must be between 6 and 20 characters long'
                    }
                }
            },
            email: {
              validators: {
                notEmpty: {
                  message: 'An email address is required'
                },
                emailAddress: {
                  message: 'Please enter a valid email address'
                }
              }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Password must be atleast 6 characters long'
                    }
                }
            },
            bio: {
                validators: {
                    notEmpty: {
                        message: 'Please tell us about yourself!'
                    }
                }
            },
            profession: {
                validators: {
                    notEmpty: {
                        message: 'We need to know your profession!'
                    }
                }
            },
            sex: {
                validators: {
                    notEmpty: {
                        message: 'Please select your gender, or specify that you would rather not'
                    }
                }
            },
            howYouHeard: {
                validators: {
                    notEmpty: {
                        message: 'Please tell us how you heard about us'
                    }
                }
            }
        }
    });
});
</script>

</body></html>

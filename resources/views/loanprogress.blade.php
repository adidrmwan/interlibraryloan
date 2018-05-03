<!DOCTYPE html>
<html>
  <head>
    <title>Inter Library Loan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="user/css/styles.css" rel="stylesheet">
    <link href="user/css/kalender.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">INTER LIBRARY LOAN</a></h1>
	              </div>
	           </div>

	           <div class="col-md-2" style="float: right;">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	     

	</div>
	<div class="header">
	 <div class="container">
	     	<div class="row">
	     		<div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
	                    <ul class="nav navbar-nav">
	        				<li><a href="userlibrary"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
	        				<li><a href="koleksi"> Collection </a> </li>
  		                    <li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Loan <b class="caret"></b>
	                        	</a>
		                        <ul class="dropdown-menu animated fadeInUp">
		                          <li><a href="loanprogress">On progress</a></li>
		                          <li><a href="loanhistory">Loan History</a></li>
		                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	     	</div>
	     </div>
     </div>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">

		  	<div class="sidebar content-box" style="display: block;">
            <h4 style="text-align: center;">CATEGORIES</h4>	
        	    <ul class="nav">
                    <!-- Main menu -->
                    <li class="submenu">
                         <a href="#">
                             Categories
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
       				</li>
       				<li class="submenu">
                         <a href="#">
                             Categories
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
       				</li>
       				<li class="submenu">
                         <a href="#">
                             Categories
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
       				</li>
                    <li class="submenu">
                         <a href="#">
                             Categories
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-8">
		  			<div class="content-box-large">
		  				<div class="panel-heading" style="margin: 0 auto;">
							<div class="panel-title" style="float: right">
								<h3>LOAN LIST</h3>
							</div>
						</div>
		  				<div class="panel-body">		  					
				 	 		<div class="col-md-12">
		  						<div class="row">
		  							
  					<div class="content-box-large">
		  				<div class="panel-body">
		  					<table class="table table-hover">
				              <thead>
				                <tr>
				                  <th>No</th>
				                  <th>NRP</th>
				                  <th>Name</th>
				                  <th>Book ID</th>
				                  <th>Book Name</th>
				                  <th>Library</th>
				                  <th>Loan Date</th>
				                  <th>Expired Date</th>
				                  <th>Action</th>
				                  
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>1</td>
				                  <td>5115100079</td>
				                  <td>Adi</td>
				                  <td>b001</td>				                  
				                  <td>Love</td>
				                  <td>RBTC</td>
				                  <td>2 Februari 2018</td>
				                  <td>9 Februari 2018</td>
				                  <td><button class="btn btn-primary btn-xs"> <a href="loanrequser" style="color: #fff; text-decoration: none;"> Extend</a> </button></td>
				                  
				                </tr>
				                <tr>
				                  <td>2</td>
				                  <td>5115100162</td>
				                  <td>Otto</td>
				                  <td>b002</td>				                  
				                  <td>My heart</td>
				                  <td>RBTC</td>
				                  <td>3 Februari 2018</td>
				                  <td>10 Februari 2018</td>
				                  
				                  <td><button class="btn btn-primary btn-xs"><a href="loanrequser" style="color: #fff; text-decoration: none;"> Extend</a></button></td>
				                </tr>
				                <tr>
				                  <td>3</td>
				                  <td>5115100709</td>
				                  <td>Febri</td>
				                  <td>b003</td>				                  
				                  <td>Dia</td>
				                  <td>RBTC</td>
				                  <td>12 Februari 2018</td>
				                  <td>19 Februari 2018</td>
				                  
				                  <td><button class="btn btn-primary btn-xs"><a href="loanrequser" style="color: #fff; text-decoration: none;"> Extend</a></button></td>
				                </tr>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
 
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-4">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Calendar</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<div class="calendar-wrapper">
								  <button id="btnPrev" type="button">Prev</button>
									  <button id="btnNext" type="button">Next</button>
								  <div id="divCal"></div>
								</div>
							</div>
		  				</div>
		  			</div>
		  	</div>

		  	</div>
		  </div>
		</div>
		  </div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--     <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script> -->
    <script src="user/bootstrap/js/bootstrap.min.js"></script>
    <script src="user/js/custom.js"></script>
    <script src="user/js/kalender.js"></script>
  </body>
</html>
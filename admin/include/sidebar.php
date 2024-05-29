     <style>
		i{
			color:indigo;
		}
		
	 </style>

<?php
    // Place session_start() at the beginning of the file
    session_start();

     // Check if the email session variable is set
     if (isset($_SESSION['email'])) {
        // Email session variable is set, proceed with further operations
        $email = $_SESSION['email'];

    // Replace placeholders with your actual database credentials
    $host = "localhost";
    $username = "root";
    $password = ",";
    $database = "real_estate";

    // Establish database connection
    $con=mysqli_connect('localhost','root','','real_estate');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

   // Perform your database operations here
        $query = mysqli_query($con, "SELECT * FROM admin WHERE email='$email'");
        $res1 = mysqli_fetch_array($query);
        
        // Check if $res1['name'] is set before assigning it to $name
        $name = isset($res1['name']) ? $res1['name'] : '';
} else {
    // Email session variable is not set, handle the error or redirect the user
    echo "Email session variable is not set.";
    // You might want to redirect the user to a login page or display an error message
}
?>



		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/hillary.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <!-- <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name;?></div> -->
                    <?php
// Define the $email variable
$email = "admin@gmail.com";
?>

<!-- Use the $email variable within your HTML -->
<div class="email"><?php echo $email;?></div>

                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="dashboard.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="add_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property</span>
                        </a>
                    </li>

                     <li>
                        <a href="view_property_image.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property Images</span>
                        </a>
                    </li>


                    <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View Property</span>
                        </a>
                    </li>
									                    
                    
                    
                    
                   
                           
                        </ul>
                    </li>
             
                </ul>
            </div>
            <!-- #Menu -->
            
			<!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2024 <a href="javascript:void(0);">Belhil Properties</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
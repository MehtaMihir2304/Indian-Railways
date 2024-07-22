<?php
session_start();
$conn = mysqli_connect("localhost","root","","rj");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$from_station=$_POST['from_station'];
$To_Station=$_POST['To_Station'];
$pickup_date=$_POST['pickup_date'];
$All_Classes=$_POST['All_Classes'];
$sql = "INSERT INTO data (From Station,To Station,Departure Date,All Classes) VALUES ('$from_station', '$pickup_date', '$All_Classes');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Train Ticket Booking Online</title>
 <meta name="google-site-verification" content="7pFAJVujgxOJHjLsyFJaAUQpvne_KvU9QqTdDKY-OXo" />
    <script src="https://images.railyatri.in/assets/cabs_desktop-f7bfa2335f8453bfc8645cc49732ca7f81179e74a5f8257222fda0eba609a014.js.gz"></script>
<div id="train-tickt-bkng-desktp">
  </div>

  <style type="text/css">
  #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 110%;
  min-height: 110%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding:10px;
}
   messages: {
      boarding_from: "Please enter from station name",
      boarding_to: "Please enter to station name",
    }
</style>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="6.mp4" type="video/mp4">
</video>
<div class="content">
<?php include("h1.php") ?>
             <center> <h1 class="text-center font-xl" style="font-size: 50px;">Train Ticket Booking</h1></center>
   		                <center>  <label class="from-for" for="boarding_from">From Station</label>
				
				<option>from station</option>
				<select id="trains" name="from_station" required>
				<option value="Ahmedabad">Ahmedabad Junction  ADI</option>
				<option value="Ahmedabad">Ahraura Road	ARW</option>
				<option value="Ahmedabad">Aishbagh	ASH</option>
				<option value="Ahmedabad">Bharuch</option>
				<option value="Ahmedabad">Banaswadi</option>
				<option value="Ahmedabad">Bariarpur</option>
				<option value="Ahmedabad">Bhadaura</option>
				<option value="Ahmedabad">Borvihir</option>
				<option value="Ahmedabad">Cannanore South</option>
				<option value="Ahmedabad">Castle Rock</option>
				<option value="Ahmedabad">Chalisgaon Junction</option>
				<option value="Ahmedabad">Champaner Rd Junction</option>
				<option value="Ahmedabad">Chaprakata</option>
				<option value="Ahmedabad"> Howrah Junction</option>
				<option value="Ahmedabad">Sealdah</option>
				<option value="Ahmedabad">Chhatrapati Shivaji Terminus</option>
				<option value="Ahmedabad">Chennai Central </option>
				<option value="Ahmedabad"> New Delhi</option>
				<option value="Ahmedabad">Kharagpur Junction</option>
				<option value="Ahmedabad">Kanpur Central</option>
				<option value="Ahmedabad">Allahabad Junction</option>
				<option value="Ahmedabad">Patna Junction</option>
				<option value="Ahmedabad">Bangalore City</option>
				<option value="Ahmedabad"> Lucknow Charbagh</option>
				<option value="Ahmedabad">Nagpur Junction</option>
				<option value="Ahmedabad">Vaitarna</option>
				<option value="Ahmedabad">Vadod</option>
				<option value="Ahmedabad">Valathoor</option>
				<option value="Ahmedabad">Vapi</option>
				<option value="Ahmedabad">Vaniyambadi</option>
				<option value="Ahmedabad">Wadi</option>
				<option value="Ahmedabad">Wadsa</option>
				<option value="Ahmedabad">Warangal</option>
				<option value="Ahmedabad">Whitefield</option>
				<option value="Ahmedabad">Srikakulam Road</option>
				<option value="Ahmedabad">Yelhanka Junction</option>
				<option value="Ahmedabad">Zamania</option>
				<option value="Ahmedabad">Zafarabad Junction</option>
				<option value="Ahmedabad">Tiruppur</option>
				</select>
                      <span class="from-error"></span>
                       </center><br/>
                     <center>
                  <div class="interchange-name">
                    <img alt="Inter Change" width="35px" height="35px" class="interchange-city text-center marg-top-10" style="" src="32.png" />
                  </div><br/>
                  <div class="to-detail"></div>
                    <div class="ry-floating-input focus-input"></div>
                     </center>
                      <center>
					  
                      <label class="to-for" for="boarding_to">To Station</label>
					
				<option>To Station</option>
				 <select id="trains" name="To_Station" required>
					 	<option value="Ahmedabad">Ahmedabad Junction  ADI</option>
				<option value="Ahmedabad">Ahraura Road	ARW</option>
				<option value="Ahmedabad">Aishbagh	ASH</option>
				<option value="Ahmedabad">Bharuch</option>
				<option value="Ahmedabad">Banaswadi</option>
				<option value="Ahmedabad">Bariarpur</option>
				<option value="Ahmedabad">Bhadaura</option>
				<option value="Ahmedabad">Borvihir</option>
				<option value="Ahmedabad">Cannanore South</option>
				<option value="Ahmedabad">Castle Rock</option>
				<option value="Ahmedabad">Chalisgaon Junction</option>
				<option value="Ahmedabad">Champaner Rd Junction</option>
				<option value="Ahmedabad">Chaprakata</option>
				<option value="Ahmedabad"> Howrah Junction</option>
				<option value="Ahmedabad">Sealdah</option>
				<option value="Ahmedabad">Chhatrapati Shivaji Terminus</option>
				<option value="Ahmedabad">Chennai Central </option>
				<option value="Ahmedabad"> New Delhi</option>
				<option value="Ahmedabad">Kharagpur Junction</option>
				<option value="Ahmedabad">Kanpur Central</option>
				<option value="Ahmedabad"> Allahabad Junction</option>
				<option value="Ahmedabad">Patna Junction</option>
				<option value="Ahmedabad">Bangalore City</option>
				<option value="Ahmedabad"> Lucknow Charbagh</option>
				<option value="Ahmedabad">Nagpur Junction</option>
				<option value="Ahmedabad">Vaitarna</option>
				<option value="Ahmedabad">Vadod</option>
				<option value="Ahmedabad">Valathoor</option>
				<option value="Ahmedabad">Vapi</option>
				<option value="Ahmedabad">Vaniyambadi</option>
				<option value="Ahmedabad">Wadi</option>
				<option value="Ahmedabad">Wadsa</option>
				<option value="Ahmedabad">Warangal</option>
				<option value="Ahmedabad">Whitefield</option>
				<option value="Ahmedabad">Srikakulam Road</option>
				<option value="Ahmedabad">Yelhanka Junction</option>
				<option value="Ahmedabad">Zamania</option>
				<option value="Ahmedabad">Zafarabad Junction</option>
				<option value="Ahmedabad">Tiruppur</option>
				</select>
                      <span class="to-error"></span>
                      
                      <span class="field-divider-2"></span>
                    
                    <span class="clear-field to-city-empty" style="display: none;"> &times; </span>
                 </center><br/><br/>
				  <center>
				  
 <form method="POST">
       <div>
	   <label for="date">Departure Date</label>
            <input type = 'date'  name='pickup_date' required>
       </form>

    <script>
                var time = new Date();
                var localTimeStr = time.toLocaleString('en-US', { timeZone: 'Asia/Shanghai' });
                today = new Date(localTimeStr)
                tomorrow = new Date(today.setDate(today.getDate() + 1)).toISOString().split('T')[0];
                t = String(tomorrow)
                document.getElementsByName("pickup_date")[0].setAttribute('min', t);
    
	
				</script>
				<br/><br/><br/>
			  <align="center" id="journeytext">All Classes<br/><br/>
			  <select id="trains" name="All_Classes" required>
			  <option selected disabled>------------------All Classes---------------------</option>
			  <option value="rajdhani" >Anubhuti Class (EA)</option>
			<option value="duronto" >AC First Class (1A)</option>
			<option value="geetanjali">Vistadome AC (EV)</option>
			<option value="garibrath" >AC 2 Tier (2A)</option>
			<option value="mysoreexp" >First Class (FC)</option>
		<option value="mysoreexp" >Sleeper (SL)</option>
		<option value="mysoreexp" >Second Sitting (2S)</option>
			
		</select><br/><br/><br/><br/>
		<FORM action="2.php">
                <button class="detail-submit" type="submit" class="btn" id="tt_search_dweb">Search Trains</button>
             </form> </div> 
              </center> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

          </body>
		  </html>

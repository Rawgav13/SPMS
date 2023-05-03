<!DOCTYPE html>
<html>
<head>
	<title>ADMIN_Student Project Management System Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
	<script src="CompApp.js"></script>
</head>
<body>
	<div class="container">
		<h1>Student Project Management System</h1>
   		<div class="dashboard" >
			<div class="buttons">
				<div class="dropdown">
				  <button class="dropbtn">Courses</button>
				  <div class="dropdown-content">
				    <a href="https://docs.google.com/spreadsheets/d/1WeQksjs6DbcQTp2v0kkoHrHNsHLZRqdNrEbHNcpPdf4/edit#gid=0">BCA</a>
				    <a href="https://docs.google.com/spreadsheets/d/1WeQksjs6DbcQTp2v0kkoHrHNsHLZRqdNrEbHNcpPdf4/edit#gid=834596828">MCA</a>
				  </div>
				</div>
        <div class="dropdown">
				  <button class="dropbtn">Reviews</button>
				  <div class="dropdown-content">
				    <a href="Team 1.html">Team-1</a>
				    <a href="Team 2.html">Team-2</a>
				  </div>
				</div>
       
		<button onclick="openReactFile()">Compiler</button>
		
		<script>
    function openReactFile() {
      // Call the React component that you want to render
      ReactDOM.render(
        <CompApp.js />,
        document.getElementById('root')
      );
    }
  </script>
				<div class="dropdown">
        <button class="dropbtn" onclick="window.open('https://docs.google.com/spreadsheets/d/1BHnQVKITZhzdjCgccV9fbskkl4vV6FFakD8MFXQOdaA/edit#gid=1175100931')">Grading</button>
	    <div class="dropdown-content">
				    <a href="https://docs.google.com/spreadsheets/d/1BHnQVKITZhzdjCgccV9fbskkl4vV6FFakD8MFXQOdaA/edit#gid=1175100931">Team-1</a>
				    <a href="https://docs.google.com/spreadsheets/d/1P6lFY1uyzZQ_o2VPNzOIXwTsHbGImbAcZ56wCqDaM2E/edit#gid=644301643">Team-2</a>
				  </div>
				</div>	<button onclick="window.open('http://localhost:3000/index.php')">Logout</button>
				<div class="box">
					<h3>Important Guidelines </h3>
						<li>The Project activity is scheduled to begin on May 1st, 2023 and will continue for a total of 12 weeks, ending on July 24th, 2023.</li>
						<li>Please ensure that the timeline of activities is consistently and accurately maintained. </li>
						<li>Conduct weekly reviews and the monthly reviews at the given date.</li>
						<li>Ensure that all students are graded based on their individual performance.</li>
						

				
				</div>
				
	</div>
	<div class="marquee-container">
					<div class="marquee">Welcome to Admin Portal!</div>
				</div>
	<a href="chatbot.html">
		<div class="chatbot-icon">
			<img src="chatbot.jpg" alt="Chatbot Icon">
		  </div>
	</a>
	
	</div>
</body>
</html>


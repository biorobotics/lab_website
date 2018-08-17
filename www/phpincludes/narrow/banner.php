<?php $section = basename(dirname($_SERVER['PHP_SELF']));?>
</head>
<body>
<div class="container">
<div class='row'>
	<h1 class='logo'>
		<a href='/index.php'>Biorobotics Laboratory</a>
		<img src='/images/RI.svg' alt="RI Logo">
	</h1>
</div>
<div class='row'>
	<nav role='navigation' class = 'nav-menu'>
		<!-- Fix iOS -->
		<input type="checkbox" id="button" />
		<label for="button" onclick></label>
		<ul class="menu">
			<li>
				<a href='/robots/index.php'<?php if ($section=="robots") 
				echo " class=\"active\""; ?>>Robots</a>
			</li>
			<li>
				<a href='/research/index.php'<?php if ($section=="research") 
				echo " class=\"active\""; ?>>Research</a>
			</li>
			<li>
				<a href='/applications/index.php'<?php if ($section=="applications") 
				echo " class=\"active\""; ?>>Applications</a>
			</li>
			<li>
				<a href='/education/index.php'<?php if ($section=="education") 
				echo " class=\"active\""; ?>>Education</a>
			</li>			
			<li>
				<a href='/media/index.php'<?php if ($section=="media") 
				echo " class=\"active\""; ?>>Pictures & Video</a>
			</li>
			<li>
				<a href='/papers/index.php'<?php if ($section=="papers") 
				echo " class=\"active\""; ?>>Publications</a>
			</li>
		</ul>
	</nav>
</div>
<div class='content'>

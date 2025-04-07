<?php include("header.php"); ?>	
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<?php include("menu.php"); ?>

<div id="top"></div>

<main>

<section class="steam gradient">
	<div class="container">
		<h1 class="title title_sm">Put money on your <br> <span>Steam Wallet</span></h1>
		<form class="form">
			<div class="form-group">
				<label class="form__label" for="username">Steam Wallet/Account</label>
				<input type="text" id="username" class="input input--error">
			</div>
			<div class="form-group">
				<label class="form__label" for="number">Payment amount</label>
				<input type="number" id="number" class="input input--success" placeholder="100">
			</div>
			<div class="form-group">
				<label class="form__label" for="phone">Phone Number</label>
				<input type="tel" id="phone" class="input" placeholder="+1(000)000-0000" pattern="\\+?[0-9\\s\\-()]*" required>
			</div>
			<div class="form-group form-group--checkbox">
				<input type="checkbox" id="accept" class="checkbox">
				<label for="accept" class="checkbox__label">
					<span class="checkbox__custom"></span>
					I agree with the <a href="#"> Terms of Use</a>
				</label>
			</div>

			
			
			<button type="submit" class="btn">PAY</button>
		</form>

	</div>
</section>

</main>

<?php include("footer.php"); ?>
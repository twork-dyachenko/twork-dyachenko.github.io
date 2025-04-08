<?php include("header.php"); ?>	
	<title>Add funds to your Steam Wallet, top-up Steam with SkinsForge</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="SkinsForge provides convenient replenishment for users of Steam Wallet. Pay with Visa or Mastercard an receive money instantly to your account">
</head>
<body>

<?php include("menu.php"); ?>

<main class="steam-page">

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
					<input type="tel" id="phone" class="input" placeholder="+1(000)000-0000" pattern="\\+?[0-9\s\-\(\)]*" required>
				</div>
				<div class="form-group form-group--checkbox">
					<input type="checkbox" id="accept" class="checkbox" aria-label="I agree to the Terms of Use">
					<label for="accept" class="checkbox__label">
						<span class="checkbox__custom"></span>
						I agree with the <a href="https://best-skins-forge.club/en/terms-of-use"> Terms of Use</a>
					</label>
				</div>
				<button type="submit" class="btn">PAY</button>
			</form>

			<form class="form form-state form-successfully">
				<div class="form-state__icon">
					<svg viewBox="0 0 96 145" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.249494 75.5648V44.0183H26.6525V75.5648H0.249494ZM0.249494 133V101.454H26.6525V133H0.249494ZM95.3537 73.336C95.3537 81.4512 94.0393 89.6236 91.4104 97.8531C88.8958 106.083 85.5812 114.141 81.4664 122.027C77.3517 129.8 72.9512 137.229 68.2649 144.316L44.605 132.829C50.32 121.97 55.1205 111.798 59.0067 102.311C63.0072 92.7097 65.0074 83.2228 65.0074 73.8503C65.0074 67.6782 64.1501 61.3346 62.4357 54.8196C60.8355 48.3046 58.7781 42.0753 56.2635 36.1317C53.8632 30.1882 51.5201 24.9876 49.2341 20.5299C46.9482 16.0723 45.1194 12.7576 43.7478 10.5859L68.6078 0.641931C76.1515 13.4434 82.4951 25.902 87.6386 38.0177C92.782 50.019 95.3537 61.7918 95.3537 73.336Z" fill="white"/>
					</svg>
				</div>
				<div class="form-state__text">Successfully</div>
				<button type="submit" class="btn">Top up more</button>
			</form>

			<form class="form form-state form-again">
				<div class="form-state__icon">
					<svg viewBox="0 0 97 145" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.16578 75.5648V44.0183H26.5688V75.5648H0.16578ZM0.16578 133V101.454H26.5688V133H0.16578ZM45.3786 73.336C45.3786 61.7918 47.9503 50.019 53.0937 38.0177C58.2372 25.902 64.5808 13.4434 72.1245 0.641931L96.9845 10.5859C95.6129 12.7576 93.7841 16.0723 91.4981 20.5299C89.2122 24.9876 86.8119 30.1882 84.2973 36.1317C81.897 42.0753 79.8397 48.3046 78.1252 54.8196C76.525 61.3346 75.7249 67.6782 75.7249 73.8503C75.7249 83.2228 77.668 92.7097 81.5542 102.311C85.5546 111.798 90.4123 121.97 96.1273 132.829L72.4674 144.316C67.7811 137.229 63.3806 129.8 59.2659 122.027C55.1511 114.141 51.7793 106.083 49.1504 97.8531C46.6359 89.6236 45.3786 81.4512 45.3786 73.336Z" fill="white"/>
					</svg>
				</div>
				<div class="form-state__text">Oops... <br> something went wrong</div>
				<button type="submit" class="btn">To try again</button>
			</form>

		</div>
	</section>

</main>

<?php include("footer.php"); ?>
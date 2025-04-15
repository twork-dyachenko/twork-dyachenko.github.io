<?php include("header.php"); ?>	
	<title>SkinsForge: how to contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="SkinsForge: how to contact us">
</head>
<body>

<?php include("menu.php"); ?>

<main>
    <section class="contact gradient">
        <div class="container">
            <h1 class="title title_sm">Our <span>contacts</span></h1>
            <form class="form" id="paymentForm">
                <div class="form-row form-row--2">
                    <div class="form-group">
                    <label class="form__label" for="fullName">Full Name</label>
                    <input type="text" id="fullName" class="input" required>
                    </div>
                    <div class="form-group">
                    <label class="form__label" for="email">E-mail</label>
                    <input type="email" id="email" class="input" required>
                    </div>
                </div>
                <div class="form-row form-row--3">
                    <div class="form-group">
                    <label class="form__label" for="country">Country</label>
                    <input type="text" id="country" class="input" required>
                    </div>
                    <div class="form-group">
                    <label class="form__label" for="city">City</label>
                    <input type="text" id="city" class="input" required>
                    </div>
                    <div class="form-group">
                    <label class="form__label" for="phone">Phone Number</label>
                    <input type="text" id="phone" class="input" placeholder="+1 (___) ___-____" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form__label" for="message">Enter your questions / wishes / suggestions here</label>
                    <textarea id="message" class="input" rows="5"></textarea>
                </div>
                <button type="submit" class="btn">Send</button>
            </form>
        </div>
    </section>
</main>

<?php include("footer.php"); ?>
<?php include("header.php"); ?>	
	<title>Our contacts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<?php include("menu.php"); ?>

<main>
    <section class="contact gradient">
        <div class="container">
            <h1 class="title title_sm">Our <span>contacts</span></span></h1>
            <form class="form">

            <!-- Full name & Email -->
            <div class="form-row form-row--2">
                <div class="form-group">
                <label class="form__label" for="fullName">Full Name</label>
                <input type="text" id="fullName" class="input" placeholder="John Doe">
                </div>
                <div class="form-group">
                <label class="form__label" for="email">E-mail</label>
                <input type="email" id="email" class="input" placeholder="you@example.com">
                </div>
            </div>

            <!-- Country, City, Phone -->
            <div class="form-row form-row--3">
                <div class="form-group">
                <label class="form__label" for="country">Country</label>
                <input type="text" id="country" class="input" placeholder="USA">
                </div>
                <div class="form-group">
                <label class="form__label" for="city">City</label>
                <input type="text" id="city" class="input" placeholder="New York">
                </div>
                <div class="form-group">
                <label class="form__label" for="phone">Phone Number</label>
                <input type="tel" id="phone" class="input" placeholder="+1(000)000-0000" pattern="\\+?[0-9\\s\\-()]*" required>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="form__label" for="message">Enter your questions / wishes / suggestions here</label>
                <textarea id="message" class="input" rows="5" placeholder="Your message here..."></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn">Send</button>
            </form>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>
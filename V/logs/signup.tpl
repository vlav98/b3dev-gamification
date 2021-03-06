<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Inscription </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./V/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
<div class="form">
<script type="text/javascript">
	$(".form")
		.find("input, textarea")
		.on("keyup blur focus", function(e) {
		var $this = $(this),
		label = $this.prev("label");

		if (e.type === "keyup") {
		if ($this.val() === "") {
		label.removeClass("active highlight");
		} else {
		label.addClass("active highlight");
		}
		} else if (e.type === "blur") {
		if ($this.val() === "") {
		label.removeClass("active highlight");
		} else {
		label.removeClass("highlight");
		}
		} else if (e.type === "focus") {
		if ($this.val() === "") {
		label.removeClass("highlight");
		} else if ($this.val() !== "") {
		label.addClass("highlight");
		}
		}
	});

	$(".tab a").on("click", function(e) {
		e.preventDefault();

		$(this)
		.parent()
		.addClass("active");
		$(this)
		.parent()
		.siblings()
		.removeClass("active");

		target = $(this).attr("href");

		$(".tab-content > div")
		.not(target)
		.hide();

		$(target).fadeIn(600);
	});
</script>
	  
<ul class="tab-group">
  <li class="tab active"><a href="#signup">Sign Up</a></li>
  <li class="tab"><a href="#login">Log In</a></li>
</ul>
  
<div class="tab-content">
  <div id="signup">   
    <h1>Inscription</h1>
    
    <form id='signup' action="index.php?controle=user&action=signup" method="post">
    <div class="top-row">  
      <div class="field-wrap">
        <?php echo($data); ?>
        <select name="user_type">
          <!--?php
          foreach($type[] as $type) {
            <option>
              echo $type[];
            </option>
          }
          ?-->
        </select>
        <input type="text" required="" autocomplete="off">
      </div>

      <div class="field-wrap">
        <label>
          Nom<span class="req">*</span>
        </label>
        <input type="text"required autocomplete="off"/>
      </div>

      <div class="field-wrap">
        <label>
          Prénom<span class="req">*</span>
        </label>
        <input type="text" required autocomplete="off" />
      </div>

      <div class="field-wrap">
        <label>
          Pseudo<span class="req">*</span>
        </label>
        <input type="text"required autocomplete="off"/>
      </div>
    </div>

    <div class="field-wrap">
      <label>
        Addresse E-mail<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off"/>
    </div>
    
    <div class="field-wrap">
      <label>
        Mot de passe<span class="req">*</span>
      </label>
      <input type="password"required autocomplete="off"/>
    </div>
    
    <button type="submit" class="button button-block"/>Get Started</button>
    </form>

  </div>

  
  <div id="login">   
    <h1>Bon Retour!</h1>
    
    <form action="index.php?controle=user&action=login" method="post">
      <div class="field-wrap">
      <label for="pseudoEmail">
        Adresse E-mail ou Pseudo<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off"/>
    </div>
    
    <div class="field-wrap">
      <label>
        Password<span class="req">*</span>
      </label>
      <input type="password"required autocomplete="off"/>
    </div>
    
    <p class="forgot"><a href="#">Forgot Password?</a></p>
    
    <button class="button button-block"/>Log In</button>
    </form>

  </div>
  
</div><!-- tab-content -->
  
</div> <!-- /form -->
</body></html>

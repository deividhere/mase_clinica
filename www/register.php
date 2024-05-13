<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Clinică medicală</title>

    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/register.css">
    <link rel="icon" href="./assets/favicon/favicon.ico" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap 5 JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
  <body>
    <?php 
    session_start();
    $active = 9;
    include 'navbar.php';
    ?>

    <div class="container mt-4">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Înregistrare</p>

                <form action="" method="post" id="fileForm" role="form">

                  <div class="form-group">
                    <p>Tip cont: </p>

                    <div class="mt-1 d-flex justify-content-center gap-2">
                      <input type="radio" class="btn-check me-2" name="account" id="pacient" value="0" autocomplete="off" checked>
                      <label class="btn btn-outline-success" for="pacient">Pacient</label>

                      <input type="radio" class="btn-check" name="account" id="medic" value="1" autocomplete="off">
                      <label class="btn btn-outline-success" for="medic">Medic</label>
                    </div>
                  </div>

                  <div class="form-group mt-2"> 	 
                    <label for="firstname">Prenume: </label>
                    <input class="form-control" type="text" name="firstname" id = "firstname" onkeyup="checkFirstName();" onfocus="checkFirstName();" required /> 
                    <span id="errFirst"></span>
                  </div>

                  <div class="form-group mt-2">
                    <label for="lastname">Nume: </label> 
                    <input class="form-control" type="text" name="lastname" id = "lastname" onkeyup="checkLastName();" onfocus="checkLastName();" placeholder="" required />  
                    <span id="errLast"></span>
                  </div>

                  <div class="form-group mt-2">
                    <label for="email">Adresă de e-mail: </label> 
                    <input class="form-control" required type="text" name="email" id = "email"  onkeyup="checkEmail();" onfocus="checkEmail();" />   
                    <span id="errMail"></span>
                  </div>

                  <div class="form-group">
                    <div class="form-group mt-2">
                    <label for="pass1">Parolă: </label>
                    <input required name="pass1" type="password" class="form-control inputpass" minlength="8" maxlength="24" placeholder="Minimum 8 caractere"  id="pass1" onkeyup="checkFirstPass();"/> </p>
                    <span id="errPass1"></span>
                    </div>
                    
                    <div class="form-group mt-2">
                    <label for="pass2">Repetare parolă: </label>
                    <input required name="pass2" type="password" class="form-control inputpass" minlength="8" maxlength="24" placeholder="Minimum 8 caractere"  id="pass2" onkeyup="checkSecondPass();" />
                    <span id="errPass2"></span>
                    </div>
                  </div>

                  <div class="form-group mt-2">
                    <div class="p-2 rounded" id="checkDiv">
                      <input type="checkbox" required name="terms" onchange="checkTerms();" id="terms">   
                      <label for="terms">
                        <!-- I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration. -->
                        Sunt de acord cu <a href="./terms-of-service.php">termenii serviciului</a>.
                      </label>
                    </div>

                    <span id="errTerms"></span>
                  </div>

                  <div class="form-group mt-4 d-flex justify-content-center">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg" onclick="register_click();">Înregistrare</button>
                  </div>

                  </fieldset>
                </form>
            </div>
          </div>
    </div>
    
    <script src="./script/script.js"></script>
    <script src="./script/register.js"></script>
    <!-- Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function () {
    cookieconsent.run({"notice_banner_type":"simple","consent_type":"implied","palette":"dark","language":"ro","page_load_consent_levels":["strictly-necessary","functionality","tracking","targeting"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":true,"page_refresh_confirmation_buttons":false,"website_name":"david.d0.ro","website_privacy_policy_url":"http://www.david.d0.ro"});
    });
    </script>
  </body>
</html>
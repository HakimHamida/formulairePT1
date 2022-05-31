

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
   </head>
   <body>
   
      <h1>Inscription</h1>
   <form id="my form" name="fo" method="get" action="" class="myForm">
   <div class="">
         <label for="e">Email*</label>
         <input id="e" name="e" placeholder="Entrez votre email *" class="e">
         <p class="errMail">email invalide</p>
         <input type="hidden" name="token" id="token">
      
   </div>

   <div class="erreur"></div>
         <button class="alert" type="submit"  name="valider" value="send an email">envoyer</button>

      </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/js/form1.js"></script>
</body>
  
</html>
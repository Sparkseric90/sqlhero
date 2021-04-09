<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>MySQL Heroes Project</title>
  </head>
  <body>
    <h1>SQLHeroes</h1>
    
    <div class="container">
      <div class="row">
        <div class="col-5">
          <h1>
            Menu
          </h1>

          
            <div class="dropdown">
              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Add Heroes
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                 <li><a class="dropdown-item" href="/api.php?route=addHeroToTable&name=TheDeep&about_me=The deep is supe with abilities to communicate with marine life!&biography=The Deep loves to spend his evenings just chilling with all the marine life, and his love interest Lucy the Sperm Whale." target="_blank">The Deep</a></li>
              </ul>
            </div>
          
          
          
          
            <div class="dropdown">
              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Heros
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="api.php?route=getAllHeroes">All Heros</a></li>
                <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=1">Hero 1</a></li>
                <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=2">Hero 2</a></li>
                <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=3">Hero 3</a></li>
                <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=4">Hero 4</a></li>
                <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=5">Hero 5</a></li>
                 <li><a class="dropdown-item" href="api.php?route=getHeroById&hero_id=6">Hero 6</a></li>
              </ul>
            </div>
          
          
          
            <div class="dropdown">
              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               Update Abilities
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/api.php?route=updateHeroAbility&id=5&ability='Spear Throw!'" target="_blank">Ability - Spear Throw! </a></li>
              </ul>
            </div>
          
          
          
          
            <div class="dropdown">
              <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Delete Heroes
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/api.php?route=deleteHeroFromTable&id=15&name=''&about_me=''&biography=''" target="_blank">The Deep</a></li>
              </ul>
            </div>
         
          
          
          
          
          
          


            
            
            
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
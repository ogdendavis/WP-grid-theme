<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tricycle Grid</title>

  <!-- Responsive viewport tag, tells small screens that it's responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Normalize.css, a cross-browser reset file -->
  <!-- Changed from remote link to link within the project -->
  <link href="normalize.css" type="text/css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

  <!-- Stylesheets -->
  <link href="grid.css" type="text/css" rel="stylesheet">
  <link href="main.css" type="text/css" rel="stylesheet">
</head>

<body>
  <header role="banner" class="header">
    <div class="row row--header">
      <div class="col-12 col--header">
        <h1 class="header__title">Tricycle Grid</h1>
        <h2 class="header__subtitle">A responsive grid theme for WordPress</h2>
      </div>
    </div>
  </header>

  <main role="main">
    <div class="row">
      <!-- Classes card-stack and grid-container are both just on this DIV, but
           are different classes to separate concerns of grid functionality
           (grid-container) and display (card-stack). -->
      <div class="col-4">
        <figure class="card">
          <!-- Like card-stack and grid-container above, card is for display and
               col is for grid. -->
          <img src="images/rey_square.png" class="card__pic" alt="Rey" width="250">
          <figcaption class="caption">
            <div class="caption__name">Rey</div>
            <div class="caption__detail">Protagonist, from Jakku</div>
          </figcaption>
        </figure>
      </div>

      <div class="col-4">
        <figure class="card">
          <img src="images/finn_square.png" class="card__pic" alt="Finn" width="250">
          <figcaption class="caption">
            <div class="caption__name">Finn</div>
            <div class="caption__detail">Stormtrooper, befriends Rey</div>
          </figcaption>
        </figure>
      </div>

      <div class="col-4">
        <figure class="card">
          <img src="images/kylo_square.png" class="card__pic" alt="Kylo Ren" width="250">
          <figcaption class="caption">
            <div class="caption__name">Kylo Ren</div>
            <div class="caption__detail">Main villain, or is he?</div>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <figure class="card">
          <img src="images/poe_square.png" class="card__pic" alt="Poe" width="250">
          <figcaption class="caption">
            <div class="caption__name">Poe</div>
            <div class="caption__detail">Pilot for the resistance</div>
          </figcaption>
        </figure>
      </div>

      <div class="col-4">
        <figure class="card">
          <img src="images/chewbacca_square.png" class="card__pic" alt="Chewbacca" width="250">
          <figcaption class="caption">
            <div class="caption__name">Chewbacca</div>
            <div class="caption__detail">A great frist mate</div>
          </figcaption>
        </figure>
      </div>

      <div class="col-4">
        <figure class="card">
          <img src="images/yoda_square.png" class="card__pic" alt="Yoda" width="250">
          <figcaption class="caption">
            <div class="caption__name">Yoda</div>
            <div class="caption__detail">Wise old Jedi master</div>
          </figcaption>
        </figure>
      </div>
    </div>
  </main>

</body>
</html>

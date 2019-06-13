<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">

</head>

<body>
  <div id="section1">
    <div class="row">
      <div class="col-12">
        <div class="section1-div2">
          <a class="navbar-brand pull-left nav-a" href="#">
            <img src="{{ asset('images/logo.png') }}" width="100" height="50">
          </a>
          <a class="nav-link pull-left nav-a" href="#">FIND A FURRIEND</a>
          <a class="nav-link pull-left nav-a" href="#">ADOPT GUIDE</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="section1-div">
        <h1>paws up to your new feline furriend!</h1>
        <button class="button-dark-orange">ADOPT TODAY</button>
      </div>
    </div>
  </div>
  <div id="section2">
    <div class="row">
      <div class="col-12 section2-div">
        <h2 class="text-center">Only heroes - adopt</h2>
        <p class="text-center"><b>Not all heroes wear capes!</b> Saving the world is not a job that is only exclusive to comic heroes in the new york city... Now, you can do your part with one paw at a time.</p>
      </div>
      <div class="col-4">
        <img class="text-center" src="{{ asset('images/graphic_01.png') }}" width="200" height="200">
        <div class="text-center-title">
          <h5 class="text-center">TRUE COMPANIONSHIP</h5>
          <p class="text-center">Opening your doors to your new furry friend brings a wholesome new meaning to friendship.</p>
        </div>
      </div>
      <div class="col-4">
        <img class="text-center" src="{{ asset('images/graphic_02.png') }}" width="200" height="200">
        <div class="text-center-title">
          <h5 class="text-center">FULFILLING ROLE</h5>
          <p class="text-center">The major side effect of being there for your furry friend is feeling very rewarded when they purr!</p>
        </div>
      </div>
      <div class="col-4">
        <img class="text-center" src="{{ asset('images/graphic_03.png') }}" width="200" height="200">
        <div class="text-center-title">
          <h5 class="text-center">LOVING COMMUNITY</h5>
          <p class="text-center">You will be part of a huge and growing community of adopters, worldwide, to share your experiences!</p>
        </div>
      </div>
    </div>
  </div>
  <div id="section3">
    <div class="row">
      <div class="section3-div">
        <h2>Hall of Meows.</h2>
        <p>Featured feline of the week!</p>

        <div class="row gllery">
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_01.png') }}" width="100" height="100">
          </div>
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_02.png') }}" width="100" height="100">
          </div>
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_03.png') }}" width="100" height="100">
          </div>
        </div>
        <div class="row gllery">
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_04.png') }}" width="100" height="100">
          </div>
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_05.png') }}" width="100" height="100">
          </div>
          <div class="col-4">
            <img class="img-thumbnail" src="{{ asset('images/gallery_06.png') }}" width="100" height="100">
          </div>
        </div>
        <div>
          <button class="button-dark-orange">BROWSE MORE</button>
        </div>
      </div>
    </div>
  </div>
  <div id="section4">
    <div class="section4-div">
      <h3>Adopting 101</h3>
      <p><b>Class is in session! </b>Here’s a basic guide of what you would probably want to have along with you at our adoption center:</p>
      <p"><i class="fa fa-check"></i> <span class='highlight'>AN OPEN MIND</span> <span class="small">Not all furry creatures are alike!</span></p>
      <p"><i class="fa fa-check"></i> <span class='highlight'>COMFORTABLE SHOES</span> <span class="small">You’ll be on your feet all day, trust us!</span></p>
      <p"><i class="fa fa-check"></i> <span class='highlight'>MOBILE PHONE</span> <span class="small">To take pictures of your potential furry companion, of course!</span></p>
      <button class="button-dark-orange">LET'S ADOPT</button>
    </div>
  </div>
  <div id="section5">
    <div class="row section5-div">
      <div class="col-6  section5-left">
        <h3>Extra hand?</h3>
        <p><span class="bold">YES please!</span> Be a volunteer today:</p>
      </div>
      <div class="col-6">
        <input type="text" name="" placeholder="youremail@address.com">
        <button class="button-dark-orange">I WANT TO HELP</button>
      </div>
      <div class="section5-div2">
        <p class="pull-left">&copy;2019 THE CATASTROPHE</p>
      </div>
      <div class="section5-div3">
        <a class="nav-link pull-right" href="#">LEGAL NOTICES</a>
        <a class="nav-link pull-right" href="#">PRIVACY POLICY</a>
        <a class="nav-link pull-right" href="#">FAQs</a>
      </div>
    </div>
    
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
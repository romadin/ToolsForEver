<body>
  <div id="wrapper" class="toggled">
    @include('gadget.header')

    <div class="container-fluid">
      <div class="row-fluid" >
        <div class="col-md-8 google-maps" id="box">
        <h2>Locaties</h2>
        <hr>
        <iframe src="https://www.google.com/maps/d/embed?mid=1cdyoFXgYSJLmxhbq33mDG3EBKLo" width="100%" height="50%"></iframe>
        </div>
        <div class="col-md-4">
          <h2>Adres gegevens</h2>
          <hr>
          <p>
            <strong><i class="fa fa-map-marker"></i> Adres</strong><br>
            Straat van Florida 1
          </p>
          <p><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
            036 549 5900
          </p>
          <p>
            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
            mbocollegealmere@rocvf.nl</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</body>
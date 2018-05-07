<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Expedia hotel filters</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <style media="screen">
  .header-container {
    background-color: #fc0;
  }
  .header-container img {
    margin-bottom: 6px;
  }
  .header-container p {
    margin: 0;
  }
  </style>
</head>
<body>
  <div class="text-center py-3 header-container">
    <img class="d-block mx-auto" src="https://www.expedia.com/_dms/header/logo.svg?locale=en_US&siteid=1&test=Storefront_2017_B2P_variant_1" alt="" width="120">
    <h2>Vacation Time</h2>
    <p class="lead">Search for our latest best offers!</p>
  </div>
  <div class="container py-3">
    <form action="search.php" method="post">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Country Name</label>
        <div class="col-sm-10">
          <input type="text" name="destinationName" class="form-control" placeholder="Destination Name">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
          <input type="text" name="destinationCity" class="form-control" placeholder="Destination City">
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Min date</label>
        <div class="col-sm-10">
          <input type="date" name="minTripStartDate" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Max date</label>
        <div class="col-sm-10">
          <input type="date" name="maxTripStartDate" class="form-control">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">length Of Stay</label>
        <div class="col-sm-10">
          <input type="text" name="lengthOfStay" class="form-control" placeholder="length Of Stay">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Min Star Rating</label>
        <div class="col-sm-10">
          <input type="text" name="minStarRating" class="form-control" placeholder="minStarRating">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Max Star Rating</label>
        <div class="col-sm-10">
          <input type="text" name="maxStarRating" class="form-control" placeholder="Max Star Rating">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Min Total Rate</label>
        <div class="col-sm-10">
          <input type="text" name="minTotalRate" class="form-control" placeholder="Min Total Rate">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Max Total Rate</label>
        <div class="col-sm-10">
          <input type="text" name="maxTotalRate" class="form-control" placeholder="maxTotalRate">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Min Guest Rating</label>
        <div class="col-sm-10">
          <input type="text" name="minGuestRating" class="form-control" placeholder="Min Guest Rating">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Max Guest Rating</label>
        <div class="col-sm-10">
          <input type="text" name="maxGuestRating" class="form-control" placeholder="Max Guest Rating">
        </div>
      </div>

      <div class="text-center py-3">
        <button type="submit" class="btn btn-primary btn-lg">Find the hottest deals!</button>
      </div>

    </form>
  </div>
</body>
</html>

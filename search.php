<?php
if (isset($_POST['minTripStartDate']) && !empty($_POST['maxTripStartDate'])) {
  $minTripStartDate = date("Y-m-d", strtotime($_POST['minTripStartDate']));
}
if (isset($_POST['maxTripStartDate']) && !empty($_POST['maxTripStartDate'])) {
  $maxTripStartDate = date("Y-m-d", strtotime($_POST['maxTripStartDate']));
}
$params = array(
  'scenario' => 'deal-finder',
  'page' => 'foo',
  'uid' => 'foo',
  'productType' => 'Hotel',
  'destination' => $_POST['destinationName'],
  'destinationCity' => $_POST['destinationCity'],
  'minTripStartDate' => $minTripStartDate,
  'maxTripStartDate' => $maxTripStartDate,
  'minTotalRate' => $_POST['minTotalRate'],
  'maxTotalRate' => $_POST['maxTotalRate'],
  'lengthOfStay' => $_POST['lengthOfStay'],
  'minStarRating' => $_POST['minStarRating'],
  'maxStarRating' => $_POST['maxStarRating'],
  'minGuestRating' => $_POST['minGuestRating'],
  'maxGuestRating' => $_POST['maxGuestRating']
);
$filteredParams = array_filter($params);

$url = "https://offersvc.expedia.com/offers/v2/getOffers?".http_build_query($filteredParams);
// echo $url;
// die();
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_RETURNTRANSFER => true
));
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);
?>
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
    <p class="lead">Here we go!</p>
  </div>
  <div class="container py-3">
    <div class="row">
      <?php
      if (!empty($response['offers'])):
        $offers = $response['offers']['Hotel'];
        foreach( $offers as $offer):
          ?>
          <div class="col-md-12">
            <div class="card flex-md-row mb-4">
              <img class="card-img-left flex-auto d-none d-lg-block" alt="Thumbnail" style="height: 70px;" src="<?= $offer['hotelInfo']['hotelImageUrl']; ?>">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?= $offer['hotelInfo']['hotelName']; ?></strong>
                <div class="mb-1 text-muted"><?= $offer['destination']['longName']; ?></div>
                <div class="mb-1 text-muted"><?= $offer['hotelInfo']['hotelStreetAddress']; ?></div>
                <p class="card-text mb-auto">
                  <?=  $offer['hotelPricingInfo']['currency'].$offer['hotelPricingInfo']['averagePriceValue']; ?>
                </p>
                <a href="https://www.expedia.com/Hotel-Search?destination=<?= $offer['destination']['longName']; ?>">Book now!</a>
              </div>
            </div>
          </div>
          <?php
        endforeach;
      endif;
      ?>
    </div>
    <div class="text-center py-3">
      <a href="index.php" class="btn btn-primary btn-lg">Search Agian</a>
    </div>
  </div>
</body>
</html>

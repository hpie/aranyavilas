<link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>
<!-- CSS LIBRARY -->
<link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
<link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/lib/settings.css">
<link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/helper.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!-- MAIN STYLE -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  .rslides {
    position: relative;
    list-style: none;
    overflow: hidden;
    width: 100%;
    padding: 0;
    margin: 0;
  }

  .rslides li {
    -webkit-backface-visibility: hidden;
    position: absolute;
    display: none;
    width: 100%;
    left: 0;
    top: 0;
  }

  .rslides li:first-child {
    position: relative;
    display: block;
    float: left;
  }

  .rslides img {
    display: block;
    height: auto;
    float: left;
    width: 100%;
    border: 0;
  }



  .rslides:before {
    content: "";
    display: block;
    width: 540px;
    /* background-image: url("images/slider-overlay.png"); */
    background-repeat: no-repeat;
    background-position: top left;
    background-size: 100%;
    padding-bottom: 31.25%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3;
  }

  /* Slider navigation */

  .transparent-btns_tabs {
    position: absolute;
    z-index: 2;
    bottom: 0;
    width: 100%;
    text-align: center;
  }

  .transparent-btns_tabs li {
    display: inline;
    float: none;
    _float: left;
    *float: left;
    margin-right: 5px;
  }

  .transparent-btns_tabs a {
    text-indent: -9999px;
    overflow: hidden;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    background: #ccc;
    background: rgba(0, 0, 0, 0.2);
    display: inline-block;
    _display: block;
    *display: block;
    -webkit-box-shadow: inset 0 0 2px 0 rgba(0, 0, 0, 0.3);
    -moz-box-shadow: inset 0 0 2px 0 rgba(0, 0, 0, 0.3);
    box-shadow: inset 0 0 2px 0 rgba(0, 0, 0, 0.3);
    width: 11px;
    height: 11px;
  }

  .transparent-btns_here a {
    background: #222;
    background: rgba(0, 0, 0, 0.8);
  }

  /* Slider navigation end */

  @media only screen and (max-width: 768px) {
    nav {
      text-align: center;
    }

    .section-slider {
      padding-top: 15% !important;
      ;
    }

    nav a {
      font-size: 1.5em;
    }
  }
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-184191005-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-184191005-1');
</script>
</head>
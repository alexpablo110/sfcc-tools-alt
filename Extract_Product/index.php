<!DOCTYPE html>
<html>
  <head>
      <title>Master Catalog XML | Datawords</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
      <link rel="stylesheet" href="css/dtw-preloading.css">
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--LOADER-->
    <div id="load">
      <div class="dtw-loader-cnt">
          <div class="cssload-loader">
            <div class="cssload-square cssload-square--main">
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
                <div class="cssload-square cssload-square--mini"></div>
            </div>
        </div>
        <div class="cssload-loading">DATAWORDS</div>
      </div>
    </div>
    <!--END OF LOADER -->

    <!-- CONTENT HERE-->
    <div class="contents" id="spprtd">
      <div class="dtw-main-logo">
        <a href="/">
          <img loading="lazy" src="img/sfcc-logo-v2.png" alt="datawords logo white" height="auto" width="auto" style="width: 100%;">
         </a>
      </div>
      <div id="app">
        <div class="dtw-sfcc-logo-sec">
                <img loading="lazy" src="img/sfcc-logo.png" class="dtw-sfcc-logo" alt="datawords sfcc" >
        </div>
        <h1 class="neons">Extract Product</h1>
        <form name="page-designer-library" id="form-pd">
          <div>
            <label for="library-input">Master Catalog XML:</label>
            <input type="file" id="library-input" required />
          </div>
          <div>
            <label for="pageids-textarea"
              >Mater Producct IDs (comma separated values):</label
            >
            <textarea
              name="pageids"
              id="pageids-textarea"
              placeholder="prod1, prod2, prod3"
              required
            ></textarea>
          </div>
          <div class="form-actions" id="button-submit">
            <button class="button-convert">Convert and download</button>
          </div>
        </form>
        <div class="loading-container"><div class="loadingspinner"></div></div>
        <div id="info-messages"></div>
      </div>
    </div>
    <!--END OF CONTENT-->

    <!--MOBILE-->
    <div id="not-supported-section">
      <div class="ntspprtd">
        <img src="img/404.png">
        <p>Sorry, this site is not supported of 
          <br>tablet and mobile device</p>
      </div>
    </div>
    <!--MOBILE-->

    <!--BACKGROUND-->
    <div class="area" >
      <ul class="circles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
    <!-- END OF BACK GROUND-->
    <script src="js/product-content.js"></script>
    <script src="js/dtw-preloading.js"></script>
    
  </body>
</html>
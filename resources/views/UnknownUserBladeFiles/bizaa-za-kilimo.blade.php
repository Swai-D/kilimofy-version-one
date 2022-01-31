<!-- SECTION HEADER -->
<div class="section-header">
  <!-- SECTION HEADER INFO -->
  <div class="section-header-info">
    <!-- SECTION PRETITLE -->
    <p class="section-pretitle">Tafuta kileunacho hi!</p>
    <!-- /SECTION PRETITLE -->

    <!-- SECTION TITLE -->
    <h2 class="section-title">Sokoni</h2>
    <!-- /SECTION TITLE -->
  </div>
  <!-- /SECTION HEADER INFO -->
</div>
<!-- /SECTION HEADER -->

<!-- GRID -->

<div class="grid grid-3-3-3-3 centered">

  @foreach($pembejeo as $pembejeo)
  <!-- PRODUCT CATEGORY BOX -->
  <a class="product-category-box category-mbegu" href="marketplace-category.html"  style="background: url(/assets/img/marketplace/category/02.png) no-repeat 100% 0, linear-gradient(90deg, #009a4e, #8d7aff)">
    <!-- PRODUCT CATEGORY BOX TITLE -->
    <p class="product-category-box-title">Pembejeo</p>
    <!-- /PRODUCT CATEGORY BOX TITLE -->

    <!-- PRODUCT CATEGORY BOX TEXT -->
    <p class="product-category-box-text">Angalia aina zote za Pembejeo</p>
    <!-- /PRODUCT CATEGORY BOX TEXT -->

    <!-- PRODUCT CATEGORY BOX TAG -->
    <p class="product-category-box-tag">{{$pembejeo_count}} items</p>
    <!-- /PRODUCT CATEGORY BOX TAG -->
  </a>
  <!-- /PRODUCT CATEGORY BOX -->

  <!-- PRODUCT CATEGORY BOX -->
  <a class="product-category-box category-mbegu" href="marketplace-category.html"  style="background: url(/assets/img/marketplace/category/02.png) no-repeat 100% 0, linear-gradient(90deg, #009a4e, #8d7aff)">
    <!-- PRODUCT CATEGORY BOX TITLE -->
    <p class="product-category-box-title">Pembejeo</p>
    <!-- /PRODUCT CATEGORY BOX TITLE -->

    <!-- PRODUCT CATEGORY BOX TEXT -->
    <p class="product-category-box-text">Angalia aina zote za Pembejeo</p>
    <!-- /PRODUCT CATEGORY BOX TEXT -->

    <!-- PRODUCT CATEGORY BOX TAG -->
    <p class="product-category-box-tag">{{$pembejeo_count}} items</p>
    <!-- /PRODUCT CATEGORY BOX TAG -->
  </a>
  <!-- /PRODUCT CATEGORY BOX -->

  @endforeach



  @foreach($mashine_za_kilimo as $mashine_za_kilimo)
  <!-- PRODUCT CATEGORY BOX -->
  <a class="product-category-box category-mbegu" href="marketplace-category.html"  style="background: url(/assets/img/marketplace/category/02.png) no-repeat 100% 0, linear-gradient(90deg, #009a4e, #8d7aff)">
    <!-- PRODUCT CATEGORY BOX TITLE -->
    <p class="product-category-box-title">Mashine za Kilimo</p>
    <!-- /PRODUCT CATEGORY BOX TITLE -->

    <!-- PRODUCT CATEGORY BOX TEXT -->
    <p class="product-category-box-text">Pata mashine za kuandaa shamba mpaka kwenye kuvuna</p>
    <!-- /PRODUCT CATEGORY BOX TEXT -->

    <!-- PRODUCT CATEGORY BOX TAG -->
    <p class="product-category-box-tag">{{$mashine_za_kilimo_count}} items</p>
    <!-- /PRODUCT CATEGORY BOX TAG -->
  </a>
  <!-- /PRODUCT CATEGORY BOX -->
  @endforeach




</div>
<!-- /GRID -->

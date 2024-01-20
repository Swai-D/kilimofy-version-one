
@if ($paginator->hasPages())
  <!-- SECTION PAGER BAR -->
  <div class="section-pager-bar">
    <!-- SECTION PAGER -->
    <div class="section-pager">
    @foreach ($elements as $element)
      <!-- SECTION PAGER ITEM -->

      @if (is_string($element))
      <div class="section-pager-item active">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">{{ $element }}</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->
      @endif

        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <div class="section-pager-item active">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text active">{{ $page }}</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->
              @else
              <div class="section-pager-item ">
                <!-- SECTION PAGER ITEM TEXT -->
                <a href="{{ $url }}">  <p class="section-pager-item-text">{{ $page }}</p></a>
                <!-- /SECTION PAGER ITEM TEXT -->
              </div>
              <!-- /SECTION PAGER ITEM -->
              @endif
                @endforeach
                @endif
            @endforeach
    </div>
    <!-- /SECTION PAGER -->

    <!-- SECTION PAGER CONTROLS -->
    <div class="section-pager-controls">
    @if ($paginator->onFirstPage())
      <!-- SLIDER CONTROL -->
      <div class="slider-control left disabled">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    @else
      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    @endif
    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
@endif

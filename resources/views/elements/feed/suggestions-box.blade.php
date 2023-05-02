<div class="suggestions-box{{$isMobile ? '-mobile':''}} border rounded-lg px-2 {{isset($isMobile) ? 'pt-3 pb-1' : 'py-4'}}">
    <div class="d-flex justify-content-between suggestions-header mb-3 px-1">
      
        <div class="d-flex">
            <div class="d-flex">
            </div>
            <div class="d-flex">
              
            </div>
        </div>
    </div>
    @include('elements.feed.suggestions-wrapper',['profiles'=>$profiles])
</div>

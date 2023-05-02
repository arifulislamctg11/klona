<div style="display:width:100vw;margin-left:-1.5rem;flex;justify-content:center;align-items:center;flex-direction:column;" class="container-fluid">
<div style="height:12rem;width:100vw;" class="container-fluid suggestion-box card text-white mb-2 border-0 rounded" data-memberuserid="{{$profile->id}}">
   <div>
  
    <div class="card-img-overlay p-0">
        <div class="h-100 w-100 p-0 m-0 position-absolute z-index-0">
            <div class="h-50">
            </div>
            <div class="h-50 w-100 half-bg d-flex"></div>
        </div>
        <div style="display:flex;flex-direction:column;height:10rem;justify-content:center;align-items:center;text-align:center;" class="card-text w-100 h-100 d-flex">

            <div  class="d-flex align-items-center justify-content-center px-3 z-index-3">
                <img src="{{$profile->avatar}}" class="avatar"  />
            </div>

            <div style="height:12rem;" class="w-100 z-index-3 text-truncate">
                <div style="height:12rem;"  class="h-50 d-flex flex-row-reverse pr-1">
                    @if(isset($isListMode))
                    
                    @endif
                </div>
                <div style="height:13rem;display:flex;justify-center;align-items:center;flex-direction:column;margin-top:-2rem;"  class="h-50 w-100 z-index-3 d-flex flex-column justify-content-center text-truncate pr-2">
                    <div style="height:13rem;"  class="m-0 h6 text-truncate"><a href="{{route('profile',['username'=>$profile->username])}}" class="text-white d-flex align-items-center">{{$profile->name}}
                        @if($profile->email_verified_at && $profile->birthdate && ($profile->verification && $profile->verification->status == 'verified'))
                         
                        @endif
                        </a></div>
                    <div style="height:13rem;"  class="m-0 text-truncate"><span>@</span><a href="{{route('profile',['username'=>$profile->username])}}" class="text-white">{{$profile->username}}</a></div>
                </div>
            </div>

        </div>
    </div>
   </div>
</div>



</div>

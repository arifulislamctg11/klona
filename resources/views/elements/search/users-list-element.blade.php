<div style="width:100vw;" class="user-search-box-item   mb-4 d-flex justify-content-center align-items-center">
<div style="width:13rem; height:15rem;" class="user-search-box-item border  mb-4 d-flex justify-content-center align-items-center">
<a href="{{route('profile',['username'=>$user->username])}}" class="text-bold text-{{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? 'white' : 'dark') : (Cookie::get('app_theme') == 'dark' ? 'white' : 'dark'))}} mr-2 d-flex align-items-center">
                                                  
<div class="d-flex justify-content-center align-items-center flex-column">
<div class="d-flex justify-content-center align-items-center flex-column">
<img src="{{$user->avatar}}" class="avatar  shadow"/>
</div>
<div class="d-flex justify-content-center align-items-center flex-column">
<a href="{{route('profile',['username'=>$user->username])}}" class="text-bold text-{{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? 'white' : 'dark') : (Cookie::get('app_theme') == 'dark' ? 'white' : 'dark'))}} mr-2 d-flex align-items-center">
                            {{$user->name}}
                        </a>
</div>
<div class="d-flex justify-content-center align-items-center flex-column">
@if($user->email_verified_at && $user->birthdate && ($user->verification && $user->verification->status == 'verified'))
                            <span class="" data-toggle="tooltip" data-placement="top" title="{{__('Verified user')}}">
                        @include('elements.icon',['icon'=>'checkmark-circle-outline','centered'=>true,'classes'=>'ml-1 text-primary'])
                    </span>
                        @endif
</div>
<div style="background:#2A7576;border-radius:2rem;width:6rem;" class="text-truncate small d-flex justify-content-center align-items-center flex-column">
<a style="font-size:0.7rem !important;" href="{{route('profile',['username'=>$user->username])}}" class="text-white">&commat;{{$user->username}}</a>

</div>
<div class="d-flex justify-content-center align-items-center flex-column">
<a role="button" class="btn btn-round btn-outline-primary btn-sm px-3 mb-0" href="{{route('profile',['username'=>$user->username])}}">
                        {{__("View")}}
                    </a>
</div>
<div class="d-flex justify-content-center align-items-center flex-column">
{{$user->bio ? $user->bio : __('No description available.')}}
</div>
</div>
</a>
</div>
</div>
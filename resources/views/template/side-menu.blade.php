

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/pages/searchuser.js" ></script>
</head>
<body>
<style>
    .popup{
        display:"none";
    background:rgba(0.1,0.1,0.1,0.1);
  position:absolute;
  top:0px;
  width:100vw;
  right:0px;
  bottom:0px;
  left:0px;
    }
</style>
<div class="popup">

</div>
<div id="othercontenttwo">

    <div class="side-menu px-1 px-md-2 px-lg-3" style="margin-left: 96px;margin-right: 79px;">
        <div class="user-details mb-4 d-flex open-menu pointer-cursor flex-row-no-rtl">
        <div class="ml-0 ml-md-2">
            @if(Auth::check())
                <!-- <img src="{{Auth::user()->avatar}}" class="rounded-circle user-avatar"> -->
                @else
                <div class="avatar-placeholder">
                    @include('elements.icon',['icon'=>'person-circle','variant'=>'xlarge text-muted'])
                </div>
                @endif
        </div>
        <!-- @if(Auth::check())
        <div class="d-none d-lg-block overflow-hidden">
            <div class="pl-2 d-flex justify-content-center flex-column overflow-hidden">
                <div class="ml-2 d-flex flex-column overflow-hidden">
                    <span class="text-bold text-truncate {{(Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? '' : 'text-dark-r') : (Cookie::get('app_theme') == 'dark' ? '' : 'text-dark-r'))}}">{{Auth::user()->name}}</span>
                        <span class="text-muted"><span>@</span>{{Auth::user()->username}}</span>
                    </div>
                </div>
            </div>
            @endif -->
        </div>
        
    <ul class="nav flex-column user-side-menu">
        <li class="nav-item ">
    <a href="{{Auth::check() ? route('feed') : route('home')}}" class="h-pill h-pill-primary nav-link {{Route::currentRouteName() == 'feed' ? 'active' : ''}} d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <div class="icon-wrapper d-flex justify-content-center align-items-center">
                <img class="home-kzJKh3 home" src="/img/logos/home@2x.png" style="height:35px;" alt="home" />
</div>
</div>
</a>
</li>
@if(GenericHelper::isEmailEnforcedAndValidated())
<li id="searchuser" class="nav-item">
                <a href="#" class="nav-link h-pill h-pill-primary {{Route::currentRouteName() == 'my.notifications' ? 'active' : ''}} d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                            <img class="home-kzJKh3 home" src="/img/logos/se.png" style="height:35px;margin-top: 5px;margin-left: 2px;" alt="home" />
                            <!-- @include('elements.icon',['icon'=>'notifications-outline','variant'=>'large']) -->
                            <!-- <div class="menu-notification-badge notifications-menu-count {{(isset($notificationsCountOverride) && $notificationsCountOverride->total > 0 ) || (NotificationsHelper::getUnreadNotifications()->total > 0) ? '' : 'd-none'}}">
                                {{!isset($notificationsCountOverride) ? NotificationsHelper::getUnreadNotifications()->total : $notificationsCountOverride->total}}
                            </div> -->
                        </div>
                        <!-- <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Notifications')}}</span> -->
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('my.messenger.get')}}" class="nav-link {{Route::currentRouteName() == 'my.messenger.get' ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                        <img class="home-kzJKh3 home" src="/img/logos/messages-2@2x.png" style="height:35px;margin-top: 5px;margin-left: 5px;" alt="home" />   
                        <!-- @include('elements.icon',['icon'=>'chatbubble-outline','variant'=>'large'])
                        <div class="menu-notification-badge chat-menu-count {{(NotificationsHelper::getUnreadMessages() > 0) ? '' : 'd-none'}}">
                                {{NotificationsHelper::getUnreadMessages()}}
                            </div> -->
                        </div>
                        <!-- <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Messages')}}</span> -->
                    </div>
                </a>
            </li>
            @if(getSetting('streams.allow_streams'))
                <li class="nav-item">
                    <a href="{{route('search.get')}}?filter=live" class="nav-link {{Route::currentRouteName() == 'search.get' && request()->get('filter') == 'live' ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                          
                                <!-- @include('elements.icon',['icon'=>'play-circle-outline','variant'=>'large'])
                                <div class="menu-notification-badge streams-menu-count {{(StreamsHelper::getPublicLiveStreamsCount() > 0) ? '' : 'd-none'}}">
                                    {{StreamsHelper::getPublicLiveStreamsCount()}}
                                </div> -->
                            </div>
                            <!-- <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Streams')}}</span> -->
                        </div>

                    </a>
                </li>
                @endif
            <li class="nav-item">
                <a href="{{route('my.bookmarks')}}" class="nav-link {{Route::currentRouteName() == 'my.bookmarks' ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="home-kzJKh3 home" src="/img/logos/add-square@2x.png" style="height:35px;margin-top: 5px;margin-left: 2px;" alt="home" />
                        <!-- <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            @include('elements.icon',['icon'=>'bookmark-outline','variant'=>'large'])
                        </div>
                        <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Bookmarks')}}</span> -->
                    </div>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{route('my.lists.all')}}" class="nav-link {{Route::currentRouteName() == 'my.lists.all' ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            @include('elements.icon',['icon'=>'list-outline','variant'=>'large'])
                        </div>
                        <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Lists')}}</span>
                    </div>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="{{route('my.settings',['type'=>'subscriptions'])}}" class="nav-link {{Route::currentRouteName() == 'my.settings' &&  is_int(strpos(Request::path(),'subscriptions')) ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            @include('elements.icon',['icon'=>'people-circle-outline','variant'=>'large'])
                        </div>
                        <!-- <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Subscriptions')}}</span> -->
                    </div>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{route('profile',['username'=>Auth::user()->username])}}" class="nav-link {{Route::currentRouteName() == 'profile' && (request()->route("username") == Auth::user()->username) ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                            @include('elements.icon',['icon'=>'person-circle-outline','variant'=>'large'])
                        </div>
                        <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('My profile')}}</span>
                    </div>
                </a>
            </li> -->
        @endif
        
        @if(!Auth::check())
        <li class="nav-item">
            <a href="{{route('search.get')}}" class="nav-link {{Route::currentRouteName() == 'search.get' ? 'active' : ''}} h-pill h-pill-primary d-flex justify-content-between">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="icon-wrapper d-flex justify-content-center align-items-center">
                        <img style="height:35px;margin-top: -2px;margin-left: -59px;filter: invert(100%);" class="home-kzJKh3 home" src="https://img.icons8.com/?size=512&id=9110&format=png"></img>
                    </div>
                        <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('Explore')}}</span>
                    </div>
                </a>
            </li>
            @endif
            
        <li class="nav-item">
            <a href="#" role="button" class="open-menu nav-link h-pill h-pill-primary text-muted d-flex justify-content-between">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="icon-wrapper d-flex justify-content-center align-items-center;color:white;">
                        @include('elements.icon',['icon'=>'settings-outline','variant'=>'large'])
                    </div>
                    <!-- <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate side-menu-label">{{__('More')}}</span> -->
                </div>
            </a>
        </li>
        
        @if(GenericHelper::isEmailEnforcedAndValidated())
        @if(getSetting('streams.allow_streams'))
        <li class="nav-item-live mt-2 mb-0">
            <a role="button" class="btn btn-round btn-outline-danger btn-block px-3" href="{{route('my.streams.get')}}{{StreamsHelper::getUserInProgressStream() ? '' : ( !GenericHelper::isUserVerified() && getSetting('site.enforce_user_identity_checks') ? '' : '?action=create')}}">
                        <div class="d-none d-md-flex d-xl-flex d-lg-flex justify-content-center align-items-center ml-1 text-truncate new-post-label">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <div class="stream-on-label w-100 {{StreamsHelper::getUserInProgressStream() ? '' : 'd-none'}}">
                                    <div class="d-flex align-items-center w-100">
                                        <div class="mr-4"><div class="blob red"></div></div>
                                        <div class="ml-1">{{__('On air')}} </div>
                                    </div>
                                </div>
                                <div class="stream-off-label w-100 {{StreamsHelper::getUserInProgressStream() ? 'd-none' : ''}}">
                                    <div class="d-flex  align-items-center w-100">
                                        <div class="mr-3"> @include('elements.icon',['icon'=>'ellipse','variant'=>'','classes'=>'flex-shrink-0 text-danger'])</div>
                                        <div class="ml-1">{{__('Go live')}} </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-none d-flex align-items-center justify-content-center">@include('elements.icon',['icon'=>'add-circle-outline','variant'=>'medium','classes'=>'flex-shrink-0'])</div>
                    </a>
                </li>
                @endif
        @endif
        
        <!-- @if(!getSetting('site.hide_create_post_menu'))
            @if(GenericHelper::isEmailEnforcedAndValidated())
            <li class="nav-item">
                    <a role="button" class="btn btn-round btn-primary btn-block " href="{{route('posts.create')}}">
                        <span class="d-none d-md-block d-xl-block d-lg-block ml-2 text-truncate new-post-label">{{__('New post')}}</span>
                        <span class="d-block d-md-none d-flex align-items-center justify-content-center">@include('elements.icon',['icon'=>'add-circle-outline','variant'=>'medium','classes'=>'flex-shrink-0'])</span>
                    </a>
                </li>
            @endif
            @endif -->

            
        </ul>
</div>

</div>
</body>
</html>
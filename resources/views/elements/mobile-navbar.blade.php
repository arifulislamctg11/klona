<div class="mobile-bottom-nav border-top z-index-3 py-1 neutral-bg">
    <div class="d-flex justify-content-between w-100 py-2 px-2">
    <a href="javascript:SubmitForm('form5')">
              <div class="frame-8-7EomEb frame-8">
                <img class="home-kzJKh3 home" src="/img/logos/home@2x.png" style="height:35px;" alt="home" />
                <a href="javascript:SubmitForm('form5')" onclick="window.event.stopPropagation()">
                <!-- <div class="home-soOxqW valign-text-middle home poppins-bold-white-16px" style="margin-left: -3px;
    color: white;">Home</div> -->
                </a>
              </div></a
            >
        @if(Auth::check())
            <a href="{{route('my.notifications')}}" class="h-pill h-pill-primary nav-link d-flex justify-content-between px-3 {{Route::currentRouteName() == 'my.notifications' ? 'active' : ''}}">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                        <!-- @include('elements.icon',['icon'=>'notifications-outline','variant'=>'large']) -->
                        <img class="home-kzJKh3 home" src="/img/logos/se.png" style="height:35px;margin-top: -5px;margin-left: -29px;" alt="home" />
                        <!-- <div class="menu-notification-badge notifications-menu-count {{(isset($notificationsCountOverride) && $notificationsCountOverride->total > 0 ) || (NotificationsHelper::getUnreadNotifications()->total > 0) ? '' : 'd-none'}}">
                            {{!isset($notificationsCountOverride) ? NotificationsHelper::getUnreadNotifications()->total : $notificationsCountOverride->total}}
                        </div> -->
                        <!-- <div class="home-soOxqW valign-text-middle home poppins-bold-white-16px" style="margin-left: -39px;color: white;margin-bottom: -32px;">Search</div> -->
                    </div>
                </div>
            </a>
            @if(!getSetting('site.hide_create_post_menu'))
                @if(GenericHelper::isEmailEnforcedAndValidated())
                    <a href="{{route('posts.create')}}" class="h-pill h-pill-primary nav-link d-flex justify-content-between px-3 {{Route::currentRouteName() == 'posts.create' ? 'active' : ''}}">
                        <!-- <div class="d-flex justify-content-center align-items-center">
                            <div class="icon-wrapper d-flex justify-content-center align-items-center">
                                @include('elements.icon',['icon'=>'add-circle-outline','variant'=>'large'])
                            </div>
                        </div> -->
                        <img class="home-kzJKh3 home" src="/img/logos/add-square@2x.png" style="height:35px;margin-top: -2px;margin-left: -43px;" alt="home" />
                        
                        <!-- <div class="home-soOxqW valign-text-middle home poppins-bold-white-16px" style="margin-left: -36px;color: white;margin-bottom: -32px;">Create</div> -->
                    </a>
                @endif
            @endif
            <a href="{{route('my.messenger.get')}}" class="h-pill h-pill-primary nav-link d-flex justify-content-between px-3 {{Route::currentRouteName() == 'my.messenger.get' ? 'active' : ''}}">
                <div class="d-flex justify-content-center align-items-center">
                    <!-- <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                        @include('elements.icon',['icon'=>'chatbubble-outline','variant'=>'large'])
                        <div class="menu-notification-badge chat-menu-count {{(NotificationsHelper::getUnreadMessages() > 0) ? '' : 'd-none'}}">
                            {{NotificationsHelper::getUnreadMessages()}}
                        </div>
                    </div> -->
                    <img class="home-kzJKh3 home" src="/img/logos/messages-2@2x.png" style="height:35px;margin-top: -2px;margin-left: -59px;" alt="home" />
                        
                        <!-- <div class="home-soOxqW valign-text-middle home poppins-bold-white-16px" style="margin-left: -36px;color: white;margin-bottom: -32px;">Chats</div> -->
                </div>
            </a>
        @endif
        <ahref="#" role="button" class="open-menu nav-link h-pill h-pill-primary text-muted d-flex justify-content-between">
                <div class="d-flex justify-content-center align-items-center">
                    <!-- <div class="icon-wrapper d-flex justify-content-center align-items-center position-relative">
                        @include('elements.icon',['icon'=>'chatbubble-outline','variant'=>'large'])
                        <div class="menu-notification-badge chat-menu-count {{(NotificationsHelper::getUnreadMessages() > 0) ? '' : 'd-none'}}">
                            {{NotificationsHelper::getUnreadMessages()}}
                        </div>
                    </div> -->

                   
                        <!-- <div class="home-soOxqW valign-text-middle home poppins-bold-white-16px" style="margin-left: -36px;color: white;margin-bottom: -32px;">Chats</div> -->
                        <div style="height:35px;margin-top: -2px;margin-left: -59px;color:white;" class="home-kzJKh3 home">

                            @include('elements.icon',['icon'=>'settings-outline','variant'=>'large'])
                        </div>
                    </div>
            </a>
    </div>
</div>

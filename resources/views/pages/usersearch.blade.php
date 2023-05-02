@extends('layouts.user-no-nav')
@section('page_title', __('Your feed'))

{{-- Page specific CSS --}}
@section('styles')
    {!!
        Minify::stylesheet([
            '/libs/swiper/swiper-bundle.min.css',
            '/libs/photoswipe/dist/photoswipe.css',
            '/css/pages/checkout.css',
            '/libs/photoswipe/dist/default-skin/default-skin.css',
            '/css/pages/feed.css',
            '/css/posts/post.css',
            '/css/pages/search.css',
         ])->withFullUrl()
    !!}
@stop

{{-- Page specific JS --}}
@section('scripts')
    {!!
        Minify::javascript([
            '/js/PostsPaginator.js',
            '/js/CommentsPaginator.js',
            '/js/Post.js',
            '/js/SuggestionsSlider.js',
            '/js/pages/lists.js',
            '/js/pages/feed.js',
            '/js/pages/checkout.js',
            '/libs/swiper/swiper-bundle.min.js',
            '/js/plugins/media/photoswipe.js',
            '/libs/photoswipe/dist/photoswipe-ui-default.min.js',
            '/libs/@joeattardi/emoji-button/dist/index.js',
            '/js/plugins/media/mediaswipe.js',
            '/js/plugins/media/mediaswipe-loader.js',
         ])->withFullUrl()
    !!}
@stop

@include('template.header')

@section('content')
@if($users->count() > 0)
    @foreach ($users as $user)
<div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
<div  style="width:25rem;height:10rem;margin-top:1.5rem;display:flex;flex-direction:column;justify-content:center;align-items:center;">
<div>
<img style="width:5rem;" src="{{$user->avatar}}" class="avatar"  />
</div>
<div>
{{ $user->name }}
</div>
<div>
{{ $user->email}}
</div>
  </div>
</div>
<!-- 
    {{ $user->name }}
    <img style="width:5rem;" src="{{$user->avatar}}" class="avatar"  />
-->
    @endforeach
    
   
    @else
    <p>No users found</p>
@endif
<div id="suggestions-wrapper" class="feed-suggestions-wrapper">
            @include('elements.feed.suggestions-box',['profiles'=>$suggestions, 'isMobile'=> false])
        </div>

   
    
    @include('elements.standard-dialog',[
        'dialogName' => 'comment-delete-dialog',
        'title' => __('Delete comment'),
        'content' => __('Are you sure you want to delete this comment?'),
        'actionLabel' => __('Delete'),
        'actionFunction' => 'Post.deleteComment();',
    ])


@stop












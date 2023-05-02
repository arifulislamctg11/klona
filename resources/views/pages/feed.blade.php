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

@section('content')
<div class="d-none">
<form method="POST" action="{{ route('users.search') }}">
    @csrf
    <input type="text" name="query" placeholder="Enter user name">
    <button type="submit">Search</button>
</form>

</div>
<div class="custom-margin">
@unless(count($posts) == 0)
        <div class="feed-box mt-0 pt-4 posts-wrapper">
            @include('elements.feed.posts-wrapper',['posts'=>$posts])
        </div>
        <div id="suggestions-wrapper" class="feed-suggestions-wrapper">
            @include('elements.feed.suggestions-box',['profiles'=>$suggestions, 'isMobile'=> false])
        </div>
    @else
        <div id="suggestions-wrapper" class="feed-suggestions-wrapper">
            @include('elements.feed.suggestions-box',['profiles'=>$suggestions, 'isMobile'=> false])
        </div>       
    @endunless
</div>

  
    @include('elements.standard-dialog',[
        'dialogName' => 'comment-delete-dialog',
        'title' => __('Delete comment'),
        'content' => __('Are you sure you want to delete this comment?'),
        'actionLabel' => __('Delete'),
        'actionFunction' => 'Post.deleteComment();',
    ])


@stop
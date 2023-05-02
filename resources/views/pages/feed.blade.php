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
<style>
    .popup{
        
  background:rgba(0.1,0.1,0.1,0.1);
  position:absolute;
  top:-160rem;
  right:0px;
  bottom:0px;
  left:0px;
  transform:translate('-50%','-10%');
  display:"none";
    }
    .searchform{
      height:10rem;
      display:"none" !important;
        background:white;
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    width:20rem;
margin-left:-2rem;   
}

</style>
<div style="display:flex;flex-direction:row;justify-content:center;align-items:center;" class="popup">
<div style="display:none;" class="searchform">
<form method="POST" action="{{ route('users.search') }}">
    @csrf
   <div style="margin-top:1rem;display:flex;flex-direction:column;justify-content:center;align-items:center;">
   <input style="width:15rem;" class="form-control" type="text" name="query" placeholder="Enter user name">
    <button style="margin-top:0.5rem;"  class="btn btn-primary" type="submit">Search</button>
   </div>
</form>
</div>
<div class="cancelbtn" style="display:none;margin-top:-8rem;margin-left:-2rem;">
   <img style="width:2rem;" src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/7.2.0/png/iconmonstr-x-mark-lined.png&r=0&g=0&b=0">
   </div>

</div>
<div id="othercontent">



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
</div>
</body>
</html>
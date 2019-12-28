@extends('user/app')
@section('bg-img', asset('user/img/post-bg.jpg') )
@section('head')
<link rel="stylesheet" href="{{asset('user/css/prism.css')}}">
@endsection
@section('title', $post->title )
@section('sub-heading', $post->subtitle )

@section('main-content')
 <!-- Post Content --><div id="fb-root"></div>
 <div id="fb-root"></div>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0&appId=685242558673369&autoLogAppEvents=1"></script>
 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <small>created  {{$post->created_at->diffForHumans()}}</small>
            @foreach ($post->categories as $category)
                <small class="float-right" style="margin-right: 20px">
                {{$category->name}}
                </small>
            @endforeach
            {!!htmlspecialchars_decode($post->body)!!}

            <h3>Tags </h3>

            @foreach ($post->tags as $tag)
                <small class="" style="margin-right: 20px;border-radius: 5px;border:1px solid gray;
                padding: 5px;">
                {{$tag->name}}
                </small>
            @endforeach
         </div>
        <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="10"></div>      </div>
    </div>
  </article>

  <hr>
@endsection
@section('footer')
    <script src="{{asset('user/js/prism.js')}}"></script>
@endsection

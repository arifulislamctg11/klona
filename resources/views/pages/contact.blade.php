@extends('layouts.generic')

@section('page_title', __('Contact us'))
@section('share_url', route('home'))
@section('share_title', getSetting('site.name') . ' - ' . getSetting('site.slogan'))
@section('share_description', getSetting('site.description'))
@section('share_type', 'article')
@section('share_img', asset('img/logo-black.png'))

@if(getSetting('security.recaptcha_enabled'))
    @section('meta')
        {!! NoCaptcha::renderJs() !!}
    @stop
@endif

@section('content')
    <div class="container py-5 my-5">

        <div class="col-12 col-md-8 offset-md-2 mt-5">

            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-7 content-md pr-5">
                    <form class="well" role="form" method="post" action="{{route('contact.send')}}">
                        <div class="col">
                            <h3 class="h1s text-bold">{{__("Contact us")}}</h3>
                            <p class="mb-4">{{__("Don't hesitate to contact us for any matter. We will get back to you asap.")}}</p>

                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success text-white font-weight-bold mt-2" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="email" class="form-control title-form {{ $errors->has('email') ? 'is-invalid' : '' }}"  value="{{ old('email') }}" name="email" placeholder="{{__("Email address")}}" autocomplete="email">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control title-form {{ $errors->has('subject') ? 'is-invalid' : '' }}"  value="{{ old('subject') }}" name="subject" placeholder="{{__("Subject")}}">
                                @if($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('subject')}}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" placeholder="{{__("Message")}}" rows="4">{{ old('message') }}</textarea>
                                @if($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </span>
                                @endif
                            </div>

                            @if(getSetting('security.recaptcha_enabled'))
                                <div class="form-group captcha-field">
                                    {!! NoCaptcha::display(['data-theme' => (Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme')) : Cookie::get('app_theme') )]) !!}
                                    {{--        {!! NoCaptcha::displaySubmit('register-form', 'submit now!', ['data-theme' => (Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme')) : Cookie::get('app_theme') )]) !!}--}}
                                    @error('g-recaptcha-response')
                                    <span class="text-danger" role="alert">
                                        <strong>{{__("Please check the captcha field.")}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            @endif

                            <div class="form-group">
                                <button class="btn btn-primary " type="submit">{{__("Submit")}}</button>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>

                <div class="col-12 col-md-6 d-none d-md-flex justify-content-center align-items-center">
                    <img src="{{asset("/img/contact-page.svg")}}" class="img-fluid ">
                </div>


            </div>
        </div>

    </div>
@stop

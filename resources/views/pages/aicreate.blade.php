@extends('layouts.user-no-nav')
@section('page_title', __('New AI Character'))

@section('styles')
    {!! Minify::stylesheet(['/css/posts/post.css', '/libs/dropzone/dist/dropzone.css'])->withFullUrl() !!}
@stop



@section('content')

    <div class="row">
        <div class="col-12">
            @include('elements.uploaded-file-preview-template')
            @include('elements.post-price-setup', ['postPrice' => isset($post) ? $post->price : 0])
            @include('elements.attachments-uploading-dialog')
            <div class="d-flex justify-content-between pt-4 pb-3 px-3 border-bottom">
                <h5
                    class="text-truncate text-bold  {{ Cookie::get('app_theme') == null ? (getSetting('site.default_user_theme') == 'dark' ? '' : 'text-dark-r') : (Cookie::get('app_theme') == 'dark' ? '' : 'text-dark-r') }}">
                    {{ Route::currentRouteName() == 'posts.create' ? __('New post') : __('Create Clone AI Character') }}
                </h5>
            </div>

            <div class="pl-3 pr-3 pt-2">
                <form action="create" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <div class="d-flex flex-column-reverse">
                        <div class="w-100">
                            <input type="text" id="" name="firstname" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('First Name') }}"
                                value="{{ isset($post) ? $post->text : '' }}">
                            <span class="invalid-feedback" role="alert">
                                <strong
                                    class="post-invalid-feedback">{{ __('Your post must contain more than 10 characters.') }}</strong>
                            </span>
                            <input type="text" id="" name="lastname" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Last Name') }}"
                                value="{{ isset($post) ? $post->text : '' }}">
                            <input type="number" id="" name="age" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Age') }}">
                            <input type="date" id="" name="birthdate" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Date of birth') }}">
                            <input type="text" id="" name="nationality" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Nationality') }}">
                            <input type="text" id="" name="body_type" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Type of body') }}">
                            <input type="text" id="" name="breast_size" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Breast Size') }}">
                            <input type="text" id="" name="country" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Country') }}">
                            <input type="text" id="" name="state" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('State') }}">
                            <input type="text" id="" name="city" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('City') }}">
                            <input type="text" id="" name="cultural_background"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Cultural Background') }}">
                            <input type="text" id="" name="interested_in_sexting"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Interested In Sexting') }}">
                            <input type="text" id="" name="personality" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Personality') }}">
                            <input type="text" id="" name="interests" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Interests') }}">
                            <input type="text" id="" name="bio" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Bio') }}">
                            <input type="text" id="" name="occupation" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Occupation') }}">
                            <input type="text" id="" name="relationship" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Relationship') }}">
                            <input type="text" id="" name="current_partner"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Current Partner') }}">
                            <input type="text" id="" name="personal_style" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Personal Style') }}">
                            <input type="text" id="" name="hips_width" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Hips Width') }}">
                            <input type="text" id="" name="favorite_colors_and_patterns"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Favorite Colors & Patterns') }}">
                            <input type="text" id="" name="time_period_fashion"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Time Period Fashion') }}">
                            <input type="text" id="" name="social_rank" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Social Rank') }}">
                            <input type="text" id="" name="looking_for_relationship"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Looking For Relationship') }}">
                            <input type="text" id="" name="goal_on_platform"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Goal On Platform') }}">
                            <input type="text" id="" name="speech_style" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Speech Style') }}">
                            <input type="text" id="" name="voice_style" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Voice Style') }}">
                            <input type="text" id="" name="current_home" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('Current Home') }}">
                            <input type="text" id="" name="current_workplace"
                                class="form-control border w-100" rows="3" spellcheck="false"
                                placeholder="{{ __('Current Workplace') }}">
                            <input type="text" id="" name="user_id" class="form-control border w-100"
                                rows="3" spellcheck="false" placeholder="{{ __('User ID') }}">
                            <div class="d-flex justify-content-between w-100 mb-3 mt-3">
                                <div class="d-flex">
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button
                                        class="btn btn-outline-primary post-create-button mb-0">{{ __('Save') }}</button>

                                </div>
                            </div>
                        </div>
                        <div class="dropzone-previews dropzone w-100 ppl-0 pr-0 pt-1 pb-1"></div>
                    </div>
                  </form>
            </div>

        </div>

    </div>
    </div>

@stop

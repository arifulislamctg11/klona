<?php

namespace App\Http\Controllers;

use App\Model\AI_Character;
use Illuminate\Http\Request;
use App\Providers\GenericHelperServiceProvider;
use Devfactory\Minify\Providers\JavaScript;
use App\Providers\AttachmentServiceProvider;

class AICharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aI_Characters = AI_Character::all();
        dd($aI_Characters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canPost = true;
        if(getSetting('site.enforce_user_identity_checks')){
            if(!GenericHelperServiceProvider::isUserVerified()){
                $canPost = false;
            }
        }
        // Javascript::put([
        //     'isAllowedToPost' => $canPost,
        //     'mediaSettings' => [
        //         'allowed_file_extensions' => '.' . str_replace(',', ',.', AttachmentServiceProvider::filterExtensions('videosFallback')),
        //         'max_file_upload_size' => (int)getSetting('media.max_file_upload_size'),
        //         'use_chunked_uploads' => (bool)getSetting('media.use_chunked_uploads'),
        //         'upload_chunk_size' => (int)getSetting('media.upload_chunk_size'),
        //         'max_post_description_size' => (int)getSetting('feed.min_post_description')
        //     ],
        // ]);

        return view('pages.aicreate', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return  $request;
        // die;
        $aI_Character = new AI_Character();
        $aI_Character->firstname = $request->input('firstname');
        $aI_Character->lastname = $request->input('lastname');
        $aI_Character->age = $request->input('age');
        $aI_Character->gender = $request->input('gender');
        $aI_Character->birthdate = $request->input('birthdate');
        $aI_Character->nationality = $request->input('nationality');
        $aI_Character->body_type = $request->input('body_type');
        $aI_Character->breast_size = $request->input('breast_size');
        $aI_Character->country = $request->input('country');
        $aI_Character->state = $request->input('state');
        $aI_Character->city = $request->input('city');
        $aI_Character->cultural_background = $request->input('cultural_background');
        $aI_Character->interested_in_sexting = $request->input('interested_in_sexting');
        $aI_Character->personality = $request->input('personality');
        $aI_Character->interest_id = $request->input('interests');
        $aI_Character->bio = $request->input('bio');
        $aI_Character->occupation =$request->input('occupation');
        $aI_Character->relationship =$request->input('relationship');
        $aI_Character->current_partner =$request->input('current_partner');
        $aI_Character->personal_style =$request->input('personal_style');
        $aI_Character->hips_width =$request->input('hips_width');
        // $aI_Character->favorite_colors_and_pattern_id = $request->input('favorite_colors_and_patterns');
        $aI_Character->time_period_fashion =$request->input('time_period_fashion');
        $aI_Character->social_rank =$request->input('social_rank');
        $aI_Character->looking_for_relationship =$request->input('looking_for_relationship');
        $aI_Character->goal_on_platform =$request->input('goal_on_platform');
        $aI_Character->speech_style =$request->input('speech_style');
        $aI_Character->voice_style =$request->input('voice_style');
        $aI_Character->current_home =$request->input('current_home');
        $aI_Character->current_workplace =$request->input('current_workplace');
        $aI_Character->user_id = $request->input('user_id');
        $aI_Character->save();
        return $aI_Character;

        // return redirect('products')->with('status', 'Product has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AI_Character  $aI_Character
     * @return \Illuminate\Http\Response
     */
    public function show(AI_Character $aI_Character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AI_Character  $aI_Character
     * @return \Illuminate\Http\Response
     */
    public function edit(AI_Character $aI_Character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AI_Character  $aI_Character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AI_Character $aI_Character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AI_Character  $aI_Character
     * @return \Illuminate\Http\Response
     */
    public function destroy(AI_Character $aI_Character)
    {
        //
    }
}

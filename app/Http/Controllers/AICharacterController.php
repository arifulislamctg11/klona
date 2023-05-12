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

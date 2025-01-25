<?php

namespace App\Http\Controllers;

use App\contact_detail;
use Illuminate\Http\Request;
use App\servicess;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class service extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        if (!Schema::hasColumn('servicesses',  'facebookid')) {
            //run a script perfectly here  okay 
            DB::statement('ALTER TABLE servicesses ADD COLUMN facebookid TEXT NULL');
        }


        $this->middleware('article');
    }

    public function index()
    {
        // main display  

        return view('admin_folder/services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_folder/add_services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        $service  = new servicess();
        $service->title  = $request->title;
        $service->body  = $request->body;
        $service->publish  = (isset($request->publish)) ?  $request->publish  :  'no';

        if ($request->image  != '') {

            $image = $request->file('picture');
            $getsize =  $image->getSize();
            $original_name = $image->getClientOriginalName();
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $real_path  =   $image->getRealPath();
            $image->move(public_path('picture_servic'), $new_name);

            $service->image  =    '/picture_servic/' . $new_name;

            /* //send the image to facebook. 
            $page_id = "110709393678809";
            $url = "https://graph.facebook.com/v19.0/$page_id/photos";
            $tokenmanager  =  contact_detail::first();
            $access_token =   $tokenmanager->facebookapi;
          
            $path_to_photo = "path_to_photo.jpg";

            $data = array(
                'url' => $path_to_photo
            );

            $headers = array(
                'Content-Type: application/json',
            );

            $url_with_token = "{$url}?access_token={$access_token}";

            $ch = curl_init($url_with_token);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);

            echo $response; */
        } else {

            $service->image  =    '  ';
        }


        $service->save();
        //insert image here if available


        //do not publish if public is not selected.....  
        if (isset($request->publish)) {

            $tokenmanager  =  contact_detail::first();
            $access_token =  $tokenmanager->facebookapi;

            $body  =  "$request->title \n\n" . $request->body   . "\n \n   https://wholeplanetinitiative.org/newsletter/" . $service->id . "/view_post";

            $facebookmessage = str_replace(['<p>', '</p>', '<div>', '</div>'], ["\n", "\n", "\n", "\n"], $body);


            $page_id  =  110709393678809;
            if ($service->image  ==    '  ') {
                $url = "https://graph.facebook.com/v19.0/$page_id/feed";

                $data = array(
                    'message' =>  strip_tags($facebookmessage),
                    'published' => true,
                    'access_token' => $access_token
                );
            } else {


                $url = "https://graph.facebook.com/v19.0/$page_id/photos?access_token=$access_token";

                $data = array(
                    'message' =>  strip_tags($facebookmessage),
                    'published' => true,
                    'access_token' => $access_token,
                    'url' => 'https://' . $_SERVER['HTTP_HOST'] . "/" . $service->image,
                );
            }






            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);

            $datas  =   json_decode($response, true);


            if (isset($datas['id'])) {



                $pageupdate  =  servicess::find($service->id);

                $pageupdate->facebookid =  $datas['id'];
                $pageupdate->save();
            }
        }
        //update  the  api  key

        return  redirect('/newsletters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $all = array('edit' => 'edit', 'id' => $id);

        return view('admin_folder/add_services')->with($all);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $service  = servicess::find($id);
        $service->title  = $request->title;
        $service->body  = $request->body;
        $service->publish  = (isset($request->publish)) ?  $request->publish  :  'no';

        if ($request->image  != '') {

            $image = $request->file('picture');
            $getsize =  $image->getSize();
            $original_name = $image->getClientOriginalName();
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $real_path  =   $image->getRealPath();
            $image->move(public_path('picture_servic'), $new_name);

            $service->image  =    '/picture_servic/' . $new_name;
        } else {
        }


        $service->save();

        if ($service->facebookid  !=  NULL) {
            //this will be for delete purpose

            $tokenmanager  =  contact_detail::first();
            $access_token =   $tokenmanager->facebookapi;
            $page_post_id =  $service->facebookid;

            $url = "https://graph.facebook.com/v19.0/$page_post_id?access_token=$access_token";

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                //echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);
        }


        if(isset($request->publish)) { 

            $tokenmanager  =  contact_detail::first();
            $access_token =  $tokenmanager->facebookapi  ;
    
            $body  =  "$request->title \n\n". $request->body   . "\n \n   https://wholeplanetinitiative.org/newsletter/".$service->id."/view_post" ;
    
            $facebookmessage = str_replace(['<p>', '</p>', '<div>', '</div>'], ["\n", "\n", "\n", "\n"], $body);
    
    
             $page_id  =  110709393678809 ;
            if(  $service->image  ==    '  '){
                $url = "https://graph.facebook.com/v19.0/$page_id/feed";
    
                $data = array(
                    'message' =>  strip_tags($facebookmessage),
                    'published' => true,
                    'access_token' => $access_token
                );
        
    
            }else{
              
        
                $url = "https://graph.facebook.com/v19.0/$page_id/photos?access_token=$access_token";
    
                $data = array(
                    'message' =>  strip_tags($facebookmessage),
                    'published' => true,
                    'access_token' => $access_token,
                    'url' => 'https://'.$_SERVER['HTTP_HOST']."/".$service->image, 
                );
    
    
               
            }
    
    
          
           
       
    
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
            $response = curl_exec($ch);
    
            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }
    
            curl_close($ch);
    
            $datas  =   json_decode($response, true);
    
    
            if (isset($datas['id'])) {
    
    
    
                $pageupdate  =  servicess::find($service->id);
    
                $pageupdate->facebookid =  $datas['id'];
                $pageupdate->save();
            }
    
    
        }
    
        return  redirect('/newsletters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $service  = servicess::find($id);

        if ($service->facebookid !=  NULL) {
            $tokenmanager  =  contact_detail::first();
            $access_token =   $tokenmanager->facebookapi;
            $page_post_id =  $service->facebookid;

            $url = "https://graph.facebook.com/v19.0/$page_post_id?access_token=$access_token";

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                //echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);

            //  echo $response;


        }

        $service->delete();

        return   redirect('/newsletters');
    }
}

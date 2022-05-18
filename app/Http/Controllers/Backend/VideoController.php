<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoTag;
use App\Models\UserVideoTag;
use App\Models\ChannelVideo;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Cohensive\Embed\Facades\Embed;
use File;
use Auth;
class VideoController extends Controller
{
    public function create(){
        return view('backend.pages.video.create');
    }
    public function manage(){
        $videos = Video::where('user_id',Auth::user()->id)->get();
        return view('backend.pages.video.manage',compact('videos'));
    }
    public function store(Request $request){

        $save_image = null;
        $file = null;
        $video = null;
        $slug = Str::slug($request->title);
        $count = Video::where('slug',$slug)->count();
        $embed = Embed::make($request->link)->parseUrl();
       
        if (!$embed){

        }
        else{
            if ($count > 0) {
                $slug = $request->title . (string)Carbon::now();
                $slug = Str::slug($slug);
            }

            if ($request->image) {
                $image = $request->file('image');
                $name_gen = time() . '.' . $image->extension();
                Image::make($image)->resize(270,169)->save('uploads/video/thambnail/'.$name_gen);
                $save_image = 'uploads/video/thambnail/'.$name_gen;
            }
            if ( $request->video ) 
            {
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();

                $request->video->move(public_path('uploads/video/file'), $fileName);
                $video             = 'uploads/video/file/' . $fileName;
            }
            if ( $request->file ) 
            {
                $file                   = $request->file('file');
                $fileName = time().'.'. $request->file->extension();
                $request->file->move(public_path('uploads/video/thambnail'), $fileName);
                $file             = 'uploads/video/thambnail/' . $fileName;
                
            }
            $embed->setAttribute(['width' => '100%','height'=>'600px']);
            $video_id =  Video::insertGetId([
                'user_id'             => Auth()->User()->id,
                'title'                     => $request->title,
                'description'               => $request->description,
                'image'                     => $save_image,
                'video'                     => $video,
                'file'                      => $file,
                'price_type'                => $request->price_type,
                'price'                     => $request->price,
                'discount'                  => $request->discount,
                'category_id'               => $request->category_id,
                'sub_category_id'           => $request->subcategory_id,
                'url'                       => $request->link,
                'link_youtube'              => $embed->getHtml(),
                'link_g_drive'              => $request->link_g_drive,
                'link_dropbox'              => $request->link_dropbox,
                'link_git_hub'              => $request->link_git_hub,
                'slug'                      => $slug,
                'created_at'                => Carbon::now(),
            ]);
            

            if ($request->tag_names) {
                $tags = $request->tag_names;
                foreach ($tags as $tag_name) {
                    VideoTag::insert([
                        'video_id'              => $video_id,
                        'tag_name'              => $tag_name,
                        'created_at'            => Carbon::now(),
                    ]);
                    $userVideoTag = UserVideoTag::where('video_tag_name',$tag_name)->first();
                    if($userVideoTag == null){
                            UserVideoTag::insert([
                            'user_id'              => Auth::user()->id,
                            'video_tag_name'              => $tag_name,
                            'status'=> 1,
                            'created_at'            => Carbon::now(),
                        ]);
                    }
                }
            }
            if ($request->channel != 0) {
                $data = LibraryBook::insert([
                'video_id'               => $video_id,
                'library_id'            => $request->library_id,
                'created_at'            => Carbon::now(),
            ]);
        }
            return redirect()->route('video.manage');
            }
        
    }
    public function delete($id){
        $video_id =  Video::find($id)->delete();
        return redirect()->back();
    }
    public function vidoeDownload($id){
        $video              = Video::where('id',$id)->first();
        $video              = Video::Find($video->id);
        $download           = $video->download + 1;
        $video->download    = $download;
        $video->save();
        return response()->download(public_path($video->file));
    }
}

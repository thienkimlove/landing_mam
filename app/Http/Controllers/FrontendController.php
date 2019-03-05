<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendController extends Controller
{

    public function index()
    {
        $page = 'index';

        $meta = [
            'meta_title' => 'Mầm hoa xuân',
            'meta_desc' => 'Mầm hoa xuân',
            'meta_keywords' => 'Mầm hoa xuân',
            'meta_image' => url('frontend/images/logo.png'),
            'meta_url' => url('/'),
        ];

        $homePosts = Post::where('status', true)
            ->where('is_home', true)
            ->latest('updated_at')
            ->get();

        $homeVideos = Video::where('status', true)
            ->where('is_home', true)
            ->latest('updated_at')
            ->get();


        return view('frontend.index', compact(
            'page',
            'homePosts',
            'homeVideos'
        ))->with($meta);
    }

    public function landing1()
    {
        $page = 'landing1';
        $meta = [
            'meta_title' => 'Mầm hoa xuân',
            'meta_desc' => 'Mầm hoa xuân',
            'meta_keywords' => 'Mầm hoa xuân',
            'meta_image' => url('frontend/images/logo.png'),
            'meta_url' => url('/'),
        ];

        return view('frontend.landing1', compact('page'))->with($meta);
    }

    public function landing2()
    {
        $page = 'landing2';
        $meta = [
            'meta_title' => 'Sâm tố nữ',
            'meta_desc' => 'Sâm tố nữ',
            'meta_keywords' => 'Sâm tố nữ',
            'meta_image' => url('frontend/images/logo.png'),
            'meta_url' => url('/'),
        ];

        return view('frontend.landing2', compact('page'))->with($meta);
    }

    public function landing3()
    {
        $page = 'landing3';
        $meta = [
            'meta_title' => 'Trắng da White-Plus',
            'meta_desc' => 'Trắng da White-Plus',
            'meta_keywords' => 'Trắng da White-Plus',
            'meta_image' => url('frontend/images/logo.png'),
            'meta_url' => url('/'),
        ];

        return view('frontend.landing3', compact('page'))->with($meta);
    }


    public function policy()
    {
        $page = 'lien-he';
        $meta = [
            'meta_title' => 'Mầm hoa xuân',
            'meta_desc' => 'Mầm hoa xuân',
            'meta_keywords' => 'Mầm hoa xuân',
            'meta_image' => url('frontend/images/logo.png'),
            'meta_url' => route('frontend.policy'),
        ];

        return view('frontend.policy', compact('page'))->with($meta);
    }

    public function contact()
    {
        $page = 'lien-he';
        $meta = [];

        $meta['meta_title'] = 'Liên hệ chúng tôi';
        $meta['meta_desc'] = 'Liên hệ chúng tôi';
        $meta['meta_keywords'] = 'Liên hệ chúng tôi';
        $meta['meta_image'] = url('frontend/images/logo.png');
        $meta['meta_url'] =route('frontend.contact');


        return view('frontend.contact', compact('page'))->with($meta);
    }

    public function tag($value)
    {
        $page = 'tag';
        $meta = [];


        $tag = Tag::findBySlug($value);

        if ($tag) {
            $meta_title = $tag->name;
            $meta_desc = $tag->desc;

            $posts = Post::publish()
                ->whereHas('tags', function ($q) use ($tag) {
                    $q->where('tag_id', $tag->id);
                })
                ->orderBy('updated_at', 'desc')
                ->paginate(10);

            $meta['meta_title'] = $meta_title;
            $meta['meta_desc'] = $meta_desc;
            $meta['meta_keywords'] = '';
            $meta['meta_image'] = url('frontend/images/logo.png');
            $meta['meta_url'] = route('frontend.tag', $value);

            return view('frontend.tag', compact('posts', 'tag', 'page'))->with($meta);
        } else {
            redirect('/');
        }
    }

    public function main($value)
    {
        if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
            $mainPost = Post::findBySlug($matches[1]);
            if ($mainPost) {

                $page = 'posts';
                $meta = [];

                $meta['meta_title'] = $mainPost->name;
                $meta['meta_desc'] = $mainPost->desc;
                $meta['meta_keywords'] = ($mainPost->tagList) ? implode(',', $mainPost->tagList) : null;
                $meta['meta_image'] = url($mainPost->image);
                $meta['meta_url'] = route('frontend.main', $mainPost->slug.'.html');

                $hotNews = Post::where('status', true)->where('id', '!=', $mainPost->id)->latest('updated_at', 'desc')->limit(10)->get();

                return view('frontend.post', compact('mainPost', 'page', 'hotNews'))->with($meta);
            } else {
                return redirect('/');
            }
        } else {
            $category = Category::findBySlug($value);

            if ($category) {

                if ($category->children->count() == 0) {

                    if (Post::publish()->where('category_id', $category->id)->count() == 1) {
                        $postOnly = Post::publish()->where('category_id', $category->id)->first();
                        return redirect(url($postOnly->slug.'.html'));
                    }

                    //child categories
                    $posts = Post::publish()
                        ->where('category_id', $category->id)
                        ->latest('updated_at')
                        ->paginate(6);
                } else {
                    //parent categories
                    $posts = Post::publish()
                        ->whereIn('category_id', $category->children->pluck('id')->all())
                        ->latest('updated_at')
                        ->paginate(6);

                }
                $page = $category->slug;
                $meta = [];
                $meta['meta_title'] = $category->name;
                $meta['meta_desc'] = ($category->desc)? $category->desc : null;
                $meta['meta_keywords'] = '';
                $meta['meta_image'] = url('frontend/images/logo.png');
                $meta['meta_url'] = route('frontend.main', $category->slug);

                return view('frontend.category', compact(
                    'category', 'posts', 'page'
                ))->with($meta);
            } else {
                return redirect('/');
            }
        }
    }

    public function video($value = null)
    {
        $page = 'video';

        $meta = [];

        $meta['meta_title'] = 'Video';
        $meta['meta_desc'] = 'Video';
        $meta['meta_keywords'] = 'Video';
        $meta['meta_image'] = url('frontend/images/logo.png');
        $meta['meta_url'] =route('frontend.video');

        $mainVideo = null;
        $videos = Video::latest('updated_at')->paginate(5);
        $latestVideos = null;

        if ($value) {
            $mainVideo = Video::findBySlug($value);
            if ($mainVideo) {
                $meta_title = ($mainVideo->seo_name) ? $mainVideo->seo_name : $mainVideo->name;
                $meta_desc = $mainVideo->desc;
                $meta_keywords = $mainVideo->keywords;
                $mainVideo->update(['views' => (int)$mainVideo->views + 1]);


                $meta['meta_title'] = $meta_title;
                $meta['meta_desc'] = $meta_desc;
                $meta['meta_keywords'] = $meta_keywords;
                $meta['meta_image'] = url($mainVideo->image);
                $meta['meta_url'] = route('frontend.video', $mainVideo->slug);
                $latestVideos = Video::latest('updated_at')->limit(5)->get();
                return view('frontend.video_detail', compact('videos', 'mainVideo', 'latestVideos', 'page'))->with($meta);
            } else {
                return redirect('/');
            }
        }

        return view('frontend.video', compact('videos', 'mainVideo', 'latestVideos', 'page'))->with($meta);

    }

    public function saveContact(Request $request)
    {
        $data = $request->all();
        $redirectUrl = null;

        if (isset($data['redirect_url'])) {
            $redirectUrl = $data['redirect_url'];
            unset($data['redirect_url']);
        }

        if (!empty($data['name']) && !empty($data['address']) && !empty($data['phone'])) {

            Contact::create([
                'name' => isset($data['name'])? $data['name'] : "N/A",
                'phone' => $data['phone'],
                'address' => $data['address'],
                'content' => isset($data['content']) ? $data['content'] : 'N/A',
                'status' => 'RECEIVE'
            ]);
        } else {
            //\Log::info($data);
        }


        if ($redirectUrl) {
            return redirect()->to($redirectUrl.'?success=1');
        }

        return redirect('/');

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::all();
        
        return view('content.blogs', compact('blogs'));
    }
    public function blog()
    {   
        $blogs = Blogs::orderBy('id', 'DESC')->get();
      
        return view('web.content.blogs', compact('blogs'));
    }
    public function show($slug)
    {
        $Blogs = Blogs::where('slug', $slug)->first();
        $blg = Blogs::orderBy('created_at', 'DESC')->take(5)->get();
        // dd($Blogs);die;
        return view('web.parts.blog-details', compact('Blogs', 'blg'));
    }
    public function show_index(){
        $blog_index = Blogs::orderBy('created_at', 'DESC')->take(4)->get();
        // $blog_index = [];
        return view('web.content.index', compact('blog_index'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string',
    //         'short_description' => 'required|string',
    //         'image' => 'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
    //         'content' => 'required|string',
    //     ]);

    //     try {
    //         $blog = new Blogs;
    //         $blog->name = $validated['name'];
    //         $blog->slug = Str::slug($validated['name']);
    //         $blog->short_description = $validated['short_description'];
    //         $blog->content = $validated['content'];
    //         if ($request->file('image')) {
    //             $file = $request->file('image');
    //             $name = time() . $file->getClientOriginalName();
    //             $image['filePath'] = $name;
    //             $file->move(public_path() . '/new-assets/img/blog/', $name);
    //             $blog->image = 'new-assets/img/blog/' . $name;
    //         }
    //         $blog->save();
    //         return ['status' => '200', 'msg' => 'Blog Created successfully!'];
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => $e, 'msg' => $blog]);
    //     }
    // }
   public function create(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:blogs,slug',
            'short_description' => 'required|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
            'content'           => 'required|string',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:500',
            'meta_key'          => 'nullable|string|max:255',
        ]);

        try {
            $blog       = new Blogs;
            $blog->name = $validated['name'];

            // Handle slug - use provided slug or auto-generate from name
            if (! empty($validated['slug'])) {
                $blog->slug = Str::slug((strtolower($validated['slug'])));
            } else {
                $blog->slug = Str::slug($validated['name']);
            }
            // dd($blog->slug);
            $blog->short_description = $validated['short_description'];
            $blog->content           = $validated['content'];

            // Add meta fields
            $blog->meta_title       = $validated['meta_title'] ?? null;
            $blog->meta_description = $validated['meta_description'] ?? null;
            $blog->meta_key         = $validated['meta_key'] ?? null;

            // Handle image upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $file->move(public_path('/new-assets/img/blog/'), $name);
                $blog->image = 'new-assets/img/blog/' . $name;
            }

            $blog->save();

            return response()->json([
                'status' => '200',
                'msg'    => 'Blog Created successfully!',
                'data'   => $blog,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => '500',
                'msg'    => 'Error creating blog: ' . $e->getMessage(),
            ], 500);
        }
    }
        public function update($blogs_id, Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:blogs,slug,' . $blogs_id,
            'short_description' => 'required|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:1048',
            'content'           => 'required|string',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:500',
            'meta_key'          => 'nullable|string|max:255',
        ]);

        try {
            $blog       = Blogs::findOrFail($blogs_id);
            $blog->name = $validated['name'];

            // Handle slug - use provided slug or auto-generate from name
            if (! empty($validated['slug'])) {
                $blog->slug = Str::slug(strtolower($validated['slug']));
            } else {
                $blog->slug = Str::slug($validated['name']);
            }

            $blog->short_description = $validated['short_description'];
            $blog->content           = $validated['content'];

            // Add meta fields
            $blog->meta_title       = $validated['meta_title'] ?? null;
            $blog->meta_description = $validated['meta_description'] ?? null;
            $blog->meta_key         = $validated['meta_key'] ?? null;

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($blog->image && file_exists(public_path($blog->image))) {
                    unlink(public_path($blog->image));
                }

                $file = $request->file('image');
                $name = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $file->move(public_path('/new-assets/img/blog/'), $name);
                $blog->image = 'new-assets/img/blog/' . $name;
            }

            $blog->save();

            return response()->json([
                'status' => '200',
                'msg'    => 'Blog Updated successfully!',
                'data'   => $blog,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => '500',
                'msg'    => 'Error updating blog: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function edit($blogs)
    {
        $blogs = Blogs::findOrFail($blogs);
        return view('form.admin-blog.edit_blog_form', compact('blogs'));
    }


    // public function update($blogs_id, Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string',
    //         'short_description' => 'required|string',
    //         'image' => 'image|mimes:jpg,jpeg,png,webp,svg|max:1048',
    //         'content' => 'required|string',
    //     ]);

    //     try {
    //         $blog =  Blogs::findOrFail($blogs_id);
    //         $blog->name = $validated['name'];
    //         $blog->slug = Str::slug($validated['name']);
    //         $blog->short_description = $validated['short_description'];
    //         $blog->content = $validated['content'];

    //         if ($request->file('image')) {
    //             if ($blog->image) {
    //                 if (file_exists(public_path() . '/' . $blog->image)) {
    //                     unlink(public_path() . '/' . $blog->image);
    //                 }
    //             };
    //             $file = $request->file('image');
    //             $name = time() . $file->getClientOriginalName();
    //             $image['filePath'] = $name;
    //             $file->move(public_path() . '/new-assets/img/blog/', $name);
    //             $blog->image = 'new-assets/img/blog/' . $name;
    //         } else {
    //             $blog->save();
    //         }
    //         $blog->save();

    //         return ['status' => '200', 'msg' => 'Course Updated successfully!'];
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => $e, 'msg' => $blog]);
    //     }
    // }

    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        $blogs->delete($id);
        if ($blogs->image) {
            if (file_exists(public_path() . '/' . $blogs->image)) {
                unlink(public_path() . '/' . $blogs->image);
            }
        };
        return ['status' => '200', 'msg' => 'content deleted successfully!'];
    }
}

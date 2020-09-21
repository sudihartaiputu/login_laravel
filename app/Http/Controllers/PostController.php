<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Posts;
use App\Kategori;
use App\Tags;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::paginate(10);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tags::all();
        return view('admin.post.create', compact('kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'judul' => 'required|min:3',
            'konten' => 'required',
            'gambar' => 'required',
        ]);
        // dd($request->all());
        $gambar = $request->gambar;
        $new_gambar = time() . "_" . $gambar->getClientOriginalName();
        $post = Posts::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => 'upload/posts/' . $new_gambar,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('upload/posts/', $new_gambar);
        return redirect('/post')->with('sukses', 'Postingan berhasil di simpan');
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
        $kategori = Kategori::all();
        $tag = Tags::all();
        $post = Posts::findorfail($id);
        return view('admin.post.edit', compact('post', 'tag', 'kategori'));
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
        $this->validate($request, [
            'kategori_id' => 'required',
            'judul' => 'required|min:3',
            'konten' => 'required',
        ]);
        // dd($request->all());

        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            unlink($post->gambar);
            $gambar = $request->gambar;
            $new_gambar = time() . "_" . $gambar->getClientOriginalName();
            $gambar->move('upload/posts/', $new_gambar);

            $post_data = [
                'kategori_id' => $request->kategori_id,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => 'upload/posts/' . $new_gambar,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $post_data = [
                'kategori_id' => $request->kategori_id,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'slug' => Str::slug($request->judul)
            ];
        }

        $post->tags()->sync($request->tags);
        $post->update($post_data);

        return redirect('/post')->with('sukses', 'Postingan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();
        return redirect()->back()->with('sukses', 'Postingan berhasil di pindahkan ke tempat sampah');
    }
    public function sampah()
    {
        $post = Posts::onlyTrashed()->paginate(10);
        return view('admin.post.sampah', compact('post'));
    }
    public function restore($id)
    {
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('sukses', 'Postingan berhasil di Restore');
    }
    public function kill($id)
    {
        $post = Posts::withTrashed()->where('id', $id)->first();
        unlink($post->gambar);
        $post->tags()->detach();
        $post->forceDelete();
        return redirect()->back()->with('sukses', 'Postingan berhasil di Hapus Permanen');
    }
    public function isi($slug)
    {
        $postsemua = Posts::orderBy('created_at', 'desc')->paginate(4);
        $kategori_widget = Kategori::all();
        $tags = Tags::all();
        $data = Posts::where('slug', $slug)->get();
        if (!$data->count() > 0) return abort(404);
        // dd($materi);
        return view('welcome.isi_post', compact('data', 'postsemua', 'kategori_widget', 'tags'));
    }
    public function list_post()
    {
        $kategori_widget = Kategori::all();
        $data = Posts::latest()->paginate(8);

        // dd($materi);
        return view('welcome.list_post', compact('data', 'kategori_widget'));
    }
    public function list_kategori(kategori $kategori)
    {
        $kategori_widget = Kategori::all();
        $data = $kategori->posts()->paginate();
        return view('welcome.list_post', compact('data', 'kategori_widget'));
    }
    public function cari(Request $request)
    {
        $kategori_widget = Kategori::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul', 'like', '%' . $request->cari . '%')->paginate(8);
        return view('welcome.list_post', compact('data', 'kategori_widget'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use File;
use App\Jobs\ProductJob;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //BUAT QUERY MENGGUNAKAN MODEL PRODUCT, DENGAN MENGURUTKAN DATA BERDASARKAN CREATED_AT
        //KEMUDIAN LOAD TABLE YANG BERELASI MENGGUNAKAN EAGER LOADING WITH()
        //ADAPUN CATEGORY ADALAH NAMA FUNGSI YANG NNTINYA AKAN DITAMBAHKAN PADA PRODUCT MODEL
        $product = Product::with(['category'])->orderBy('created_at', 'DESC');

        //JIKA TERDAPAT PARAMETER PENCARIAN DI URL ATAU Q PADA URL TIDAK SAMA DENGAN KOSONG
        if (request()->q != '') {
            //MAKA LAKUKAN FILTERING DATA BERDASARKAN NAME DAN VALUENYA SESUAI DENGAN PENCARIAN YANG DILAKUKAN USER
            $product = $product->where('name', 'LIKE', '%' . request()->q . '%');
        }
        //TERAKHIR LOAD 10 DATA PER HALAMANNYA
        $product = $product->paginate(10);
        //LOAD VIEW INDEX.BLADE.PHP YANG BERADA DIDALAM FOLDER PRODUCTS
        //DAN PASSING VARIABLE $PRODUCT KE VIEW AGAR DAPAT DIGUNAKAN
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //QUERY UNTUK MENGAMBIL SEMUA DATA CATEGORY
    $category = Category::orderBy('name', 'DESC')->get();
    //LOAD VIEW create.blade.php` YANG BERADA DIDALAM FOLDER PRODUCTS
    //DAN PASSING DATA CATEGORY
    return view('products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //VALIDASI REQUESTNYA
    $this->validate($request, [
        'name' => 'required|string|max:100',
        'description' => 'required',
        'category_id' => 'required|exists:categories,id', //CATEGORY_ID KITA CEK HARUS ADA DI TABLE CATEGORIES DENGAN FIELD ID
        'price' => 'required|integer',
        'weight' => 'required|integer',
        'image' => 'required|image|mimes:png,jpeg,jpg' //GAMBAR DIVALIDASI HARUS BERTIPE PNG,JPG DAN JPEG

    ]);

    //JIKA FILENYA ADA
    if ($request->hasFile('image')) {
        //MAKA KITA SIMPAN SEMENTARA FILE TERSEBUT KEDALAM VARIABLE FILE
        $file = $request->file('image');
        //KEMUDIAN NAMA FILENYA KITA BUAT CUSTOMER DENGAN PERPADUAN TIME DAN SLUG DARI NAMA PRODUK. ADAPUN EXTENSIONNYA KITA GUNAKAN BAWAAN FILE TERSEBUT
        $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        //SIMPAN FILENYA KEDALAM FOLDER PUBLIC/PRODUCTS, DAN PARAMETER KEDUA ADALAH NAMA CUSTOM UNTUK FILE TERSEBUT
        $file->storeAs('public/products', $filename);

        //SETELAH FILE TERSEBUT DISIMPAN, KITA SIMPAN INFORMASI PRODUKNYA KEDALAM DATABASE
        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename, //PASTIKAN MENGGUNAKAN VARIABLE FILENAM YANG HANYA BERISI NAMA FILE SAJA (STRING)
            'price' => $request->price,
            'weight' => $request->weight,
            'status' => $request->status
        ]);
        //JIKA SUDAH MAKA REDIRECT KE LIST PRODUK
        return redirect(route('product.index'))->with(['success' => 'Produk Baru Ditambahkan']);
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //TAMBAHKAN product KEDALAM ARRAY WITHCOUNT()
    //FUNGSI INI AKAN MEMBENTUK FIELD BARU YANG BERNAMA product_count
    $category = Category::withCount(['child', 'product'])->find($id);
    //KEMUDIAN PADA IF STATEMENTNYA KITA CEK JUGA JIKA = 0
    if ($category->child_count == 0 && $category->product_count == 0) {
        $category->delete();
        return redirect(route('category.index'))->with(['success' => 'Kategori Dihapus!']);
    }
    return redirect(route('category.index'))->with(['error' => 'Kategori Ini Memiliki Anak Kategori!']);
    }
    public function massUploadForm()
    {
    $category = Category::orderBy('name', 'DESC')->get();
    return view('products.bulk', compact('category'));
    }
    public function massUpload(Request $request)
{
  //VALIDASI DATA YANG DIKIRIM
    $this->validate($request, [
        'category_id' => 'required|exists:categories,id',
        'file' => 'required|mimes:xlsx' //PASTIKAN FORMAT FILE YANG DITERIMA ADALAH XLSX
    ]);

  	//JIKA FILE-NYA ADA
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '-product.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $filename); //MAKA SIMPAN FILE TERSEBUT DI STORAGE/APP/PUBLIC/UPLOADS

        //BUAT JADWAL UNTUK PROSES FILE TERSEBUT DENGAN MENGGUNAKAN JOB
        //ADAPUN PADA DISPATCH KITA MENGIRIMKAN DUA PARAMETER SEBAGAI INFORMASI
        //YAKNI KATEGORI ID DAN NAMA FILENYA YANG SUDAH DISIMPAN
        ProductJob::dispatch($request->category_id, $filename);
        return redirect()->back()->with(['success' => 'Upload Produk Dijadwalkan']);
        }
    }
}

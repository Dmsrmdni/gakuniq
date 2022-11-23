<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjangs = Keranjang::where('status', 'keranjang')->with('produk', 'user')->latest()->get();
        $total_keranjangs = Keranjang::where('status', 'keranjang')->count();
        return view('admin.keranjang.index', compact('keranjangs', 'total_keranjangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produks = Produk::all();
        $users = User::where('role', 'costumer')->get();
        return view('admin.keranjang.create', compact('produks', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = new Keranjang();
        $keranjangs->user_id = $request->user_id;
        $keranjangs->produk_id = $request->produk_id;
        $keranjangs->ukuran = $request->ukuran;
        $keranjangs->warna = $request->warna;
        $keranjangs->jumlah = $request->jumlah;
        $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('toast_success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $produks = Produk::all();
        $users = User::all();
        return view('admin.keranjang.edit', compact('keranjangs', 'produks', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'ukuran' => 'required',
            'jumlah' => 'required',
        ]);

        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->user_id = $request->user_id;
        $keranjangs->produk_id = $request->produk_id;
        $keranjangs->ukuran = $request->ukuran;
        $keranjangs->jumlah = $request->jumlah;
        $diskon = (($keranjangs->produk->diskon / 100) * $keranjangs->produk->harga);
        $keranjangs->total_harga = ($keranjangs->produk->harga * $request->jumlah) - $diskon;
        $keranjangs->save();
        return redirect()
            ->route('keranjang.index')->with('toast_info', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->delete();
        return redirect()
            ->route('keranjang.index')->with('toast_error', 'Data has been deleted');

    }

    public function destroyAll()
    {
        DB::table('keranjangs')->where('status', 'keranjang')->delete();
        return redirect()
            ->route('keranjang.index')->with('toast_error', 'All Data has been deleted');
    }
}

// <!DOCTYPE html>

// <!-- =========================================================
// * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
// ==============================================================
// * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
// * Created by: ThemeSelection
// * License: You must have a valid license purchased in order to legally use the theme for your project.
// * Copyright ThemeSelection (https://themeselection.com)
// =========================================================
// -->
// <!-- beautify ignore:start -->
// {{-- <html lang="en">
//   <head>
//     <meta charset="utf-8" />
//     <meta
//       name="viewport"
//       content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
//     />

//     <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
//     <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
//     <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

//     <!--end::Global Stylesheets Bundle-->
//     <!--Begin::Google Tag Manager -->
//     <script>
//         (function(w, d, s, l, i) {
//             w[l] = w[l] || [];
//             w[l].push({
//                 'gtm.start': new Date().getTime(),
//                 event: 'gtm.js'
//             });
//             var f = d.getElementsByTagName(s)[0],
//                 j = d.createElement(s),
//                 dl = l != 'dataLayer' ? '&amp;l=' + l : '';
//             j.async = true;
//             j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
//             f.parentNode.insertBefore(j, f);
//         })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
//     </script>

//     <title>gakuniq</title>

//     <meta name="description" content="" />

//     <!-- Icons. Uncomment required icon fonts -->
//     <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

//     <!-- Core CSS -->
//     <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
//     <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
//     <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

//     <!-- Vendors CSS -->
//     <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
//     <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
//     <!-- Page CSS -->

//     <!-- Helpers -->
//     <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

//     <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
//     <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
//     <script src="{{ asset('assets/js/config.js') }}"></script>

//   </head>

//   <body>
//     <!-- Layout wrapper -->
//     <div class="layout-wrapper layout-content-navbar">
//       <div class="layout-container">
//         <!-- Menu -->
//         @include('sweetalert::alert')

//         @include('admin.layouts.components.sidebar')

//         <!-- Layout container -->
//         <div class="layout-page">
//             @include('admin.layouts.components.navbar')
//           <!-- Navbar -->

//           <!-- / Navbar -->

//           <!-- Content wrapper -->
//           <div class="content-wrapper">
//             <!-- Content -->

//             <div class="container-xxl flex-grow-1 container-p-y">
//                 @yield('content')
//             </div>
//             <!-- / Content -->

//             <!-- Footer -->
//           @include('admin.layouts.components.footer')
//             <!-- / Footer -->

//             <div class="content-backdrop fade"></div>
//           </div>
//           <!-- Content wrapper -->
//         </div>
//         <!-- / Layout page -->
//       </div>

//       <!-- Overlay -->
//       <div class="layout-overlay layout-menu-toggle"></div>
//     </div>
//     <!-- / Layout wrapper -->
//     <!-- Core JS -->
//     <!-- build:js assets/vendor/js/core.js -->
//     <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
//     <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
//     <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
//     <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
//     <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
//     <!-- endbuild -->

//     <!-- Vendors JS -->
//     <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

//     <!-- Main JS -->
//     <script src="{{ asset('assets/js/main.js') }}"></script>

//     <!-- Page JS -->
//     <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

//     <script async defer src="https://buttons.github.io/buttons.js"></script>

//     <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
//     <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
//     <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
//     <script>
//         $(document).ready(function() {
//             $('#dataTable').DataTable();
//         });
//     </script>
//     <script>
//         document.addEventListener('trix-file-accept', function(e) {
//             e.preventDefault();
//         });
//     </script>
//     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
//   </body>
// </html> --}}

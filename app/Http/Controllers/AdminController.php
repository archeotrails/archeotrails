<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        return view('admin.dashboard'); // Make sure this view file exists in 'resources/views/admin/dashboard.blade.php'
    }
}

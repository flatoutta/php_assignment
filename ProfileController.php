<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
  public function add()
  {
    return veiw('admin.profile.create');
  }
  
  public function create()
  {
    return redirect('admin/profile/create');
  }
  
  public function edit()
  {
    return veiw('admin.profile.edit');
  }
  
  public function update()
  {
    return redirect('admin/profile/edit');
  }
}

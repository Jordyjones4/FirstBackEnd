@extends('layouts.layout')
@section('content')
    <div class="row">
      <div class="col-2 p-0">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 720px">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Sidebar</span>
          </a>
          <hr />
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page"> Profile </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white"> Friends </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white"> Transaction History </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-10">
        
                
                    <h4>finestarix Profile</h4>
                    <p>This information will be displayed publicly so be carfull what you share</p>
                
                <div class="mb-4">
                    <div class="row">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-8">
                                    <label for="Username" class="form-label">Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="Level" class="form-label">Level</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="Fullname" class="form-label">Fullname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-1">
                            Photo
                            <img src="{{asset(Auth::user()->profilepicture)}}" alt="" style="height: 150px; width: auto; overflow: hidden">
                        </div>
                    </div>
                    
                        <label for="CurrentPassword" class="form-label">Current Password</label>
                        <input type="password" class="form-control">
                    
                    
                        <label for="NewPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control">
                   
                        <label for="ConfirmNewPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control">

                        <button type="button" class="btn btn-success ms-2 mt-4">Update Profile</button>
                </div>
      
    </div>


@endsection
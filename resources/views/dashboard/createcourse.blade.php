@extends('dashboardmain')


@section('body')

<div class="container-fluid py-4">

    @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg">

                <div style="border-radius:7px" class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0" style="color:#fff"> 📚 Tambahkan Materi </h3>

                </div>

                <form action="{{route('dashboard.addcourse')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="d-flex">

                        <div class="col-lg-6">

                            <input type="hidden" name="uploader_id" value="1">
                            
                            <div class=" py-1">
                                <label for="">Materi untuk</label>
                                <select class="form-select" name="coursefor_id" id="">
                                    @foreach($jobPositions as $jobPosition)
                                        <option value="{{$jobPosition->id}}">{{$jobPosition->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" py-1">
                                <label for="name">Nama Materi</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class=" py-1">
                                <label for="">Deskripsi Singkat</label>
                                <input name="short_description" class="form-control">
                            </div>
                            <div class=" py-1">
                                <label for="">Deskripsi Lengkap</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class=" py-1">
                                <label for="">Kategori</label>
                                <select class="form-select" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" py-1">
                                <label for="">Photo</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            
                            </div>
                            <div >

                                <div class="p-4">

                                    <div class="vr" style="width:5px;min-height:35rem"></div>
                                    
                                </div>

                            </div>

                            <div class="col lg-6">
                                    
                                    <div>
                                        <img src="{{asset('/images/test.jpg')}}" alt="" height="175rem">
                                    </div>
                            

                                <h5>Ini contoh title</h5>

                                <p>Ini contoh deskripsi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-action px-4">
                        <input class="btn bg-gradient-danger" type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection
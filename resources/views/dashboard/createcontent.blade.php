@extends('dashboardmain')


@section('body')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg">
                <div  style="border-radius:7px;" class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0" style="color:#fff">📚 {{$course->name}}</h3>
                </div>
                
                <form action="{{route('dashboard.storecontent',['id'=>$course->id])}}" method="POST">
                @csrf
                <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <input type="hidden" name="course_id" value="{{$course->id}}">

                {{-- Need to be changed --}}
                <input type="hidden" name="uploader_id" value="{{$course->user->id}}">
                
                <div class="d-flex">
                    <div class="col-lg-6">

                        <div class="p-1">

                            <label for="">Konten untuk materi </label>
                            <input type="text" class="form-control" value="{{$course->name}}" disabled>
                        </div>

                        <div class="p-1">
                            
                            <label for="">Nama Materi</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="p-1">
                            
                            <label for="">Deskripsi Singkat</label>
                            <input type="text" class="form-control" name="short_description">
                        </div>
                        <div class="p-1">
                            <label for="">Deskripsi Lengkap</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
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
                            <label for="">Tipe</label>
                            <select class="form-select" name="type_id">
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" py-1">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <div class=" py-1">
                            <label for="">Video</label>
                            <input type="file" class="form-control" name="video">
                        </div>

                    </div>

                    <div>
                        
                    </div>

                            <div>

                                <div class="p-4">

                                    <div class="vr" style="width:5px;min-height:35rem"></div>
                                    
                                </div>

                            </div>

                            <div class="col lg-6">
                                <div class="d-flex">
                                    <div>
                                        <div class="mb-0">
                                            <p>Konten : </p>
                                        </div>
                                         <iframe class="rounded-top" src="https://www.youtube.com/embed/EwV4R170lhE?si=842GfwX9r2VzMc8P" title="Video SPINDO"
                                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        </iframe>
                                    </div>
                                    <div>
                                        <div class="mb-0">
                                            Thumbnail :
                                        </div>
                                        <img src="{{asset('/images/test.jpg')}}" alt="" height="175rem">
                                    </div>
                                </div>

                                <h5>Ini contoh title</h5>

                                <p>Ini contoh deskripsi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div>
                
                <div class="card-action p-4">
                    <input type="submit" value="Submit" class="btn bg-gradient-danger">
                </div>
            </form>
            </div>
        </div>
    </div>

</div>

@endsection
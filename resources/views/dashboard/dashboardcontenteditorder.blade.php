@extends('dashboardmain')

@section('body')


<div class="container-fluid py-4">

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach($erros->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow-lg">

                <div class="card-header bg-gradient-danger text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0" style="color:#fff">Ubah urutan konten</h3>

                </div>

                <form action="{{route('dashboard.content.order.update',['id'=>$course->id])}}" method="POST">
                @csrf
                    <div class="card-body">

                        <table>
                        @foreach($courseItems as $courseItem)
                            <tr>
                                <td >
                                    <label for="">
                                        
                                        {{$courseItem->title}}
                                    </label>
                                </td>

                                <td class="px-4">
                                    <input type="number" class="form-control" name="orders[{{ $courseItem->id }}]" value="{{ old('order', $courseItem->order) }}">

                                </td>
                            </tr>
                            @endforeach
                        </table>
                        


                        <div class="card-action py-4">
                            <input type="submit" value="Submit" class="btn bg-gradient-danger">
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>



@endsection
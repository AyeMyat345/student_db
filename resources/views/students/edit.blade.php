@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h3>Edit Students Data</h3> 
            </div>
        </div>
            {{-- @if($errors->any())
                <div class="alert-alert-danger">
                <strong> Whoops. There are some problems.</strong>
                <ul>
                    @foreach ($errors as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                </div>
            @endif     --}}
            <form action="{{ $students_lists->id }}" method="post">
                {{ csrf_field() }}
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label" for="title">First Name:</label>
                    <input type="text" name="firstname" class="form-control" value="{{$students_lists->firstname}}" />
                    </div>
                    <div class="col-md-12">
                        <label class="control-label" for="title">Last Name:</label>
                        <input type="text" name="lastname" class="form-control" value="{{$students_lists->lastname}}" />
                    </div>
                    <div class="col-md-12">
                        <label class="control-label" for="title">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{$students_lists->email}}" />
                    </div>
                    <div class="col-md-12">
                        <label class="control-label" for="title">Address:</label>
                        <input type="text" name="address" class="form-control" value="{{$students_lists->address}}" />
                    </div>
                    <div class="col-md-12">
                        <label class="control-label" for="title">Post Date:</label>
                        <input type="text" name="post_date" class="form-control" value="{{$students_lists->post_date}}" />
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('students_data.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </form>
    </div>
@endsection


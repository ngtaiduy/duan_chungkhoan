<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Họ tên</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" id="">        
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}" id="">        
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone_number" class="form-control" value="{{$user->phone_number}}" id="">        
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="file" name="avatar" class="form-control"  id="">
                                <img src="{{ asset($user->avatar) }}" width="100px;" alt="">       
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-start">
                        {{-- <a href="{{route('user.index')}}" class="btn btn-danger">Hủy</a> --}}
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




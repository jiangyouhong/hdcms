@extends('layouts.member')
@section('content')
    <div class="row justify-content-center">
        <form action="{{route('member.user.update',auth()->user())}}" method="post" class="col-sm-12">
            @csrf @method('PUT')
            <div class="card">
                <div class="card-header text-secondary">
                    修改密码
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>新密码</label>
                        <input type="password" class="form-control form-control-sm col-6" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>确认密码</label>
                        <input type="password" class="form-control form-control-sm col-6" name="password_confirmation" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-xs" type="submit">确定</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('edu.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-9">
            <div class="card" data-toggle="lists">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-header-title">
                                文章
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="btn btn-sm btn-white">
                           <i class="fa fa-plus" aria-hidden="true"></i>  发表
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-lg list-group-flush list my--4">
                        @foreach($articles as $article)
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="{{route('member.user.show',$article->user)}}" class="avatar ">
                                            <img src="{{$article->user->icon}}" alt="{{$article['title']}}" class="avatar-img rounded">
                                        </a>
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="card-title mb-3 name">
                                            <a href="{{route('edu.article.show',$article)}}" title="{{$article['title']}}">
                                                {{$article['title']}}
                                            </a>
                                        </h4>
                                        <p class="card-text small text-muted">
                                            <span class="fe fe-user"></span> {{$article->user->name}} .
                                            <i class="fe fe-clock"></i> {{$article->created_at->diffForHumans()}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{$articles->links()}}
        </div>
        <div class="col-12 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-header-title">
                        公告
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">
                                <a href="" class="text-secondary"> 晚八点直播</a>
                            </h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">
                                <a href="" class="text-secondary">新手帮助</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

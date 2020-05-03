@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_ohc=FsFGyFNBXkAAX9ZgTQa&oh=fb8f24614870ce5c0f5fc4a81db734d1&oe=5ED5D8C6" alt="fcc logo" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>293</strong> posts</div>
                    <div class="pr-5"><strong>46.2K</strong> followers</div>
                    <div class="pr-5"><strong>247</strong> following</div>
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.55.847.847a/s640x640/95032566_2590953614493815_1061141814829510346_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_cat=111&_nc_ohc=8ikzr5PVEN4AX-TT5sp&oh=488702f0f3e38598197aa884645a6e3c&oe=5ED7D34F" class="w-100" alt="post1">
        </div>
        <div class="col-4">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/95224410_237873460790480_2374979867183673557_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_cat=108&_nc_ohc=X3GOBycMXucAX9IQf8K&oh=fce1c35d20906506e9e19e07bbd2e1a5&oe=5ED79328" class="w-100" alt="post2">
        </div>
        <div class="col-4">
            <img src="https://scontent-ort2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/94892216_228412868421097_4113969397730546378_n.jpg?_nc_ht=scontent-ort2-1.cdninstagram.com&_nc_cat=101&_nc_ohc=NaBk0OlvCYQAX8dQOjk&oh=7a0287d73d969bc68fe962e7e76013e9&oe=5ED6C4CE" class="w-100" alt="post3">
        </div>
    </div>
</div>
@endsection
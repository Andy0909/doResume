<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Do Resume</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <style>
    .btn-circle.btn-lg {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
    .form_style{
        width: 800px;
        height: 30px;
        margin: 0 auto;
    }
    </style>
    <body style="background-color: rgb(227, 229, 245)">
        <form class="row g-3 form_style" action="/user_data" method="POST">
            {{ csrf_field() }}
            @if(isset($user_data['name']))
                <div class="form-group">
                    <label class="form-label">Name : </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user_data['name']}}">
                </div>
            @else
                <div class="form-group">
                    <label class="form-label">Name : </label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            @endif

            @if(isset($user_data['linkedin']))
                <div class="form-group">
                    <img src="{{asset('linkedin.png')}}" width="20">
                    <input name="linkedin" id="linkedin" type="text" class="form-control" placeholder="" value="{{$user_data['linkedin']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('linkedin.png')}}" width="20">
                    <input name="linkedin" id="linkedin" type="text" class="form-control" placeholder="">
                </div>
            @endif

            @if(isset($user_data['github']))
                <div class="form-group">
                    <img src="{{asset('github.png')}}" width="20">
                    <input name="github" id="github" type="text" class="form-control" value="{{$user_data['github']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('github.png')}}" width="20">
                    <input name="github" id="github" type="text" class="form-control">
                </div>
            @endif

            @if(isset($user_data['mail']))
                <div class="form-group">
                    <img src="{{asset('mail.png')}}" width="20">
                    <input name="mail" id="mail" type="text" class="form-control" placeholder="andy001018@gmail.com" value="{{$user_data['mail']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('mail.png')}}" width="20">
                    <input name="mail" id="mail" type="text" class="form-control" placeholder="andy001018@gmail.com">
                </div>
            @endif

            @if(isset($user_data['phone']))
                <div class="form-group">
                    <img src="{{asset('phone.jpeg')}}" width="20">
                    <input name="phone" id="phone" type="text" class="form-control" placeholder="0988756015" value="{{$user_data['phone']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('phone.jpeg')}}" width="20">
                    <input name="phone" id="phone" type="text" class="form-control" placeholder="0988756015">
                </div>
            @endif

            {{--<div class="col-md-3">
                <img src="{{asset('linkedin.png')}}" width="20">
                <input type="textarea" class="form-control" placeholder="">
            </div><br>

            <div class="col-md-3">
                <img src="{{asset('github.png')}}" width="20">
                <input type="textarea" class="form-control" placeholder="">
            </div><br>

            <div class="col-md-3">
                <img src="{{asset('mail.png')}}" width="20">
                <input type="textarea" class="form-control" placeholder="andy001018@gmail.com">
            </div><br>

            <div class="col-md-3">
                <img src="{{asset('phone.jpeg')}}" width="20">
                <input type="textarea" class="form-control" placeholder="0988756015">
            </div><br>--}}

            @if(isset($user_data['education']))
                <div class="form-group">
                    <label class="form-label">Education :</label>
                    <input name="education" id="education" type="text" class="form-control" value="{{$user_data['education']}}">
                </div>
            @else
                <div class="form-group">
                    <label class="form-label">Education :</label>
                    <input name="education" id="education" type="text" class="form-control">
                </div>
            @endif

            @if(isset($user_data['work_experience']))
                <div class="form-group">
                    <label class="form-label">Work Experience :</label>
                        <input name="work_experience" type="text" class="form-control" placeholder="集邦科技 PHP工程師" value="{{$user_data['work_experience']}}"><br>
                        <div id="experience">
                            <button id="add_experience" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @else
                <div class="form-group">
                    <label class="form-label">Work Experience :</label>
                        <input name="work_experience" type="text" class="form-control" placeholder="集邦科技 PHP工程師"><br>
                        <div id="experience">
                            <button id="add_experience" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @endif

            @if(isset($user_data['projects']))
                <div class="form-group">
                    <label>Projects :</label>
                        <input name="projects" type="text" class="form-control" placeholder="Laravel socialite" value="{{$user_data['projects']}}"><br>
                        <div id="project">
                            <button id="add_project" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @else
                <div class="form-group">
                    <label>Projects :</label>
                        <input name="projects" type="text" class="form-control" placeholder="Laravel socialite"><br>
                        <div id="project">
                            <button id="add_project" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @endif

            @if(isset($user_data['hobbies']))
                <div class="form-group">
                    <label>Hobbies :</label>
                        <input name="hobbies" type="text" class="form-control" placeholder="寫程式" value="{{$user_data['hobbies']}}"><br>
                        <div id="hobby">
                            <button id="add_hobby" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @else
                <div class="form-group">
                    <label>Hobbies :</label>
                        <input name="hobbies" type="text" class="form-control" placeholder="寫程式"><br>
                        <div id="hobby">
                            <button id="add_hobby" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                        </div>
                </div>
            @endif

            <div><input id="submit" type="submit" value="Export PDF"></div>
        </form><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            $('#add_experience').click(function(){
                $('#experience').prepend(`
                    <input name="work_experience" type="textarea" class="form-control" placeholder=""><br>
                `)
            })
            $('#add_project').click(function(){
                $('#project').prepend(`
                    <input name="projects" type="textarea" class="form-control" placeholder=""><br>
                `)
            })
            $('#add_hobby').click(function(){
                $('#hobby').prepend(`
                    <input name="hobbies" type="textarea" class="form-control" placeholder=""><br>
                `)
            })
            
        </script>
    </body>
</html>

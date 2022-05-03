<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$user_data['name']}} Resume</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>

    <body>
            <label style="font-size:24px">Resume</label><br><br>
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
                    <input name="mail" id="mail" type="text" class="form-control" placeholder="" value="{{$user_data['mail']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('mail.png')}}" width="20">
                    <input name="mail" id="mail" type="text" class="form-control" placeholder="">
                </div>
            @endif

            @if(isset($user_data['phone']))
                <div class="form-group">
                    <img src="{{asset('phone.jpeg')}}" width="20">
                    <input name="phone" id="phone" type="text" class="form-control" placeholder="" value="{{$user_data['phone']}}">
                </div>
            @else
                <div class="form-group">
                    <img src="{{asset('phone.jpeg')}}" width="20">
                    <input name="phone" id="phone" type="text" class="form-control" placeholder="">
                </div>
            @endif

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
            
            <div class="form-group">
                <label class="form-label">Work Experience :</label>
                @for($count=0;$count<=4;$count++)
                    @if(isset($user_data["work_experience_$count"]))
                        <input name="work_experience" type="text" class="form-control" placeholder="" value="{{$user_data["work_experience_$count"]}}"><br>
                    @endif
                @endfor
            </div>

            <div class="form-group">
                <label>Projects :</label>
                @for($count =0;$count<=4;$count++)
                    @if(isset($user_data["projects_$count"]))
                        <input name="projects" type="text" class="form-control" placeholder="Laravel socialite" value="{{$user_data["projects_$count"]}}"><br>
                    @endif
                @endfor
            </div>

            <div class="form-group">
                <label>Hobbies :</label>
                @for($count =0;$count<=4;$count++)
                    @if(isset($user_data["hobbies_$count"]))
                        <input name="hobbies" type="text" class="form-control" placeholder="寫程式" value="{{$user_data["hobbies_$count"]}}"><br>
                    @endif
                @endfor
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>

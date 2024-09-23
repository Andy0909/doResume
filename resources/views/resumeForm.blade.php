<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立履歷</title>
    <link rel="stylesheet" href="{{ asset('css/resume.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body">
    <div class="container">
        <h2 class="text-center">建立您的履歷</h2>
        <form class="form_style" action="{{ route('resume.submit') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="form-label">姓名：</label>
                <input type="text" class="form-control" name="name" id="name" maxlength="4" placeholder="請輸入您的姓名" required>
            </div>

            <div class="form-group">
                <label class="form-label">學歷：</label>
                <div id="education">
                    <input name="education[]" type="text" class="form-control" placeholder="請輸入您的學歷">
                </div>
                <button id="addEducation" type="button" class="btn btn-info btn-circle btn-lg btn-add">+</button>
            </div>

            <div class="form-group">
                <label class="form-label">信箱：</label>
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('mail.png')}}" width="20"></span>
                    <input name="email" id="email" type="email" class="form-control" placeholder="請輸入您的信箱" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">手機：</label>
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('phone.png')}}" width="20"></span>
                    <input name="phone" id="phone" type="text" class="form-control" maxlength="10" placeholder="請輸入您的手機" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">LinkedIn：</label>
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('linkedin.png')}}" width="20"></span>
                    <input name="linkedin" id="linkedin" type="text" class="form-control" placeholder="請輸入 LinkedIn 連結">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">GitHub：</label>
                <div class="input-group">
                    <span class="input-group-addon"><img src="{{asset('github.png')}}" width="20"></span>
                    <input name="github" id="github" type="text" class="form-control" placeholder="請輸入 GitHub 連結">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">工作經歷：</label>
                <div id="workExperience">
                    <input name="workExperience[]" type="text" class="form-control" placeholder="請輸入您的工作經歷">
                </div>
                <button id="addWorkExperience" type="button" class="btn btn-info btn-circle btn-lg btn-add">+</button>
            </div>

            <div class="form-group">
                <label class="form-label">個人專案：</label>
                <div id="projects">
                    <input name="projects[]" type="text" class="form-control" placeholder="請輸入專案連結">
                </div>
                <button id="addProject" type="button" class="btn btn-info btn-circle btn-lg btn-add">+</button>
            </div>

            <div class="form-group">
                <label class="form-label">興趣：</label>
                <div id="hobbies">
                    <input name="hobbies[]" type="text" class="form-control" placeholder="請輸入您的興趣">
                </div>
                <button id="addHobby" type="button" class="btn btn-info btn-circle btn-lg btn-add">+</button>
            </div>

            <div class="text-center">
                <input id="submit" type="submit" value="下載履歷" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script>
        $('#addEducation').click(function() {
            $('#education').append(`
                <div class="input-group" style="margin-top:20px;">
                    <input name="education[]" type="text" class="form-control" placeholder="請輸入您的學歷">
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn-remove" type="button">-</button>
                    </span>
                </div>
            `);
        });

        $('#addWorkExperience').click(function(){
            $('#workExperience').append(`
                <div class="input-group" style="margin-top:20px;">
                    <input name="workExperience[]" type="text" class="form-control" placeholder="請輸入您的工作經歷">
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn-remove" type="button">-</button>
                    </span>
                </div>
            `);
        });

        $('#addProject').click(function(){
            $('#projects').append(`
                <div class="input-group" style="margin-top:20px;">
                    <input name="projects[]" type="text" class="form-control" placeholder="請輸入專案連結">
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn-remove" type="button">-</button>
                    </span>
                </div>
            `);
        });

        $('#addHobby').click(function(){
            $('#hobbies').append(`
                <div class="input-group" style="margin-top:20px;">
                    <input name="hobbies[]" type="text" class="form-control" placeholder="請輸入您的興趣">
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn-remove" type="button">-</button>
                    </span>
                </div>
            `);
        });

        // Event delegation to handle dynamically added remove buttons
        $(document).on('click', '.btn-remove', function(){
            $(this).closest('.input-group').remove();
        });
    </script>
</body>
</html>
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
            <div class="form-group">
                <label class="form-label">Name : </label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <img src="{{asset('linkedin.png')}}" width="20">
                <input name="linkedin" id="linkedin" type="text" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <img src="{{asset('github.png')}}" width="20">
                <input name="github" id="github" type="text" class="form-control">
            </div>

            <div class="form-group">
                <img src="{{asset('mail.png')}}" width="20">
                <input name="mail" id="mail" type="text" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <img src="{{asset('phone.jpeg')}}" width="20">
                <input name="phone" id="phone" type="text" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <label class="form-label">Education :</label>
                <input name="education" id="education" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label class="form-label">Work Experience :</label>
                <input name="work_experience_0" type="text" class="form-control" placeholder=""><br>
                <div id="experience">
                    <button id="add_experience" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                </div>
            </div>

            <div class="form-group">
                <label>Projects :</label>
                <input name="projects_0" type="text" class="form-control" placeholder=""><br>
                <div id="project">
                    <button id="add_project" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                </div>
            </div>

            <div class="form-group">
                <label>Hobbies :</label>
                <input name="hobbies_0" type="text" class="form-control" placeholder=""><br>
                <div id="hobby">
                    <button id="add_hobby" type="button" class="btn btn-info btn-circle btn-lg">+</button>
                </div>
            </div>

            <div><input id="submit" type="submit" value="Export PDF"></div>
        </form><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            experienceCount = 0;
            projectCount = 0;
            hobbyCount = 0;

            $('#add_experience').click(function(){
                experienceCount ++;
                if(experienceCount >= 5){
                    alert("Can't add anymore")
                }
                else{
                    $('#experience').prepend(`
                        <input name="work_experience_${experienceCount}" type="text" class="form-control" placeholder=""><br>
                    `)
                }
            })
            $('#add_project').click(function(){
                projectCount ++;
                if(projectCount >= 5){
                    alert("Can't add anymore")
                }
                else{
                    $('#project').prepend(`
                        <input name="projects_${projectCount}" type="text" class="form-control" placeholder=""><br>
                    `)
                }
            })
            $('#add_hobby').click(function(){
                hobbyCount ++;
                if(hobbyCount >= 5){
                    alert("Can't add anymore")
                }
                else{
                    $('#hobby').prepend(`
                        <input name="hobbies_${hobbyCount}" type="text" class="form-control" placeholder=""><br>
                    `)
                }
            })
            
        </script>
    </body>
</html>

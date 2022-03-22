<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Do Resume</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        width: 1000px;
        height: 30px;
        margin: 0 auto;
    }
    </style>
    <body style="background-color: rgb(227, 229, 245)">
        <form class="row g-3 form_style">
            <div class="col-md-2">
                <label class="form-label">姓名：</label>
                <input type="textarea" class="form-control" placeholder="魏廷晏">
            </div><br>

            <div class="col-md-8">
                <input type="hidden" class="form-control" placeholder="魏廷晏">
            </div><br>

            <div class="col-md-3">
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
            </div><br>

            <div class="col-md-12">
                <label class="form-label">學歷：</label>
                <input type="textarea" class="form-control" placeholder="彰化師範大學資工所">
            </div><br>

            <div class="col-md-12">
                <label class="form-label">工作經歷：</label>
                    <input type="textarea" class="form-control" placeholder="集邦科技 PHP工程師"><br>
                    <div id="experience">
                        <button id="add_experience" type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i>+</button>
                    </div>
            </div><br>

            <div class="col-md-12">
                <label>作品：</label>
                    <input type="textarea" class="form-control" placeholder="Laravel socialite"><br>
                    <div id="project">
                        <button id="add_project" type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i>+</button>
                    </div>
            </div><br>

            <div class="col-md-12">
                <label>興趣：</label>
                    <input type="textarea" class="form-control" placeholder="寫程式"><br>
                    <div id="hobby">
                        <button id="add_hobby" type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i>+</button>
                    </div>
            </div><br>
            <div align="center"><input type="button" id="export" class="btn btn-secondary btn-sm mx-auto" value="匯出履歷"></div>
        </form><br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script>
            $('#export').click(function(){
                alert('尚未完成');
            });
            $('#add_experience').click(function(){
                $('#experience').prepend(`
                    <input type="textarea" class="form-control" placeholder=""><br>
                `)
            })
            $('#add_project').click(function(){
                $('#project').prepend(`
                    <input type="textarea" class="form-control" placeholder=""><br>
                `)
            })
            $('#add_hobby').click(function(){
                $('#hobby').prepend(`
                    <input type="textarea" class="form-control" placeholder=""><br>
                `)
            })
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do Resume</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
</style>
<body>
    <form class="row g-3">
        <div class="col-md-12">
            <label class="form-label">姓名：</label>
            <input type="textarea" class="form-control" placeholder="魏廷晏">
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

        <div class="col-md-12" id="project">
            <label>作品：</label>
                <input type="textarea" class="form-control" placeholder="Laravel socialite"><br>
                <button id="add_project" type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i>+</button>
        </div><br>

        <div class="col-md-12" id="hobby">
            <label>興趣：</label>
                <input type="textarea" class="form-control" placeholder="寫程式"><br>
                <button id="add_hobby" type="button" class="btn btn-info btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i>+</button>
        </div><br>
    </form>
</body>
</html>

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#add_project').click(function(){
        alert(123);
        /*$('#experience').empty();
        $('#experience').append("<li><input type="textarea" class="form-control" placeholder=""></li>")*/
    });
</script>
@endpush
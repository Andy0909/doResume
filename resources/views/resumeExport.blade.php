<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $name }}的履歷</title>
    <style>
        body {
            font-family: 'NotoSansTC', sans-serif;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 24px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group p {
            margin: 0;
            padding: 5px 0;
        }
        .form-group a {
            color: #337ab7;
            text-decoration: none;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $name }}的履歷</h1>
        </div>
        
        <div class="form-group">
            <label class="form-label">姓名：</label>
            <p>{{ $name }}</p>
        </div>

        <div class="form-group">
            <label class="form-label">學歷：</label>
            @if(!empty($education))
                @foreach ($education as $key => $value)
                    <p>{{ $key + 1 }}.{{ $value }}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label class="form-label">信箱：</label>
            <p>{{ $email }}</p>
        </div>

        <div class="form-group">
            <label class="form-label">手機：</label>
            <p>{{ $phone }}</p>
        </div>

        @if ($linkedin)
            <div class="form-group">
                <label class="form-label">LinkedIn：</label>
                <a href="{{ $linkedin }}" target="_blank">{{ $linkedin }}</a>
            </div>
        @endif

        @if ($github)
            <div class="form-group">
                <label class="form-label">GitHub：</label>
                <a href="{{ $github }}" target="_blank">{{ $github }}</a>
            </div>
        @endif

        <div class="form-group">
            <label class="form-label">工作經歷：</label>
            @if(!empty($workExperience))
                @foreach ($workExperience as $key => $value)
                    <p>{{ $key + 1 }}.{{ $value }}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label class="form-label">個人專案：</label>
            @if(!empty($projects))
                @foreach ($projects as $key => $value)
                    <p>
                        {{ $key + 1 }}.
                        <a href="{{ $value }}" target="_blank">{{ $value }}</a>
                    </p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label class="form-label">興趣：</label>
            @if(!empty($hobbies))
                @foreach ($hobbies as $key => $value)
                    <p>{{ $key + 1 }}.{{ $value }}</p>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
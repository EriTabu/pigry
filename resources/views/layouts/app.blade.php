<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body{
            background:#f5f5f7;
            font-family:sans-serif;
        }

        .container{
            width:1000px;
            margin:0 auto;
        }

        .cards{
            display:flex;
            gap:20px;
            margin-top:20px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            flex:1;
            text-align:center;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        .table-box{
            background:white;
            margin-top:20px;
            padding:20px;
            border-radius:10px;
        }

        table{
            width:100%;
        }

        .add-btn{
            float:right;
            background:linear-gradient(90deg,#c084fc,#f472b6);
            color:white;
            padding:10px 20px;
            border-radius:5px;
            text-decoration:none;
        }

        /* ↓ここから別ブロックにするのが正解 */
        .modal-overlay{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.4);
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .modal{
            background:#fff;
            padding:30px;
            border-radius:10px;
            width:500px;
        }

        .form-group{
            margin-bottom:15px;
        }

        .required{
            color:red;
            font-size:12px;
            margin-left:5px;
        }

        .unit{
            margin-left:5px;
        }

        .btn-group{
            display:flex;
            justify-content:space-between;
            margin-top:20px;
        }

        .btn-back{
            background:#ccc;
            padding:10px 20px;
            border-radius:5px;
            text-decoration:none;
        }

        .btn-submit{
            background:linear-gradient(to right,#a18cd1,#fbc2eb);
            border:none;
            padding:10px 20px;
            border-radius:5px;
            color:white;
        }
        .form-group input,
.form-group textarea{
    width:100%;
    padding:10px;
    border-radius:5px;
    border:1px solid #ccc;
}

.form-group label{
    display:block;
    margin-bottom:5px;
}

.btn-group{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:30px;
}
.input-row{
    position:relative;
}

.input-row span{
    position:absolute;
    right:10px;
    top:50%;
    transform:translateY(-50%);
    color:#666;
}
table th{
    text-align:left;
    padding-bottom:10px;
    border-bottom:2px solid;
    border-image: linear-gradient(to right,#a18cd1,#fbc2eb) 1;
}

table td{
    padding:15px 0;
}

table td:last-child{
    text-align:right;
}

    </style>
</head>
<body>

<div class="container">
@yield('content')
</div>

</body>
</html>
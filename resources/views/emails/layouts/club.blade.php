<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CLUB San Luis Potosí')</title>
    <style>

        body{
            margin:0;
            padding:0;
            background:#edf2f7;
            font-family:Arial, Helvetica, sans-serif;
            color:#3b4b53;
        }

        table{
            border-collapse:collapse;
        }

        img{
            border:0;
            outline:none;
            text-decoration:none;
            display:block;
        }

        .wrapper{
            width:100%;
            padding:40px 15px;
            background:#edf2f7;
        }

        .container{
            max-width:720px;
            margin:0 auto;
            background:#ffffff;
            border-radius:12px;
            overflow:hidden;
            border:1px solid #dde5eb;
        }

        .header{
            background:#ffffff;
            padding:40px;
            text-align:center;
        }

        .header img{
            width:280px;
            margin:auto;
        }

        .banner{
            background:#2BC7E5;
            color:#ffffff;
            text-align:center;
            padding:28px;
        }

        .banner h1{
            margin:0;
            font-size:28px;
            letter-spacing:1px;
            font-weight:bold;
        }

        .banner p{
            margin:8px 0 0 0;
            font-size:15px;
            opacity:.95;
        }

        .content{
            padding:45px;
        }

        h2{
            margin-top:0;
            color:#3b4b53;
            font-size:28px;
        }

        p{
            line-height:1.8;
            font-size:15px;
        }

        .resume-row{
            width:100%;
            margin:35px 0;
        }

        .resume-card{
            width:48%;
            background:#f8fbfc;
            border:1px solid #e4edf2;
            border-radius:8px;
            text-align:center;
            padding:25px 10px;
        }

        .resume-title{
            color:#768692;
            font-size:14px;
            margin-bottom:10px;
        }

        .resume-value{
            color:#2BC7E5;
            font-size:36px;
            font-weight:bold;
        }

        .table{
            width:100%;
            margin-top:35px;
        }

        .table th{
            background:#2BC7E5;
            color:#ffffff;
            padding:14px;
            font-size:14px;
            text-align:left;
        }

        .table td{
            padding:14px;
            border-bottom:1px solid #eceff2;
            font-size:14px;
        }

        .table tr:nth-child(even){
            background:#fafcfd;
        }

        .badge{
            background:#2BC7E5;
            color:#ffffff;
            border-radius:30px;
            padding:4px 10px;
            display:inline-block;
            min-width:28px;
            text-align:center;
            font-weight:bold;
        }

        .footer{
            background:#33414b;
            color:#ffffff;
            padding:35px;
            text-align:center;
        }

        .footer h3{
            margin:0;
            color:#2BC7E5;
            font-size:18px;
        }

        .footer p{
            color:#d8e0e5;
            font-size:13px;
            line-height:1.8;
            margin:15px 0 0;
        }

        .divider{
            margin:35px 0;
            height:1px;
            background:#e6edf2;
        }

        @media only screen and (max-width:700px){
            .content{
                padding:25px;
            }

            .header{
                padding:25px;
            }

            .header img{
                width:220px;
            }

            .banner h1{
                font-size:22px;
            }

            .resume-card{
                width:100% !important;
                display:block;
                margin-bottom:15px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="header">
            <img src="{{ $message->embed($logo) }}" alt="CLUB">
        </div>
        <div class="banner">
            <h1>
                CLUB DE NIÑOS Y NIÑAS
            </h1>
            <p>
                SAN LUIS POTOSÍ
            </p>
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            <h3>
                CLUB SLP
            </h3>
            <p>
                Este correo fue generado automáticamente por el sistema de procesos
                del CLUB de Niños y Niñas San Luis Potosí.
                <br><br>
                Favor de no responder este mensaje.
                <br><br>
                {{ now()->format('d/m/Y H:i') }}
            </p>
        </div>
    </div>
</div>
</body>
</html>

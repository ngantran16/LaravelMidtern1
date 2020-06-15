<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .text_menu{
            color:black;
            font-weight: bold;
        }
        .grid-container {
            display: inline-grid;
            grid-template-columns: auto auto auto;
        }

        .grid-item {
            height: auto;
            margin: 35px;
        }
        .title{
            font-size: 10px;
            color:gray;
        }
        .data{
            text-align: right;
            float: right;
        }
        .data-price{
            font-weight: bold;
            text-align: right;
            float: right;
        }
        .button-order{
            font-weight: bold;
            color:orange;
            float:right;
            margin-top:-20px;
            margin-right:-13px;
            position: relative;
        }
        .button-view{
            color:orange;
            float:left;
            margin-top:-20px;
            margin-left:-13px;
            position: relative;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav" style = "margin-left:800px;">
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">PHÒNG & MỨC GIÁ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">ĐẶT PHÒNG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">HÌNH ẢNH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">GIỚI THIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_menu" href="#">LIÊN HỆ</a>
          </li>
        </ul>
      </nav>
      <div class = "container">
        <div class = "grid-container">
            @foreach ($rooms as $room)
                <div class = "grid-item">
                    <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src='{{'/storage/'.$room->image }}' alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title"> {{ $room->name }} </h5>
                        <hr>
                        <p><span class = "title">PHÒNG: </span><span class = "data">{{ $room->typeroom }}</span></p>
                        <hr>
                        <p><span class = "title">CHỖ NGHỈ:</span><span class = "data">{{ $room->number }}</span></p>
                        <hr>
                        <p><span class = "title">KÍCH THƯỚC:</span><span class = "data">{{ $room->area }} m2</span></p>
                        <hr>
                        <p><span class = "title">GIÁ PHÒNG:</span><span class = "data-price">{{ $room->getDisplayPrice() }}</span></p>
                        <hr>
                        <p>
                            <form action="/home/details/{{ $room->id }}" method="POST">
                                @csrf
                                <button class="btn btn-link button-view" style="color:orange;">XEM</button>
                            </form>

                            <form action="/home/addToCart/{{ $room->id }}" method="POST">
                                @csrf
                                <button class="btn btn-link button-order" type="submit">Đặt phòng</button>
                            </form>
                        </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <div>
</body>
</html>

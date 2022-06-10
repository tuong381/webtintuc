<!DOCTYPE html>
<html>
<head>
    <title>Market Online</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

 <h3 style="color: #91ad41">THÔNG BÁO THỜI GIAN GIAO HÀNG</h3>
<p>Chào bạn {{$tenKH}}</p>
<p>Đơn hàng #{{$maHD}} của bạn đặt vào ngày {{$ngayDH}} đã được chuyển giao cho đối tác vận chuyển. </p>
<p>Chúng tôi sẽ giao hàng đến bạn khoảng 3-5 ngày</p>
<p>Bạn vui lòng kiểm tra điện thoại và mail thường xuyên để nhận hàng</p>


<div class="container" style="border: 1px solid #91ad41;width: 40rem;">

  <p style="color: #91ad41; text-align: center; font-weight: 700; font-size: 15px;">
        Đơn hàng của bạn # {{$maHD}} ({{$ngayDH}} )
    </p>
  <table class="table table-striped" style="text-align: center;">

    <thead >
      <tr>
         <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
      </tr>
    </thead>

    <tbody>
        @foreach($cart_array as $sp)
          <tr >
                <td>{{$sp['TenSanPham']}}</td>
                <td>{{$sp['SoLuongMua']}}</td>
                 <td>{{$sp['Gia']}} vnđ</td>

          </tr>
        @endforeach
        <tr >
            <td colspan="4" style="color: #91ad41; font-weight: 800;padding-left: 23rem;">Tổng thanh toán: {{$tongHD}} vnđ</td>
        </tr>

    </tbody>

  </table>

   <label style=" font-weight: 700; padding-left: 2rem">
        Người nhận: </label><label>{{$tenDH}} - {{$sdt}} - {{$diachi}}
    </label>

<p></p>
</div>
<p>Đây là thư tự động từ hệ thống. Vui lòng không trả lời email này.</p>
<p>Nếu có bất kỳ thắc mắc hay cần giúp đỡ, Bạn vui lòng liên hệ với chúng tôi qua số điện thoại
    <span style="color: #4e73df">073 246 2322</span></p>

</body>
</html>

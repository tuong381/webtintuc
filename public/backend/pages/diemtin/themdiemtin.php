<?php
    $tieudediemtin=$_POST['tieudediemtin'];
        //echo $tieudediemtin;
    $cmdt=$_POST['cmdt'];
        //echo $cmdt;
    $nddt=$_POST['nddt'];
        //echo $nddt;
    $duongdan='../../../upload/diemtin/'.$_FILES['hinhanhdt']['name'];
    $duongdan1='/diemtin/'.$_FILES['hinhanhdt']['name'];
    move_uploaded_file($_FILES['hinhanhdt']['tmp_name'],$duongdan);
        //echo 'HoiCongChungCT/admin/image/diemtin/' .$_FILES['hinhanhdt']['name']."<br>";

    $day=date("y-m-d");

        //echo $day;
    session_start();

//Tao ket nôi
    include '../../connectsql.php';
    $id_admin=$_SESSION["id_admin"];
    //echo $tieudediemtin, $cmdt, $nddt, $day, $id_admin;
//Viet cau truy van Sql
    $sql="INSERT INTO diemtin ( ID_CHUYENMUC_DT, ID_ADMIN, TIEUDE_DT, NOIDUNG_DT, HINHANH_DT, NGAYDANG_DT) VALUES ('$cmdt','$id_admin','$tieudediemtin','$nddt','$duongdan1','$day')";
    echo $sql;
//thưc hien truy van
    if ($result=$con->query($sql)){
        $sql="SELECT * FROM admin where ID_ADMIN=$id_admin";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
        $email=$row['EMAIL_ADMIN'];
        $mk_da=$row['MATKHAU_DUAN'];

        require_once('PHPMailer/PHPMailerAutoload.php');


                $mail = new PHPMailer();
                $mail->isSMTP(true);
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $email;
                $mail->Password = $mk_da;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->CharSet = "UTF-8";

                $mail->setFrom('noreply@hoicongchungct.com', 'HoiCongChungCanTho');
        $sql="SELECT * FROM khach ";
        $result=$con->query($sql);
        while ($row=$result->fetch_assoc()){
            $mail->addAddress($row['EMAIL_KHACH']);
        }
        $mail->addReplyTo('noreply@hoicongchungct.com');
        $mail->isHTML(true);
        $mail->Subject = $tieudediemtin;

        $mail->Body    = "<h4>Hội công chứng Cần Thơ gửi tới bạn điểm tin mới nhất</h4>
                        <a href='http://www.hoicongchungviencantho.com.vn/'>Tại đây </a>";
        if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
        echo "Message sent!";
        }

        header("location: ../diemtin/diemtin.php");

    }


    header("location: ../diemtin/diemtin.php");

//xu ly ket qua

//dong ket noi
    $con->close();
?>

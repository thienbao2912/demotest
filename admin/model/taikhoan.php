<?php
function insert_taikhoan($email,$ten,$pass){
    $sql="insert into khachhang(email,ten,pass) values('$email','$ten','$pass')";
    pdo_execute($sql);
}
function checkuser($ten,$pass){
    $sql="select * from khachhang where ten = '".$ten."' AND pass = '".$pass."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function checkemail($email){
    $sql="select * from khachhang where email = '".$email."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function update_taikhoan($id, $ten, $pass, $email, $diachi, $sodienthoai){
     
    $sql ="UPDATE khachhang SET ten = '".$ten."', pass='".$pass."', email='".$email."',diachi='".$diachi."',sodienthoai='".$sodienthoai."' WHERE id=".$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="SELECT * FROM khachhang order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM khachhang WHERE id=".$_GET['id'];
    pdo_execute($sql); 
}


?>
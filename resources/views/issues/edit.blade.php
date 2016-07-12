<html>
<head>
	<title></title>
</head>
<body>
<form>
	<!-- <label>Number : </label><input type="number" name="number_name"><br><br>
	<label>Text : </label><input type="text" name="text_name" size="50"><br><br>
	<label>password : </label><input type="password" name="password"><br><br> -->
	<label>ปัญหาที่ผู้แจ้งระบุมา : </label><textarea name="requester_detail_issue"></textarea> <br><br>
	<label>เลข id ของประเภทการให้บริการ : </label>
	<select name='service_type_id'>
        <option selected disabled hidden value=''></option>
        <option value="1">ติดตั้งอุปกรณ์</option>
        <option value="2">ติดตั้งซอฟท์แวร์</option>
        <option value="3">แก้ไขอุปกรณ์</option>
        <option value="4">แก้ไขซอฟท์แวร์</option>
        <option value="5">แก้ไขระบบงาน</option>
        <option value="6">ขอเพิ่ม/เปลี่ยนแปลงระบบงาน</option>
    </select>
    <br><br>
    <label>เลข id ระบบที่เกี่ยวข้องการให้บริการ: </label>
    <select name='service_domain_id'>
        <option selected disabled hidden value=''></option>
        <option value="1">อุปกรณ์คอมพิวเตอร์</option>
        <option value="2">ซอฟท์แวร์สำเร็จรูป</option>
        <option value="3">ระบบเครือข่าย</option>
        <option value="4">ระบบอินเตอร์เน็ต</option>
        <option value="5">ระบบ eDoc</option>
        <option value="6">ระบบ ภาระงาน</option>
        <option value="7">ระบบ สารบรรณ</option>
        <option value="8">ระบบ ัญชี</option>
        <option value="9">ระบบ การศึกษา</option>
    </select>
    <br><br>
	<label>วันที่เริ่มให้บริการ : </label><input type="text" name="service_begin_at" size="50"><br><br>
	<label>บันทึกการตรวจสอบก่อนให้บริการ : </label><textarea name="checkup_detail"></textarea> <br><br>
	<label>วันที่คาดว่าจะให้บริการเสร็จ : </label><input type="text" name="service_end_estimated" size="50"><br><br>
	<label>วันที่สิ้นสุดการให้บริการ : </label><input type="text" name="service_end_at" size="50"><br><br>
	<label>id ของสถานะประเด็นปัญหา : </label>
	<select name='isssue_status_id'>
        <option selected disabled hidden value=''></option>
        <option value="1">รอ</option>
        <option value="2">รับเรื่องแล้ว</option>
        <option value="3">กำลังดำเนินการ</option>
        <option value="4">ปิดงาน - สำเร็จ</option>
        <option value="5">ปิดงาน - ส่งต่อศูนย์คอม</option>
        <option value="6">ปิดงาน - ไม่สามารถทำได้</option>
    </select>
    <br><br>
    <label>รายงานการสรุปให้บริการ : </label><textarea name="summary_report"></textarea> <br><br>
	<label>วันที่คาดว่าจะให้บริการเสร็จ : </label><input type="text" name="service_end_estimated" size="50"><br>
	<label></label>
	<input type="checkbox" name="need_followup" value="1"> ต้องติดตามหลังให้บริการเสร็จสิ้นแล้วหรือไม่<br><br>
	<label> </label>
    <br><br>
    <select name='service_by'>
        <option selected disabled hidden value=''></option>
        <option value="1">user id ของผู้ให้บริการ</option>
    </select>
    <br><br>
    <input type="submit" value="Click to Submit">
</form>
</body>
</html>
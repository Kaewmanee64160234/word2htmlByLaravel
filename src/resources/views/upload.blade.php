<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Word to HTML</title>
</head>
<body>
    <h1>อัปโหลดไฟล์ Word (.docx) ที่นี่</h1>

    <form action="/convert" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">แปลงเป็น HTML</button>
    </form>
</body>
</html>

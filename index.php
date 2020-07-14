<?php

$errs = [];
$name = $email = $msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $msg  = $_POST['msg'];

    if (empty($name)) {
        $errs['nameErr'] = 'please type your name.';
    } else {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $name = trim($name);
    }

    if (empty($email)) {
        $errs['emailErr'] = 'Please type your email.';
    } else {

        if (filter_var($_POST['email'], FILTER_SANITIZE_STRING)) {
            $email = trim($email);
        } else {
            $errs['emailErr'] = 'please enter a valid email.';
        }
    }

    if (empty($msg)) {
        $errs['msgErr'] = 'Please Type Your Messages';
    } elseif (strlen($msg) < 5) {
        $errs['msgErr'] = 'The message must be more than 5 letters.';
    } else {
        $msg = trim(filter_var($_POST['msg'], FILTER_SANITIZE_STRING));
    }

    if (empty($errs)) {
        echo '<span class="success-info">Name: '.$name.' <br>email: '.$email.'<br>msg: '.$msg.'<br></span>';
    } else {
        echo "<script> alert('Check The Form Rules') </script>";
        echo '<span class="warning-info">Please Check The Form Rules</span>';
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/ab3fc6d706.js"></script>
</head>

<body>
    <div id="Navbar">
        <ul>
            <li class="logo"><a href="#">مدرسة حسام الدين الخاصة</a></li>
            <li><a href="#">التواصل</a></li>
            <li><a href="#">المميزات</a></li>
            <li><a href="#">عنا</a></li>
            <li><a href="#">الرئيسية</a></li>
        </ul>
    </div>
    <div id="home">
        <h1>مدرسة حسام الدين الخاصة</h1>
        <p>رؤية المدرسة هي إعداد جيل متعلم تعليماً متميزاً مواكب للعصر التكنولوجي</p>
    </div>
    <div id="about">
        <img src="images/meeting.jpg" alt="about">
        <div id="text">
            <h1>عنا</h1>
            <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور
                النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف
                بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل
                انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق
                "ليتراسيت" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل
                "ألدوس بايج مايكر" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.
            </p>
        </div>
    </div>
    <div id="items">
        <h1 id="topic">المميزات</h1>
        <div class="item">
            <i class="fa fa-download" aria-hidden="true"></i>
            <p class="item">
                لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور
                النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف
            </p>
        </div>
        <div class="item">
            <i class="fa fa-film" aria-hidden="true"></i>
            <p class="item">
                لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور
                النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من
                الأحرف
            </p>
        </div>
        <div class="item">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <p>
                لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور
                النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من
                الأحرف
            </p>
        </div>
    </div>
    <div class="clearfix"></div>

    <div id="contact">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="half">
                <div>
                    <span class="danger-info"><?php echo isset($errs['nameErr']) ? $errs['nameErr'] : ''; ?></span>
                    <label>الأسم</label>
                    <input name="name" type="text" value="<?php echo $name ?>" placeholder="إسمك">
                </div>
                <div>
                    <span class="danger-info"><?php echo isset($errs['emailErr']) ? $errs['emailErr'] : ''; ?></span>
                    <label>البريد الإلكتروني</label>
                    <input name="email" type="email" value="<?php echo $email ?>" placeholder="بريدك الإلكتروني">
                </div>
            </div>
            <div>
                <span class="danger-info"><?php echo isset($errs['msgErr']) ? $errs['msgErr'] : ''; ?></span>
                <label>رسالتك</label>
                <textarea name="msg" placeholder="رسالتك" required><?php echo $msg ?></textarea>
            </div>
            <button type="submit">إرسال</button>
        </form>
    </div>
</body>

</html>
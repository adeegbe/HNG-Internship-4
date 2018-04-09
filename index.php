<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stage 1 - Project</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="menu-container">
        <div class="menu">
            <div class="general">General</div>
            <div class="announcement">Announcement</div>
            <div class="random">Random</div>
            <div class="help">Help</div>
        </div>
    </div>
    <header class="header">
        HNG Internship 4.0 Notice Board
    </header>
    <div class="mainArticle">
        <p>Welcome to the forth edition of HNG Internship. This internship is designed for all levels of coders and non-coders the want to learn the art and science of programming.<br>
        Feel free to ask questions when you're stranded on any programming assignemt. Mentors are always on hand to put lead you through on the best approve to resolve such issues.<br>
        The GeneraL Channel is the home of this internship and every discussion happens in there.<br>
        Feel free to ask questions when you're stranded on any programming assignemt. Mentors are always on hand to put lead you through on the best approve to resolve such issues.
    </div>
    <div class="footer">
        <p>
            <?php echo "Created by Oluyemi on " . date("Y-m-d")?>
             <?php
            echo "at " . date("h:i:sa");
            ?>
        </p>
    </div>
</body>
</html>
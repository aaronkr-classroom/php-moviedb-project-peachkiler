<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<title>영화 관리</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/145/jquery,mobile-1,4,5,nin.css"/>
<script src="http://code.jquery.com/jquery-1,11,1min.js"></script>
<script src="http://code.jquery.com/mobile/14.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="dialog" id="page2">
    <div data-role="header" data-theme="b">
        <h1>영화 검색</h1>
    </div>
    <div data-role="content">
        <h3>수정할 영화 검색</h3>
        <form name="form2-1" method="post" action="update.php" data-ajax="false">
            <div class="ui-body ui-body-a"></br>
            검색 영화명:</br>
            <input type="search" name="smovieTitle2" value=""/><br/>
            <input data-inline="true" type="submit" value="검색"/>
            <a data-inline="true" data-role="button" data-rel="back">취소</a>
        </form>
    </div>
</div>
</body>
</html>
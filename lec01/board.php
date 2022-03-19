<?php
    $table1 = "free";
    $table2 = "qna";
?>
<h4>자유게시판</h4>
<a href="board_view.php?table=<?=$table1?>&type=list">목록보기</a><br>
<a href="board_view.php?table=<?=$table1?>&type=write">글쓰기</a><br>

<h4>질의응답 게시판</h4>
<a href="board_view.php?table=<?=$table2?>&type=list">목록보기</a><br>
<a href="board_view.php?table=<?=$table2?>&type=write">글쓰기</a>

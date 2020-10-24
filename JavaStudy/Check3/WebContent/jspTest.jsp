<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>第3章チェックテスト</title>
<link rel="stylesheet" href="css/style.css">
</head>
<%@ include file="header.jsp"%>
<body>
<!-- name、idの入力エリアを作成しなさい -->
	<div class="div-body">
		<ul>
			<li>
				<label for="username">name</label>
				<input type="text" name="username">
			</li>
			<li>
		    	<label for="userid">id</label>
				<input type="text" name="userid">
			</li>
		</ul>
	</div>
</body>
<%@ include file="footer.jsp"%>
</html>
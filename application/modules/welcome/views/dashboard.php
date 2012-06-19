<!DOCTYPE html>
<html lang="ja">
<?php echo $this->view( 'shared/head' ) ?>

<body>
<?php //echo $this->view( 'shared/header' ) ?>

    <div class="container">
		<h1>Backyard ERP System</h1>

		<div id="body">
			<p>今ご覧のこのページは、dashboard によって動的に生成されました。</p>

			<? foreach($users as $user): ?>
			<span>User ID: <?= $user['id'] ?></span>
			<span>User Name: <?= $user['name'] ?></span>
			<span>登録日: <?= $user['regist_dt'] ?></span>
			<hr />
			<? endforeach; ?>

			<p>サンプルユーザ作成→<a href="../backyard/makeusers/">サンプルユーザ作成</a></p>

			<p>このページを編集したい場合は、次の場所にあります:</p>
			<code>application/views/welcome_foobar.php</code>

			<p>このページのコントローラは次の場所にあります:</p>
			<code>application/controllers/welcome.php</code>

			<p>CodeIgniter を使うのが初めてなら、<a href="user_guide_ja/">ユーザガイド</a>を読むことから始めてください。</p>
		</div>

<?php echo $this->view( 'shared/footer' ) ?>
    </div> <!-- /container -->
</body>
</html>

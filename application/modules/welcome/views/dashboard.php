<!DOCTYPE html>
<html lang="ja">
<?php echo $this->view( 'shared/head' ) ?>

<body>
<?php //echo $this->view( 'shared/header' ) ?>

    <div class="container">
		<h1>Backyard ERP System</h1>

		<div id="body">
			<p>�������̂��̃y�[�W�́Adashboard �ɂ���ē��I�ɐ�������܂����B</p>

			<? foreach($users as $user): ?>
			<span>User ID: <?= $user['id'] ?></span>
			<span>User Name: <?= $user['name'] ?></span>
			<span>�o�^��: <?= $user['regist_dt'] ?></span>
			<hr />
			<? endforeach; ?>

			<p>�T���v�����[�U�쐬��<a href="../backyard/makeusers/">�T���v�����[�U�쐬</a></p>

			<p>���̃y�[�W��ҏW�������ꍇ�́A���̏ꏊ�ɂ���܂�:</p>
			<code>application/views/welcome_foobar.php</code>

			<p>���̃y�[�W�̃R���g���[���͎��̏ꏊ�ɂ���܂�:</p>
			<code>application/controllers/welcome.php</code>

			<p>CodeIgniter ���g���̂����߂ĂȂ�A<a href="user_guide_ja/">���[�U�K�C�h</a>��ǂނ��Ƃ���n�߂Ă��������B</p>
		</div>

<?php echo $this->view( 'shared/footer' ) ?>
    </div> <!-- /container -->
</body>
</html>

<?php 
	require_once '../../models/News.php'; 
	require_once '../../models/User.php'; 
	$newsLast = News::getLatestNews();
?>

<h1 class="text-center">НОВОСТИ</h1>
<?php if ($newsLast): ?>
	<?php foreach($newsLast as $newsElement): ?>
		<div class="col-sm-12 col-md-4 col-xs-12 text-center" style="display: block; height: 100%; margin-bottom: 50px;">
			<h4><?php echo $newsElement["TITLE"]; ?></h4>
			<p><?php echo $newsElement["DESCRIPTION"]; ?></p>
			<p>Автор: <?php echo $newsElement["AUTHOR"]; ?></p>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h1>Not news yet</h1>
<?php endif; ?>

<h3 class="text-center">СТАТИСТИКА</h3>
<div class="col-sm-12 col-md-12 col-xs-12">
	<div class="col-sm-12 col-md-4 col-xs-4 text-center" style="margin-bottom: 50px; margin-top: 50px;">
		<h4 class="text-center">Статей:</h4>
		<br> <p class="text-center"><?php echo News::getCountNews(); ?></p>
	</div>
	<div class="col-sm-12 col-md-4 col-xs-4 text-center" style="margin-bottom: 50px; margin-top: 50px;">
		<h4 class="text-center">Пользователей:</h4>
		<br> <p class="text-center"><?php echo User::getCountUsers(); ?></p>
	</div>
	<div class="col-sm-12 col-md-4 col-xs-4 text-center" style="margin-bottom: 50px; margin-top: 50px;">
		<h4 class="text-center">Оценок:</h4>
		<br> <p class="text-center">0</p>
	</div>
</div>
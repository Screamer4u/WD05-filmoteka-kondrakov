<h1 class="title-1">Редактировать фильм</h1>
<div class="panel-holder mt-30 mb-100">
	<!-- enctype="multipart/form-data" - аттрибут для отправки формой файлов -->
	<form enctype="multipart/form-data" action="edit.php?id=<?=$film['id']?>" method="POST">
		<?php
			if (!empty($errors)) {
				foreach ($errors as $key => $value) { ?>
					<div class="notify notify--error mb-20"><?=$value?></div>
		<?php }	} ?>
		<div class="form-group"><label class="label">Название фильма<input class="input" name="title" type="text" placeholder="Такси 2" value="<?=$film['title']?>" /></label></div>
		<div class="row">
			<div class="col">
				<div class="form-group"><label class="label">Жанр<input class="input" value="<?=$film['genre']?>" name="genre" type="text" placeholder="комедия" /></label></div>
			</div>
			<div class="col">
				<div class="form-group"><label class="label">Год<input class="input" name="year" type="text" placeholder="2000" value="<?=$film['year']?>" /></label></div>
			</div>
		</div>
		<textarea name="description" class="textarea mb-20" placeholder="Введите описание фильма"><?=@$film['description']?></textarea>
		<div class="mb-20">
			<input type="file" name="photo">
		</div>
		<input class="button" type="submit" name="update-film" value="Обновить" />
	</form>
</div>
</div>


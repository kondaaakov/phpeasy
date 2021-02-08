<main class="container center">
    <div class="calc_block container_block">
        <form method="get" class="calc_form">
	        <div class="form_container">
		        <input type="number" class="calc_input" name="numX" placeholder="X" required value="<?= isset($_GET['numX']) ? $_GET['numX'] : null ?>">
		        <select name="operation" id="operation" class="form_select">
                    <?php foreach ($operations as $value => $key): ?>
				        <option value="<?= $value ?>" <?= isset($_GET['operation']) && $_GET['operation'] === $value ? 'selected' : '' ?>><?= $key ?></option>
                    <?php endforeach; ?>
		        </select>
		        <input type="number" class="calc_input" name="numY" placeholder="Y" required value="<?= isset($_GET['numY']) ? $_GET['numY'] : null ?>">
	        </div>
            <button class="btn">Посчитать</button>
	        <p class="form_result"><?= isset($result) ? round($result, 2) : null ?></p>
        </form>


    </div>
</main>
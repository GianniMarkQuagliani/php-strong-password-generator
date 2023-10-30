<div class="form-container">
    <form action="index.php" method="GET">
        <div class="row mb-3">
            <div class="col-auto d-flex align-items-center">
                <label for="length" class="form-label m-0">Lunghezza password:</label>
            </div>
            <div class="col-auto right1">
                <input type="number" class="form-control" id="length" name="length" value="<?php echo $length; ?>">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="generate">Invia</button>
            <button type="button" class="btn btn-secondary" onclick="location.href='index.php'">Resetta</button>
        </div>
    </form>
</div>

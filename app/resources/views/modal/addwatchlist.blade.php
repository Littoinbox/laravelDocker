<div class="modal fade" id="addwatchlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Создаем новый список отслеживания</h4>
            </div>
            <div class="modal-body">
                <form name="addwatchlist">
                    @csrf
                    <div class="form-group">
                        <label>Название списка отслеживания</label>
                        <input type="text" id="watchListName" name="title" required>
                    </div>

                    <div class="form-group">
                        <label>Ссылка на товар либо бренд</label>
                        <input type="text" class="watchListLink" name="link[]">
                    </div>

                    <div class="form-group">
                        <input type="button" class="btn btn-dark addLinks" value="Добавить еще один товар">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary saveWatchList">Создать</button>
            </div>
        </div>
    </div>
</div>

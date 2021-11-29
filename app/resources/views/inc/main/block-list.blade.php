<h2>Списки слежения <a href="#" class="btn" title="Добавить" data-toggle="modal" data-target="#addwatchlist"><i class="glyphicon glyphicon-plus"></i></a> </h2>

@if (count($data)>0)
    <ul class="watchLists">
        @foreach($data as $line)
            <li class="watchList"><a href="#">{{$line->title}}</a></li>
        @endforeach
    </ul>
@else
    <h3>Пока еще нет ни одного списка слежения</h3>
    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addwatchlist">Создать новый список</a>
@endif
@include('modal.addwatchlist')

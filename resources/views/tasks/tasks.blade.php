@if (count($tasks) > 0)
    <ul class="list-unstyled">
        
        
    @foreach ($tasks as $task)
    <h1>id = {{ $task->id }} 詳細ページ</h1>
        <table class="table table-bordered">
            <tr>
                <th>user_id</th>
                <td>{{ $task->user_id }}</td>
            </tr>
            <tr>
                <th>ステータス</th>
                <td>{{ $task->status }}</td>
            </tr>
            <tr>
                <th>タスク</th>
                <td>{{ $task->content }}</td>
            </tr>
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
        </table>
    
        {{-- タスク編集ページへのリンク --}}
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task -> id], ['class' => 'btn btn-light']) !!}
    
        {{-- タスク削除フォーム --}}
        {!! Form::model($tasks, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
@endif
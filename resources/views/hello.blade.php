<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="border-3 border-red-500 p-20">
        <form action="{{ route('lesson.store') }}" method="POST">
            @csrf
            <label for="question">Soal</label>
            <textarea name="question" id="question" class="border"></textarea>
            <br>    
            <label for="lesson">Pelajaran</label>
            <select name="lesson" id="lesson">
                @forelse ($lessons as $lesson)
                    <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
                @empty
                    
                @endforelse
            </select>
            <br>
            <label for="a">a</label>
            <textarea name="a" id="a" class="border"></textarea>
            <br>
            <label for="b">b</label>
            <textarea name="b" id="b" class="border"></textarea>
            <br>
            <label for="c">c</label>
            <textarea name="c" id="c" class="border"></textarea>
            <br>
            <label for="d">d</label>
            <textarea name="d" id="d" class="border"></textarea>
            <br>
            <label for="e">e</label>
            <textarea name="e" id="e" class="border"></textarea>
            <br>
            <label for="correct">correct</label>
            <textarea name="correct" id="correct" class="border"></textarea>
            <button>submit</button>
        </form>
        <table>
            <tr>
                <td>No</td>
                <td>Soal</td>
                <td>Pelajaran</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>Correct</td>
            </tr>
            @foreach ($questions as $index => $question)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->lesson->name }}</td>
                    <td>{{ $question->a }}</td>
                    <td>{{ $question->b }}</td>
                    <td>{{ $question->c }}</td>
                    <td>{{ $question->d }}</td>
                    <td>{{ $question->e }}</td>
                    <td>{{ $question->correct }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
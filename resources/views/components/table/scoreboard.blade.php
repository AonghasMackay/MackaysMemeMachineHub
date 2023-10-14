<div class="mt-5">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">User ID</th>
                <th scope="col">Score</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userScores as $userScore)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $userScore->user_id }}</td>
                    <td>{{ $userScore->score }}</td>
                    <td>{{ $userScore->balance }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<x-layout.main>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" aria-selected="true" data-bs-toggle="tab" data-bs-target="#scoreboard-pane" id="scoreboard-tab" href="#">
                                Scoreboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" id="leaderboard-tab" data-bs-target="#leaderboard-pane" href="#">
                                Leaderboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" id="stats-tab" data-bs-target="#stats-pane" href="#">
                                Stats
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="scoreboard-pane" role="tabpanel" aria-labelledby="scoreboard-tab" tabindex="0">....</div>
                        <div class="tab-pane fade" id="leaderboard-pane" role="tabpanel" aria-labelledby="leaderboard-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="stats-pane" role="tabpanel" aria-labelledby="stats-tab" tabindex="0">..</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.main>
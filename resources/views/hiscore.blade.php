@extends('layouts.layout')

@section('title')
    | {{ $pageTitle }}
@endsection

@section('content')
    <div class="page">
        <span class="left"><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> {{ $pageTitle }}</span>
        <span class="right">Next update:  </span>

        <h1>{{ $pageTitle }}</h1>

        <table>
            <tr>
                <th>Rank</th>
                <th>Clanmate</th>
                <th>Rank</th>
                <th>Level</th>
                <th>Total XP</th>
            </tr>

            @php
                $ranking = 1;
            @endphp
            @foreach ($hiscores as $hiscore)
                @if ($hiscore->private == 'yes')
                    <tr style="color: red;">
                @else
                    <tr>
                @endif
                    <td>{{ $ranking }}</td>
                    <td>
                        <a href="/member/{{ $hiscore->username }}">
                            <img class="align" src="https://secure.runescape.com/m=avatar-rs/{{ str_replace("\xc2\xa0", '+', $hiscore->username) }}/chat.png" width="50px" alt="{{ $hiscore->username }} avatar image" />
                            @if ($hiscore->rank_id >= 7)
                                <img class="align" src="{{ url('css/images/icons')}}/{{ $hiscore->rank }}.png" alt="{{ $hiscore->rank }} rank icon" />
                            @endif
                            {{ $hiscore->username }}
                        </a>
                    </td>
                    <td>{{ $hiscore->hiscore_rank }}</td>
                    <td>{{ number_format($hiscore->total_level) }}</td>
                    <td>{{ number_format($hiscore->total_xp) }}</td>
                </tr>
                @php
                    $ranking++;
                @endphp
            @endforeach
    </div>
@endsection
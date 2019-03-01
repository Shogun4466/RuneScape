@extends('layout')

@section('title')
    | {{ $profile->username }}
@endsection

@section('content')
    <div class="page">
        <span class="left"><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> <a href="/members">Members</a> <i class="fas fa-long-arrow-alt-right"></i> {{ $profile->username }}</span>
        <span class="right">Next update:  </span>

        <h1>
            <img class="align" src="https://secure.runescape.com/m=avatar-rs/{{ str_replace("\xc2\xa0", '+', $profile->username) }}/chat.png" alt="{{ $profile->username }} avatar image" />
            {{ $profile->username }}
        </h1>
        <p class="center"><span>Rank: <img class="align" src="{{ url('css/images/icons')}}/{{ $profile->rank }}.png" alt="{{ $profile->rank }} rank icon" /> {{ $profile->rank }}</span> <span>Clan XP: {{ number_format($profile->xp) }}</span> <span>Kills: {{ $profile->kills }}</span></p>

        <table>
            <th></th>
            <th>Level</th>
            <th>XP</th>
            <th>Rank</th>

            @php
                $i = 0;
            @endphp
            @foreach ($stats as $skill)
                @foreach ($skill as $skillData)
                    <tr>
                        <td>
                            <img class="align" src="{{ url('css/images/skills')}}/{{ $skills[$i] }}.png" width="35px" alt="{{ ucfirst($skills[$i]) }} skill icon" />
                            {{ ucfirst($skills[$i]) }}
                        </td>
                        <td>{{ $skillData->level }}</td>
                        <td>{{ number_format($skillData->xp / 10) }}</td>
                        <td>{{ number_format($skillData->rank) }}</td>
                    </tr>
                @endforeach
                @php
                    $i++;
                @endphp
            @endforeach
        </table>
    </div>
@endsection
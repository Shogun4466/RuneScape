@extends('layout')

@section('title')
    | Members
@endsection

@section('content')
    <div class="page">
        <span class="left"><a href="/">Home</a> <i class="fas fa-long-arrow-alt-right"></i> Members</span>
        <span class="right">Next update:  </span>

        <h1>Members</h1>

        <table>
            <tr>
                <th>Clan mate</th>
                <th>Clan rank</th>
                <th>Total XP</th>
                <th>Kills</th>
            </tr>

            @foreach ($members as $member)
                <tr>
                    <td>
                        <a href="member/{{ $member->username }}">
                            <img class="align" src="https://secure.runescape.com/m=avatar-rs/{{ str_replace("\xc2\xa0", '+', $member->username) }}/chat.png" width="50px" alt="{{ $member->username }} avatar image" />
                            {{ $member->username }}
                        </a>
                    </td>
                    <td>{{ $member->rank }}</td>
                    <td>{{ number_format($member->xp) }}</td>
                    <td>{{ $member->kills }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection